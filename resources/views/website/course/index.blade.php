@extends('website.master')
@section('content')

    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="meeting-single-item">
                                <div class="thumb">
                                    <div class="price">
                                        <span>{{$course->price}}</span>

                                    </div>
                                    <div class="date">
                                        <span><?php echo date('M d', strtotime($course->created_at)); ?></span>
                                    </div>
                                    <img src="{{asset('storage') ."/". $course->photo}}" alt="{{$course->name}}">
                                </div>
                                <div class="down-content">
                                    <a href=""><h4>{{$course->name}}</h4></a>
                                    <p>{{$course->created_at}}</p>
                                    <p class="description">
                                   {{$course->description}}
                                    </p>

                                    <p> <iframe frameborder="0" scrolling="no" width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/{{  $course->youtubelink  }}?autoplay=0"></iframe> </p>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button-red">
                                <a href="{{route('home')}}">Back To home </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('website.layouts.footer')

    </section>

@endsection
