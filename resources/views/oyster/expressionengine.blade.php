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
			<li>ExpressionEngine User Guide</li>
		</ul>
	</div><!-- /#header -->
	<div class="section" id="content">
		<div class="section" id="using-cs">
			<h2>Table of Contents</h2>
			<div class="section" id="cs-login">
				<h3>Getting Started</h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/brokerage_images') }}">Logging in</a></li>
					<li><a href="">Forgot your Password?</a></li>
					<li><a href="">My Account</a></li>
				</ul>

				@if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['new_yachts']))
					<h3>New Yachts</h3>
					<ul class="simple">
						<li><a class="reference internal" href="{{ URL::to('oyster/brokerage_images') }}">Image Sizing</a></li>
					</ul>
				@endif

				@if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['brokerage']))
					<h3>Brokerage</h3>
					<ul class="simple">
						<li><a class="reference internal" href="{{ URL::to('oyster/brokerage_images') }}">Image Sizing</a></li>
					</ul>
				@endif

				@if(Auth::user()->isAdmin() || Auth::user()->canAccessRoute(['charter']))
					<h3>Charter</h3>
					<ul class="simple">
						<li><a class="reference internal" href="{{ URL::to('oyster/brokerage_images') }}">Image Sizing</a></li>
					</ul>
				@endif
			</div>
		</div>
		</div>
	@include('oyster.partials.footer')	

@endsection