@extends('layouts.master')

@section('styles')
 
@endsection

@section('content')

  <div class="col-md-12">

    <h1>Upload Files</h1>

    <form id="fileUpload" action="{{ URL::to('/content/' . $folderId. '/upload') }}" method="post" files="true" enctype="multipart/form-data">
        
        <input type="file" name="files[]"  multiple>
       
        <div style="bottom: -50px; position: absolute; left: 15px;">

          <button  id="uploadButton" type="submit" class="btn btn-primary"> Upload </button>
          <input type="hidden" name="_token" value="{{ Session::token()}}"> 
        </div>
    </form>
  </div>
  

@endsection

@section('scripts')
  

@endsection