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
				<li><strong>Overview</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Overview<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<a name="saveddrafts"></a>
				<!-- <p><h2>Saved Drafts<a class="headerlink" href="#saved-drafts" title="Permalink to this headline">¶</a></h2></p>	 -->
				<p>Once logged in, you are presented with the <strong>Campaigns</strong> tab.</br>
					It lists all campaign activities, useful to access recent sent campaign reports and drafts. 
				<p><img src="{{asset('storage/oysterImages/overview.png')}}"></p>
				<p><a name="campaignsender"></a>
					<h2>Duplicate Campaigns<a class="headerlink" href="#duplicate" title="">¶</a></h2>
				</p>
				<p>From here you can duplicate sent or drafts, hover the campaign title and click the duplicate icon</p>
				<p><img src="{{asset('storage/oysterImages/draft-icons.gif')}}"></p>
				<p><img src="{{asset('storage/oysterImages/cs-duplicate-draft.png')}}" align="absmiddle" style="display:inline"> Duplicate draft.</p>
				<p><img src="{{asset('storage/oysterImages/cs-delete-draft.png')}}" align="absmiddle" style="display:inline"> Delete draft.</p>
				<p>Click the campaign title to display <a href="snapshot.html">Campaign Snapshot</a>.</p>

			</div>
		</div>

		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	

@endsection