<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
    <tr>
    <th>Name</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($student->name); ?></td>
    <td><?php echo e($student->dob); ?></td>
    <td><?php echo e($student->address); ?></td>
    <td> <img src="<?php echo e(asset($student->img)); ?>" height="50px" width="50px"/></td>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH C:\Users\HP\Documents\blog_site\resources\views/list.blade.php ENDPATH**/ ?>