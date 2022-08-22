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
                  <center><h3>Hantar Mesej Keluar ke <strong>Telegram</strong></h3><p class="mb-4">Borang ini hanya untuk menghantar pesanan melalui api Telegram.</p></center>
                  
                  
                </div>
                <form action="/telegram/telegram_out" method="post">
                    @csrf 
    
                  <div class="form-group first">
                    <label for="Telegram">Telegram Bot/Username e.g. ahmad, ahmadbot</label>
                    <input type="text" class="form-control @error('userbot') is-invalid @enderror" value="{{ old('userbot') }}" name="userbot" id="userbot">
                                        @error('userbot')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
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