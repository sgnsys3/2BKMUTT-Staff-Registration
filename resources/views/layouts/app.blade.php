<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/css/sweetalert.css">
      <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="/css/2bstaff.css">
      <title>2B-KMUTT Staff Registration</title>
  </head>
  <body>
    <div class="background-image"></div>
      @yield('content')
    </div>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>
    <script src="/js/jqueryRedir.js"></script>
    <script src="/js/2bstaff.js"></script>
    @yield('extendScript')
  </body>
</html>
