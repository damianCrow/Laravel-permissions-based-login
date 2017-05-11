<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class oysterController extends Controller {
  
  public function __construct() {

    $this->middleware('auth');
  }

  public function mainDashboard() {
		
		if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['oyster1'])) {

			return view('oyster.index');
		}
		else {

			Session::flash('message', 'You do not have permission to access this page!');
			return redirect() -> back();
		}	
	}

  public function campaignDashboard() {

  	if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['oyster3'])) {

			return view('oyster.campaignmonitor');
		}
		else {

			Session::flash('message', 'You do not have permission to access this page!');
			return redirect() -> back();
		}	
	}

	public function expressionengineDashboard() {

		if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['oyster2'])) {

			return view('oyster.expressionengine');
		}
		else {

			Session::flash('message', 'You do not have permission to access this page!');
			return redirect() -> back();
		}	
	}

	public function editing() {
		
		return view('oyster.pages.editing');
	}

	public function brokerageImages() {
		
		return view('oyster.pages.brokerageImages');
	}

	public function subscribers() {
		
		return view('oyster.pages.subscribers');
	}

	public function sending() {
		
		return view('oyster.pages.sending');
	}

	public function reports() {
		
		return view('oyster.pages.reports');
	}

	public function imageSize() {
		
		return view('oyster.pages.imagesize');
	}

	public function content() {
		
		return view('oyster.pages.content');
	}

	public function create() {
		
		return view('oyster.pages.create');
	}

	public function campaignSender() {
		
		return view('oyster.pages.campaign-sender');
	}

	public function snapshot() {
		
		return view('oyster.pages.snapshot');
	}

	public function login() {
		
		return view('oyster.pages.login');
	}
}
