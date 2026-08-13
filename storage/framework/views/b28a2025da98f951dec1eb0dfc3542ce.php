<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student CGPA System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

<div class="container">

    <header>
        <div class="header-left">
            <h1 class="title">STUDENT CGPA SYSTEM</h1>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="<?php echo e(route('students.index')); ?>"
                       class="nav-btn <?php echo e(request()->routeIs('students.index') ? 'active' : ''); ?>">
                        Home
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('students.create')); ?>"
                       class="nav-btn <?php echo e(request()->routeIs('students.create') ? 'active' : ''); ?>">
                        Add Student
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

    </main>

</div>

</body>
</html><?php /**PATH C:\XAMPP\htdocs\pbk2\resources\views/layouts/app.blade.php ENDPATH**/ ?>