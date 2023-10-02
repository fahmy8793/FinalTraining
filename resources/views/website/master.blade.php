<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.layouts.header')
</head>
<body >

    @include('website.layouts.navbar')


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')






@include('website.layouts.javascript')
</body>
</html>
