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

    <h2> Creat New Content Folder </h2>
    
    <form action="{{ URL::to('content/') }}" method="post">

      <div class="form-group {{ $errors -> has('name') ? 'has-error' : ''}}">
        <label for="name"> Enter Name </label>
        <input id="name" class="form-control" type="text" name="name" value="{{ Request::old('name')}}">
      </div>

      <div class="form-group" style="margin-top: 15px;">
        <label for="admin_access_only"> Make This Folder Admin Access Only </label>
        <input id="admin_access_only" type="checkbox" name="admin_access_only"> 
      </div>

      <div id="accessGroupsWrrpper" class="input-group form-group col-lg-offset-1 col-lg-3 col-sm-6 {{ $errors -> has('groups') ? 'has-error' : ''}}">

        <label class="block" for="groups[]"> Select Content Folder Access Groups </label>

        <select id="accessGroups" name="groups[]" class="form-control selectpicker" value="{{ Request::old('')}}" multiple>

          @foreach($groups as $group)
            <option value="{{$group->name}}"> {{$group->name}} </option>
          @endforeach
        </select>

      </div>

      <div id="editGroupsWrrpper" class="input-group form-group col-lg-offset-1 col-lg-3 col-sm-6 {{ $errors -> has('groups') ? 'has-error' : ''}}">

        <label class="block" for="groups[]"> Select Content Folder Edit Access Groups </label>

        <select id="editGroups" name="groups[]" class="form-control selectpicker" value="{{ Request::old('')}}" multiple>

          @foreach($groups as $group)
            <option value="{{$group->name}}"> {{$group->name}} </option>
          @endforeach
        </select>

      </div>
     
      <button type="submit" class="btn btn-primary"> Submit </button>
      <input type="hidden" name="_token" value="{{ Session::token()}}">

    </form>
  </div>
@endsection

@section('scripts')

  <script type="text/javascript">

    $(document).ready(function() {

      $('#admin_access_only').on('change', function() {
        
        if(this.checked) {

          $('#editGroupsWrrpper, #accessGroupsWrrpper').hide();
        }
        else {

          $('#editGroupsWrrpper, #accessGroupsWrrpper').show();
        }
      });
    });

  </script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
@endsection