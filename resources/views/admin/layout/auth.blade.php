<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Trdyco">
  <meta name="author" content="WebGreeds">
  <meta name="keyword" content="Trdyco">

  <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/auth.css') }}">
  <title>Trdyco : Admin</title>


</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="materialContainer">


       <div class="box">

          <div class="title">@yield('auth_title')</div>

          @yield('auth_form')

       </div>

    </div>
  </div>

  <!-- Bootstrap and necessary plugins -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script src="{{ url('js/auth.js') }}"></script>

</body>
</html>
