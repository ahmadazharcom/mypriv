@extends('dashboard.layouts.datatable')

@section('title', 'Whatsapp')

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
                  <h4 class="card-title">WhatsApp&nbsp;<img src="{{ url('form09/images/whatsapp50.png') }}" width="25px"></h4>

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
				  
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><strong>1. Nama:</strong> {{ $whatsapp->name }}</li>
					  <li class="list-group-item"><strong>2. Email:</strong> {{ $whatsapp->email }}</li>
					  <li class="list-group-item"><strong>3. No Telefon Bimbit:</strong> <a href="https://wa.{{ env('APP_DOMAIN') }}/6{{ $whatsapp->contact }}/Hai saya telah menerima pesanan awak">{{ $whatsapp->contact }}</a></li>
					  <li class="list-group-item"><strong>4. Pesanan:</strong> {{ $whatsapp->message }}</li>
					  <li class="list-group-item"><strong>5. Ip Address:</strong> <a href="https:///ipapi.co/{{ $whatsapp->ipaddr }}/json/">{{ $whatsapp->ipaddr }}</a></li>
					  <li class="list-group-item"><strong>6. Tarikh:</strong> {{ $whatsapp->created_at->format('d M Y') }}</li>					  
					</ul>				  
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
  

 @endsection