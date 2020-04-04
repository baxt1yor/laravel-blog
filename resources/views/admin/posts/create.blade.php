
@extends('layouts/admin')
@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Malumot Qo'shish
      </header>
      @include('admin.alerts.main')
      <div class="panel-body">
        <form role="form" enctype="multipart/form-data" action="{{route('admin.posts.store')}}" method="POST">
          @csrf
          @method('post')
            <div class="form-group">
            <label for="exampleInputEmail1">Sarlavha</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Qisqacha</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="short">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Maqola</label>
            <textarea class="form-control" name="content"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Faylni tanlang</label>
            <input type="file" id="exampleInputFile" name="img">
            <p class="help-block">Rasm fayl tanlang (.png; .jpg; .jpeg)</p>
          </div>
          <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>

      </div>
    </section>
  </div>
@endsection