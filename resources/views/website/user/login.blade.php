
@extends('website.master')
@section('content')
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2>Welcome to Raya Courses</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class=" col-lg-12">
                            <form id="contact" action="" method="post">
                                {{--                                <form action="{{ route('home2') }}"  method="POST" enctype="multipart/form-data">--}}
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Login now </h2>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="email" type="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <input name="password" type="password" placeholder="YOUR Password..." required="">
                                        </fieldset>
                                    </div>

                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Login </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-12">
                            <div class="main-button-red">
{{--                                <a href="{{ route('register') }}"  method="POST" enctype="multipart/form-data">--}}

                                <a href="{{route('register')}}" >Register First  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('website.layouts.footer')

    </section>






@endsection
