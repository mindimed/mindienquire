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
    <!-- Datatables -->
    {{ HTML::style('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
    {{ HTML::style('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}
    {{ HTML::style('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}
    {{ HTML::style('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}
    {{ HTML::style('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}

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
    <!-- FastClick -->
    {{ HTML::script('assets/vendors/fastclick/lib/fastclick.js') }}
    <!-- NProgress -->
    {{ HTML::script('assets/vendors/nprogress/nprogress.js') }}
    <!-- Datatables -->
    {{ HTML::script('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}
    {{ HTML::script('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}
    {{ HTML::script('assets/vendors/jszip/dist/jszip.min.js') }}
    {{ HTML::script('assets/vendors/pdfmake/build/pdfmake.min.js') }}
    {{ HTML::script('assets/vendors/pdfmake/build/vfs_fonts.js') }}

    <!-- Custom Theme Scripts -->
     {{ HTML::script('assets/build/js/custom.min.js') }}

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>