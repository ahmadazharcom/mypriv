@extends('layouts/whatsapp')

@section('title', 'Login')

@section('content')

  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                  <center><img src="{{ $profiles->login_logo }}" class="mb-3"></center>
                  <center><h3><strong>Admin Panel Dashboard</strong></h3><p class="mb-4">Sila masukkan Login Id dan Password untuk Log Masuk ke Dashboard Admin Panel</p></center>

                    @if (session('login_status'))
                      <div class="alert alert-danger login_error">
                          {{ session('login_status') }}
                      </div>
                    @endif

                    @if(isset ($errors) && count($errors) > 0)
                        <div class="alert alert-warning login_error" role="alert">
                            <ul class="list-unstyled mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif   				  
				  
                </div>
                <form action="{{ route('login.perform') }}" method="post">
                    @csrf
                  <div class="form-group first">
                    <label for="Contact">Email atau No Telefon Bimbit</label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror"  value="{{ old('contact') }}" name="contact" id="contact" autofocus>
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                  </div>
                  
                  <div class="form-group first">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                  </div> 

                  <div class="form-group first mb-5">
                    

                  </div>                             

                  <input type="submit" value="Log Masuk" class="btn btn-pill text-white btn-block btn-primary telegram">

                  <span class="d-block text-center my-4 text-muted"><a href="/" class="text-decoration-none">Kembali ke Halaman Utama</a></span>
                  
                  <!--<div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="icon-facebook mr-3"></span> 
                    </a>
                    <a href="#" class="twitter">
                      <span class="icon-twitter mr-3"></span> 
                    </a>
                    <a href="#" class="google">
                      <span class="icon-google mr-3"></span> 
                    </a>
                  </div>-->
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

@endsection