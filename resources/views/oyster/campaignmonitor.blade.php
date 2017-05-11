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
			<li>User Guide Home</li>
		</ul>
	</div><!-- /#header -->
	<div class="section" id="content">
		<div class="section" id="using-cs">
			<h1 style="margin:0 0 5px 0;">Using CampaignMonitor</h1>
			<div class="subhead">Last updated April 21st, 2017</div>

		<h1 style="border-bottom: 2px solid #EEEEEE;padding:16px 0;">Table of Contents</h1>

			<div class="section" id="cs-login">
				<h3>Login and Overview</h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/login') }}">Log In / Can't access your account?</a></li>
				</ul>
			</div>
			<div class="section" id="cs-create">
				<h3>Creating Campaigns</h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/create') }}">Creating a Campaign</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/snapshot') }}">Campaign Snapshot</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/campaign_sender') }}">Campaign and Sender</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/content') }}">Content</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/editing') }}">Editing</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/editing#content-types') }}">Content Types</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/editing#adding-links') }}">Adding links</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/editing#images') }}">Adding/Replacing Images</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/image_size') }}">Image Sizes</a></li>
				</ul>
			</div>
			<div class="section" id="cs-list">
				<h3>List &amp; Subscribers<a class="headerlink" href="{{ URL::to('oyster/subscribers') }}" title="Permalink to this headline">¶</a></h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/subscribers') }}">Lists &amp; Subscribers</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/subscribers#creating') }}">Creating a New List</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/subscribers#files') }}">Importing Files</a></li>
					
				</ul>
			</div>
			<div class="section" id="cs-sending">
				<h3>Sending Campaigns<a class="headerlink" href="{{ URL::to('oyster/sending') }}" title="Permalink to this headline">¶</a></h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/sending') }}">Test and define delivery</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/sending#campaignschedule') }}">Scheduling Campaigns</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/sending#cancelschedule') }}">Cancel Scheduled Campaigns</a></li>
				</ul>
			</div>
			<div class="section" id="cs-reports">
				<h3>Reports<a class="headerlink" href="{{ URL::to('oyster/reports') }}" title="Permalink to this headline">¶</a></h3>
				<ul class="simple">
					<li><a class="reference internal" href="{{ URL::to('oyster/reports') }}">Reports</a></li>
					<li><a class="reference internal" href="{{ URL::to('oyster/reports#worldview') }}">Worldview: real time reports</a></li>
				</ul>
			</div>
		</div>
	</div>
	@include('oyster.partials.footer')
@endsection	
	