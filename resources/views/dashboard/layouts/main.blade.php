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

  <link rel="stylesheet" href="dashboard2/vendors/ti-icons/css/themify-icons.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard2/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard2/images/favicon.png" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
  
    <style>
	
       .urlimg {
        max-width: 100%;
        height: auto;
      }
	  
	.ddown {
	  position: relative;
	  display: inline-block;
	}

	.ddown-content {
	  display: none;
	  position: absolute;
	  background-color: #fff;
	  min-width: 160px;
	  overflow: auto;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	.ddown-content a {
	  color: black;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	}

	.ddown a:hover {background-color: #ddd;}

	.show {display: block;}	  
	  
    </style>  
  
</head>
<body>

@yield('content')

  <!-- plugins:js -->

  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="dashboard2/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="dashboard2/js/off-canvas.js"></script>
  <script src="dashboard2/js/hoverable-collapse.js"></script>
  <script src="dashboard2/js/template.js"></script>
  <script src="dashboard2/js/settings.js"></script>
  <script src="dashboard2js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="dashboard2/js/dashboard.js"></script>
  <script src="dashboard2/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>