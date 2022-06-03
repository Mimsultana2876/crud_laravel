<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <!-- CSS only -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-bordered-shadow text-center table-striped">
            <tr>
                <th>Post Id:</th>
                <th>Post Title:</th>
                <th>Post Author:</th>
                <th>Post Delete:</th>
                <th>Post Edit:</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->post_title}}</td>
                <td>{{$post->post_author}}</td>
                <td ><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td ><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a></td>

            </tr>
            @endforeach

        </table>
    </div>
</body>
</html>