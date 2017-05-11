<?php 

	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Request as RequestInput;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\File;
	use Illuminate\Support\Facades\Response;
	use App\Content;
	use Session;
	use View;	
	use App\Group;
	use Validator;
	use Intervention\Image\Facades\Image;

	class contentController extends Controller {	

		public function __construct() {

      // $this->middleware('auth');

      // $this->middleware('admin', ['except' => ['index', 'serveFiles']]);

      // $this->middleware('protectFiles', ['only' => ['serveFiles']]);
    }

		public function index() {

      $contents = Content::all();

      return View::make('contentIndex')
        ->with('contents', $contents);
    }

    public function addAssets($id) {

    	$folderId = $id;
      return View::make('assetUpload')	-> with('folderId', $folderId);
    }

    public function uploadAssets($id) {
   	
   		$folder = Content::find($id) -> name;

	    if(RequestInput::hasFile('files')) {
	        
        $files = RequestInput::file('files');

        foreach($files as $file) {
        	print_r($file);
        	$file->move(storage_path() . '/' . $folder, $file->getClientOriginalName());

        	Session::flash('message', count($files) . ' files were uploaded successfully!');
        }

        return redirect() -> action('userController@dashboard');
	    }
	    else {

	    	Session::flash('message', 'ERROR! The file was NOT uploaded successfully!');
	      return redirect() -> back();
	    }
	  }

	  public function serveFiles($folderName, $fileName) {
	
	    $path = storage_path() . '/' . $folderName . '/' . $fileName;

	    if(!File::exists($path)) {
	       
	      Session::flash('message', 'ERROR! File: ' . $fileName . ' was NOT found!');
	      return redirect() -> back();
	    }

	    $file = File::get($path);
	    $type = File::mimeType($path);

	    $response = Response::make($file, 200);
	    $response->header("Content-Type", $type);

	    return $response;
		}

    public function create() {

    	$groups = Group::all();
    	return view('contentCreate') -> with('groups', $groups);
    }

    public function deleteFile($folderName, $fileName) {

    	File::delete(storage_path() . '/' . $folderName . '/' . $fileName);

    	Session::flash('message', $fileName . ' deleted successfully!');
    	return redirect() -> back();
    }

    public function store(Request $request) {

			$this -> validate($request, [
				'name' => 'required|unique:contents|min:6|alpha_dash',
				'editGroups' => 'required|array',
				'accessGroups' => 'required|array'
			]);

			$name = $request['name'];

			if(!File::exists(storage_path() . '/' . $request['name'])) {

    		File::makeDirectory(storage_path() . '/' . $request['name']);

				if(!$request['admin_access_only']) {

				  $AdminAccessOnly = false;
				}
				else {

				  $AdminAccessOnly = true;  
				}

				$editGroups = json_encode($request['editGroups']);
				$accessGroups = json_encode($request['accessGroups']);

				$content = new Content();
				$content -> name = $name;
				$content -> access_groups = $accessGroups;
				$content -> edit_access_groups = $editGroups;
				$content -> admin_access_only = $AdminAccessOnly;

				$content -> save();

				Session::flash('message', 'You have successfully created a new content folder called: ' . $name . '.');

				return redirect() -> action('contentController@index');
			}
			else {

				Session::flash('message', 'A folder called: ' . $name . ' already exists!');
				return redirect() -> back();
			}
		}
    
    public function edit($id) {

    	$groups = Group::all();
    	$content = Content::find($id);

    	return View::make('contentEdit')
        ->with([
        	'content' => $content,
        	'groups' => $groups
        ]);
    }

    public function update($id) {

    	$groups = Group::all();
			$request = RequestInput::all();
			$content = Content::find($id);

			$rules = [
				'name' => 'required|min:6|alpha_dash|unique:contents,name,'. $id,
				'editGroups' => 'required|array',
				'accessGroups' => 'required|array'
			];
            
      $validator = Validator::make($request, $rules);

      if($validator->fails()) {

        return View::make('contentEdit')
          ->withErrors($validator)
          ->with([
          	'content' => $content,
          	'request' => $request,
          	'groups' => $groups
          ]);         
          
      } 
      else {
         
				if(isset($request['admin_access_only'])) {
					
					$AdminAccessOnly = true; 
				}
				else {

				  $AdminAccessOnly = false;
				}

				$name = $request['name'];
				$editGroups = json_encode($request['editGroups']);
				$accessGroups = json_encode($request['accessGroups']);

				rename(storage_path() . '/' . $content['name'], storage_path() . '/' . $request['name']);

				$content -> name = $name;
				$content -> access_groups = $accessGroups;
				$content -> edit_access_groups = $editGroups;
				$content -> admin_access_only = $AdminAccessOnly;

				$content -> save();

        Session::flash('message', 'You have successfully updated the information for: ' . $content['name']);

        return redirect() -> action('contentController@index');
      }
		}

    public function destroy($id) {

    	$content = Content::find($id);
      $content -> delete();

      File::deleteDirectory(storage_path() . '/' . $content['name']);

      Session::flash('message', 'You have successfully deleted the folder: ' . $content['name']);

      return redirect() -> action('contentController@index');
    }
	}
?>