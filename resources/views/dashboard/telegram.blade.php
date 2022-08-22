@extends('dashboard.layouts.datatable')

@section('title', 'Telegram')

@section('content')  

  <div class="container-scroller">
    <!-- partial:dashboard/partials/_navbar.html -->

@include('dashboard.partials.navbar')
	
@include('dashboard.partials.panel')
	  
	  
	  
      <!-- partial:../../partials/_sidebar.html -->
        @include('dashboard.partials.sidebar')	 
      <!-- partial -->
	  
	  
	  
      <div class="main-panel">
        <div class="content-wrapper">
		
		
          <div class="row">			
	
			
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Telegram&nbsp;<img src="../form09/images/telegram50.png" width="25px"></h4>

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
				  
				  
                  <div class="table-responsive pt-3">			
			
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
				        <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telefon Bimbit</th>
                <th>Username/Bot</th>
                <th>Pesanan</th>
                <th>Ip Address</th>
                <th>Waktu</th>
                <th>Tarikh</th>
            </tr>
        </thead>
        <tbody>
          @foreach($telegrams as $telegram)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $telegram->name }}</td>
                <td>{{ $telegram->email }}</td>
                <td><a href="/dashboard/telegram_single/{{ $telegram->id }}">{{ $telegram->contact }}</a></td>
                <td>{{ $telegram->userbot }}</td>
                <td>{{ $telegram->message }}</td>
                <td>{{ $telegram->ipaddr }}</td>
                <td>{{ $telegram->created_at->format('h:i:s a') }}</td>
                <td>{{ $telegram->created_at->format('d M Y') }}</td>				
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
				        <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telefon Bimbit</th>
                <th>Username/Bot</th>
                <th>Pesanan</th>
                <th>Ip Address</th>
                <th>Waktu</th>
                <th>Tarikh</th>
            </tr>
        </tfoot>
    </table>			
	
                  </div>
                </div>
              </div>
            </div>
			
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  
  <script>
	  $(document).ready(function() {
		$('#example').DataTable();
	} );
  </script>

 @endsection