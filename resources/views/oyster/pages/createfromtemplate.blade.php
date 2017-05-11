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
				<li><strong>Creating a Campaign from Template</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Creating a Campaign from Template<a class="headerlink" href="#the-control-panel" title="Permalink to this headline">¶</a></h1>
				<p><img src="{{asset('storage/oysterImages/cs-create-new-campaign-button.png')}}" align="absmiddle" style="display:inline"> </p>
				<p><h2>Define campaign details</h2></p>
				<div class="centeralign">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/cs-definenew.png')}}">
				</div>
				<p><a name="campaignsender"></a>
					<h2>Choose Template<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2>
				</p>
				<p>Hover the template to display the select button.</p>
				<div class="centeralign" style="background-color:#f9f9f9;">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/cs-usethistemplate.gif')}}" />
				</div>
				<p><h2>Author Content</h2></p>
				<p>Click on Edit buttons to add/repeat content areas</p>
				<div class="centeralign">
					<img src="{{asset('storage/oysterImages/cs-edit-content.png')}}">
				</div>
				<h2>Define Recipients</h2>
				<p>Include or exclude previously created lists.</p>
				<div class="centeralign" style="background-color:#f9f9f9;">
					<img alt="Cp Home" src="{{asset('storage/oysterImages/cs-include-list.png')}}" />
				</div>
				<p><h2>Test and Confirm</h2></p>
				<p><img src="{{asset('storage/oysterImages/cs-test-define-button.png')}}" align="absmiddle" style="display:inline"></p>
				<h2>Test Campaign<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2>
				<p>This step can be skipped but it's always advisable to test content before committing to schedule.</p>
				<div class="centeralign" style="background: #f9f9f9">
					<img src="{{asset('storage/oysterImages/cs-test-input.png')}}">
				</div>
				<p><h2>Schedule Campaign<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2></p>
				<p>For immediate or for later delivery.</p>
				<div class="centeralign" style="background: #f9f9f9">
					<img src="{{asset('storage/oysterImages/cs-pay-for-campaign.png')}}">
				</div>
				<p><h2>Pay for the Campaign</h2></p>
				<div class="centeralign" style="background: #f9f9f9">
					<img src="{{asset('storage/oysterImages/cs-pay-campaign.png')}}">
				</div>
			</div>
		</div>
		<!-- {user_guide_comments} -->

@include('oyster.partials.footer')	<!-- /#footer -->

@endsection