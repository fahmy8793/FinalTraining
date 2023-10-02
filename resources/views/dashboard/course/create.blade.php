@extends('dashboard.master')
@section('content')

    <title>Add New Course</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
    <div class="container">
        <h1>Add New Course</h1>
        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" step="0.01" min="0" required>
            </div>
            <div class="form-group">
                <label for="started_at">Started_at</label>
                <input type="date" name="started_at" class="form-control" >
            </div>
            <div class="form-group">
                <label for="ended_at">ended_at</label>
                <input type="date" name="ended_at" class="form-control" >
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="url">Youtube Link</label>
                <div class="col-sm-9">
                    <input class="form-control" placeholder="Youtube Link" name="youtubelink" type="text" id="url" required>
                    <div class="col-md-12" id="previewVideo" style="margin: 15px 0; ">
                        @if(isset($video->url))
                            <iframe frameborder="0" scrolling="no" width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/{{ $video->url }}?autoplay=0"></iframe>
                        @endif
                    </div>
                </div>

               </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="status">status</label>
                    <select name="status" class="form-control"  >
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="category">Categories</label>
                    <select name="category" class="form-control"  >
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script type="text/javascript">

        function youtube_parser(url){
            var regExp = /^.*(youtu.be\/|v\/|e\/|u\/\w+\/|embed\/|v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
            return (match[2])? match[2] : false;
        }

        $("input[name='youtubelink']").on("keyup",function(e){
           // alert('gg');
            yID = youtube_parser($(this).val());
            if(yID){
                $(this).val(yID);
                empVid = '<iframe frameborder="0" scrolling="no" width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/'+yID+'?autoplay=0"></iframe>';
                $("#previewVideo").html(empVid);
            }
            return false;
        });
    </script>
@endsection



