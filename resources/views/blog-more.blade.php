@extends('layouts/app', ['title' => "Blog"])

@section('content')

<section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Blog</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
          <div class="box-transform" style="background-image: url(images/bg-1.jpg);"></div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="/">Home</a></li>
            <li class="active">Blogs</li>
          </ul>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-sm section-first bg-default section-style-2 text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-12">
              <ul class="list-xl box-typography">
                <li>
                  <img src="/storage/{{$blog->img}}" alt="" class="img-responsive" style="border-radius: 5px;" >
                  <h3>{{$blog->title}}</h3>
                  <h5> {{$blog->short}}</h5>
                  <p>
                    {{$blog->content}}
                  </p>
                  <span>
                    <i class="fa fa-eye"></i> {{$blog->view}} |
                    <i class="fa fa-calendar"></i> {{$blog->created_at->format('Y-m-s')}}
                  </span>
                </li>
              </ul>
            </div>
            @foreach($most_posts as $most)
            <div class="col-lg-3">
              <ul class="list-xl box-typography">
                <li>
                  <img src="/storage/{{$most->img}}" alt="" class="img-responsive" style="border-radius: 5px; height: 200px; " >
                  <b> {{$most->title}}</b>
                  <p>
                  <b class="fa fa-eye"></b> {{$most->view}}
                  |
                  <b class="fa fa-calendar"></b> {{$most->created_at->format('Y/m/s')}}
                  </p>
                </li>
              </ul>
            </div>
            @endforeach

          </div>
        </div>
      </section>

      


@endsection