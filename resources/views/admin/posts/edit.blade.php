
@extends('layouts/admin')
@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        {{$blog->title}} - tahrirlash
      </header>
          @include('admin.alerts.main')
      <div class="panel-body">
        <form role="form" enctype="multipart/form-data" action="{{route('admin.posts.update', $blog->id)}}" method="POST">
          @method('PUT')
          @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">Sarlavha</label>
            <input type="text" class="form-control" value="{{$blog->title}}" name="title" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Qisqacha</label>
            <input type="text" class="form-control" value="{{$blog->short}}" id="exampleInputPassword1" name="short">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Maqola</label>
            <textarea class="form-control" name="content">{{$blog->content}}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Rasmni yuklash</label>
            <input type="file" id="exampleInputFile" name="img">
            <p class="help-block">Rasm fayl tanlang (.png; .jpg; .jpeg)</p>
          </div>
          <div class="form-group">
            <img src="/storage/{{$blog->thumb}}" class="img img-thumbnail" width="200px" alt="img">
          </div>
          <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>

      </div>
    </section>
  </div>
@endsection