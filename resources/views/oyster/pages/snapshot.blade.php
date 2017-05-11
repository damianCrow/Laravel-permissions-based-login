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
				<li><strong>Snapshot</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Snapshot<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<a name="saveddrafts"></a>
				<p>This is the overview of the campaign, you can manage each area by clicking <img src="{{asset('storage/oysterImages/edit.gif')}}" style="display:inline;" align="absmiddle"></p>
				<p><h2>Campaign and Sender</h2></p>
				<p><ul>
					<li><strong>Campaign Name</strong>: for reference only, it's the name of the campaign under Drafts and Sent Campaigns</li>
					<li><strong>Subject</strong>: What your recipients will see as email subject</li>
					<li><strong>From</strong>: The name and email the campaign is sent from </li>
				</ul></p>
				<p><h2>Content</h2></p>
				<p><ul>
					<li><strong>HTML version</strong>: the visual editor of the campaign</li>
					<li><strong>Plain text version</strong>: auto generated text only version</li>
				</ul></p>
				<p><h2>Recipients</h2></p>
				<p><ul>
					<li>Manage recipients and lists</li>
				</ul></p>
				<div class="centeralign greybg paddimg">
					<img src="{{asset('storage/oysterImages/snapshot.png')}}">
				</div>
			</div>
		</div>

		<!-- {user_guide_comments} -->
		@include('oyster.partials.footer')	

@endsection