<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <title><@include('oyster.partials.title')> User Guide &mdash; Snapshot</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/oyster/common.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/oyster/pygments.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('css/oyster/overwrite.css') }}" type="text/css" />

    @yield('styles')

  </head>
  <body>

  	@include('oyster.partials.oysterNavBar')
  	
  	<div id="wrapper" class="container-fluid no-padding">

      <div id="header-wrapper" class="row-fluid col-md-12 no-padding">

        @if (Session::has('message'))
          <p class="alert alert-info custom-alert">
            {{ Session::get('message') }}
            <a href="#" class="close" onclick="removeAlert()" style="padding-left: 20px;">&times;</a>   
          </p>
        @endif

        @yield('header')
      </div>

      <div id="content-wrapper" class="grid row-fluid col-md-12 no-padding">

        @yield('content')

      </div>
    </div>
     <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
          URL_ROOT:    '../',
          VERSION:     '2.8.1',
          COLLAPSE_INDEX: false,
          FILE_SUFFIX: '.html',
          HAS_SOURCE:  true
        };
      </script>
      <script type="text/javascript" src="{{ URL::asset('js/oyster/underscore.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/oyster/doctools.js') }}"></script>
      <script type="text/javascript">

        function removeAlert() {

          $('.alert').remove();
        }
        
        $(function(){
          var stickyRibbonTop = $('#header').offset().top;
    
          $(window).scroll(function(){
            if( $(window).scrollTop() > stickyRibbonTop ) {
                    $('#header').css({position: 'fixed', top: '0px'});
        
            } else {
                    $('#header').css({position: 'static', top: '0px',width: '100%'});
        
            }
          });
        });
      </script>
    @yield('scripts')
</body>
</html>