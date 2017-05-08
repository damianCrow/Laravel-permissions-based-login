@extends('layouts.master')

@section('content')

  <div class="col-md-6 col-md-offset-3">

  	<h1>Edit {{$content->name}}</h1>

  	</br>

  	@if(count($errors) > 0)
  		<ul>
  	   	@foreach ($errors->all() as $error)
  	      <li>{{ $error }}</li>
  	  	@endforeach
  	  </ul>
  	@endif

  	{{ Form::model($content, array('route' => array('content.update', $content->id), 'method' => 'PUT')) }}

      <div class="form-group {{ $errors -> has('name') ? 'has-error' : ''}}">
        <label for="name"> Edit Folder Name </label>
        <input id="name" class="form-control" type="text" name="name" value="@if(isset($request)) {{ $request['name'] }} @else {{ $content['name'] }} @endif">
      </div>

      @if (Auth::user()->isAdmin())
        <div class="form-group" style="margin-top: 15px;">

          <label for="admin_access_only"> Folder Is Admin Acces Only </label>
          <input id="admin_access_only" type="checkbox" name="admin_access_only" @if(isset($request['admin_access_only'])) checked @elseif($content['admin_access_only'] === 1) checked @endif> 
        </div>
      @endif

      <div id="editGroupsWrrpper" class="input-group form-group {{ $errors -> has('editGroups') ? 'has-error' : ''}}">

        <label class="block" for="editGroups[]"> Select Content Folder Edit Access Groups </label>

        <select id="editGroups" name="editGroups[]" class="form-control selectpicker" value="{{ Request::old('')}}" multiple>

          @if(Auth::user()->isAdmin())
            @foreach($groups as $group)

              <option value="{{$group->name}}"> {{$group->name}} </option>
            @endforeach
          @endif
        </select>

      </div>

      <div id="accessGroupsWrrpper" class="input-group form-group {{ $errors -> has('accessGroups') ? 'has-error' : ''}}">

        <label class="block" for="accessGroups[]"> Edit Content Folder Access Groups </label>

        <select id="accessGroups" name="accessGroups[]" class="form-control selectpicker show-tick" value="{{ Request::old('')}}" multiple>

         @if(Auth::user()->isAdmin())
            @foreach($groups as $group)
              
              <option value="{{$group->name}}"> {{$group->name}}</option>
            @endforeach  
          @endif

        </select>

      </div>

  		{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

  	{{ Form::close() }}

  </div>

@endsection

@section('scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

  <script type="text/javascript">

    $('#accessGroups').selectpicker('val', {!! $content->access_groups !!});
    $('#editGroups').selectpicker('val', {!! $content->edit_access_groups !!});

    $('#editGroups').on('changed.bs.select', function(evt) {
     
      $('#accessGroups').selectpicker('val', $('#editGroups').val());
    });
  </script>

@endsection