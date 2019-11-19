@extends('user.layouts.app')

@section('content')
<section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Register</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Register</a></li>
            </ul>
          </div>
        </div>
      </section>


      <h5 class="rd-navbar-popup-title">Sign Up</h5>
              <form class="rd-form form-compact"   method="POST" action="{{ route('register') }}">
                 @csrf
                <div class="form-wrap">
                  
                  <input id="rd-navbar-register-name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                  <label class="form-label" for="rd-navbar-register-name">Name</label>
                </div>
                <div class="form-wrap">
                        
                        <input id="rd-navbar-register-username" type="text" class="form-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                       
                        <label class="form-label" for="rd-navbar-register-username">Username</label>
                      </div>
                <div class="form-wrap">
                  
                  <input id="rd-navbar-register-email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                  
                  <label class="form-label" for="rd-navbar-register-email">E-mail</label>
                </div>
                <div class="form-wrap">
                
                  <input id="rd-navbar-register-password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                 
                  <label class="form-label" for="rd-navbar-register-password">Password</label>
                </div>
                <div class="form-wrap">
                  
                  <input id="rd-navbar-register-password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                  <label class="form-label" for="rd-navbar-register-password-confirm">Confirm Password </label>
                </div>
                <div class="form-wrap">
                 
                  <button type="submit" class="button button-block button-primary">
                        {{ __('Register') }}
                    </button>
                
                </div>
      </form>
      <br>

@endsection
