@extends('user.layouts.app')
 
@section('content')
      <!-- content start -->
      <section class="section breadcrumbs-custom">
            <div class="breadcrumbs-custom-main bg-image bg-primary">
              <div class="container">
                <h3 class="breadcrumbs-custom-title">{{$post->title}}</h3>
              </div>
            </div>
            <div class="breadcrumbs-custom-aside">
              <div class="container">
                <ul class="breadcrumbs-custom-path">
                  <li><a href="/">Home</a></li>
                  <li class="active">{{$post->title}}</li>
                </ul>
              </div>
            </div>
          </section>
          <section class="section section-md">
            <div class="container">
              <div class="blog-layout">
                <div class="blog-layout-main">
                  <article class="post-creative"><img class="post-creative-image" src={{asset("/storage/cover_images/$post->cover_image")}} alt="" width="768" height="475"/>
                    <div class="post-creative-meta">
                      <div class="post-creative-meta-inner">
                        <div class="post-creative-author"><img class="post-creative-author-image" src={{asset("images/user-1-36x36.jpg")}} alt="" width="36" height="36"/>
                          <p>
                             by&nbsp;<a href="#">{{$post->user->name}}</a></p>
                        </div>
                        <div>
                          <ul class="post-creative-meta-list">
                            <li> <span class="icon mdi mdi-clock"> </span>
                              <time datetime="2019">{{$post->created_at}}</time>
                            </li>
                            <li><span class="icon fl-justicons-visible6"></span><span>3678 </span></li>
                            <li><span class="icon mdi mdi-message-outline"></span><span>3</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    {!!$post->body!!}
                    <div class="post-creative-footer">
                      <div class="post-creative-footer-inner">
                        <p>Share this post</p>
                        <div>
                          <ul class="list-inline list-inline-xs">
                            <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-google-plus" href="#"></a></li>
                            <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-xxs icon-filled icon-filled-brand icon-circle fa fa-pinterest-p" href="#"></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </article>
                  <div class="section-sm section-first">
                    <p class="blog-layout-title text-center">Recent Posts</p>
                    <div class="row row-30">
                      <div class="col-sm-6">
                        <article class="post-classic"><a class="post-classic-media" href="#"><img class="post-classic-image" src={{asset("images/blog-2-369x253.jpg")}} alt="" width="369" height="253"/></a>
                          <h4 class="post-classic-title"><a href="blog-post.html">Job Search Success: Finding a Business Development Job</a></h4>
                          <time class="post-classic-time" datetime="2019">November 23, 2019</time>
                          <div class="post-classic-text">
                            <p>Business development professionals are at the heart of all sorts of organizations, from startups to</p>
                          </div>
                          
                        </article>
                      </div>
                      <div class="col-sm-6">
                        <article class="post-classic"><a class="post-classic-media" href="#"><img class="post-classic-image" src={{asset("images/blog-3-369x253.jpg")}} alt="" width="369" height="253"/></a>
                          <h4 class="post-classic-title"><a href="blog-post.html">How to Impress Your Future Employer</a></h4>
                          <time class="post-classic-time" datetime="2019">November 23, 2019</time>
                          <div class="post-classic-text">
                            <p>You’re committed to your job search, and you use every ounce of your free time you have to comb</p>
                          </div>
                          
                        </article>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <div class="blog-layout-aside">
                  <div class="blog-layout-aside-item"> 
                    <!-- RD Search-->
                    <form class="rd-form rd-search rd-search-classic form-lg form-filled" action="search-results.html" method="GET">
                      <div class="form-wrap">
                        <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                        <label class="form-label" for="rd-search-form-input">Search the blog...</label>
                      </div>
                      <button class="rd-search-submit" type="submit"></button>
                    </form>
                  </div>
                  <div class="blog-layout-aside-item">
                    <p class="blog-layout-title">Category</p>
                    <ul class="list-categories">
                      <li class="active"><a href="/materials"> <span>Gate Preparation Materials</span><span> 12</span></a></li>
                      
                    </ul>
                  </div>
                  
                  <div class="blog-layout-aside-item">
                    <p class="blog-layout-title">Newsletter</p>
                    <p>Enter your e-mail to get the latest news. </p>
                    <!-- Rd Mailform-->
                    <form class="rd-form rd-mailform form-centered" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-email">Your e-mail address...</label>
                      </div>
                      <div class="form-button">
                        <button class="button button-block button-primary" type="submit" aria-label="subscribe">Subscribe</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>

@endsection
