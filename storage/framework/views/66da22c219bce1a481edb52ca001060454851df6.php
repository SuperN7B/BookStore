<?php $__env->startSection('title'); ?>
Редактировать студента
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <h4>Редактировать студента</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('StudentController@updateStudent', $id)); ?>">
            <input class="form-control" placeholder="Имя" type="text" value="<?php echo e($student->name); ?>" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="<?php echo e($student->surname); ?>" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="<?php echo e($student->email); ?>" name="emailI" required>
            <input class="form-control" placeholder="Номер" type="text" value="<?php echo e($student->phone); ?>" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/update-student.blade.php ENDPATH**/ ?>