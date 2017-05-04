<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> permissionsApp </title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('styles')

  </head>
  </head>
  <body>

  	@include('partials.navBar')
  	
  	<div id="wrapper" class="container-fluid">

      <div id="header-wrapper" class="row-fluid col-md-10 col-md-offset-1">

        @if (Session::has('message'))
          <div class="alert alert-success fade in">
            <h4 class="alert-message"> 

              {{ Session::get('message') }}
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            </h4>
          </div>
        @endif

        @yield('header')
      </div>

      <div id="content-wrapper" class="grid row-fluid col-md-10 col-md-offset-1">

        @yield('content')

      </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    @yield('scripts')
  </body>
</html>
