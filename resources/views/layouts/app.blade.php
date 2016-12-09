<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Scripts -->
    <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
    </script>
  </head>
  <body style="background:#e8f5e9">
    <div id="app">
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper green darken-3">
            <div class="brand-logo center">
              <i class="material-icons">dns</i>
                2B-Staff Registration
            </div>
          </div>
        </nav>
      </div>
      <div class="container">
        <div class="collection">
          <div class="collection-item">โปรดกรอกข้อมูลให้ครบถ้วน</div>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
  </body>
</html>
