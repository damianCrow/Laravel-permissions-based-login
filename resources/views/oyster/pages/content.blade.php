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
				<li><strong>Content</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Content<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<p><h2>Content Areas</h2></p><a name="careas"></a>
				<p>There are 4 content areas in the Brokerage template<br/> If you have duplicated a campaign, these will be already displayed in the draft you are working on.</p>
				<p>Each content area is managed by its contextual menu, which overlaps on the right side  <img src="{{asset('storage/oysterImages/content-drop-down.png')}}" style="display:inline;" align="absmiddle"><br/>
					The menu allows you to add/delete content areas, edit but also change their position by drag and drop.</p>
				<p><strong>Introduction</strong> Free text-area.</p>
				<p><strong>Brokerage Main Feature</strong> A block with 3 images, free text-area and specifications</p>
				<p><strong>Brokerage List</strong> A simple unit of 1 image and specifications, built to be repeated</p>
				<p><strong>Sign-off:</strong> An editable textarea with pre added content based on brokers' information</p>
				<p><h2>Editing</h2></p><a name="editing"></a>
				<p>To edit any content area, click Edit on the contextual menu.<br>
					All editable content for the selected area will be displayed on the left column.</p>
					<p>As you are editing, every change is displayed on the right column but is not saved, to commit a change always click on <img src="{{asset('storage/oysterImages/save-changes.png')}}" style="display:inline;" align="absmiddle">.</p>
					<p>To preview changes without the interface, click on <img src="{{asset('storage/oysterImages/preview.png')}}" style="display:inline;" align="absmiddle"></p>
				<p><img src="{{asset('storage/oysterImages/edit-ca.png')}}"></p>
				
			</div>
		</div>

@include('oyster.partials.footer')	<!-- /#footer -->

@endsection