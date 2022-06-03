<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <!-- CSS only -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



</head>
<body>
    <h1 class="text-center">Crud Operation using Laravel</h1>
    <div class="container">
       
        

     

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form method="post" action="/store">
        @csrf
        <div class="form-group">
                <label>Post Title:</label>
                <input type="text" name="post_title" placeholder="Enter Your Title" class="form-control"> 

        </div>
        
            <div class="form-group">
                <label>Post Author:</label>
                <input type="text" name="post_author" placeholder="Enter Your Author" class="form-control"> 

            </div>
            
            
            <input type="submit" name="insert" value="insert" class="btn btn-primary">
        </form>

    
    


    </div>
    
</body>
</html>