<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>This is an educational website powered by  <em> Raya</em>  For Educational Purposes.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{route("home")}}" class="logo">
                        Raya Courses
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li ><a href="{{route("home")}}" >Home</a></li>
                        @if(auth()->user())
                        <li><a href="{{route("mycourses")}}">Courses</a></li>
                        @endif
                        <li class="scroll-to-section"><a href="#apply-now">Apply Now</a></li>

                        <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                        @if(!auth()->user())
                        <li><a href="{{route("register")}}">Register </a></li>
                        <li><a href="{{route("login")}}">Login </a></li>
                        @else
                            <li>
                                <a href="{{route("logout")}}" >Logout</a></li>

                            <li><a href="">Welcome  {{auth()->user()->name}}</a></li>
                        @endif

                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
