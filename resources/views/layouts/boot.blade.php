<!doctype html>
<html lang="en">
  <head>
    <!-- icon -->
    <link rel="shortcut icon" href="{{'/img/logo.png'}}" type="image/x-icon" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>PT. Risky Putra Kasih</title>
  </head>
  <body style="height: 100%;">
      @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{url('js/app.js')}}"></script>
    <script>
      let clone = $("#instance").clone();

      $(window).on('resize load pagebeforecreate', function(){
        if ($(window).width() < 960) {
          $("#instance").remove();
        }
      });

      $(window).on('resize', function(){
        if ($(window).width() > 960) {
          $(".card-body").prepend(clone);
        }
      }); 
    </script>
    @yield('footer')
  </body>
</html>