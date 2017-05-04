@extends('layouts.master')

@section('content')

<h3>Hello, welcome to permissionsApp {{ Auth::user()['email'] }}</h3>

<ul>
    @foreach($foldersArray as $folder)

     	@foreach($folder->files as $file)

        <li class="list-group-item">
        <span>{{$folder->folderName}}</span>
        	<a href="file/{{$folder->folderName}}/{{basename($file)}}">{{ basename($file) }}</a>
        </li>

      @endforeach
    @endforeach
</ul>

@endsection