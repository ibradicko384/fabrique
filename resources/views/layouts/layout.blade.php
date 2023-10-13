<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('admin/assets/images/favicon.ico')}}" />
    <!-- paginator database -->
    <link rel="stylesheet" href="{{url('admin/assets/css/css_bootstrap.css')}}"  />
     <link rel="stylesheet" href="{{url('admin/assets/css/bootstrap4.min.css')}}"  />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">FabriAccess</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      @include('layouts.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.sidebar')
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('admin/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('admin/assets/js/dashboard.js') }}"></script>
    <script src="{{ url('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('admin/assets/js/todolist.js') }}"></script>
    <script src="{{ url('admin/assets/js/code.jquery.com_jquery-3.6.0.min.js') }}"></script>
    <!-- End custom js for this page -->
    <script src="{{ url('admin/js/custom.js') }}"></script>
    <script src="{{ url('admin/assets/js/cdn.jsdelivr.net_npm_sweetalert2@11.js') }}"></script>


  </body>
</html>