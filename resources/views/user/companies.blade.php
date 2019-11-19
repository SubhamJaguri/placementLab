@extends('user.layouts.app')
 
@section('content')
      <!-- content start -->

      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Work in the Company of your choice</h3>
          </div>
        </div>

      </section>
      <section class="section section-md">
        <div class="container">

            <div class="row row-50 flex-lg-row-reverse">
            <div class="col-lg-4 col-xl-3">
              <div class="row row-30">
                <div class="col-md-4 col-lg-12">
                  <p class="heading-8">Latest activity</p>
                  <hr>
                  <ul class="list list-xs">
                    <li>
                      <label class="checkbox">
                        <input name="activity-checkbox-1" value="checkbox-1" type="checkbox">Most Attempted
                      </label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input name="activity-checkbox-2" value="checkbox-2" type="checkbox">Category 1
                      </label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input name="activity-checkbox-3" value="checkbox-3" type="checkbox">Category 2
                      </label>
                    </li>
                    <li>
                      <label class="checkbox">
                        <input name="activity-checkbox-4" value="checkbox-4" type="checkbox">Category 3
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4 col-lg-12">

                </div>
              </div>
            </div>
            <div class="col-lg-8 col-xl-9">
              <div class="row row-40">
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="companies-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt=""/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">Accenture</h5>

                    </div></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="companies-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt="company-logo"/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">Kevin Parker</h5>

                    </div></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="companies-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt="company-logo"/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">Sandy Williams</h5>
           </div></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="companies-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt=""/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">James Johnson</h5>

                    </div></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="companies-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt=""/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">Ann Lee</h5>

                    </div></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4">
                  <!-- Profile Classic-->
                  <a class="profile-classic" href="resume-page.html">
                    <figure class="profile-classic-figure"><img class="profile-classic-image" src="https://www.foodcycle.org.uk/wp-content/uploads/2016/08/accenture-logo.gif" alt=""/>
                    </figure>
                    <div class="profile-classic-main">
                      <h5 class="profile-classic-name">Sam Smith</h5>

                    </div></a>
                </div>
              </div>
              <!-- Bootstrap Pagination-->
              <nav class="pagination-outer text-center" aria-label="Page navigation">
                <div class="pagination">
                  <div class="page-item page-item-control"><a class="page-link" href="#" aria-label="Previous">Prev</a></div>
                  <div class="page-item"><a class="page-link" href="#">1</a></div>
                  <div class="page-item"><a class="page-link" href="#">2</a></div>
                  <div class="page-item active"><span class="page-link">3</span></div>
                  <div class="page-item"><a class="page-link" href="#">4</a></div>
                  <div class="page-item page-item-control"><a class="page-link" href="#" aria-label="Next">Next</a></div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </section>
@endsection
