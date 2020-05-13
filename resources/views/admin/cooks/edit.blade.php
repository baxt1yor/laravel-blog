
@extends('layouts/admin')
@section('content')
<div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Malumot Qo'shish
      </header>
      @include('admin.alerts.main')
      <div class="panel-body">
        <form role="form" enctype="multipart/form-data" action="{{route('admin.cooks.update', $cooks->id)}}" method="POST">
          @method('PUT')
          @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">To`liq ismi <span class="text-danger">*</span></label>
            <input value="{{$cooks->full_name}}" required type="text" class="form-control" name="full_name" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Yo'nalishi<span class="text-danger">*</span></label>
            <input value="{{$cooks->special}}" required type="text" class="form-control" name="special" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Start-Date <span class="text-danger">*</span></label>
            <input value="{{$cooks->start_date}}" required type="date" class="form-control" id="exampleInputPassword1" name="start_date">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Google </label>
            <input value="{{$cooks->google}}"  type="email" class="form-control" id="exampleInputPassword1" name="google">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Facebook</label>
            <input value="{{$cooks->facebook}}"  type="text" class="form-control" id="exampleInputPassword1" name="facebook">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Instagram</label>
            <input value="{{$cooks->instagram}}"  type="text" class="form-control" id="exampleInputPassword1" name="instagram">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Twitter</label>
            <input value="{{$cooks->twitter}}"  type="text" class="form-control" id="exampleInputPassword1" name="twitter">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Faylni tanlang <span class="text-danger">*</span></label>
            <input value="{{$cooks->picture}}" type="file" id="exampleInputFile" name="picture" required>
            <p class="help-block">Rasm fayl tanlang (.png; .jpg; .jpeg)</p>
          </div>
          <div class="form-group">
            <img src="/storage/{{$cooks->picture}}" class="img img-thumbnail" width="200px" alt="img">
          </div>
          <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
      </div>
    </section>
  </div>
@endsection