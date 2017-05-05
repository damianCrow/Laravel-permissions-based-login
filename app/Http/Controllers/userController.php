<?php 

	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Request as RequestInput;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\File;
	use Session;
	use View;	
	use Validator;
	use App\Group;
	use App\User;
	use App\Content;

	class userController extends Controller {	

		public function __construct() {

        $this->middleware('auth', ['except' => ['signIn', 'signOut']]);

        $this->middleware('admin', ['except' => ['dashboard', 'signIn', 'update', 'edit', 'signOut']]);

        // $this->middleware('before', ['only' => ['destroy']]);

        // $this->middleware('after', ['except' => ['dashboard', 'signIn', 'index']]);
    }

		public function dashboard() {

			$foldersAccesRightsArray = [];
			$foldersEditRightsArray = [];

			if(Auth::user()->isAdmin()) {

				foreach(Content::all() as $key => $contentFolder) {

					$folderObj = (object)['folderName' => $contentFolder['name'], 'files' => File::allFiles(storage_path() . '/' . $contentFolder['name'])];

						array_push($foldersEditRightsArray, $folderObj);
				}

				return view('dashboard') -> with([
					'foldersAccesRightsArray' => $foldersAccesRightsArray,
					'foldersEditRightsArray' => array_unique($foldersEditRightsArray, SORT_REGULAR)
				]);
			}

			else {

				foreach(json_decode(Auth::user()['groups']) as $group) {

					foreach(Content::all() as $key => $contentFolder) {
						
						foreach(json_decode($contentFolder['access_groups']) as $accessGroup) {

							foreach(json_decode($contentFolder['edit_access_groups']) as $editorGroup) {
									
								if($accessGroup === $group && $editorGroup === $group) {

									$folderObj = (object)['folderName' => $contentFolder['name'], 'files' => File::allFiles(storage_path() . '/' . $contentFolder['name'])];

									array_push($foldersEditRightsArray, $folderObj);
								}

								if($accessGroup === $group && $editorGroup !== $group) {

									$folderObj = (object)['folderName' => $contentFolder['name'], 'files' => File::allFiles(storage_path() . '/' . $contentFolder['name'])];

									array_push($foldersAccesRightsArray, $folderObj);
								}
							}
						}
					}
				}

				function tester($arr1, $arr2) {	

					$GLOBALS['array1'] = $arr1; 
					$GLOBALS['array2'] = $arr2;

					$result = array_udiff($GLOBALS['array1'], $GLOBALS['array2'], function($obj_a, $obj_b) {

					  if($obj_a->folderName === $obj_b->folderName) {
					  	
				   	 	foreach($GLOBALS['array1'] as $key => $value) {
				   	 
				   	 		if($value === $obj_a->folderName) {

				   	 			// unset($GLOBALS['array1'][$key]);
				   	 		}
				   	 	}
					  }
					}); 

					return $result;
				}

				return view('dashboard') -> with([
					'foldersAccesRightsArray' => tester(array_unique($foldersAccesRightsArray, SORT_REGULAR), array_unique($foldersEditRightsArray, SORT_REGULAR)),
					'foldersEditRightsArray' => array_unique($foldersEditRightsArray, SORT_REGULAR)
				]);
			}
		}

		public function signIn(Request $request) {

			$this -> validate($request, [
				'email' => 'required|email',
				'password' => 'required|min:6'
			]);

			if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {

				return redirect() -> route('dashboard');
			}
			else {

				return redirect() -> back()->withInput()->with('message', 'Login Attempt Failed! Incorrect email or password');
			}
		}

		public function signOut(Request $request) {

			Auth::logout();
			Session::flush();
  		return redirect('/');
  	}

		public function index() {

      $users = User::all();

      return View::make('userIndex')
        ->with('users', $users);
    }

    public function create() {

    	$groups = Group::all();
    	return view('userCreate') ->with('groups', $groups);
    }

    public function store(Request $request) {

			$this -> validate($request, [
				'email' => 'required|email|unique:users',
				'groups' => 'required|array',
				'password' => 'required|min:6'
			]);

			if($request['admin']) {

			  $userIsAdmin = true;
			}
			else {

			  $userIsAdmin = false;  
			}

			$email = $request['email'];
			$groups = json_encode($request['groups']);
			$password = bcrypt($request['password']);
			$admin = $userIsAdmin;

			$user = new User();
			$user -> email = $email;
			$user -> groups = $groups;
			$user -> password = $password;
			$user -> admin = $userIsAdmin;

			$user -> save();

			Session::flash('message', 'You have successfully created a new user.');

			return redirect() -> action('userController@index');
		}
    
    public function edit($id) {

    	$groups = Group::all();
    	$user = User::find($id);
    	$userGroups = json_decode($user->groups);

    	return View::make('userEdit')
        ->with([
        	'user' => $user,
        	'groups' => $groups,
        	'userGroups' => $userGroups
        ]);
    }

    public function update($id) {

			$request = RequestInput::all();
			$user = User::find($id);

			$rules = [
				'email' => 'required|email|unique:users,email,'. $id,
				'groups' => 'required|array',
			];
            
      $validator = Validator::make($request, $rules);

      if(array_key_exists('admin', $request)) {

		  	$userIsAdmin = true;
			}
			else {

			  $userIsAdmin = false;  
			}

			$email = $request['email'];
			$groups = json_encode($request['groups']);
			$admin = $userIsAdmin;


      if ($validator->fails()) {

        return View::make('userEdit')
          ->withErrors($validator)
          ->with([
          	'user' => $user,
          	'request' => $request
          	]);         
          
      } 
      else {
         
				$user -> email = $email;
				$user -> groups = $groups;
				$user -> admin = $userIsAdmin;

				$user -> save();

        Session::flash('message', 'You have successfully updated the information for user: ' . $email);

        return redirect() -> action('userController@index');
      }
		}

    public function destroy($id) {

    	$user = User::find($id);
      $user -> delete();

      Session::flash('message', 'You have successfully deleted the user: ' . $user['email']);

      return redirect() -> action('userController@index');
    }
	}
?>