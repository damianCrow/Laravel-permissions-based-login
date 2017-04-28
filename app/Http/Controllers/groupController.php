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

			Session::flash('message', 'You have successfully created a new group.');

			return redirect() -> action('groupController@index');
		}
    
    public function edit($id) {

    	$groups = Group::all();

    	return View::make('userEdit')
        ->with('groups', $groups);
    }

    public function update($id) {

			$request = RequestInput::all();
			$group = Group::find($id);

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
         
				$group -> name = $name;

				$group -> save();

        Session::flash('message', 'You have successfully updated the information for group: ' . $name);

        return redirect() -> action('groupController@index');
      }
		}

    public function destroy($id) {

    	$group = Group::find($id);
    	$users = User::all();

    	foreach($users as $user) {

    		$userGroupsArray = json_decode($user -> groups);

    		foreach($userGroupsArray as $key => $userGroup) {

    			if(($key = array_search($group -> name, $userGroupsArray)) !== false) {

						unset($userGroupsArray[$key]);
						$user -> groups = json_encode($userGroupsArray);
    				$user -> save();
					} 						
    		}
    	}

      $group -> delete();

      Session::flash('message', 'You have successfully deleted the group: ' . $group['name']);

      return redirect() -> action('groupController@index');
    }
	}
?>