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

    <h2> Create New Group </h2>
    
    <form action="{{ URL::to('group/') }}" method="post">

      <div class="form-group {{ $errors -> has('name') ? 'has-error' : ''}}">
        <label for="name"> Enter Group Name </label>
        <input id="name" class="form-control" type="text" name="name" value="{{ Request::old('name')}}">
      </div>

      <button type="submit" class="btn btn-primary"> Submit </button>
      <input type="hidden" name="_token" value="{{ Session::token()}}">

    </form>
  </div>
@endsection

@section('scripts')
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
@endsection