

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<div style="margin-bottom:20px;">
    <a href="<?php echo e(route('students.create')); ?>">
        <button class="btn-update">ADD STUDENT</button>
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>Bil</th>
            <th>Name</th>
            <th>CGPA</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>

    <?php
        $num = ($students->currentPage()-1) * $students->perPage() + 1;
    ?>

    <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <tr>
        <td><?php echo e($num++); ?></td>
        <td><?php echo e($student->name); ?></td>
        <td><?php echo e($student->cgpa); ?></td>

        <td>
            <button class="btn-update">
                <a href="<?php echo e(route('students.edit',$student->id)); ?>">UPDATE</a>
            </button>
        </td>

        <td>
            <form action="<?php echo e(route('students.destroy',$student->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button class="btn-delete"
                    onclick="return confirm('Delete this record?')">
                    DELETE
                </button>
            </form>
        </td>

    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

    <tr>
        <td colspan="5" style="text-align:center;padding:20px;">
            No Student Found
        </td>
    </tr>

    <?php endif; ?>

    </tbody>
</table>

<div class="pagination-container">
    <?php echo e($students->links()); ?>

</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\XAMPP\htdocs\pbk2\resources\views/index.blade.php ENDPATH**/ ?>