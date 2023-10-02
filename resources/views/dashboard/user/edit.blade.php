{{--@extends('dashboard.master')--}}
{{--@section('content')--}}

{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Dashboard</title>--}}

{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <!--Bootsrap 4 CDN-->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}

{{--    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">--}}

{{--</head>--}}
{{--<body>--}}
{{--<div class="container-fluid">--}}
{{--    <div class="row no-gutter">--}}
{{--        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>--}}
{{--        <div class="col-md-8 col-lg-6">--}}
{{--            <div class="login d-flex align-items-center py-5">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-9 col-lg-8 mx-auto">--}}
{{--                            <h3 class="login-heading mb-4">Welcome Dashboard!</h3>--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    Welcome {{ ucfirst(Auth()->user()->name) }}--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <a class="small" href="{{url('logout')}}">Logout</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}
{{--@endsection--}}













@extends('dashboard.master')
@section('content')

    {{--    </head>--}}
    {{--<body>--}}
    <div class="container form-container">
        <h1>Edit Users</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
{{--        dd($users);--}}

        <form action="{{ route('users.update', ['user'=>$users->id]) }}" method="POST" enctype="multipart/form-data">
{{--               dd($course,$data);--}}

            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $users->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" name="email" id="email" value="{{ $users->email }}" class="form-control">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="Employee number">Employee number:</label>--}}
{{--                <input type="number" name="Employee number" id="Employee number" class="form-control"> {{ $users->Employee number}}--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="Role Id">Role Id:</label>--}}
{{--                <input type="text" name="role_id" id="role_id" class="form-control"> {{ $users->role_id }}--}}
{{--            </div>--}}





            <div class="form-group">
                <label>Role_id:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="role_id" id="statusActive" value="1" @if($users->role_id) checked @endif>
                    <label class="form-check-label" for="statusActive">1-Admin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="role_id" id="statusInactive" value="2" @if(!$users->role_id) checked @endif>
                    <label class="form-check-label" for="statusInactive">2-Client</label>
                </div>
            </div>

        <div class="form-group">
                <label>Status:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="statusActive" value="0 " @if($users->status) checked @endif>
                    <label class="form-check-label" for="statusActive">0-Unpaid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="statusInactive" value="1" @if(!$users->status) checked @endif>
                    <label class="form-check-label" for="statusInactive">1-paid</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary mt-2">Back to Users List</a>

        </form>

    </div>


@endsection


