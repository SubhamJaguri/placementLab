@extends('user.layouts.app')

@section('content')
<section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Login</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Home</a></li>
              <li><a href="#">Login</a></li>
            </ul>
          </div>
        </div>
      </section>


      <section class="section section-md text-center">
          <div class="container text-center">
            <h2>Login</h2>
            <h5 class="text-gray-500"><span style="max-width: 670px;"></span></h5>
          </div>
          <div class="container">
            <div class="block-1">
              <h4>Enter your credentials</h4>
              <div class="group-justify"><a class="button button-sm button-facebook button-icon button-icon-left" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-sm button-twitter button-icon button-icon-left" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-sm button-google button-icon button-icon-left" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
              <div class="text-decoration-lines"><span class="text-decoration-lines-content">or</span></div>
              <!-- RD Mailform-->
        
                  <form method="POST" action="{{ route('login') }}" class="rd-form rd-mailform form-centered form-filled">
                      @csrf
                <div class="form-wrap">
                  
                  <input id="" type="email" placeholder="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                  
                </div>
                <div class="form-wrap">
                    <input id="" type="password" placeholder="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 
                </div>
                
                <div class="row row-15 row-x-14">
                  
                    
                    <button type="submit" class="button button-block button-primary">
                        {{ __('Login') }}
                    </button>
                  
                  
                </div>
              </form>
            </div>
          </div>
        </section>
     

      

@endsection
