

<?php $__env->startSection('title'); ?>
Редактировать оценку
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-12">
        <h4>Редактировать оценку</h4>
    </div>
</div>
<?php

?>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('GradeController@updateGrade', $id)); ?>">
            <select class="form-control" name="lectureIdI" >
                <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($lecture->id == $grade->lecture_id): ?>
                        <option value="<?php echo e($lecture->id); ?>" selected disabled><?php echo e($lecture->title); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($lecture->id); ?>"><?php echo e($lecture->title); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <input class="form-control" placeholder="Комментарий" type="text" value="<?php echo e($grade->comment); ?>" name="commentI" required>
            <input class="form-control" placeholder="Оценка" type="text" value="<?php echo e($grade->grade); ?>" name="gradeI" required>
            <button type="submit" class="btn btn-primary">Изменить</button>

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/update-grade.blade.php ENDPATH**/ ?>