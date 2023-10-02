@extends('dashboard.master')
@section('content')

    {{--    </head>--}}
    <body>
    <div class="container form-container">
        <h1>Add Feedback</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('feedback.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <textarea name="email" id="email" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="subject">subject:</label>
                <textarea name="subject" id="subject" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="message">message:</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>

{{--            --}}
{{--            <div class="form-group">--}}
{{--                <label for="photo">Photo:</label>--}}
{{--                <input type="file" name="photo" id="photo" class="form-control-file">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Status:</label><br>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" type="radio" name="status" id="statusActive" value="1" checked>--}}
{{--                    <label class="form-check-label" for="statusActive">Active</label>--}}
{{--                </div>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <input class="form-check-input" type="radio" name="status" id="statusInactive" value="0">--}}
{{--                    <label class="form-check-label" for="statusInactive">Inactive</label>--}}
{{--                </div>--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <a href="{{ route('feedback.index') }}" class="btn btn-secondary mt-2">Back to Feedbacks</a>
    </div>
    </body>
    {{--</html>--}}

@endsection


