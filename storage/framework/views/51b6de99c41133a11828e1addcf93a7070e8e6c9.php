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
        <?php if(session()->has('message') ): ?>
        <?php if(session()->get('message')==1 ): ?>
        <div class="alert alert-success">
            <p>Successfully Inserted</p>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <div class="container">
        <form method="post" action="/show">
        <?php echo csrf_field(); ?>
        <div class="form-group">
                <label>Post Title:</label>
                <input type="text" name="post_title" require="" placeholder="Enter Your Title" class="form-control"> 

        </div>
        <div>
            <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e("Please Enter Your Post Title"); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
            <div class="form-group">
                <label>Post Author:</label>
                <input type="text" name="post_author" placeholder="Enter Your Author" class="form-control"> 

            </div>
            <div>
            <?php $__errorArgs = ['post_author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e("Please Enter Your Post Author"); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
            
            <input type="submit" name="insert" value="insert" class="btn btn-primary">
            <button type="submit"  name="show" value="show" class="btn btn-secondary"onclick="<?php echo e(Redirect::to('/show')); ?>">show</button>
        </form>

    </div>
    
    
</body>
</html><?php /**PATH D:\crud\crud\resources\views//store.blade.php ENDPATH**/ ?>