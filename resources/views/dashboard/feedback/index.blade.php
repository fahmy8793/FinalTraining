@extends('dashboard.master')
@section('content')

    {{--    </head>--}}
    {{--<body>--}}
    <div class="container">
        <h1>Feedback</h1>
        <a href="{{ route('feedback.create') }}" class="btn btn-primary">Add Feedback</a>



        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif



        <table class="table table-bordered table-hover mt-4 category-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedback as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->email }}</td>
{{--                    <td>{{ $category->created_at }}</td>--}}
                    <td>{{ $category->subject }}</td>
                    <td>{{ $category->message }}</td>


{{--                    <td>--}}
{{--                        @if($category->photo)--}}
{{--                            <img src="{{ asset('storage/' . $category->photo) }}" alt="{{ $category->name }}" alt="" style="width:100px; height:100px;">--}}
{{--                        @else--}}

{{--                            No photo available--}}
{{--                        @endif--}}

{{--                    </td>--}}


{{--                    <td>{{ $feedback->status ? 'Active' : 'Inactive' }}</td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-info">Edit</a>--}}
{{--                        <form class="d-inline" action="{{ route('feedback.destroy', $feedback->id) }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    </div>
    {{--</body>--}}
    {{--</html>--}}

@endsection


