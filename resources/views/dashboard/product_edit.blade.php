@extends('dashboard.layouts.datatable')

@section('title', 'Settings')

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
                  <h4 class="card-title">Add New Products&nbsp;<img src="{{ url('form09/images/products.png') }}" width="30px">

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
          
            <div class="col-12 grid-margin mt-3">
              <div class="card">
                <div class="card-body">
				
					       <h4 class="card-title">Produk Info</h4>
					
                  <form class="form-sample" action="/dashboard/product" method="post" enctype="multipart/form-data">
					         @csrf					
                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Produk:</label>

                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" />
							
                              @error('name')
                								<div class="invalid-feedback">
                									{{ $message }}
                								</div>
                							@enderror

						              </div>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Harga:</label>
                          <div class="col-sm-9">
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" />
                							@error('price')
                								<div class="invalid-feedback">
                									{{ $message }}
                								</div>
                							@enderror							
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Penerangan:</label>
                          <div class="col-sm-12">
              							<textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" rows="4">{{ old('description', $product->description) }}</textarea>
                							@error('description')
                								<div class="invalid-feedback">
                									{{ $message }}
                								</div>
                							@enderror										 
                          </div>
                        </div>
                      </div>
                    </div>								
				
				          <h4 class="card-title mt-3">Imej Produk</h4>
				  					
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="hidden" name="oldimg1" value="{{ $product->img1 }}">
                          @if($product->img1)
                            <img src="{{ asset($product->img1) }}" class="dlogo img-preview1 img-fluid" width="100px">
                          @else
                          <img class="dlogo img-preview1 img-fluid">
                          @endif
              							<label>Product Image 1</label>
              							<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="img1" class="custom-file-input image1 @error('img1') is-invalid @enderror" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" onchange="previewImage1()">
                							  <label class="custom-file-label 04" for="inputGroupFile04">Choose file</label>
                                  @error('img1')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror               							  
                              </div>
              							</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="hidden" name="oldimg2" value="{{ $product->img2 }}">
                          @if($product->img2)
                            <img src="{{ asset($product->img2) }}" class="dlogo img-preview2 img-fluid" width="100px">
                          @else
                          <img class="dlogo img-preview2 img-fluid">
                          @endif
																		
									       <label>Product Image 2</label>
              						<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="img2" class="custom-file-input image2 @error('img2') is-invalid @enderror" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05" onchange="previewImage2()">
              							  <label class="custom-file-label 05" for="inputGroupFile05">Choose file</label>
                                  @error('img2')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror              							  
										          </div>
              							</div>
                        </div>
                      </div>
                    </div>          
					
					           <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">

                          <input type="hidden" name="oldimg3" value="{{ $product->img3 }}">
                          @if($product->img2)
                            <img src="{{ asset($product->img3) }}" class="dlogo img-preview3 img-fluid" width="100px">
                          @else
                            <img class="dlogo img-preview3 img-fluid">
                          @endif

              						<label>Product Image 3</label>
              						<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="img3" class="custom-file-input image3 @error('img3') is-invalid @enderror" id="inputGroupFile06" aria-describedby="inputGroupFileAddon06" onchange="previewImage3()">
              							  <label class="custom-file-label 06" for="inputGroupFile06">Choose file</label>
                                  @error('img3')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror              							  
										          </div>
              							</div>
                        </div>
                      </div>	

                      <div class="col-md-6">
                        <div class="form-group">

                          <input type="hidden" name="oldimg4" value="{{ $product->img4 }}">
                          @if($product->img4)
                            <img src="{{ asset($product->img4) }}" class="dlogo img-preview4 img-fluid" width="100px">
                          @else
                            <img class="dlogo img-preview4 img-fluid">
                          @endif                          
									
              						<label>Product Image 4</label>
              						<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="img4" class="custom-file-input image4 @error('img4') is-invalid @enderror" id="inputGroupFile07" aria-describedby="inputGroupFileAddon07" onchange="previewImage4()">
              							  <label class="custom-file-label 07" for="inputGroupFile07">Choose file</label>
                                  @error('img4')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror              							  
										          </div>
              							</div>
                        </div>
                      </div>
					  
					</div> 
					<button type="submit" class="btn btn-info btn-rounded btn-fw"><strong>Create</strong></button>
					</form>

				  
                </div>
              </div>
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
  
  function previewImage1(){

    const image = document.querySelector('.image1');
    const imgPreview = document.querySelector('.img-preview1');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){

      imgPreview.src = oFREvent.target.result;

    }

  }
  
   function previewImage2(){

    const image = document.querySelector('.image2');
    const imgPreview = document.querySelector('.img-preview2');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){

      imgPreview.src = oFREvent.target.result;

    }

  }
  
   function previewImage3(){

    const image = document.querySelector('.image3');
    const imgPreview = document.querySelector('.img-preview3');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){

      imgPreview.src = oFREvent.target.result;

    }

  }

   function previewImage4(){

    const image = document.querySelector('.image4');
    const imgPreview = document.querySelector('.img-preview4');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){

      imgPreview.src = oFREvent.target.result;

    }

  }     
  
            $('#inputGroupFile04').on('change',function(e){
                //get the file name
                //var fileName = $(this).val();
				var fileName = e.target.files[0].name;
                //replace the "Choose a file" label
                $(this).next('.04').html(fileName);
            });
  
  
            $('#inputGroupFile05').on('change',function(e){
                //get the file name
                //var fileName = $(this).val();
				var fileName = e.target.files[0].name;
                //replace the "Choose a file" label
                $(this).next('.05').html(fileName);
            });
			
            $('#inputGroupFile06').on('change',function(e){
                //get the file name
                //var fileName = $(this).val();
				var fileName = e.target.files[0].name;
                //replace the "Choose a file" label
                $(this).next('.06').html(fileName);
            });

            $('#inputGroupFile07').on('change',function(e){
                //get the file name
                //var fileName = $(this).val();
        var fileName = e.target.files[0].name;
                //replace the "Choose a file" label
                $(this).next('.07').html(fileName);
            });             			

  </script>
 
 @endsection