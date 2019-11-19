@extends('user.layouts.app')
 
@section('content')
      <!-- content start -->
      <section class="section breadcrumbs-custom">
        <div class="breadcrumbs-custom-main bg-image bg-primary">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Gate Materials</h3>
          </div>
        </div>
        <div class="breadcrumbs-custom-aside">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Home</a></li>
              <li class="active">materials</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 row-xl-70">
                @if(count($posts) > 0 )
                   @foreach($posts as $post)
                        <div class="col-sm-6 col-lg-4">
                                <article class="post-classic"><a class="post-classic-media" href="/materials/{{$post->id}}"><img class="post-classic-image" src="/storage/cover_images/{{$post->cover_image}}" alt="" width="369" height="253"/></a>
                                <h4 class="post-classic-title"><a href="/materials/{{$post->id}}">{{$post->title}}</a></h4>
                                <time class="post-classic-time" datetime="2019">{{$post->created_at}}</time>
                                <div class="post-classic-text">
                                    <p>{{$post->assert}} </p>
                                </div>
                                
                                </article>
                        </div>
                  @endforeach
            
          </div>
          <!-- Bootstrap Pagination-->
          <br>
          <nav class="pagination-outer text-center" aria-label="Page navigation">
          {{$posts->links()}}
          </nav>
          @else
                           <h3 > No posts found </h3>
                    @endif
                    
        </div>
      </section>

@endsection
