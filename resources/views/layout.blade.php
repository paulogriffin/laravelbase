<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DingDong</title>

    <link href="/css/app.css" rel="stylesheet">
   

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
    

  </head>
  <body>
    @include('partials.nav')
   
    <div class="container">
      @yield('content')
    </div>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
 <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
      @yield('scripts.footer')

      @include('partials.flash')
  </body>
</html>