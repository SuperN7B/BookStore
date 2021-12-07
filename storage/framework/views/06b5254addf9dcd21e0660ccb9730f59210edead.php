<?php $__env->startSection('title'); ?>
    Редактировать предмета
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <h4>Редактировать предмета</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('LectureController@updateLecture', $id)); ?>">
            <input class="form-control" placeholder="Название предмета" type="text" value="<?php echo e($lecture->title); ?>" name="titleU" required>
            <input class="form-control" placeholder="Описание предмета" type="text" value="<?php echo e($lecture->description); ?>" name="descriptionU" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/update-lecture.blade.php ENDPATH**/ ?>