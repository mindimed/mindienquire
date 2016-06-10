<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentellela</title>

    <!-- Bootstrap -->
    {{ HTML::style('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    {{ HTML::style('assets/vendors/font-awesome/css/font-awesome.min.css') }}
    <!-- iCheck -->
    {{ HTML::style('assets/vendors/iCheck/skins/flat/green.css') }}

    <!-- bootstrap-wysiwyg -->
    {{ HTML::style('assets/vendors/google-code-prettify/bin/prettify.min.css') }}
    <!-- Select2 -->
    {{ HTML::style('assets/vendors/select2/dist/css/select2.min.css') }}
    <!-- Switchery -->
    {{ HTML::style('assets/vendors/switchery/dist/switchery.min.css') }}
    <!-- Custom Theme Style -->
    {{ HTML::style('assets/build/css/custom.min.css') }}


  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            @include('partial/sidebar')
          </div>
        </div>
        @include('partial/topnav')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')
            
          </div>
        </div>
        <!-- /page content -->

        @include('partial/footer')

      </div>
    </div>

    <!-- jQuery -->
    {{ HTML::script('assets/vendors/jquery/dist/jquery.min.js') }}
    <!-- Bootstrap -->
    {{ HTML::script('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}
     <!-- jQuery Tags Input -->
    {{ HTML::script('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}
    <!-- Switchery -->
    {{ HTML::script('assets/vendors/switchery/dist/switchery.min.js') }}
    <!-- Custom Theme Scripts -->
     {{ HTML::script('assets/build/js/custom.min.js') }}

  </body>
</html>