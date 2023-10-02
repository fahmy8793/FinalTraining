@extends('website.master')
@section('content')


    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Here are our list of Courses</h6>
                    <h2>Courses List</h2>
                </div>
            </div>
        </div>



    <section class="meetings-page" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">

{{--                            <form action="{{route('search')}}" method="post">--}}
{{--                                {{csrf_field()}}--}}
{{--                                <input type="search" name="search" placeholder="Here the course name ..." aria-describedby="button-addon1" class="form-control border-0 bg-light">--}}
{{--                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>--}}

{{--                            </form>--}}
{{--                            <div>--}}
{{--                                <div class="mx-auto pull-right">--}}
{{--                                    <div class="">--}}
{{--                                        <form action="{{ route('mycourses') }}" method="GET" role="search">--}}

{{--                                            <div class="input-group">--}}
{{--                        <span class="input-group-btn mr-5 mt-1">--}}
{{--                            <button class="btn btn-info" type="submit" title="Search projects">--}}
{{--                                <span class="fas fa-search"></span>--}}
{{--                            </button>--}}
{{--                        </span>--}}

{{--                            <ul class="list-group mt-3">--}}
{{--                                @forelse($courses as $item)--}}
{{--                                    <li class="list-group-item">{{ $item->name }}</li>--}}
{{--                                @empty--}}
{{--                                    <li class="list-group-item list-group-item-danger">courses Not Found.</li>--}}
{{--                                @endforelse--}}
{{--                            </ul>--}}

                            <style>
                                /* Style for the form container */
                                .search-form {
                                    max-width: 400px;
                                    margin: 0 auto;
                                    text-align: center;
                                }

                                /* Style for the input field */
                                input[type="text"] {
                                    width: 100%;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    font-size: 16px;
                                }

                                /* Style for the search button */
                                button[type="submit"] {
                                    background-color: #007BFF;
                                    color: white;
                                    border: none;
                                    border-radius: 5px;
                                    padding: 10px 20px;
                                    font-size: 16px;
                                    cursor: pointer;
                                }

                                /* Style for the "Back to Home" button */
                                .home-button {
                                    background-color: #555;
                                    color: white;
                                    border: none;
                                    border-radius: 5px;
                                    padding: 10px 20px;
                                    font-size: 16px;
                                    cursor: pointer;
                                    text-decoration: none; /* Remove underline from the link */
                                    display: inline-block;
                                    margin-left: 10px; /* Add margin to separate the buttons */
                                }

                                /* Adjust the style of the button on hover */
                                .home-button:hover {
                                    background-color: #333;
                                }
                            </style>


                            <div class="search-form">
                                <form action="{{ route('search') }}" method="GET" autocomplete="off">
                                    <input type="text" name="q" placeholder="Search..." value="{{ old('q') }}">
                                    <button type="submit">Search</button>
                                    <a href="{{ route('mycourses') }}" class="home-button">Back to Courses</a>
                                </form>
                            </div>



                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                    $('#search').on 'keyup', function () {
                                        var query = $(this).val();

                                        $.ajax({
                                            url: "{{ route('search') }}",
                                            type: "GET",
                                            data: { 'search' :query},
                                            success:function(data){
                                        $('#search_result').html(data);

                                    }
                                    });
                                    });
                                    });
                                         // {
                                            }
                                        });
                                    });
                                });
                            </script>>


{{--                            <script>--}}
{{--                                $(document).ready(function () {--}}
{{--                                    // Reference to the search input field--}}
{{--                                    var searchInput = $('#search-input');--}}

{{--                                    // Reference to the div where live search results will be displayed--}}
{{--                                    var searchResultsDiv = $('#search-results');--}}

{{--                                    // Function to perform live search--}}
{{--                                    function performLiveSearch(query) {--}}
{{--                                        $.ajax({--}}
{{--                                            url: "{{ route('search') }}", // Replace with your live search route--}}
{{--                                            method: "GET",--}}
{{--                                            data: {--}}
{{--                                                q: query--}}
{{--                                            },--}}
{{--                                            success: function (data) {--}}
{{--                                                // Display the search results in the searchResultsDiv--}}
{{--                                                searchResultsDiv.html(data);--}}
{{--                                            }--}}
{{--                                        });--}}
{{--                                    }--}}

{{--                                    // Event listener for the input field's keyup event--}}
{{--                                    searchInput.on('keyup', function () {--}}
{{--                                        var query = $(this).val();--}}

{{--                                        // Perform live search only if the query is not empty--}}
{{--                                        if (query.trim() !== '') {--}}
{{--                                            performLiveSearch(query);--}}
{{--                                        } else {--}}
{{--                                            // If the query is empty, clear the search results div--}}
{{--                                            searchResultsDiv.html('');--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                });--}}
{{--                            </script>--}}







{{--                                                <input type="text" class="form-control mr-2" name="term" placeholder="Search Courses" id="term">--}}
{{--                                                <a href="{{ route('search') }}" class=" mt-1">--}}
{{--                            <span class="input-group-btn">--}}
{{--                                <button class="btn btn-danger" type="button" title="Refresh page">--}}
{{--                                    <span class="fas fa-sync-alt"></span>--}}
{{--                                </button>--}}
                            </span>


{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                            <div class="row grid">
                                @foreach($courses as $item)

                                <div class="col-lg-4 templatemo-item-col all soon">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <div class="price">

                                                <span>{{$item->price}}</span>
                                            </div>
                                            <a href="{{route("course.info",$item->id)}}"><img src="{{asset('storage') ."/". $item->photo}}" alt=""></a>
                                        </div>
                                        <div class="down-content">
                                            <div class="date">
                                                <h6><?php echo date('M d', strtotime($item->created_at)); ?></h6>

{{--                                                <h6>Nov <span>12</span></h6>--}}
                                            </div>

                                            <a href="{{route("course.info",$item->id)}}"><h4>{{$item->name}}</h4></a>
                                            <p>{{$item->description}}</p>

                                        </div>

                                    </div>

                                </div>

                                @endforeach
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="pagination">
{{--                                                                    {{ $courses->links() }} <!-- Add this line to display pagination links -->--}}


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        @include('website.layouts.footer');

@endsection
