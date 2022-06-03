<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<h1 class="text-center">Crud Operation using Laravel</h1>
    <div>
        @if(session()->has('message') )
        @if(session()->get('message')==1 )
        <div class="alert alert-success">
            <p>Successfully Inserted</p>
        </div>
    </div>
    @endif
    @endif
    <div class="container">
        <form method="post" action="/show">
        @csrf
        <div class="form-group">
                <label>Post Title:</label>
                <input type="text" name="post_title" require="" placeholder="Enter Your Title" class="form-control"> 

        </div>
        <div>
            @error('post_title')
            <div class="alert alert-danger">{{ "Please Enter Your Post Title" }}</div>
            @enderror
        </div>
            <div class="form-group">
                <label>Post Author:</label>
                <input type="text" name="post_author" placeholder="Enter Your Author" class="form-control"> 

            </div>
            <div>
            @error('post_author')
            <div class="alert alert-danger">{{ "Please Enter Your Post Author" }}</div>
            @enderror
        </div>
            
            <input type="submit" name="insert" value="insert" class="btn btn-primary">
            <button type="submit"  name="show" value="show" class="btn btn-secondary"onclick="{{ Redirect::to('/show') }}">show</button>
        </form>

    </div>
    
    
</body>
</html>