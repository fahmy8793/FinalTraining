
@extends('website.master')
@section('content')



    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('front')}}/assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption">
                            <h6>Hello Students</h6>
                            <h2>Welcome to Raya Courses </h2>
                            <p>This is eductional website developed by Raya Trade Intern<a rel="nofollow" href="https://rayacorp.com/" target="_blank"> Raya Website</a>. This is website was developed on Auguset 2023.
                            <div class="main-button-red">
                                <li> <a href="{{route("mycourses")}}">Join Our Courses Now!</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->
    <section class="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">

                                <img src="{{asset('front')}}/assets/images/service-icon-01.png" alt="">
                            </div>
                            <div class="down-content">
{{--                                <a href="{{ route('mycourses') }}"</a>--}}
{{--                                <h4>Best Courses</h4>--}}
                                <h4><a href="{{ route('mycourses') }}">Best Courses</a></h4>
                                <p>Top Courses for this month.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('front')}}/assets/images/service-icon-02.png" alt="">
                            </div>
                            <div class="down-content">
{{--                                <a href="{{ route('mycourses') }}"</a>--}}
{{--                                <h4>Best Instructor</h4>--}}
                                <h4><a href="{{ route('mycourses') }}">Best Instructor</a></h4>
                                <p>Top Instructor for this month.</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('front')}}/assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
{{--                                <a href="{{ route('mycourses') }}"</a>--}}
{{--                                <h4>Best Students</h4>--}}
                                <h4><a href="{{ route('mycourses') }}">Best Students</a></h4>

                                <p>Best Students for this month.</p>

                            </div>

                        </div>

{{--                        <div class="item">--}}
{{--                            <div class="icon">--}}
{{--                                <img src="{{asset('front')}}/assets/images/service-icon-02.png" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="down-content">--}}
{{--                                <a href="{{ route('mycourses') }}"</a>--}}
{{--                                <h4>Online Meeting</h4>--}}
{{--                                <h4 class="scroll-to-section"><a href="#upcoming-meetings"> Upcoming  Meetings</a></h4>--}}
{{--                                <p>Catch your Next Meetings.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('front')}}/assets/images/service-icon-03.png" alt="">
                            </div>
                            <div class="down-content">
{{--                                <a href="{{ route('mycourses') }}"</a>--}}
{{--                                <h4>Best Networking</h4>--}}
                                <h4 class="scroll-to-section"><a href="#contact">Contact Us</a></h4>

                                <p>Tell us your Thoughts .</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="upcoming-meetings" id="meetings">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Upcoming Meetings</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="categories">--}}
{{--                        <h4>Meeting Catgories</h4>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">  Raya holding Board Meeting </a></li>--}}
{{--                            <li><a href="#"> Management Meetings </a></li>--}}
{{--                            <li><a href="#">Financial Meetings</a></li>--}}
{{--                            <!--              <li><a href="#">IT Meetings</a></li>-->--}}
{{--                            <li><a href="#">Operation Meetings</a></li>--}}
{{--                        </ul>--}}
{{--                        <div class="main-button-red">--}}
{{--                            <a href="meetings.html">All Upcoming Meetings</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-8">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="meeting-item">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="price">--}}
{{--                                        <!--                    <span>$22.00</span>-->--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><img src="{{asset('front')}}/assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>--}}
{{--                                </div>--}}
{{--                                <div class="down-content">--}}
{{--                                    <div class="date">--}}
{{--                                        <h6>Nov <span>10</span></h6>--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>--}}
{{--                                    <p>Weekly Meeting for Board <br>Team.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="meeting-item">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="price">--}}
{{--                                        <!--                    <span>$36.00</span>-->--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><img src="{{asset('front')}}/assets/images/meeting-02.jpg" alt="Online Teaching"></a>--}}
{{--                                </div>--}}
{{--                                <div class="down-content">--}}
{{--                                    <div class="date">--}}
{{--                                        <h6>Nov <span>24</span></h6>--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>--}}
{{--                                    <p>Weekly Meeting for Managment <br>Team.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="meeting-item">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="price">--}}
{{--                                        <span>$14.00</span>--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><img src="{{asset('front')}}/assets/images/meeting-03.jpg" alt="Higher Education"></a>--}}
{{--                                </div>--}}
{{--                                <div class="down-content">--}}
{{--                                    <div class="date">--}}
{{--                                        <h6>Nov <span>26</span></h6>--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><h4>Higher Education Conference</h4></a>--}}
{{--                                    <p>Weekly Meeting for IT<br> Team.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="meeting-item">--}}
{{--                                <div class="thumb">--}}
{{--                                    <div class="price">--}}
{{--                                        <!--                    <span>$48.00</span>-->--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><img src="{{asset('front')}}/assets/images/meeting-04.jpg" alt="Student Training"></a>--}}
{{--                                </div>--}}
{{--                                <div class="down-content">--}}
{{--                                    <div class="date">--}}
{{--                                        <h6>Nov <span>30</span></h6>--}}
{{--                                    </div>--}}
{{--                                    <a href="meeting-details.html"><h4>Student Training Meetup</h4></a>--}}
{{--                                    <p>Weekly Meeting for Finance<br>Team.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>APPLY FOR Jobs And join us Now</h3>
                                <p>Find The Best Job for you and enchance your Carrer.</p>
                                <div class="main-button-red">
                                    <a rel="nofollow" href="https://rayacorp.com/" target="_blank"> Raya Website</a>

{{--                                    <div cla>rel="nofollow" href="https://rayacorp.com/" target="_blank"> Raya Website</a></div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>Find More About Our Company </h3>
                                <p>Visit Our Website and Explore More About us.</p>
                                <div class="main-button-yellow">
                                    <a rel="nofollow" href="http://rayatrade.com/" target="_blank"> Raya Trade Website</a>

{{--                                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordions is-first-expanded">
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>About Raya Trade Courses Website</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p> This Website was Developed By Raya Trade Trainee in Summer 2023 <a rel="nofollow" href="http://rayatrade.com/" target="_blank">Raya Trade</a>.
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Scope of Raya Trade Courses Website</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>This Website is to help employers in Raya Trade to enchance their knowledge and provide them with nessaccery knowledge to make them able to explore new challenges .<br><br>
{{--                                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>--}}
                                </div>
                            </div>
                        </article>
                        <article class="accordion">
                            <div class="accordion-head">
                                <span>Please tell your friends</span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>Share this website to your friends whom you belive they need help in their carrer and those who loves improving themselves .<br><br>
{{--                                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>--}}
                                </div>
                            </div>
                        </article>
                        <article class="accordion last-accordion">
                            <div class="accordion-head">
                                <span>Any Comments Please Tell Us </span>
                                <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                            </div>
                            <div class="accordion-body">
                                <div class="content">
                                    <p>To help us improve ourself and the service we provide please do not be shy to get in touch with us and provide us with any recommendation to improve ourself. <a rel="nofollow" href="#contact" target="_blank">Contact Us</a>.

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Popular Courses</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        @foreach ($courses as $course)
                        <div class="item">
                            <img src="{{asset('storage') ."/". $course->photo}}" alt="{{$course->name}}">
                            <div class="down-content">
                                <h4>{{$course->name}}</h4>
                                @auth

                                <a href="{{route('course.info',[$course->id])}}"> </a>


                                <div class="col-6 main-button-primary" bis_skin_checked="1">
                                    <a rel="nofollow" class="btn btn-primary" href="{{route('order',[$course->id])}}"target="_blank"> Enroll Now</a>
{{--                                  <div type="submit" class="btn btn-primary">href="https://rayacorp.com/"</button>--}}

                                </div>
                                <div class="info">

                                    <div class="row">

                                        <div class="col-8">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>

                                        <div class="col-4">

                                            <span>{{$course->price}}</span>
                                        </div>



                                    </div>

                                </div>
                                @else
                                    <p>Please log in to view course details.</p>
                                @endauth


                            </div>

                        </div>




                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>A Few Facts About Our Company</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content ">
                                        <div class="count-digit">12</div>
                                        <div class="count-title">Succesed Compaines</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">7000</div>
                                        <div class="count-title">Current Employee</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">New Branches</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">32</div>
                                        <div class="count-title">Awards</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">
{{--                                <form action="{{ route('home2') }}"  method="POST" enctype="multipart/form-data">--}}
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Let's get in touch</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-4">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6>Phone Number</h6>
                                <span>010-020-0340</span>
                            </li>
                            <li>
                                <h6>Email Address</h6>
                                <span>info@Raya.com</span>
                            </li>
                            <li>
                                <h6>Company Address</h6>
                                <span>Galleria 40 floor 4, Elsheikh Zayed City, Egypt</span>
                            </li>
                            <li>
                                <h6>Website URL</h6>
                                <span>www.Rayatrade.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('website.layouts.footer')
    </section>





@endsection
