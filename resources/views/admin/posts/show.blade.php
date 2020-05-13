
@extends('layouts/admin')
@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
          <h6 class="m-0 font-weight-bold text-primary">
        {{$blog->title}} - ko'rish
          </h6>
      </header>
      <div class="panel-body">
        <img src="/storage/thumbs/{{$blog->img}}" width="100px"  alt="{{$blog->title}}"> <br><br>
        <b>
            Qisqacha:
        </b>
        <p>
            {{$blog->short}}
        </p>
        <b>
            Batafsil:
        </b>
        <p>
            {{$blog->content}}
        </p>
        <b>Yaratilgan vaqti:</b>
        {{$blog->created_at->format('H:i d/m/Y')}}
        <br>
        <b>Qayta yuklangan payti:</b>
        {{$blog->updated_at->format('H:i d/m/Y')}}
      </div>
    </section>
  </div>
@endsection