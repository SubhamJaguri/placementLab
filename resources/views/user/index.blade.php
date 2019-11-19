@extends('user.layouts.app')

@section('content')
<section class="section section-md bg-default text-center">
    <div class="container">
      <h3>Welcome to <span class="text-primary">Pro</span>clis TestPlace</h3>
      <p class="text-spacing-05">A place where leading employers are already looking for your talent and experience.</p>
      <div class="row row-50 justify-content-center align-items-center text-left">
        <div class="col-md-10 col-lg-6">
          <figure class="figure-responsive block-5"><img src="images/home-2-540x413.jpg" alt=""/>
          </figure>
        </div>
        <div class="col-md-10 col-lg-6">
          <div class="row row-50 row-xl-70">
            <div class="col-sm-6">
              <!-- Box Line-->
              <article class="box-line box-line_sm">
                <div class="box-line-inner">
                  <div class="fl-bigmug-line-paper122" style="font-size: 50px;color: #008AE4"></div>
                  <h5 class="box-line-title">More than 3.8 million visitors every day</h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6">
              <!-- Box Line-->
              <article class="box-line box-line_sm">
                <div class="box-line-inner">
                 <div class="fl-bigmug-line-trophy55" style="font-size: 50px;color: #008AE4"></div>
                  <h5 class="box-line-title">Leading website to find your best Job</h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6">
              <!-- Box Line  -->
              <article class="box-line box-line_sm">
                <div class="box-line-inner">
                  <div class="fl-bigmug-line-portfolio23" style="font-size: 50px;color: #008AE4"></div>
                  <h5 class="box-line-title">24/7 Dedicated and Support</h5>
                </div>
              </article>
            </div>
            <div class="col-sm-6">
              <!-- Box Line-->
              <article class="box-line box-line_sm">
                <div class="box-line-inner">
                  <div class="fl-bigmug-line-hot67" style="font-size: 50px;color: #008AE4"></div>
                  <h5 class="box-line-title">Only relevant and verified vacancies </h5>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Jobs-->
  <section class="section parallax-container section-md bg-primary bg-overlay-1 text-center">
    <div class="parallax-content">
      <div class="container container-fullwidth">
        <h3>Companies We've Helped</h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-carousel-stretch" data-autoplay="true" data-autoplay-timeout="4000" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="5" data-xxl-items="6" data-dots="true" data-nav="false" data-stage-padding="2" data-loop="false" data-margin="30" data-mouse-drag="false"><a class="link-corporate" href="#"><img src="images/brand-1-inverse-183x44.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-2-inverse-118x82.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-3-inverse-137x39.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-4-inverse-133x77.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-5-inverse-153x30.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-6-inverse-90x68.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-7-inverse-112x43.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-8-inverse-126x22.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-9-inverse-158x33.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-10-inverse-137x37.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-11-inverse-84x59.png" alt=""/></a><a class="link-corporate" href="#"><img src="images/brand-12-inverse-116x51.png" alt=""/></a></div>
      </div>
    </div>
  </section>
  <section class="section section-sm bg-default">
    <div class="container">
      <h3 class="text-center">Recently We Placed</h3>
      <div class="owl-carousel owl-carousel-profile" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-fade="true" data-margin="30" data-mouse-drag="false">
        <!-- Profile Classic--><a class="profile-classic" href="resume-page.html">
          <figure class="profile-classic-figure"><img class="profile-classic-image" src="images/candidates-grid-1-266x219.jpg" alt=""/>
          </figure>
          <div class="profile-classic-main">
            <h5 class="profile-classic-name">Amanda Cook</h5>
            <ul class="profile-classic-list">
              <li><span class="icon mdi mdi-map-marker"></span><span>Los Angeles, California</span></li>
              <li><span class="icon mdi mdi-account"></span><span>Junior Web Designer</span></li>
            </ul>
          </div></a>
        <!-- Profile Classic--><a class="profile-classic" href="resume-page.html">
          <figure class="profile-classic-figure"><img class="profile-classic-image" src="images/candidates-grid-2-266x219.jpg" alt=""/>
          </figure>
          <div class="profile-classic-main">
            <h5 class="profile-classic-name">Kevin Parker</h5>
            <ul class="profile-classic-list">
              <li><span class="icon mdi mdi-map-marker"></span><span>Seattle, Washington</span></li>
              <li><span class="icon mdi mdi-account"></span><span>HR Manager</span></li>
            </ul>
          </div></a>
        <!-- Profile Classic--><a class="profile-classic" href="resume-page.html">
          <figure class="profile-classic-figure"><img class="profile-classic-image" src="images/candidates-grid-3-266x219.jpg" alt=""/>
          </figure>
          <div class="profile-classic-main">
            <h5 class="profile-classic-name">Sandy Williams</h5>
            <ul class="profile-classic-list">
              <li><span class="icon mdi mdi-map-marker"></span><span>Miami, Florida</span></li>
              <li><span class="icon mdi mdi-account"></span><span>Sales Manager</span></li>
            </ul>
          </div></a>
        <!-- Profile Classic--><a class="profile-classic" href="resume-page.html">
          <figure class="profile-classic-figure"><img class="profile-classic-image" src="images/candidates-grid-4-266x219.jpg" alt=""/>
          </figure>
          <div class="profile-classic-main">
            <h5 class="profile-classic-name">James Johnson</h5>
            <ul class="profile-classic-list">
              <li><span class="icon mdi mdi-map-marker"></span><span>Boston, Massachusetts</span></li>
              <li><span class="icon mdi mdi-account"></span><span>Programmer</span></li>
            </ul>
          </div></a>
      </div>
    </div>
  </section>
  <!-- Success Stories-->
  <section class="section parallax-container section-md bg-primary bg-overlay-1 text-center" data-parallax-img="images/bg-image-7.jpg">
    <div class="parallax-content">
      <div class="container">
        <h3>Success Stories </h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="false" data-margin="30" data-autoplay="true" data-mouse-drag="false">
          <blockquote class="quote-mary">
            <div class="quote-mary-main">
              <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
              </svg>
              <div class="quote-mary-text">
                <p>If I didn’t find Proclis Placements I’m pretty sure I’d be nowhere, they helped me find a job in less than 2 days and the job is amazing. Thank you!</p>
              </div>
            </div>
            <div class="quote-mary-meta"><img class="quote-mary-avatar" src="images/user-2-73x73.jpg" alt=""/>
              <div class="quote-mary-info">
                <cite class="quote-mary-cite heading-5">Shirmati Rao</cite>
                <p class="quote-mary-subtitle">Marketing Director</p>
              </div>
            </div>
          </blockquote>
          <blockquote class="quote-mary">
            <div class="quote-mary-main">
              <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
              </svg>
              <div class="quote-mary-text">
                <p>Within a couple of days after posting a CV, I had possible employers contacting me. After several interviews, I decided to accept a position located nearby.</p>
              </div>
            </div>
            <div class="quote-mary-meta"><img class="quote-mary-avatar" src="images/user-1-73x73.jpg" alt=""/>
              <div class="quote-mary-info">
                <cite class="quote-mary-cite heading-5">Walter Williams</cite>
                <p class="quote-mary-subtitle">HR Managers</p>
              </div>
            </div>
          </blockquote>
          <blockquote class="quote-mary">
            <div class="quote-mary-main">
              <svg class="quote-mary-mark" version="1.1" x="0px" y="0px" viewbox="0 0 36 28" width="38" height="28">
                <path d="M13,0l-2.4,13.3H15V28H0V13.1L4,0H13z M34,0l-2.4,13.3H36V28H20.9V13.1L25,0H34z"></path>
              </svg>
              <div class="quote-mary-text">
                <p>I found a job as a Web Developer and applied through my iPhone with the JobsFactory website! It’s very easy to search for jobs and apply here!</p>
              </div>
            </div>
            <div class="quote-mary-meta"><img class="quote-mary-avatar" src="images/user-4-73x73.jpg" alt=""/>
              <div class="quote-mary-info">
                <cite class="quote-mary-cite heading-5">Julia Smith</cite>
                <p class="quote-mary-subtitle">Web Developer</p>
              </div>
            </div>
          </blockquote>
        </div>
      </div>
    </div>
  </section>
    <br>
  <!-- Steps-->
  <section class="section section-md bg-default text-center">
    <div class="container">
      <h3>Just 3 Easy Steps to New Capabilities</h3>
      <ul class="list-linked">
        <li class="ll-item">
          <div class="icon ll-item-icon mercury-icon-globe-marker">
            <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
              <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
            </svg>
          </div>
          <div class="ll-item-main">
            <h5 class="ll-item-title"><a href="job-listing.html">Select Company</a></h5>
            <p>Easy search by company name</p>
          </div>
        </li>
        <li class="ll-item">
          <div class="icon ll-item-icon mercury-icon-target-2">
            <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
              <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
            </svg>
          </div>
          <div class="ll-item-main">
            <h5 class="ll-item-title"><a href="job-details.html">Attempt Test</a></h5>
            <p>Choose the right skillset</p>
          </div>
        </li>
        <li class="ll-item">
          <div class="icon ll-item-icon ll-item-icon-sm mercury-icon-case   ">
            <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
              <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
            </svg>
          </div>
          <div class="ll-item-main">
            <h5 class="ll-item-title"><a href="submit-resume.html">Get Ranked</a></h5>
            <p>Get a personal job offer</p>
          </div>
        </li>
        <li class="ll-item">
          <div class="icon ll-item-icon mercury-icon-touch">
            <svg class="ll-item-icon-inner" version="1.2" baseProfile="tiny" viewbox="-1 -1 102 102">
              <circle cx="50" cy="50" r="50" fill="none" vector-effect="non-scaling-stroke"></circle>
            </svg>
          </div>
          <div class="ll-item-main"><a class="button button-sm button-primary-outline" href="job-listing.html">Start Now</a></div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Latest Posts-->
  <section class="section section-md bg-gray-100">
    <div class="container">
      <h3 class="text-center">Latest Posts</h3>
      <div class="row row-30 row-xl-70">
        <div class="col-12 col-lg-4">
          <!-- Post Minimal-->
          <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-1-369x253.jpg" alt=""/></a>
            <div class="post-minimal-main">
              <h5 class="post-minimal-title"><a href="blog-post.html">8 Surprising Predictions About the Future of Work</a></h5>
              <p>There’s no denying that the landscape of work is changing. More and more companies are adopting flexible work policies</p>
              <time class="post-minimal-time" datetime="2018">November 23, 2018</time>
            </div>
          </article>
        </div>
        <div class="col-12 col-lg-4">
          <!-- Post Minimal-->
          <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-2-369x253.jpg" alt=""/></a>
            <div class="post-minimal-main">
              <h5 class="post-minimal-title"><a href="blog-post.html">Job Search Success: Finding a Business Development Job</a></h5>
              <p>Business development professionals are at the heart of all sorts of organizations, from startups to multinational corporations.</p>
              <time class="post-minimal-time" datetime="2018">November 23, 2018</time>
            </div>
          </article>
        </div>
        <div class="col-12 col-lg-4">
          <!-- Post Minimal-->
          <article class="post-minimal"><a class="post-minimal-media" href="blog-post.html"><img class="post-minimal-image" src="images/blog-3-369x253.jpg" alt=""/></a>
            <div class="post-minimal-main">
              <h5 class="post-minimal-title"><a href="blog-post.html">How to Impress Your Future Employer</a></h5>
              <p>You’re committed to your job search, and you use every ounce of your free time you have to comb through listings, write cover</p>
              <time class="post-minimal-time" datetime="2018">November 23, 2018</time>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>


  @endsection