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
				<li><strong>Images Size</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Images Size<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<p>All images should be created as JPG, individual file size shouldn't exceed 100KB.<br/>
					To ensure integrity of the design and consistency across devices you must respect the following sizes: </p>
				<p><h2>Brokerage</h2></p><a name="brokerage-image-size"></a>
				<div class="centeralign greybg paddimg">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/image-brokerage.png')}}">
				</div>
			</div>
			<div class="section" id="the-control-panel">
				<p><h2>Charter</h2></p><a name="charter-image-size"></a>
				<div class="centeralign greybg paddimg">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/image-charter.png')}}">
				</div>
			</div>
			<div class="section" id="the-control-panel">
				<p><h2>Newsletter</h2></p><a name="newsletter-image-size"></a>
				<div class="centeralign greybg paddimg">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/image-newsletter.png')}}">
				</div>
			</div>
		</div>

		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	

@endsection