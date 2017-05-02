<?php 

	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Request as RequestInput;
	use App\Group;
	use App\User;
	use App\Content;
	use Illuminate\Support\Facades\Auth;
	use Session;
	use View;	
	use Validator;

	class groupController extends Controller {	

		public function __construct() {

        $this->middleware('auth');

        $this->middleware('admin', ['except' => ['index']]);

        // $this->middleware('before', ['only' => ['destroy']]);

        // $this->middleware('after', ['except' => ['dashboard', 'signIn', 'index']]);
    }

		public function index() {

      $groups = Group::all();

      return View::make('groupIndex')
        ->with('groups', $groups);
    }

    public function create() {

    	return view('groupCreate');
    }

    public function store(Request $request) {

			$this -> validate($request, [
				'name' => 'required|unique:groups'
			]);
			
			$name = $request['name'];
			
			$group = new Group();
			$group -> name = $name;

			$group -> save();

			Session::flash('message', 'You have successfully created a new group called: ' . $name . '.');

			return redirect() -> action('groupController@index');
		}
    
    public function edit($id) {

    	$group = Group::find($id);

    	return View::make('groupEdit')
        ->with('group', $group);
    }

    public function update($id) {

			$request = RequestInput::all();
			$group = Group::find($id);
      $users = User::all();
      $contents = Content::all();

			$rules = [
				'name' => 'required|unique:groups,name,'. $id
			];
            
      $validator = Validator::make($request, $rules);

			$name = $request['name'];

      if($validator->fails()) {

        return View::make('groupEdit')
          ->withErrors($validator)
          ->with([
          	'group' => $group,
          	'request' => $request
          	]);         
          
      } 
      else {
         
        $this->updateDbRows($users, $group, 'groups', 'name', 'change', $name);
        $this->updateDbRows($contents, $group, 'access_groups', 'name', 'change', $name);
        $this->updateDbRows($contents, $group, 'edit_access_groups', 'name', 'change', $name);

				$group -> name = $name;
				$group -> save();

        Session::flash('message', 'You have successfully updated the information for group: ' . $name);

        return redirect() -> action('groupController@index');
      }
		}

    public function destroy($id) {

    	$group = Group::find($id);
      $users = User::all();
      $contents = Content::all();

      $this->updateDbRows($users, $group, 'groups', 'name', 'delete', null);
      $this->updateDbRows($contents, $group, 'access_groups', 'name', 'delete', null);
      $this->updateDbRows($contents, $group, 'edit_access_groups', 'name', 'delete', null);

      $group -> delete();

      Session::flash('message', 'You have successfully deleted the group: ' . $group['name']);

      return redirect() -> action('groupController@index');
    }

    public function updateDbRows($table, $selectedRow, $column, $property, $updateType, $newValue) {
 
      foreach($table as $row) {

        $relevantArray = json_decode($row -> $column);

        foreach($relevantArray as $key => $value) {

          if(($key = array_search($selectedRow -> $property, $relevantArray)) !== false) {

            if($updateType === 'delete') {

              unset($relevantArray[$key]);
            }
            if($updateType === 'change') {
              
              $relevantArray[$key] = $newValue;
            }
            
            $row -> $column = json_encode($relevantArray);
            $row -> save();
          }             
        }
      }
    }
	}
?>