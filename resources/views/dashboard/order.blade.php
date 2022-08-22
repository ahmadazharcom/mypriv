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
                  <h4 class="card-title">Order&nbsp;<img src="{{ url('form09/images/orders.png') }}" width="25px"></h4>

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
				  <a class="btn btn-primary btn-sm" href="/dashboard/product/create" role="button">New Order</a>

                  <div class="table-responsive pt-3">			
			
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
				        <th>No</th>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Kuantiti</th>
                <th>Jumlah</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
				        <th>No Telefon Bimbit</th>
                <th>Nota Tambahan</th>
                <th>Status Pesanan</th>
                <th>Action</th>
				
            </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)

          <?php

            $status = $order->order_status;

            if($status === 3){

              $status = "Baru";

            }elseif($status === 2){

              $status = "Telah di maklum balas";

            }elseif($status === 1){

              $status = "Telah Dibayar";

            }else{

              $status = "Pesanan Telah Di Hantar";

            }

          ?>

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="/dashboard/order/{{ $order->product_id }}">{{ $order->product_id }}</a></td>
                <td>{{ $order->product_name }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->contact }}</td>
                <td>{{ $order->notes }}</td>
                <td>{{ $status }}</td>                				
                <td>

                  
					<i class="bi bi-eye"></i>
					&nbsp;
					<i class="bi bi-pencil-square"></i>
					&nbsp
					<i class="bi bi-trash"></i>
				
				</td>			
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Id Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Kuantiti</th>
                <th>Jumlah</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>No Telefon Bimbit</th>
                <th>Nota Tambahan</th>
                <th>Status Pesanan</th>
                <th>Action</th>
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