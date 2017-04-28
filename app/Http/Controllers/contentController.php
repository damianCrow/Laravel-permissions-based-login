<?php 

	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Request as RequestInput;
	use App\Content;
	use Illuminate\Support\Facades\Auth;
	use Session;
	use View;	
	use App\Group;
	use Validator;

	class contentController extends Controller {	

		public function __construct() {

        $this->middleware('auth');

        $this->middleware('admin', ['except' => ['index']]);

        // $this->middleware('before', ['only' => ['destroy']]);

        // $this->middleware('after', ['except' => ['dashboard', 'signIn', 'index']]);
    }

		public function index() {

      $contents = Content::all();

      return View::make('contentIndex')
        ->with('contents', $contents);
    }

    public function create() {

    	$groups = Group::all();
    	return view('contentCreate') ->with('groups', $groups);
    }

  //   public function store(Request $request) {

		// 	$this -> validate($request, [
		// 		'email' => 'required|email|unique:users',
		// 		'groups' => 'required|array',
		// 		'password' => 'required|min:6'
		// 	]);

		// 	if($request['admin']) {

		// 	  $userIsAdmin = true;
		// 	}
		// 	else {

		// 	  $userIsAdmin = false;  
		// 	}

		// 	$email = $request['email'];
		// 	$groups = json_encode($request['groups']);
		// 	$password = bcrypt($request['password']);
		// 	$admin = $userIsAdmin;

		// 	$user = new User();
		// 	$user -> email = $email;
		// 	$user -> groups = $groups;
		// 	$user -> password = $password;
		// 	$user -> admin = $userIsAdmin;

		// 	$user -> save();

		// 	Session::flash('message', 'You have successfully created a new user.');

		// 	return redirect() -> action('userController@index');
		// }
    
  //   public function edit($id) {

  //   	$groups = json_decode(file_get_contents(storage_path() . "/json/groups.json"), true);
  //   	$user = User::find($id);
  //   	$userGroups = json_decode($user->groups);

  //   	return View::make('userEdit')
  //       ->with([
  //       	'user' => $user,
  //       	'groups' => $groups,
  //       	'userGroups' => $userGroups
  //       ]);
  //   }

  //   public function update($id) {

		// 	$request = RequestInput::all();
		// 	$user = User::find($id);

		// 	$rules = [
		// 		'email' => 'required|email|unique:users,email,'. $id,
		// 		'groups' => 'required|array',
		// 	];
            
  //     $validator = Validator::make($request, $rules);

  //     if(array_key_exists('admin', $request)) {

		//   	$userIsAdmin = true;
		// 	}
		// 	else {

		// 	  $userIsAdmin = false;  
		// 	}

		// 	$email = $request['email'];
		// 	$groups = json_encode($request['groups']);
		// 	// $password = bcrypt($request['password']);
		// 	$admin = $userIsAdmin;


  //     if ($validator->fails()) {

  //       return View::make('userEdit')
  //         ->withErrors($validator)
  //         ->with([
  //         	'user' => $user,
  //         	'request' => $request
  //         	]);         
          
  //     } 
  //     else {
         
		// 		$user -> email = $email;
		// 		$user -> groups = $groups;
		// 		// $user -> password = $password;
		// 		$user -> admin = $userIsAdmin;

		// 		$user -> save();

  //       Session::flash('message', 'You have successfully updated the information for user: ' . $email);

  //       return redirect() -> action('userController@index');
  //     }
		// }

  //   public function destroy($id) {

  //   	$user = User::find($id);
  //     $user -> delete();

  //     Session::flash('message', 'You have successfully deleted the user: ' . $user['email']);

  //     return redirect() -> action('userController@index');
  //   }
	}
?>