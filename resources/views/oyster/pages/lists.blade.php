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
				<li><strong>Lists &amp; Subscribers</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Lists &amp; Subscribers<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<a name="saveddrafts"></a>
				<!-- <p><h2>Saved Drafts<a class="headerlink" href="#saved-drafts" title="Permalink to this headline">¶</a></h2></p>	 -->
				<p>All subscribers are accessible from this tab.</br>
					There can be multiple lists, make sure you add a meaningful name so other users pick the relevant one.
				<p><img src="{{asset('storage/oysterImages/lists.png')}}"></p>
				

			</div>
		</div>

		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	

@endsection