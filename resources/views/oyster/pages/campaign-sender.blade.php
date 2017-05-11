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
				<li><strong>Campaign and Sender</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Campaign and Sender<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
				<a name="saveddrafts"></a>
				
				<p>
					<h2>Name this Campaign</h2>
					<p>For reference only, the name of the campaign under Drafts and Sent Campaigns</p>
					<h2>Write a subject line</h2>
					<p>What your recipients will see as the email subject</p>
<p>					This is straightforward but it's worth noting the possibility of adding 'Personalisation' to the Subject line.</p>
<p>This is straightforward but it's worth noting the possibility of adding 'Personalisation' to the Subject line.</p>
					<p>Click on <img src="{{asset('storage/oysterImages/insert-pers.png')}}" style="display:inline;" align="absmiddle"> and select First name from the menu <img src="{{asset('storage/oysterImages/pers-menu.png')}}" style="display:inline;" align="top"></p>
						<p>Every time the Personalisation is used, A fallback term must used to avoid empty phrases, for example:</p>
						<p>Dear [firstname,fallback=<strong>customer</strong>] will become Dear Mark, only if every subscriber has a first name.<br/> For thosrecipients without a name in the datatabse, the fallback will read instead Dear <strong>customer</strong></p>
						<h2>Who is it from?</h2>
					<p>The name and email the campaign is sent from </p>
				<div class="centeralign greybg paddimg"><img src="{{asset('storage/oysterImages/campaign-sender4.png')}}"></div>
				
				
			</div>
		</div>
@include('oyster.partials.footer')	

@endsection