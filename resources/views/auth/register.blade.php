@extends('layouts.app', ['title' => 'Register New'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
<<<<<<< HEAD
        <div class="col-md-6">
            <div class="card" >
=======
        <div class="col-md-8">
            <div class="card">
>>>>>>> 4a6f01060ed78da36d7ab23f1179ba1e6416ab7d
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input style="margin-top: 10px; height: 10px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
=======
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
>>>>>>> 4a6f01060ed78da36d7ab23f1179ba1e6416ab7d

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input style="margin-top: 10px; height: 10px;"  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
=======
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
>>>>>>> 4a6f01060ed78da36d7ab23f1179ba1e6416ab7d

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="margin-top: 10px; height: 10px;"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input style="margin-top: 10px; height: 10px;"  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
=======
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
>>>>>>> 4a6f01060ed78da36d7ab23f1179ba1e6416ab7d
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
<<<<<<< HEAD
                                <button style="height: 30px;"  type="submit" class="btn btn-primary pb-5">
=======
                                <button type="submit" class="btn btn-primary">
>>>>>>> 4a6f01060ed78da36d7ab23f1179ba1e6416ab7d
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
