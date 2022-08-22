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
  <!-- endinject --> 
  
  <!-- Plugin css for this page -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('dashboard2/vendors/ti-icons/css/themify-icons.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('dashboard2/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('dashboard2/images/favicon.png') }}" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
	
    .dlogo {
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

<style>
    /* .table td {    
        white-space: pre-wrap; /* css-3 */
        /*white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
        /*white-space: -pre-wrap; /* Opera 4-6 */
        /*white-space: -o-pre-wrap; /* Opera 7 */
        /*word-wrap: break-word; /* Internet Explorer 5.5+ */
    /*}*/
</style>

</head>
<body>

@yield('content')

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ url('dashboard2/js/off-canvas.js') }}"></script>
  <script src="{{ url('dashboard2/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('dashboard2/js/template.js') }}"></script>
  <script src="{{ url('dashboard2/js/settings.js') }}"></script>
  <script src="{{ url('dashboard2/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>