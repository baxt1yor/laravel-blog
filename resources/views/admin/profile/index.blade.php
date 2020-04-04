@extends('layouts.admin')

@section('content')
    <div class="col-lg-8">
        <section class="panel">
            <header class="panel-heading">
              Hisobni taxrirlash
            </header>
            @include('admin.alerts.main')
            <div class="panel-body">
              <form role="form" action="{{route('admin.profile.update')}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Ism <span class="text-danger">*</span></label>
                    <input type="text" class="form-control"name="name" id="name" value="{{old('name', $user->name)}}" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail<span class="text-danger">*</span></label>
                    <input type="email" class="form-control"name="email" id="email" value="{{old('email', $user->email)}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
              </form>
      
            </div>
          </section>
    </div>

    <div class="col-lg-4">
        <section class="panel">
            <header class="panel-heading">
             Parolni taxrirlash
            </header>
            <div class="panel-body">
              <form role="form" action="{{route('admin.profile.password')}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="password">Parol <span class="text-danger">*</span></label>
                    <input type="password" class="form-control"name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Yangi parolni tasdiqlash<span class="text-danger">*</span></label>
                    <input type="password" class="form-control"name="password_confirmation" id="password_confirmation" required>
                </div>
                <button type="submit" class="btn btn-danger ntm-block">O'zgartirish</button>
              </form>
      
            </div>
          </section>
    </div>
@endsection