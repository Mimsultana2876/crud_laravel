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
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->post_title); ?></td>
                <td><?php echo e($post->post_author); ?></td>
                <td ><a href="/delete/<?php echo e($post->id); ?>" class="btn btn-danger">Delete</a></td>
                <td ><a href="/edit/<?php echo e($post->id); ?>" class="btn btn-success">Edit</a></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </table>
    </div>
</body>
</html><?php /**PATH D:\crud\crud\resources\views/show.blade.php ENDPATH**/ ?>