@extends('layouts.oysterMaster')

@section('content')
		<div id="table-contents">
			<div class="toctree-wrapper compound">
			</div>
		</div>
		<div id="brand" class="ee">
			@include('oyster.partials.lastmodified')
		</div><!-- /#brand -->
		<div id="header">
			<ul>
				<li><a href="{{ URL::to('dashboard') }}">User Guide Home</a>&nbsp;&nbsp; &rsaquo;</li>
				<li><strong>Reports</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<p>
				<h1>Reports<a class="headerlink" href="#reports" title="Permalink to this headline">¶</a></h1>
			</p>
			<p>Detailed reports are available once the campaign has been delivered, in the Campaigns tab, click the campaign name.
			</p>
			<div class="centeralign greybg paddimg">	<img src="{{asset('storage/oysterImages/sent-report.png')}}"></div>
				<p>You will then access the report snapshot, and more detailed reports on the right.<br>
					The ones to look for are</p>
				<ul>
					<li><strong>Recipients Activity</strong></li>
					<li><strong>Link Activity &amp; Overlay</strong></li>
				</ul></p>
			<div class="centeralign greybg paddimg"><img src="{{asset('storage/oysterImages/cs-reports.png')}}">
			</div>
			<p>
				<h2>Worldview<a class="headerlink" href="#worldview" title="Permalink to this headline">¶</a></h2>
			</p>
			<a name="worldview"></a>
			<p>Worldview reports are live reporting with action description of the recipients.
			</p>
			<div class="centeralign greybg paddimg">	<img src="{{asset('storage/oysterImages/cs-worldview.png')}}">
			</div>
		</div>
		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	<!-- /#footer -->
	@endsection