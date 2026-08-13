

<?php $__env->startSection('content'); ?>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>

<form action="<?php echo e(route('students.update',$student->id)); ?>" method="POST">

    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <h2 class="form-title">UPDATE STUDENT</h2>

    <div class="form-group">
        <label>Name</label>
        <input type="text"
               name="name"
               value="<?php echo e($student->name); ?>"
               required>
    </div>

    <div class="form-group">
        <label>CGPA</label>
        <input type="number"
               step="0.01"
               min="0"
               max="4"
               name="cgpa"
               value="<?php echo e($student->cgpa); ?>"
               required>
    </div>

    <button type="submit">
        Update
    </button>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\XAMPP\htdocs\pbk2\resources\views/update.blade.php ENDPATH**/ ?>