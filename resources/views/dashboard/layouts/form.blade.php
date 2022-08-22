<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('dashboard2/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('dashboard2/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('dashboard2/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ url('dashboard2/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('dashboard2/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('dashboard2/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('dashboard2/images/favicon.png') }}" />
</head>

<body>

@yield('content')

  <!-- plugins:js -->
  <script src="{{ url('dashboard2/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ url('dashboard2/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ url('dashboard2/vendors/select2/select2.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('dashboard2/js/off-canvas.js') }}"></script>
  <script src="{{ url('dashboard2/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('dashboard2/js/template.js') }}"></script>
  <script src="{{ url('dashboard2/js/settings.js') }}"></script>
  <script src="{{ url('dashboard2/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('dashboard2/js/file-upload.js') }}"></script>
  <script src="{{ url('dashboard2/js/typeahead.js') }}"></script>
  <script src="{{ url('dashboard2/js/select2.js') }}"></script>
  <!-- End custom js for this page-->

</body>

</html>