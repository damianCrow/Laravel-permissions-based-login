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
<div class="section" id="content" style="text-align:center;">
	<div class="section" id="using-cs" style="padding:20px 0 40px;display:inline-block;">
		<div class="guide-choice" style="">
			<span>ExpressionEngine</span>
			<p>Website Content Management</p>
			<a href="{{ URL::to('oyster/expressionengine') }}">View Guide</a>
		</div>
		<div class="guide-choice" style="margin-left:40px;">
			<span>CampaignMonitor</span>
			<p>
				Newsletter &amp; Campaign Reporting</p>
			<a href="{{ URL::to('oyster/campaign') }}">View Guide</a>
		</div>
		<br style="clear:both;">
<!-- 		<h2>Using CampaignMonitor<a class="headerlink" href="cs-login/login.php" name="usingcreatesend" title="Permalink to this headline">¶</a></h2>
		<div class="section" id="cs-login">
			<h3>Login and Overview<a class="headerlink" href="cs-login/login.php" title="Permalink to this headline">¶</a></h3>
			<ul class="simple">
				<li><a class="reference internal" href="cs-login/login.php">Log In / Can't access your account?</a></li>
			</ul>
		</div>
		<div class="section" id="cs-create">
			<h3>Creating Campaigns<a class="headerlink" href="cs-content/editing.php" title="Permalink to this headline">¶</a></h3>
			<ul class="simple">
				<li><a class="reference internal" href="cs-content/create.php">Creating a Campaign</a></li>
				<li><a class="reference internal" href="cs-content/snapshot.php">Campaign Snapshot</a></li>
				<li><a class="reference internal" href="cs-content/campaign-sender.php">Campaign and Sender</a></li>
				<li><a class="reference internal" href="cs-content/content.php">Content</a></li>
				<li><a class="reference internal" href="cs-content/editing.php">Editing</a></li>
				<li><a class="reference internal" href="cs-content/editing.php#content-types">Content Types</a></li>
				<li><a class="reference internal" href="cs-content/editing.php#adding-links">Adding links</a></li>
				<li><a class="reference internal" href="cs-content/editing.php#images">Adding/Replacing Images</a></li>
				<li><a class="reference internal" href="cs-content/imagesize.php">Image Sizes</a></li>
			</ul>
		</div>
		<div class="section" id="cs-list">
			<h3>List &amp; Subscribers<a class="headerlink" href="cs-subscribers/index.php" title="Permalink to this headline">¶</a></h3>
			<ul class="simple">
				<li><a class="reference internal" href="cs-subscribers/index.php">Lists &amp; Subscribers</a></li>
				<li><a class="reference internal" href="cs-subscribers/index.php#creating">Creating a New List</a></li>
				<li><a class="reference internal" href="cs-subscribers/index.php#files">Importing Files</a></li>
				
			</ul>
		</div>
		<div class="section" id="cs-sending">
			<h3>Sending Campaigns<a class="headerlink" href="cs-content/sending.php" title="Permalink to this headline">¶</a></h3>
			<ul class="simple">
				<li><a class="reference internal" href="cs-content/sending.php">Test and define delivery</a></li>
				<li><a class="reference internal" href="cs-content/sending.php#campaignschedule">Scheduling Campaigns</a></li>
				<li><a class="reference internal" href="cs-content/sending.php#cancelschedule">Cancel Scheduled Campaigns</a></li>
			</ul>
		</div>
		<div class="section" id="cs-reports">
			<h3>Reports<a class="headerlink" href="cs-reports/index.php" title="Permalink to this headline">¶</a></h3>
			<ul class="simple">
				<li><a class="reference internal" href="cs-reports/index.php">Reports</a></li>
				<li><a class="reference internal" href="cs-reports/index.php#worldview">Worldview: real time reports</a></li>
			</ul>
		</div> -->
	</div>
</div>
@include('oyster.partials.footer')	
@endsection