@extends('dashboard.layouts.main')

@section('title', 'Dashboard|Main')

@section('content')

  <div class="container-scroller">
  

	@include('dashboard.partials.navbar')
	
	@include('dashboard.partials.panel')
	  
    @include('dashboard.partials.sidebar')	  
	  
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="dashboard2/images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Kuala Lumpur</h4>
                        <h6 class="font-weight-normal">Malaysia</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
            <div class="col-md-6 grid-margin transparent">
			
              <div class="row">
			  
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today WhatsApp</p>
                      <p class="fs-30 mb-2">{{ $wa_todays->count() }}</p>
                      <p></p>
                    </div>
                  </div>
                </div>
				
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Today Orders</p>
                      <p class="fs-30 mb-2">{{ $orders_todays->count() }}</p>
                      <p></p>
                    </div>
                  </div>
                </div>
				
              </div>
			  
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total WhatsApp</p>
                      <p class="fs-30 mb-2">{{ $whatsapps->count() }}</p>
                      <p></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total Orders</p>
                      <p class="fs-30 mb-2">{{ $orders->count() }}</p>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

		  
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Url Links</p>
                  <div class="row">
                    <div class="col-12">
                      <p class="mb-3"><img class="urlimg" src="dashboard2/images/urllink.png" width="686" height="254"></p>
                      
					            <p><h4><a class="wa" href="http://wa.{{ env('APP_DOMAIN') }}/60164378770/Saya ingin tahu pasal produk">https://wa.{{ env('APP_DOMAIN') }}/60164378770/Saya ingin tahu pasal produk</a> &nbsp;<i href="https://wa.{{ env('APP_DOMAIN') }}/60164378770/Saya ingin tahu pasal produk" class="bi bi-clipboard menu-icon tooltiptext wa" style="cursor:pointer" onclick="javascript:alert('Copy to Clipboard')"></i></h4></p>
								  
                      <p><h4><a href="http://{{ env('APP_DOMAIN') }}/whatsapp">https://{{ env('APP_DOMAIN') }}/whatsapp</a> &nbsp;<i href="https://{{ env('APP_DOMAIN') }}/whatsapp" class="bi bi-clipboard menu-icon was" style="cursor:pointer" onclick="javascript:alert('Copy to Clipboard')"></i></h4></p>
					  
                      <p><h4><a href="http://{{ env('APP_DOMAIN') }}/telegram">https://{{ env('APP_DOMAIN') }}/telegram</a> &nbsp;<i href="https://{{ env('APP_DOMAIN') }}/telegram" class="bi bi-clipboard menu-icon te" style="cursor:pointer" onclick="javascript:alert('Copy to Clipboard')"></i></h4></p>
					   
                      <p><h4><a href="http://{{ env('APP_DOMAIN') }}/whatsapp_out">https://{{ env('APP_DOMAIN') }}/whatsapp_out</a> &nbsp;<i href="https://{{ env('APP_DOMAIN') }}/whatsapp_out" class="bi bi-clipboard menu-icon was" style="cursor:pointer" onclick="javascript:alert('Copy to Clipboard')"></i></h4></p>
					  
                      <p><h4><a href="http://{{ env('APP_DOMAIN') }}/telegram_out">https://{{ env('APP_DOMAIN') }}/telegram_out</a> &nbsp;<i href="https://{{ env('APP_DOMAIN') }}/telegram_out" class="bi bi-clipboard menu-icon te" style="cursor:pointer" onclick="javascript:alert('Copy to Clipboard')"></i></h4></p>		
					   
                    </div>
                  </div>
                  </div>
                </div>

                
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
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

		new Clipboard('.wa', {
			text: function (trigger) {
				return trigger.getAttribute('href');
			}
		});
		
		new Clipboard('.was', {
			text: function (trigger) {
				return trigger.getAttribute('href');
			}
		});		
		
		new Clipboard('.te', {
			text: function (trigger) {
				return trigger.getAttribute('href');
			}
		});		
	
		function myFunction() {
		  
		  var tooltip = document.getElementById("myTooltip");
		  tooltip.innerHTML = "Copied: " + copyText.value;
		  
		}

		function outFunc() {
			
		  var tooltip = document.getElementById("wa");
		  tooltip.innerHTML = "Copy to clipboard";
		  
		}
	
	</script>  

  @endsection