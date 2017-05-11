@extends('layouts.oysterMaster')

@section('content')
		<div id="table-contents">
			<div class="toctree-wrapper compound">
			</div>
		</div>
		<div id="brand" class="ee">
			@include('oyster.partials.lastmodified')
		</div><!-- /#brand -->
		<div id="header" name="header">
			<ul>
				<li><a href="{{ URL::to('dashboard') }}">User Guide Home</a>&nbsp;&nbsp; &rsaquo;</li>
				<li><strong>Log In / Can't access your account?</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Log In<a class="headerlink" href="#the-control-panel" title="Permalink to this headline">¶</a></h1>
				<div class="admonition note">
					<p class="first admonition-title">url: </p>
					<p class="last"><a href="https://oysteryachts.createsend.com">https://oysteryachts.createsend.com</a></p>
				</div>
				<div class="centeralign greybg paddimg">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/cs-login.png') }}" />
				</div>
				<h1>Can't access your account?<a class="headerlink" href="#the-control-panel" title="Permalink to this headline">¶</a></h1>
				<div class="centeralign greybg paddimg">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/cs-password.png') }}" />
				</div>
			</div>
		</div>
		<!-- {user_guide_comments} -->
		@include('oyster.partials.footer')	<!-- /#footer -->
	@endsection