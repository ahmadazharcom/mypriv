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
                  <center><img src="form09/images/whatsapp50.png" class="mb-2"></center>
                  <center><h3>Hantar Mesej ke <strong>WhatsApp</strong></h3><p class="mb-4">Sila lengkapkan borang dibawah ini suapaya kami dapat menerima pesanan dari anda dengan sempurna.</p></center>
                  
                  
                </div>
                <form action="/api/chat-bot" method="post">
                    @csrf
                  <div class="form-group first">
                    <label for="username">Nama</label>
                    <input type="text" class="form-control @error('Body') is-invalid @enderror" value="{{ old('name') }}" name="Body" id="Body">
                                        @error('Body')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                  </div>
                  <input type="hidden" name="From" value="+14155238886">
   

                   

                  

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