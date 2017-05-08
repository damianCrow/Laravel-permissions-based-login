@extends('layouts.master')

@section('styles')
 
 <style type="text/css">
   
   #drop-zone {
      width: 100%;
    height: 360px;
    border: 4px dashed rgba(0,0,0,.3);
    border-radius: 20px;
    font-family: Arial;
    text-align: center;
    position: relative;
    line-height: 180px;
    font-size: 30px;
    color: rgba(0,0,0,.3);
  }

      #drop-zone input {
          /*Important*/
          position: absolute;
          /*Important*/
          cursor: pointer;
          left: 0px;
          top: 0px;
          opacity:0; 
      }

      /*Important*/
      #drop-zone.mouse-over {
          border: 2px dashed rgba(0,0,0,.5);
          color: rgba(0,0,0,.5);
      }


  /*If you dont want the button*/
  #clickHere {
      position: absolute;
      cursor: pointer;
      left: 50%;
      top: 50%;
      margin-left: -50px;
      margin-top: 20px;
      line-height: 26px;
      color: white;
      font-size: 12px;
      width: 100px;
      height: 26px;
      border-radius: 4px;
      background-color: #3b85c3;

  }

    #clickHere:hover {
      background-color: #4499DD;

  }

  .upload_preview {
    width: 75px;
    height: 75px;
    border: 1px solid #333333;
    margin-right: 10px;
    border-radius: 5px;
  }

 </style>
@endsection

@section('content')

  <div class="col-md-12">

    <h1>Upload Files</h1>

    <form id="fileUpload" action="{{ URL::to('/content/' . $folderId. '/upload') }}" method="post" files="true" enctype="multipart/form-data">
        
       <!--  <input type="file" name="files[]"  multiple> -->

       <div id="drop-zone">
          Drop files here...
          <div id="clickHere">
              or click here..
              <input id="files" type="file" name="files[]"  multiple>
          </div>

          <div id="thumbs"></div>
      </div>
       
        <div style="bottom: -50px; position: absolute; left: 15px;">

          <button  id="uploadButton" type="submit" class="btn btn-primary"> Upload </button>
          <input type="hidden" name="_token" value="{{ Session::token()}}"> 
        </div>
    </form>
  </div>
  

@endsection

@section('scripts')
  
  <script type="text/javascript">
    
    $(function () {
      var dropZoneId = "drop-zone";
      var buttonId = "clickHere";
      var mouseOverClass = "mouse-over";

      var dropZone = $("#" + dropZoneId);
      var ooleft = dropZone.offset().left;
      var ooright = dropZone.outerWidth() + ooleft;
      var ootop = dropZone.offset().top;
      var oobottom = dropZone.outerHeight() + ootop;
      var inputFile = dropZone.find("input");
      document.getElementById(dropZoneId).addEventListener("dragover", function (e) {
          e.preventDefault();
          e.stopPropagation();
          dropZone.addClass(mouseOverClass);
          var x = e.pageX;
          var y = e.pageY;

          if (!(x < ooleft || x > ooright || y < ootop || y > oobottom)) {
              inputFile.offset({ top: y - 15, left: x - 100 });
          } else {
              inputFile.offset({ top: -400, left: -400 });
          }

      }, true);

      if (buttonId != "") {
          var clickZone = $("#" + buttonId);

          var oleft = clickZone.offset().left;
          var oright = clickZone.outerWidth() + oleft;
          var otop = clickZone.offset().top;
          var obottom = clickZone.outerHeight() + otop;

          $("#" + buttonId).mousemove(function (e) {
              var x = e.pageX;
              var y = e.pageY;
              if (!(x < oleft || x > oright || y < otop || y > obottom)) {
                  inputFile.offset({ top: y - 15, left: x - 160 });
              } else {
                  inputFile.offset({ top: -400, left: -400 });
              }
          });
      }

      document.getElementById(dropZoneId).addEventListener("drop", function (e) {
          $("#" + dropZoneId).removeClass(mouseOverClass);
      }, true);
  })    

    $('#files').on('change', function() {

      for (var i = 0; i < this.files.length; i++) {

        if(this.files[i].type.substring(0, 6) === 'image/') {

          var fr = new FileReader();
          fr.onload = function(e) {
            
            $('#thumbs').append('<img class="upload_preview" src="' + e.target.result + '">');
          }

          fr.readAsDataURL(this.files[i]);
        }
        else {

          $('#thumbs').append('<img class="upload_preview" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcST2ouOJo96xUo5qcPhw89GuP-GB8dRPy9bu5KgHb6uxQMi9fv2qA">');
        }
      }
    });

  </script>

@endsection