@extends('layouts.master')

@section('content')

	<h1>Content Folders Index </h1>

	</br>

  @foreach($contents as $content)

    <ul class="list-group">
      <li class="list-group-item">Folder Name: <strong> {{ $content->name }} </strong></li>

      @if($content->admin_access_only == 0) 

      	<li class="list-group-item">Admin Access Only: <strong> No </strong></li>
        <li class="list-group-item"> Groups Allowed Access: <strong> {{ $content->access_groups }} </strong></li>
        <li class="list-group-item">Groups With Edit Privilages: <strong> {{ $content->edit_access_groups }} </strong></li>

      @else

      	<li class="list-group-item">Admin Access Only: <strong> Yes </strong></li>
      @endif

      <li class="list-group-item">Date Created: <strong> {{ $content->created_at }} </strong></li>

      @if(Auth::user()->isAdmin())
        <li class="list-group-item list-group-item-danger">

        <a class="btn btn-sm btn-default" href="{{ URL::to('content/' . $content->id . '/add') }}">Add Content</a>

        <a class="btn btn-sm btn-info" href="{{ URL::to('content/' . $content->id . '/edit') }}">Edit Folder</a>

        {{ Form::open(array('url' => 'content/' . $content->id, 'class' => 'delete side-by-side')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete Folder ', array('class' => 'btn btn-sm btn-danger')) }}
        {{ Form::close() }}
        	
  			</li>
      @endif
    </ul>

    </br>

  @endforeach

  <script>

    $(".delete").on("submit", function() {

       return confirm("Are you sure you want to delete this folder, along with all contents and sub folders?");
    });

	</script>
@endsection

