@extends('layouts/whatsapp')

@section('title', 'WhatsApp')

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
                  <center><img src="form09/images/whatsapp50.png" class="mb-3"></center>
                  <center><h4>Hantar Mesej <strong>Rahsia</strong></h4><p class="mb-4">Borang ini hanya untuk menghantar pesanan melalui api WhatsApp.</p></center>
                  
                  
                </div>
                <form action="/whatsapp/decrypt" method="post">
                    @csrf
                  <div class="form-group first">
                    <label for="username">Nombor WhatsApp</label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" name="contact" id="contact">
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                  </div>
                  
                  <div class="form-group first">
                    <label for="username">Secret Key</label>
                    <input type="text" class="form-control @error('secret_key') is-invalid @enderror" value="{{ old('secret_key') }}" name="secret_key" id="secret_key" required>
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                  </div>
				  
                  <div class="form-group first mb-4">
                    <label for="password">Pesanan</label>
                    <textarea name="message" id="message" class="form-control" rows="3">{{ old('message') }}</textarea>
                    @error('message')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror                  
                  </div>

              

                  <input type="submit" value="Hantar Mesej" class="btn btn-pill text-white btn-block btn-success">

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