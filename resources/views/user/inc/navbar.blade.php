<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-main-outer">
      <div class="rd-navbar-main">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel">
          <!-- RD Navbar Toggle-->
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
          <!-- RD Navbar Brand-->
          <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo.svg" alt=""/><img class="brand-logo-light" src="images/logo-inverse-143x26.png" alt="" srcset="images/logo-inverse-286x52.png 2x"/></a>
          </div>
        </div>
        <div class="rd-navbar-main-element">
          <div class="rd-navbar-nav-wrap">
            <!-- RD Navbar Nav-->
            <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="/">Home</a>

                </li>
                
                <li class="rd-nav-item"><a class="rd-nav-link" href="/companies">Attempt Company Tests</a>

              </li>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="/materials">Material</a>
                     <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="/materials">Gate Study Material</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Aptitude Tests</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Free Company Mock Tests</a></li>
                </ul>

              </li>
                 <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blogs</a>

              </li>

             
            </ul>
          </div>
        </div>
        <div class="rd-navbar-aside">

          @guest
          <div class="rd-navbar-aside-item">
            <button class="button button-xs button-primary-outline button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-register">Sign Up</button>
            <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-register">
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
            </div>
          </div>
          <div class="rd-navbar-aside-item">
            <button class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-login">Login</button>
            <div class="rd-navbar-popup bg-gray-100" id="rd-navbar-login">
              <h5 class="rd-navbar-popup-title">Login</h5>
               <form method="POST" action="{{ route('login') }}" class="">
                            @csrf
                <div class="form-wrap">
                  
                  <input id="rd-navbar-login-email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                  <label class="form-label" for="rd-navbar-login-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  
                  
                  <input id="rd-navbar-login-password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  
                  <label class="form-label" for="rd-navbar-login-password">Password</label>
                </div>
                <div class="form-wrap">
                

                  <button type="submit" class="button button-block button-primary">
                        {{ __('Login') }}
                    </button>
                </div>
              </form>
            </div>
          </div>
          @else 
          <div class="rd-navbar-aside-item">
                  
              
              <ul class="">

              <li class="rd-nav-item "><a class="rd-nav-link" href="/home"><p class="button button-xs button-primary button-icon button-icon-left rd-navbar-popup-toggle" data-rd-navbar-toggle="#rd-navbar-login">{{auth()->user()->name}}</p></a>
                <ul class="rd-menu rd-navbar-dropdown">
             <li class="rd-dropdown-item"><a class="rd-dropdown-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
              </li>
              </ul>
            </div>
          @endguest
        </div>
      </div>
    </div>
  </nav>