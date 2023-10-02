{{--@extends('dashboard.master')--}}
{{--@section('content')--}}
{{--    <!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Login Form </title>--}}

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
{{--                            <h3 class="login-heading mb-4">Welcome back!</h3>--}}
{{--                            <form action="{{ route('login.post')}}" method="POST" id="logForm">--}}

{{--                                {{ csrf_field() }}--}}

{{--                                <div class="form-label-group">--}}
{{--                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >--}}
{{--                                    <label for="inputEmail">Email address</label>--}}

{{--                                    @if ($errors->has('Email'))--}}
{{--                                        <span class="error">{{ $errors->first('Email') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="form-label-group">--}}
{{--                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">--}}
{{--                                    <label for="inputPassword">Password</label>--}}

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="error">{{ $errors->first('password') }}</span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>--}}
{{--                                <div class="text-center">If you have an account?--}}
{{--                                    <a class="small" href="{{ route('registration')}}">Sign Up</a></div>--}}
{{--                                <div class="text-center">Already Admin?--}}
{{--                                    <a class="small" href="{{ route('registration')}}">Sign Up</a></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}
























@extends('dashboard.master')
@section('content')
    <title>Users List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
    <div class="container">
        <h1>Users List</h1>
{{--        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New course</a>--}}

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover ">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
{{--                <th>Employee_ID</th>--}}
                <th>Role_id</th>
                <th>status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
{{--                    <td>{{ $user->Employee_ID }}</td>--}}
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->status }}</td>

{{--                    <td>{{ $user->status ? 'Paid' : 'Unpaid' }}</td>--}}
                    <td>
                        <div>

                        </div>
                        {{--                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>--}}
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--        {{ $products->links() }} <!-- Add this line to display pagination links -->--}}
    </div>
    </div>
    </body>
@endsection


