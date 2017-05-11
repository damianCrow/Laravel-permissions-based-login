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
				<li><a href="{{ URL::to('dashboard') }}">ExpressionEngine User Guide</a></li>
				<li><strong>Brokerage Image Dimensions</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Brokerage Image Dimensions<a class="headerlink" href="#the-control-panel" title="Permalink to this headline">¶</a></h1>
				<h2>Fleet View</h2>
				<div class="centeralign greybg paddimg">
					<img alt="" src="{{asset('storage/oysterImages/ee/brokerage-fleet.jpg')}}"/>
				</div>
				<h2>Yacht View</h2>
				<div class="centeralign greybg paddimg">
					<img alt="" src="{{asset('storage/oysterImages/ee/brokerage-yacht.jpg')}}"/>
				</div>
			</div>
		</div>
		<!-- {user_guide_comments} -->
		<div id="footer">
			<p class="top"><a href="#header" title="Return to top">Return to top</a></p>
			<p>&copy;2017 &ndash; Documentation by <a href="http://www.interstateteam.com">Interstate, London</a></p>
		</div>
@endsection

@section('scripts')
	<script async="" src="//www.google-analytics.com/analytics.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-152559-1', 'interstateteam.com');
	  ga('send', 'pageview');

	</script>
@endsection