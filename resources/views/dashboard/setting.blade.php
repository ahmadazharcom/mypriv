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
                  <h4 class="card-title">Settings&nbsp;<img src="{{ url('form09/images/settings.png') }}" width="25px">

                  <!--<p class="card-description">
                    Add class <code>s</code>
                  </p>-->
          
            <div class="col-12 grid-margin mt-5">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Logo Dashboard dan Login</h4>
				  
                  <form class="form-sample" action="/logo_update" method="post" enctype="multipart/form-data">
					         @csrf					
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
									       <input type="hidden" name="old_dashboard_logo" value="{{ $profiles->dashboard_logo }}">
                             @if($profiles->dashboard_logo)
                  						<img class="dlogo img-preview1 img-fluid" src="{{ asset($profiles->dashboard_logo) }}">
                             @else
                              <img class="dlogo img-preview1 img-fluid">
                             @endif
              							<label>Logo Dashboard</label>
              							<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="dashboard_logo" class="custom-file-input image1 @error('dashboard_logo') is-invalid @enderror" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" onchange="previewImage1()">
                							  <label class="custom-file-label 04" for="inputGroupFile04">Choose file</label>
                                  @error('dashboard_logo')
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
									<input type="hidden" name="old_dashboard_logo_mini" value="{{ $profiles->dashboard_logo_mini }}">
									@if($profiles->dashboard_logo)
										<img class="dlogo img-preview2 img-fluid" src="{{ asset($profiles->dashboard_logo_mini) }}">
              						@else
										<img class="dlogo img-preview2 img-fluid">
									@endif										
									
									<label>Logo Dashboard Mini</label>
              						<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="dashboard_logo_mini" class="custom-file-input image2 @error('dashboard_logo_mini') is-invalid @enderror" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05" onchange="previewImage2()">
              							  <label class="custom-file-label 05" for="inputGroupFile05">Choose file</label>
                                  @error('dashboard_logo_mini')
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
									<input type="hidden" name="old_login_logo" value="{{ $profiles->login_logo }}">
									@if($profiles->login_logo)
										<img class="dlogo img-preview3 img-fluid" src="{{ asset($profiles->login_logo) }}">
									@else
										<img class="dlogo img-preview3 img-fluid">
									@endif										
              						<label>Logo Login</label>
              						<br /><br />
              							<div class="input-group">
              							  <div class="custom-file">
              							  <input type="file" name="login_logo" class="custom-file-input image3 @error('login_logo') is-invalid @enderror" id="inputGroupFile05" aria-describedby="inputGroupFileAddon06" onchange="previewImage3()">
              							  <label class="custom-file-label 06" for="inputGroupFile06">Choose file</label>
                                  @error('login_logo')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                  @enderror              							  
										  </div>
              							</div>
                        </div>
                      </div>					 
					</div> 
					<button type="submit" class="btn btn-info btn-rounded btn-fw"><strong>Update</strong></button>
					</form>
					 
					<hr />
					<h4 class="card-title mt-3">Personal Info</h4>
					
                  <form class="form-sample" action="/profile_update" method="post" enctype="multipart/form-data">
					         @csrf					
                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama:</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $users->name) }}" />
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
                          <label class="col-sm-3 col-form-label">Username:</label>
                          <div class="col-sm-9">
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username', $users->username) }}" />
							@error('username')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror							
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email:</label>
                          <div class="col-sm-9">
							             <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $users->email) }}" />
							@error('email')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror										 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No Telefon Bimbit:</label>
                          <div class="col-sm-9">
                            <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact', $users->contact) }}"/>
							@error('contact')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror							
                          </div>
                        </div>
                      </div>
                    </div>

							<button type="submit" class="btn btn-info btn-rounded btn-fw"><strong>Update</strong></button>

                  </form>
				  
				  <hr />
				  
				  <h4 class="card-title mt-5">Change Password</h4>
				  
                  <form class="form-sample" action="/password_change" method="post" enctype="multipart/form-data">
					  @csrf					  				  
                    <div class="row mt-3">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">New Password:</label>
                          <div class="col-sm-9">
							<input type="text" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" />
							@error('password')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror								
                          </div>
                        </div>
                      </div>
    				 </div>

							<button type="submit" class="btn btn-info btn-rounded btn-fw"><strong>Update</strong></button>

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
  </script>
 
 @endsection