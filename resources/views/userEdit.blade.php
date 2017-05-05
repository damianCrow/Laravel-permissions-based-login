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

  	{{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}

      <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
        <label for="email"> Enter Email </label>
        <input id="email" class="form-control" type="text" name="email" value="@if(isset($request)) {{ $request['email'] }} @else {{ $user['email'] }} @endif">
      </div>

      <div class="input-group {{ $errors -> has('groups') ? 'has-error' : ''}}">

        <label class="block" for="groups[]"> Select Groups </label>

        <select id="groups" name="groups[]" class="form-control selectpicker show-tick" value="{{ Request::old('')}}" multiple>

         @if(Auth::user()->isAdmin())
            @foreach($groups as $group)
              
              <option value="{{$group->name}}"> {{$group->name}}</option>
            @endforeach

          @else
            @foreach($userGroups as $group)

              <option value="{{$group}}" disabled>{{$group}} </option>
            @endforeach
          @endif


        </select>

      </div>

      <div class="form-group" style="margin-top: 15px;">

        @if (Auth::user()->isAdmin())
          <label for="admin"> Make Admin User </label>
          <input id="admin" type="checkbox" name="admin" @if(isset($request['admin'])) checked @elseif($user['admin'] === 1) checked @endif> 
        @endif 

      </div>

  		{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

  	{{ Form::close() }}

  </div>

@endsection

@section('scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

  <script type="text/javascript">

    $('#groups').selectpicker('val', {!! $user->groups !!});
  </script>

@endsection