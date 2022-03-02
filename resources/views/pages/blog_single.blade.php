@extends('layout.layout')

@section('ceo_name', $article->seo_name)

@section('title','Конкретная новость')

@section('content')
    <main>
        <div class="page-section pt-5">
            <div class="container">
                <nav aria-label="Breadcrumb">
                    <div class="custom-class">
                        {{Breadcrumbs::render('article',$article)}}
                    </div>
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
                                        <a href="#" class="btn social-facebook"><span
                                                class="mai-logo-facebook-f"></span></a>
                                        <a href="#" class="btn social-twitter"><span
                                                class="mai-logo-twitter"></span></a>
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
                  </span> <a href="#">{{$date->day}} {{$date->translatedFormat('F')}}, {{$date->year}}, {{$date->format('H:i')}}</a>
                                </div>
                                <div class="post-comment-count ml-2">
                                </div>
                            </div>
                            <div class="post-content">
                                <blockquote class="quote">{!! $article->paragraph !!}
                                    <span class="author">― {{$article->name}}</span></blockquote>
                            </div>
                        </div>

                        <div class="comment-form-wrap pt-5">
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="widget">

                            <!-- Widget Categories -->
{{--                            <div class="widget-box">--}}
{{--                                <h4 class="widget-title">Category</h4>--}}
{{--                                <div class="divider"></div>--}}

{{--                                <ul class="categories">--}}
{{--                                    <li><a href="#">LifeStyle</a></li>--}}
{{--                                    <li><a href="#">Food</a></li>--}}
{{--                                    <li><a href="#">Healthy</a></li>--}}
{{--                                    <li><a href="#">Sports</a></li>--}}
{{--                                    <li><a href="#">Entertainment</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

                        </div>
                        <!-- Widget Tag Cloud -->
                        <div class="widget-box">
                            <h4 class="widget-title">Тэги</h4>
                            <div class="divider"></div>
                            <div class="tag-clouds">
                                @foreach($allTags as $tag)
                                    @if($tagsForPost->contains($tag))
                                        <li class="tag-cloud-link" style="margin-right: 5px; }}"> {{$tag->title}}</li>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section bg-light">
            <div class="container">

                <div class="owl-carousel wow fadeInUp" id="testimonials">
                    @foreach(json_decode($article->images) as $image)
                        <div class="item">
                            <div class="row align-items-center">
                                <div class="col-md-6 py-3">
                                    <div class="testi-image">
                                        <img width="90px" src="{{ asset('storage') }}/{{$image}}" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-6 py-3">
                                    <div class="testi-content">
                                        <p>Necessitatibus ipsum magni accusantium consequatur delectus a repudiandae nemo
                                            quisquam dolorum itaque, tenetur, esse optio eveniet beatae explicabo sapiente
                                            quo.</p>
                                        <div class="entry-footer">
                                            <strong>Melvin Platje</strong> &mdash; <span
                                                class="text-grey">CEO Slurin Group</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

    </main>
@endsection
