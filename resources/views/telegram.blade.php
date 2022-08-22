@extends('layouts/whatsapp')

@section('title', 'Telegram')

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
                  <center><img src="form09/images/telegram50.png" class="mb-2"></center>
                  <center><h3>Hantar Mesej ke <strong>Telegram</strong></h3><p class="mb-4">Sila isikan maklumat yang tepat untuk mengelakkan kegagalan pihak kami memberikan maklum balas kepada anda!.</p></center>
                  
                  
                </div>
                <form action="/telegram/curl-telegram" method="post">
                    @csrf
                  <div class="form-group first">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror 
                  </div>
                  
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                  </div>    

                  <div class="form-group first">
                    <label for="contact">No Telefon Bimbit</label>
                    <input type="text" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" name="contact" id="contact">
                                        @error('contact')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                  
                  </div>     

                  <div class="form-group first">
                    <label for="Telegram">Telegram Bot/Username e.g. @ahmad &nbsp;*boleh diabaikan jika tiada</label>
                    <input type="text" class="form-control @error('userbot') is-invalid @enderror" value="{{ old('userbot') }}" name="userbot" id="userbot">
                                        @error('userbot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                  </div>                                     

                  <div class="form-group first mb-4">
                    <label for="message">Pesanan</label>
                    <textarea name="message" id="message" class="form-control" rows="3">{{ old('message') }}</textarea>
                    @error('message')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror                     
                  </div>
                  

                  <input type="submit" value="Hantar Mesej" class="btn btn-pill text-white btn-block btn-primary telegram">

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