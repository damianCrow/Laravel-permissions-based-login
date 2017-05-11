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
				<li><strong>Sending Campaigns</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<p>
				<h2>Test and define delivery<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2>
			</p>
			<div class="section" id="the-control-panel">
			<p>Once content has been approved, scroll to the end of the Campaign Snapshot and click on:
			</p>
			<p>	<img src="{{asset('storage/oysterImages/cs-test-delivery.png')}}">
			</p>
			<p>This will only be available if at least one recipient has been added.<br/>
				If the campaign uses personalisation, it will prompt to send the email by using a random recipient's to test personalisation, it's also worth testing with the fallback.</p>
			<p>Once this is selected, you can test the campaign by adding up to 5 emails recipients.</p>
			<div class="centeralign greybg paddimg">
				<img src="{{asset('storage/oysterImages/personalise.png')}}">
			</div>
			<p><a name="campaignschedule"></a>
				<h2>Scheduling Campaigns<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2>
			</p>
			<p>Campaigns can be sent immediately (<strong>Send it now</strong>) or scheduled at specific time.<br>
			</p>
			<div class="centeralign greybg paddimg">
				<img src="{{asset('storage/oysterImages/schedule.png')}}">
			</div>
			<p>When the schedule has been chose the following will appear:			</p>
			<div class="centeralign greybg paddimg">
				<img src="{{asset('storage/oysterImages/scheduledmessage.png')}}">
			</div>
			<p><a name="cancelschedule"></a>
				<h2>Cancel Scheduled Campaigns<a class="headerlink" href="#matrix" title="Permalink to this headline">¶</a></h2>
			</p>
			
			<p>
				When scheduled, campaigns can be changed at any point before time of sending by accessing the snapshot or the Campaigns tab, see below.</br>
				If sent immediately, campaigns cannot be changed</p>
			<div class="centeralign greybg paddimg">
				<img src="{{asset('storage/oysterImages/cancel-scheduled.png')}}">
			</div>
		</div>
	</div>
		<!-- {user_guide_comments} -->
	@include('oyster.partials.footer')	
@endsection