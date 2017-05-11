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
				<li><strong>Creating a Campaign</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Creating a Campaign<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<p>There are two way to create a campaign:</p>
				<p>
					<h2>Duplicate Campaigns<a class="headerlink" href="#duplicate" title="">¶</a></h2>
				</p>
				<p>From the <strong>Campaigns</strong> tab you can duplicate sent emails or drafts, hover the campaign title and click the duplicate icon.<br/>This will create a new campaign with inherited content.</p>
				<p><img src="{{asset('storage/oysterImages/draft-icons.gif')}}"></p>
				<p><img src="{{asset('storage/oysterImages/cs-duplicate-draft.png')}}" align="absmiddle" style="display:inline"> Duplicate draft.</p>
				<p><img src="{{asset('storage/oysterImages/cs-delete-draft.png')}}" align="absmiddle" style="display:inline"> Delete draft.</p>
				<p>Once duplicated, click the campaign name to display <a href="snapshot.php">Campaign Snapshot</a>.</p>
				<p>
					<h2>Create a new campaign<a class="headerlink" href="#duplicate" title="">¶</a></h2>
				</p>
				<p>Click this button to create a new campaign with no content and display the <a href="snapshot.php">Campaign Snapshot</a>.</p>
				<p><img src="{{asset('storage/oysterImages/cs-create-new-campaign-button.png')}}"></p>

			</div>
		</div>

@include('oyster.partials.footer')	<!-- /#footer -->

@endsection