@extends('layouts.master')

@section('content')

  <div class="col-md-6 col-md-offset-3">

  	<h1>Edit Account</h1>

  	</br>

  	@if($errors->has(''))
  		<ul>
  	   	@foreach ($errors->all() as $error)
  	      <li>{{ $error }}</li>
  	  	@endforeach
  	  </ul>
  	@endif

  	{{ Form::model($group, array('route' => array('group.update', $group->id), 'method' => 'PUT')) }}

      <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
        <label for="email"> Enter Email </label>
        <input id="email" class="form-control" type="text" name="email" value="@if(isset($request)) {{ $request['email'] }} @else {{ $group['email'] }} @endif">
      </div>

  		{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

  	{{ Form::close() }}

  </div>

@endsection

@section('scripts')

@endsection