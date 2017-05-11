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
				<li><strong>Editing</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<div class="section" id="the-control-panel">
				<h1>Editing<a class="headerlink" href="#createsend" title="Permalink to this headline">¶</a></h1>
								<p><h2>Content types</h2></p><a name="content-types"></a>
				<p>				<strong>Simple text</strong> allows for a short text input with no styling options.<br/>
				</p>				<p><img src="{{asset('storage/oysterImages/label.png')}}"></p>
				<p><strong>Rich Editor</strong> allows for copy to be added with no restriction of lenght.<br/>
					Links and basic styling can be added to any portion of text as well as personalisation.</p>
					<p><img src="{{asset('storage/oysterImages/richeditor.png')}}"></p>
					<p><strong>Image</strong> allows for an image to be replaced and to add a link to it</p>
					<p><img src="{{asset('storage/oysterImages/addimage.png')}}"></p>
					<p><h2>Adding links</h2></p><a name="adding-links"></a>
					<p>Select the desired portion of text, then click on <img src="{{asset('storage/oysterImages/insert-link.png')}}" style="display:inline;" align="top"></p>
					<p>You can either add a link to a website or to an email address.</p>
					<table width="100%" style="background-color: #f9f9f9;
				  border: 1px solid #fff;text-align:center;">
						<tr valign="top">
							<td style="border-bottom: 1px solid #fff;padding-top:20px;" align="center"><img src="{{asset('storage/oysterImages/addlink.png')}}"></td>
							<td style="border-bottom: 1px solid #fff;padding-top:20px;" align="center"><img src="{{asset('storage/oysterImages/addemail.png')}}"></td>
						</tr>
					</table>
					<p><h2>Adding/Replacing Images</h2></p><a name="images"></a>
					<p>Click on <img src="{{asset('storage/oysterImages/gear.png')}}" style="display:inline;" align="top"> you can then add a link, as above, or click on Remove Image</p>
					<p><img src="{{asset('storage/oysterImages/editimage.png')}}"></p>
					<p>Next, click on Choose file, locate the image on your computer and upload.</p>
					<p><img src="{{asset('storage/oysterImages/uploadimage.png')}}"></p>
					<p>It is recommended to add alternative text for those email applications that don't display images by default</p>
					<p><img src="{{asset('storage/oysterImages/alttext.png')}}"></p>

			</div>
		</div>

		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	

@endsection