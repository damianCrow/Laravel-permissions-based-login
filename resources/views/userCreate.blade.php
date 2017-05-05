@extends('layouts.master')

@section('content')

  @if(count($errors) > 0) 
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <ul>
          @foreach($errors -> all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
  @endif 

  <div class="col-md-6 col-md-offset-3">

    <h2> Sign Up </h2>
    
    <form action="{{ URL::to('user/') }}" method="post">

      <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
        <label for="email"> Enter Email </label>
        <input id="email" class="form-control" type="text" name="email" value="{{ Request::old('email')}}">
      </div>

      <div class="form-group {{ $errors -> has('password') ? 'has-error' : ''}}">
        <label for="password"> Enter Password </label>
        <input id="password" class="form-control" type="password" name="password" value="{{ Request::old('password')}}">
      </div>

      <div class="input-group {{ $errors -> has('groups') ? 'has-error' : ''}}">

        <label class="block" for="groups[]"> Select Groups </label>

        <select id="groups" name="groups[]" class="form-control selectpicker" value="{{ Request::old('')}}" multiple>

          @foreach($groups as $group)
            <option value="{{$group->name}}"> {{$group->name}} </option>
          @endforeach
        </select>

      </div>

      <div class="form-group" style="margin-top: 15px;">
        <label for="admin"> Make User Admin </label>
        <input id="admin" type="checkbox" name="admin"> 
      </div>

      <button type="submit" class="btn btn-primary"> Submit </button>
      <input type="hidden" name="_token" value="{{ Session::token()}}">

    </form>
  </div>
@endsection

@section('scripts')
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
@endsection