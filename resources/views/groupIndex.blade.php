@extends('layouts.master')

@section('content')

	<h1>Groups Index </h1>

	</br>

  @foreach($groups as $group)

    <ul class="list-group">
      <li class="list-group-item">Name: <strong> {{ $group->name }} </strong></li>

      @if(Auth::user()->isAdmin())
        <li class="list-group-item list-group-item-danger">
          <a class="btn btn-sm btn-info" href="{{ URL::to('group/' . $group->id . '/edit') }}">Edit Group</a>

          {{ Form::open(array('url' => 'group/' . $group->id, 'class' => 'delete side-by-side')) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Delete group', array('class' => 'btn btn-sm btn-danger')) }}
          {{ Form::close() }}
  			</li>
       @endif
    </ul>

    </br>

  @endforeach

  <script>

    $(".delete").on("submit", function() {

       return confirm("Are you sure you want to delete this group?");
    });

	</script>
@endsection

