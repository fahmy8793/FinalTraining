<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{asset('front')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('front')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('front')}}/assets/js/isotope.min.js"></script>
<script src="{{asset('front')}}/assets/js/owl-carousel.js"></script>
<script src="{{asset('front')}}/assets/js/lightbox.js"></script>
<script src="{{asset('front')}}/assets/js/tabs.js"></script>
<script src="{{asset('front')}}/assets/js/video.js"></script>
<script src="{{asset('front')}}/assets/js/slick-slider.js"></script>
<script src="{{asset('front')}}/assets/js/custom.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--        // Reference to the search input field--}}
{{--        var searchInput = $('#search-input');--}}

{{--        // Reference to the div where live search results will be displayed--}}
{{--        var searchResultsDiv = $('#search-results');--}}

{{--        // Function to perform live search--}}
{{--        function performLiveSearch(query) {--}}
{{--        $.ajax({--}}
{{--        url: "{{ route('search') }}", // Replace with your live search route--}}
{{--        method: "GET",--}}
{{--        data: {--}}
{{--        q: query--}}
{{--    },--}}
{{--        success: function (data) {--}}
{{--        // Display the search results in the searchResultsDiv--}}
{{--        searchResultsDiv.html(data);--}}
{{--    }--}}
{{--    });--}}
{{--    }--}}

{{--        // Event listener for the input field's keyup event--}}
{{--        searchInput.on('keyup', function () {--}}
{{--        var query = $(this).val();--}}

{{--        // Perform live search only if the query is not empty--}}
{{--        if (query.trim() !== '') {--}}
{{--        performLiveSearch(query);--}}
{{--    } else {--}}
{{--        // If the query is empty, clear the search results div--}}
{{--        searchResultsDiv.html('');--}}
{{--    }--}}
{{--    });--}}
{{--    });--}}
{{--</script>--}}








































{{--    //according to loftblog tut--}}
{{--    $('.nav li:first').addClass('active');--}}

{{--    var showSection = function showSection(section, isAnimate) {--}}
{{--        var--}}
{{--            direction = section.replace(/#/, ''),--}}
{{--            reqSection = $('.section').filter('[data-section="' + direction + '"]'),--}}
{{--            reqSectionPos = reqSection.offset().top - 0;--}}

{{--        if (isAnimate) {--}}
{{--            $('body, html').animate({--}}
{{--                    scrollTop: reqSectionPos },--}}
{{--                800);--}}
{{--        } else {--}}
{{--            $('body, html').scrollTop(reqSectionPos);--}}
{{--        }--}}

{{--    };--}}

{{--    var checkSection = function checkSection() {--}}
{{--        $('.section').each(function () {--}}
{{--            var--}}
{{--                $this = $(this),--}}
{{--                topEdge = $this.offset().top - 80,--}}
{{--                bottomEdge = topEdge + $this.height(),--}}
{{--                wScroll = $(window).scrollTop();--}}
{{--            if (topEdge < wScroll && bottomEdge > wScroll) {--}}
{{--                var--}}
{{--                    currentId = $this.data('section'),--}}
{{--                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');--}}
{{--                reqLink.closest('li').addClass('active').--}}
{{--                siblings().removeClass('active');--}}
{{--            }--}}
{{--        });--}}
{{--    };--}}

{{--    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {--}}
{{--        e.preventDefault();--}}
{{--        showSection($(this).attr('href'), true);--}}
{{--    });--}}

{{--    $(window).scroll(function () {--}}
{{--        checkSection();--}}
{{--    });--}}



{{--    $('#search').on('keyup', function(){--}}
{{--        search();--}}
{{--    });--}}
{{--    search();--}}
{{--    function search(){--}}
{{--        var keyword = $('#search').val();--}}
{{--        $.post('{{ route("search") }}',--}}
{{--            {--}}
{{--                _token: $('meta[name="csrf-token"]').attr('content'),--}}
{{--                keyword:keyword--}}
{{--            },--}}
{{--            function(data){--}}
{{--                table_post_row(data);--}}
{{--                console.log(data);--}}
{{--            });--}}
{{--    }--}}
{{--    // table row with ajax--}}
{{--    function table_post_row(res){--}}
{{--        let htmlView = '';--}}
{{--        if(res.courses.length <= 0){--}}
{{--            htmlView+= `--}}
{{--       <tr>--}}
{{--          <td colspan="4">No data.</td>--}}
{{--      </tr>`;--}}
{{--        }--}}
{{--        for(let i = 0; i < res.courses.length; i++){--}}
{{--            htmlView += `--}}

{{--        <tr>--}}
{{--           <td>`+ (i+1) +`</td>--}}
{{--              <td>`+res.courses[i].name+`</td>--}}
{{--               // <td>`+res.employees[i].phone+`</td>--}}
{{--        </tr>`;--}}
{{--        }--}}
{{--        $('search').html(htmlView);--}}
{{--    }--}}
{{--</script>--}}
