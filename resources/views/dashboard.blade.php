@extends('layouts.master')

@section('content')

<h3>Hello, welcome to permissionsApp {{ Auth::user()['email'] }}</h3>

<ul>
    @foreach($foldersAccesRightsArray as $folder)

     	@foreach($folder->files as $file)

        <li class="list-group-item">
        <span>{{$folder->folderName}}</span>
        	<a class="file-link" href="file/{{$folder->folderName}}/{{basename($file)}}">{{ basename($file) }}</a>
        </li>

      @endforeach
    @endforeach

    @foreach($foldersEditRightsArray as $folderEdit)

     	@foreach($folderEdit->files as $fileEdit)

        <li class="list-group-item">
        	<span class="">{{$folderEdit->folderName}}</span>
        	<a class="file-link" href="file/{{$folderEdit->folderName}}/{{basename($fileEdit)}}">{{ basename($fileEdit) }}</a>

        	{{ Form::open(array('url' => 'delete_file/'. $folderEdit->folderName . '/' . basename($fileEdit), 'class' => 'delete side-by-side')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete File ', array('class' => 'btn btn-sm btn-danger')) }}
        	{{ Form::close() }}
        </li>

      @endforeach
    @endforeach
</ul>

<script>

  $(".delete").on("submit", function() {

     return confirm("Are you sure you want to delete this user?");
  });

</script>

@endsection