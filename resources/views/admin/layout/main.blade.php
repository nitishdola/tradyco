<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tredyco">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Tredyco">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Tredyco Admin @yield('title')</title>

  <!-- Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.14/jquery.datetimepicker.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.default.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/css/selectize.default.min.css">
  <!-- Main styles for this application -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <!-- Styles required by this views -->
   @yield('page_css')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    @include('admin.layout.common.user_nav')
  </header>

  <div class="app-body">
    <div class="sidebar">
    @include('admin.layout.common.sidebar')
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        @yield('breadcumb')
      </ol>

      <div class="container-fluid">

        <div class="animated fadeIn">
          @if(Session::has('message'))
            <div class="row">
               <div class="col-lg-12">
                     <div class="alert {{ Session::get('alert-class', 'alert-info') }}">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           {!! Session::get('message') !!}
                     </div>
                  </div>
            </div>
          @endif

          @yield('content')
        </div>

      </div>
      <!-- /.conainer-fluid -->
    </main>
  </div>

  <footer class="app-footer">
    <span><a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.</span>
    <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
  </footer>

  <!-- Bootstrap and necessary plugins -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.14/jquery.datetimepicker.full.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.4/js/standalone/selectize.js"></script>

  <!-- CoreUI main scripts -->

  <script src="{{ asset('admin/js/app.js') }}"></script>

  <!-- Plugins and scripts required by this views -->

  <!-- Custom scripts required by this view -->
  <script src="{{ asset('admin/js/views/main.js') }}"></script>
  <script>
    $(document).ready(function() {
      jQuery('.datepick').datetimepicker({
        timepicker:false,
        //mask:true,
        format:'d/m/Y',
        formatDate:'Y/m/d'
      });

      $('.selectize-basic').selectize({
        sortField: 'text'
    });

    });
  </script>

  @yield('page_js')
</body>
</html>