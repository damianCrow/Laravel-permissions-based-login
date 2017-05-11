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
				<li><strong>Lists &amp; Subscribers</strong></li>
			</ul>
		</div><!-- /#header -->
		<div class="section" id="content">
			<h1>Lists &amp; Subscribers</h1>
			<p>
				<h2>Lists<a class="headerlink" href="#lists" title="Permalink to this headline">¶</a></h2>
			</p>
			<p>Lists contains the contacts you will target with your campaigns<br/>
				It's important that you give your list a meaningful name so that it's easily identifiable by you and others.<br/>
				It's also important that you don't remove any list that doesn't belong to you.
			</p>
			<div class="centeralign greybg paddimg">	<img src="{{asset('storage/oysterImages/listsubscribers.png')}}">
			</div>

			<p>
				<h2>Creating a New List<a class="headerlink" href="#subscribers" title="Permalink to this headline">¶</a></h2><a name="creating"></a>
			</p>
			<p>Contacts can be imported manually by copy&nbsp;paste or by importing a file.<br>
				First <strong>Create a new list</strong>, add a name and leave Type unchanged.
				<div style="background-color:#e8e8e8;"><img src="{{asset('storage/oysterImages/newlist.png')}}"></div>
			</p>
			<p>				<div style="background-color:#e8e8e8;"><img src="{{asset('storage/oysterImages/type.png')}}"></div>
</p>
<p>In the following screen, click on <img src="{{asset('storage/oysterImages/addbutton.png')}}" style="display:inline;" align="absmiddle"> </p>
<p>You will then reach the import screen, you can either type contacts manually or click on <em>Select it from you computer instead</em>.
	<h2>Importing Files<a class="headerlink" href="#subscribers" title="Permalink to this headline">¶</a></h2><a name="files"></a>
	
File formats accepted:
<ul><li>Excel documents (e.g. .xls, .xlsx, .csv)</li>
<li>comma separated value text files (.csv)</li>
<li>tab delimited text files (.txt)</li>
<li>vCard files</li>
<li>compressed file formats (for example: .zip, .rar, .7z)</li>
</ul></p>
<p>Please note:<br>When importing an Excel file, ensure that all of your subscribers are on one sheet.<br> When a file with multiple sheets is imported, only the data from the first sheet is captured.</p>
<p>If the file you're importing contains the same email address more than once, the software will detect it and only import one record for the email address.

When this happens an 'import report' is generated after the file has been uploaded (which remains available for 10 days). </p>
			<div class="centeralign greybg paddimg">
				<img src="{{asset('storage/oysterImages/import-screen.png')}}">
			</div>
			<p>When importing a file, the system will match the subscriber details with your subscriber list fields and, if necessary, create new custom fields during the process, as shown here:</p>
			<img src="{{asset('storage/oysterImages/new-numeric-field.png')}}">
			<p>Click Finish adding subscribers to complete the import.<br/>
				If any errors or duplications were found, an import report will be displayed prompting you to take action if possible:</p>
				<img src="{{asset('storage/oysterImages/file-import-report-large.png')}}">
	</div>

		<!-- {user_guide_comments} -->
@include('oyster.partials.footer')	<!-- /#footer -->
	@endsection