@extends('layouts/app', ['title' => 'Contacts'])

@section('content')

<section class="bg-gray-7">
<div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
        <h3 class="breadcrumbs-custom-title">Contacts</h3>
        <div class="breadcrumbs-custom-decor"></div>
        </div>
    <div class="box-transform" style="background-image: url(images/bg-1.jpg);"></div>
</div>
<div class="container">
    <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li class="active">Contacts</li>
    </ul>
</div>
</section>
<!-- Contacts-->
<section class="section section-lg bg-default text-md-left">
<div class="container">
    <div class="row row-60 justify-content-center">
        <div class="col-lg-8">
            @if (session()->has('syccess'))
                <div class="alert alert-success">
                {{session()->get('success')}}
                </div>
            @endif

            @include('admin.alerts.main')
            <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
            <form  method="post" action="{{route('contact.store')}}">
            @csrf
            @method('post')
                <div class="row row-20 gutters-20">
                    <div class="col-md-6">
                        <div class="form-wrap">
                        <input value="{{ old('name')}}" class="form-input" id="contact-your-name-5" type="text" name="name" >
                            <label class="form-label" for="contact-your-name-5">Your Name*</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input value="{{ old('email')}}" class="form-input" id="contact-email-5" type="email" name="email" >
                            <label class="form-label" for="contact-email-5">Your E-mail*</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input value="{{ old('subject')}}" class="form-input" id="contact-your-subject-5" type="text" name="subject" >
                            <label class="form-label" for="contact-your-subject-5">Your Subject*</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message-5">Message</label>
                            <textarea class="form-input textarea-lg" id="contact-message-5" name="message">{{ old('message')}}</textarea>
                        </div>
                    </div>
                </div>
                <button class="button button-secondary button-winona" type="submit">Contact us</button>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="aside-contacts">
                <div class="row row-30">
                    <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Get social</p>
                        <ul class="list-inline contacts-social-list list-inline-sm">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Phone</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                            <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                            <div class="unit-body"><a class="phone" href="tel:#">1-800-1234-567</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">E-mail</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                            <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                            <div class="unit-body"><a class="mail" href="mailto:#">info@demolink.org</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-12 aside-contacts-item">
                        <p class="aside-contacts-title">Address</p>
                        <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                            <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                            <div class="unit-body"><a class="address" href="#">6036 Richmond hwy., <br class="d-md-none">Alexandria, VA, 2230</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
   
@endsection