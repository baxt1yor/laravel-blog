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
            <li class="active">Blog</li>
          </ul>
        </div>
      </section>
      <!-- Base typography-->
      <section class="section section-sm section-first bg-default section-style-2 text-md-left">
        <div class="container">
          <div class="row row-50">
            @foreach ($blogs as $blog)
            <div class="col-lg-8">
              <ul class="list-xl box-typography">
                <li>
                  <h4>{{$blog->created_at}}</h4>
                  <img src="storage/{{$blog->img}}" alt="" class="img-responsive" style="border-radius: 5px;" >
                  <h3>{{$blog->title}}</h3>
                <h5><a href="{{route('blog.more', ['id' => $blog->id ])}}"> {{$blog->short}}</a></h5>
                  <span class="fas fa-eye"> {{$blog->view}}</span>
                </li>
              </ul>
            </div>
            @endforeach
            
            <div class="col-lg-4">
              <div class="box-typography-description">
                <div class="box-typography-description-item">
                  <form method="GET" action="{{route('search')}}" >
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="key">
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>  
                </div> 
                <div class="box-typography-description-item">
                  <p class="heading-7">Google Fonts</p>
                  <h3 class="text-transform-none text-spacing-50">Roboto</h3>
                </div>
                <div class="box-typography-description-item">
                  <p class="heading-7">Used colors</p>
                  <div class="box-color">
                    <div class="box-color-line">
                      <div class="box-color-item bg-primary"></div>
                      <div class="box-color-item bg-secondary"></div>
                      <div class="box-color-item bg-gray-800"></div>
                      <div class="box-color-item bg-gray-600"></div>
                    </div>
                    <div class="box-color-line">
                      <div class="box-color-item bg-gray-300"></div>
                      <div class="box-color-item bg-gray-200"></div>
                    </div>
                    <div class="box-color-line">
                      <div class="box-color-item bg-gray-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          {{$link}}
        </div>
      </section>

      <!-- HTML Text Elements-->
      <section class="section section-sm bg-default section-style-2 text-md-left">
        <div class="container">
          <h4>HTML Text Elements</h4>
          <p class="text-block">Welcome to our wonderful world. This is a bold text
            <mark>This is a highlighted text</mark>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login<span class="tooltip-custom" data-toggle="tooltip" data-placement="top" title="Default text">Tooltips</span>widgets, you will definitely have a great experience of using our web page.<span class="text-strike">This is a strikethrough text</span><span class="text-underline">This is an underlined text.</span><a href="#">Link</a><a class="link-hover" href="#">Hover link</a><a class="link-active" href="#">Press link</a>
          </p>
        </div>
      </section>

      <!-- Lists and Blockquote-->
      <section class="section section-sm bg-default section-style-2 text-md-left">
        <div class="container">
          <h4>Ordered & Unordered Lists</h4>
          <div class="row">
            <div class="col-lg-10 col-xl-7">
              <div class="row row-30">
                <div class="col-md-6">
                  <ul class="list-marked d-inline-block d-inline-md-block">
                    <li>Consulting</li>
                    <li>Customer Service</li>
                    <li>Innovation</li>
                    <li>Dedication</li>
                    <li>Ethics</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ol class="list-ordered d-inline-block d-inline-md-block">
                    <li>Consulting</li>
                    <li>Customer Service</li>
                    <li>Innovation</li>
                    <li>Dedication</li>
                    <li>Ethics</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Blockquote-->
      <section class="section section-sm section-last bg-default section-style-2 text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-10 col-xl-7">
              <h4>Blockquote</h4>
              <!-- Quote Classic-->
              <article class="quote-classic">
                <div class="quote-classic-text">
                  <p class="q">Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what you need.</p>
                </div>
                <p class="quote-classic-author">Stephen Adams</p>
              </article>
            </div>
          </div>
        </div>
      </section>


@endsection