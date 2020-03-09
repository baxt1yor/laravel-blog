
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
        <h3>
            {{$blog->tile}}
        </h3>
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
        {{$blog->created_at->format('H:i d/m/Y')}}<br>
        {{$blog->updated_at->format('H:i d/m/Y')}}
      </div>
    </section>
  </div>
@endsection