@extends('layouts.master')

@section('content')

  <div class="col-md-6 col-md-offset-3">

  	<h1>Edit Account</h1>

  	</br>

  	@if(count($errors) > 0)
  		<ul>
  	   	@foreach ($errors->all() as $error)
  	      <li>{{ $error }}</li>
  	  	@endforeach
  	  </ul>
  	@endif

  	{{ Form::model($group, array('route' => array('group.update', $group->id), 'method' => 'PUT')) }}

      <div class="form-group {{ $errors -> has('name') ? 'has-error' : ''}}">
        <label for="name"> Enter New Name </label>
        <input id="name" class="form-control" type="text" name="name" value="@if(isset($request)) {{ $request['name'] }} @else {{ $group['name'] }} @endif">
      </div>

  		{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

  	{{ Form::close() }}

  </div>

@endsection

@section('scripts')

@endsection