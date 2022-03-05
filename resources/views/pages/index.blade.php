@extends('layout.layout')
@section('title', 'Главная')
@section('content')
    <main>
        <div class="page-banner home-banner">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1 class="mb-4">{{$homeTitle->heading}}</h1>
                        <p class="text-lg mb-5">Ignite the most powerfull growth engine you have ever built for your
                            company</p>

                         <a href="#" class="btn btn-outline border text-secondary">{!! $homeTitle->paragraph !!}</a>
                        <a href="#" class="btn btn-primary btn-split ml-2">Watch Video
                            <div class="fab"><span class="mai-play"></span></div>
                        </a>
                    </div>
                    <div class="col-lg-6 py-3 wow zoomIn">
                        <div class="img-place">
                            <img src="{{asset('storage/')}}/{{$homeTitle->image}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-section features">
            <div class="container">
                <div class="row justify-content-center">
                    @forelse($homeBanner as $item)
                        <div class="col-md-6 col-lg-4 py-3 wow fadeInUp">
                            <div class="d-flex flex-row">
                                <div class="img-fluid mr-3">
                                    <img src="{{asset('storage/')}}/{{$item->image}}" alt="">
                                </div>
                                <div>
                                    <h5>{{$item->heading}}</h5>
                                    <p>{!!$item->paragraph!!}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 py-3 wow zoomIn">
                        <div class="img-place text-center">
                            <img src="{{asset('img/bg_image_2.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInRight">
                        <h2 class="title-section">We're <span class="marked">Dynamic</span> Team of Creatives People
                        </h2>
                        <div class="divider"></div>
                        <p>We provide marketing services to startups & small business to looking for partner for their
                            digital media, design & dev lead generation & communication.</p>
                        <div class="img-place mb-3">
                            <img src="{{asset('img/testi_image.png')}}" alt="">
                        </div>
                        <a href="#" class="btn btn-primary">More Details</a>
                        <a href="#" class="btn btn-outline border ml-2">Success Stories</a>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section counter-section">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-4">
                        <p>Total Invest</p>
                        <h2>$<span class="number" data-number="816278"></span></h2>
                    </div>
                    <div class="col-lg-4">
                        <p>Yearly Revenue</p>
                        <h2>$<span class="number" data-number="216422"></span></h2>
                    </div>
                    <div class="col-lg-4">
                        <p>Growth Ration</p>
                        <h2><span class="number" data-number="73"></span>%</h2>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 py-3 wow fadeInLeft">
                        <h2 class="title-section">We're <span class="marked">ready to</span> Serve you with best</h2>
                        <div class="divider"></div>
                        <p class="mb-5">We provide marketing services to startups & small business to looking for
                            partner for their digital media, design & dev lead generation & communication.</p>
                        <a href="#" class="btn btn-primary">More Details</a>
                        <a href="#" class="btn btn-outline ml-2">See pricing</a>
                    </div>
                    <div class="col-lg-6 py-3 wow zoomIn">
                        <div class="img-place text-center">
                            <img src="{{asset('img/bg_image_3.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <div class="subhead">Why Choose Us</div>
                    <h2 class="title-section">Your <span class="marked">Comfort</span> is Our Priority</h2>
                    <div class="divider mx-auto"></div>
                </div>

                <div class="row mt-5 text-center">
                    <div class="col-lg-4 py-3 wow fadeInUp">
                        <div class="display-3"><span class="mai-shapes"></span></div>
                        <h5>High Performance</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                    </div>
                    <div class="col-lg-4 py-3 wow fadeInUp">
                        <div class="display-3"><span class="mai-shapes"></span></div>
                        <h5>Friendly Prices</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                    </div>
                    <div class="col-lg-4 py-3 wow fadeInUp">
                        <div class="display-3"><span class="mai-shapes"></span></div>
                        <h5>No time-confusing</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h2 class="title-section">Get in Touch</h2>
                        <div class="divider"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem
                            veritatis!</p>

                        <ul class="contact-list">
                            <li>
                                <div class="icon"><span class="mai-map"></span></div>
                                <div class="content">123 Fake Street, New York, USA</div>
                            </li>
                            <li>
                                <div class="icon"><span class="mai-mail"></span></div>
                                <div class="content"><a href="#">info@digigram.com</a></div>
                            </li>
                            <li>
                                <div class="icon"><span class="mai-phone-portrait"></span></div>
                                <div class="content"><a href="#">+00 1122 3344 55</a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <div class="subhead">Contact Us</div>
                        <h2 class="title-section">Drop Us a Line</h2>
                        <div class="divider"></div>

                        <form id="review" action="{{route('review')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="py-2">
                                <input name="name" type="text" class="form-control" placeholder="Полное имя">
                            </div>
                            <div class="py-2">
                                <input name="email" type="text" class="form-control" placeholder="Почта">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Картинка</label>
                                <input name="file" required class="form-control" type="file" id="formFile">
                            </div>
                            <div class="py-2">
                                <textarea name="message" rows="6" class="form-control"
                                          placeholder="Введите сообщение"></textarea>
                            </div>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <div id="result">

                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill mt-4">Отправить</button>
                        </form>
                    </div>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section border-top">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <div class="subhead">Our Blog</div>
                    <h2 class="title-section">Read our latest <span class="marked">News</span></h2>
                    <div class="divider mx-auto"></div>
                </div>
                <div class="row my-5 card-blog-row">
                    @foreach($latestArticles as $item)
                    <div class="col-md-6 col-lg-3 py-3 wow fadeInUp">
                        <div class="card-blog">
                            <div class="header">
                                <div class="avatar">
                                    <img src="{{asset('storage/')}}/{{$item->background}}" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author">{{$item->name}}</div>
                                </div>
                            </div>
                            <div class="body">
                                <div class="post-title"><a href="{{route('blog')}}/{{$item->slug}}">What is Business Management?</a>
                                </div>
                                <div class="post-excerpt">{{  \Illuminate\Support\Str::limit($item->paragraph,40,'...')  }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <a href="blog.html" class="btn btn-outline-primary rounded-pill">Discover More</a>
                </div>
            </div> <!-- .container -->
        </div> <!-- .page-section -->

        <div class="page-section client-section">
            <div class="container-fluid">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
                    <div class="item wow zoomIn">
                        <img src="{{asset('img/clients/airbnb.png')}}" alt="">
                    </div>
                    <div class="item wow zoomIn">
                        <img src="{{asset('img/clients/google.png')}}" alt="">
                    </div>
                    <div class="item wow zoomIn">
                        <img src="{{asset('img/clients/stripe.png')}}" alt="">
                    </div>
                    <div class="item wow zoomIn">
                        <img src="{{asset('img/clients/paypal.png')}}" alt="">
                    </div>
                    <div class="item wow zoomIn">
                        <img src="{{asset('img/clients/mailchimp.png')}}" alt="">
                    </div>
                </div>
            </div> <!-- .container-fluid -->
        </div> <!-- .page-section -->
    </main>
@endsection
