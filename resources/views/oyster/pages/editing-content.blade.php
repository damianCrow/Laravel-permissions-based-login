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
				<li><strong>Edit Campaign Content</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<p><a name="campaignsender"></a>
				<h1>Edit Campaign Content<a class="headerlink" href="#editing-content" title="Permalink to this headline">¶</a></h1>
			</p>
			<div class="section" id="the-control-panel">
				<p>The template has been assigned editable areas, these are distinguished as:
					<ul>
						<li><img src="{{asset('storage/oysterImages/cs-signle-edit.png')}}" align="absmiddle" style="display:inline;"> Single input areas.</li>
						<li><img src="{{asset('storage/oysterImages/cs-multi-edit.png')}}" align="absmiddle" style="display:inline;"> Repeatable areas. These can also be re-ordered and if multiple, deleted.</li>
					</ul>
				</p>
				<div class="centeralign">
					<img src="{{asset('storage/oysterImages/cs-edit-content.png')}}">
				</div>
				<p><a name="campaignsender"></a>
					<h2>Content areas<a class="headerlink" href="#content-areas" title="Permalink to this headline">¶</a></h2>
				</p>
				<p>All content areas have different input fields and properties assigned.</p>
				<p><strong>Single input areas</strong></p>
				<p>
					<img src="{{asset('storage/oysterImages/cs-single-input.png')}}">
				</p>
				<p><strong>Repeatable areas</strong></p>
				<p>
					<img src="{{asset('storage/oysterImages/cs-multiple-input.png')}}">
				</p>
				<p><img src="{{asset('storage/oysterImages/cs-preview-button.png')}}" align="absmiddle" style="display:inline;"> Use to see work in progress</p>
				<p><img src="{{asset('storage/oysterImages/cs-approve-design.png')}}"></p>
				<p><img src="{{asset('storage/oysterImages/cs-imdone.png')}}" align="absmiddle" style="display:inline;"> Use to see sign-off work in progress and return to campaign snapshot.</p>
			</div>
		</div>
	@include('oyster.partials.footer')
@endsection	