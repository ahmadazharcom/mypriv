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
                  <h4 class="card-title">Product&nbsp;<img src="{{ url('form09/images/products.png') }}" width="30px"></h4>

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
				  <a class="btn btn-primary btn-sm" href="/dashboard/product/create" role="button">Add Product</a>

                  <div class="table-responsive pt-3">			
			
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
				        <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Penerangan</th>
                <th>Imej 1</th>
                <th>Imej 2</th>
                <th>Imej 3</th>
                <th>Imej 4</th>
				        <th>Action</th>
				
            </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="/dashboard/product/{{ $product->id }}">{{ $product->name }}</a></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td><a href="{{ asset($product->img1) }}"><img src="{{ asset($product->img1) }}"></a></td>
                <td><img src="{{ asset($product->img2) }}"></td>
                <td><img src="{{ asset($product->img3) }}"></td>
                <td><img src="{{ asset($product->img4) }}"></td>				
                <td>

                  
					<a href="/dashboard/product/{{ $product->id }}"><i class="bi bi-eye"></i></a>
					&nbsp;
					<a href="/dashboard/product/{{ $product->id }}/edit"><i class="bi bi-pencil-square"></i></a>
					&nbsp;
					<i class="bi bi-trash"></i>
				
				</td>			
            </tr>
          @endforeach
        </tbody>
        <tfoot>
            <tr>
				        <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Penerangan</th>
                <th>Imej 1</th>
                <th>Imej 2</th>
                <th>Imej 3</th>
                <th>Imej 4</th>
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