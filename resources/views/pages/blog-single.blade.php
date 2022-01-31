@extends('layout.layout')
@section('title','Конкретная новость')
@section('content')
  <main>
    <div class="page-section pt-5">
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb p-0 mb-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
            <li class="breadcrumb-item active">Second divided from form fish beastr</li>
          </ul>
        </nav>

        <div class="row">
          <div class="col-lg-8">
            <div class="blog-single-wrap">
              <div class="header">
                <div class="post-thumb">
                  <img src="{{asset('/storage')}}/{{$article->background}}" alt="">
                </div>
                <div class="meta-header">
                  <div class="post-author">
                    <div class="avatar">
                      <img src="{{asset('img/person/person_1.jpg')}}" alt="">
                    </div>
                    by <a href="#">{{$article->name}}</a>
                  </div>

                  <div class="post-sharer">
                    <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                    <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                    <a href="#" class="btn"><span class="mai-mail"></span></a>
                  </div>
                </div>
              </div>
              <h1 class="post-title">{{$article->name}}</h1>
              <div class="post-meta">
                <div class="post-date">
                  <span class="icon">
                    <span class="mai-time-outline"></span>
                  </span> <a href="#">{{$article->created_at}}</a>
                </div>
                <div class="post-comment-count ml-2">
                </div>
              </div>
              <div class="post-content">
                <blockquote class="quote">{{$article->paragraph}}
                <span class="author">― {{$article->name}}</span></blockquote>
              </div>
            </div>

            <div class="comment-form-wrap pt-5">
            </div>

          </div>
          <div class="col-lg-4">
            <div class="widget">
              <!-- Widget search -->
              <div class="widget-box">
                <form action="#" class="search-widget">
                  <input type="text" class="form-control" placeholder="Enter keyword..">
                  <button type="submit" class="btn btn-primary btn-block">Search</button>
                </form>
              </div>

              <!-- Widget Categories -->
              <div class="widget-box">
                <h4 class="widget-title">Category</h4>
                <div class="divider"></div>

                <ul class="categories">
                  <li><a href="#">LifeStyle</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Healthy</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Entertainment</a></li>
                </ul>
              </div>

              <!-- Widget recent post -->
              <div class="widget-box">
                <h4 class="widget-title">Recent Post</h4>
                <div class="divider"></div>

                <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog-1.jpg" alt="">
                    </a>
                    <div class="content">
                      <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                </div>

                <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog-2.jpg" alt="">
                    </a>
                    <div class="content">
                      <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                </div>

                <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog-3.jpg" alt="">
                    </a>
                    <div class="content">
                      <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                </div>

              </div>

              <!-- Widget Tag Cloud -->
              <div class="widget-box">
                <h4 class="widget-title">Tag Cloud</h4>
                <div class="divider"></div>

                <div class="tag-clouds">
                  <a href="#" class="tag-cloud-link">Projects</a>
                  <a href="#" class="tag-cloud-link">Design</a>
                  <a href="#" class="tag-cloud-link">Travel</a>
                  <a href="#" class="tag-cloud-link">Brand</a>
                  <a href="#" class="tag-cloud-link">Trending</a>
                  <a href="#" class="tag-cloud-link">Knowledge</a>
                  <a href="#" class="tag-cloud-link">Food</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
@endsection
