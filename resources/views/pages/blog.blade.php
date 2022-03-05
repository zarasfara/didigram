@extends('layout.layout')

@section('title', 'блог')

@section('content')
    <div class="custom-class container">
        {{Breadcrumbs::render()}}
    </div>
  <main>
    <div class="page-section">
      <div class="container">
        <div class="row">
            @forelse($posts as $item)
          <div class="col-md-6 col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="avatar">
                  <img src="{{asset('storage')}}/{{$item->background}}" alt="">
                </div>
                <div class="entry-footer">
                  <div class="post-author">{{$item->name}}</div>
                  <a href="#" class="post-date">{{$item->timestamps}}</a>
                </div>
              </div>
              <div class="body">
                <div class="post-title"><a href="{{route('blog')}}/{{$item->slug}}">{{$item->heading}}</a></div>
                <div class="post-excerpt">{!! $item->paragraph !!}</div>
              </div>
              <div class="footer">
                <a href="{{route('blog',$item->slug}})">Read More <span class="mai-chevron-forward text-sm"></span></a>
              </div>
            </div>
          </div>
                @empty
                    Нет новостей
            @endforelse

          <div class="col-12 mt-5">
            <nav aria-label="Page Navigation">
              <ul class="pagination justify-content-center">
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </main>

@endsection
