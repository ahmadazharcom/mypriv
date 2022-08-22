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
                  <h4 class="card-title">Produk&nbsp;<img src="{{ url('form09/images/products.png') }}" width="25px"></h4>

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
          
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>1. Nama:</strong> <a href="http://{{ env('APP_DOMAIN') }}/product/{{ $product->id }}">{{ $product->name }}</a></li>
            <li class="list-group-item"><strong>2. Harga:</strong> {{ $product->price }}</li>
            <li class="list-group-item"><strong>3. Penerangan:</strong> <a href="https://wa.{{ env('APP_DOMAIN') }}/6{{ $product->description }}/Hai saya telah menerima pesanan awak">{{ $product->description }}</a></li>
            <li class="list-group-item"><strong>4. Imej 1:</strong> <img src="{{ asset($product->img1) }}" width="100"></li>
            <li class="list-group-item"><strong>5. Imej 2:</strong> <img src="{{ asset($product->img2) }}" width="100"></li>
            <li class="list-group-item"><strong>7. Imej 3:</strong> <img src="{{ asset($product->img3) }}" width="100"></li>  
            <li class="list-group-item"><strong>8. Imej 4:</strong> <img src="{{ asset($product->img4) }}" width="100"></li> 
            <li class="list-group-item"><strong>9. Waktu:</strong> {{ $product->created_at->format('H:i:s') }}</li> 
            <li class="list-group-item"><strong>10. Tarikh:</strong> {{ $product->created_at->format('d M Y') }}</li>          
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