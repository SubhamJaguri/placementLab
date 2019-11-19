<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href={{asset("images/favicon.ico")}} type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400%7CUbuntu:300,400,500,600,700">
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("css/fonts.css")}}>
    <link rel="stylesheet" href={{asset("css/style.css")}}>
      <link rel="stylesheet" href={{asset("css/custom.css")}}>
      
      <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.9.32/">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

      
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"> <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src={{asset("images/ie8-panel/warning_bar_0000_us.jpg")}} height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body"> 
        <div class="preloader-item">
          <svg width="40" height="40" viewbox="0 0 40 40">
            <polygon class="rect" points="0 0 0 40 40 40 40 0"></polygon>
          </svg>
        </div>
      </div>
    </div>
    @include('inc.messages')
    <div class="page">
        
      <!-- Page Header-->
      <header class="section page-header <?php echo Request::is('/') ?  "jumbotron-creative" :  "" ?> ">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          @include('user.inc.navbar')
        </div>
         <!-- Showcase for index page only -->
         @if(Request::is('/'))
          @include('user.inc.showcase')
         @endif
      </header>
      <!-- Welcome to JobsFactory-->
     
      @yield('content')

      <!-- Page Footer-->
      @include('user.inc.footer')
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src={{asset("js/core.min.js")}}></script>
    <script src={{asset("js/script.js")}}></script>
	
	<!--LIVEDEMO_00 -->

	
  </body><!-- Google Tag Manager -->
</html>