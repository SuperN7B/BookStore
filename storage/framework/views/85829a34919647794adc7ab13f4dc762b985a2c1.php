<div class="row">
    <div class="col-12">
        <h4>Добавить оценку</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(action('GradeController@storeGrade', $id)); ?>">
            
            <select class="form-control" name="lectureIdI" >
                <option selected disabled>Выбрать предмет</option>

                <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($lecture->id); ?>"><?php echo e($lecture->title); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <input class="form-control" placeholder="Комментарий" type="text" value="<?php echo e(old('commentI')); ?>" name="commentI" required>
            <input class="form-control" placeholder="Оценка" type="text" value="<?php echo e(old('gradeI')); ?>" name="gradeI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>

            <?php echo csrf_field(); ?>

        </form>
    </div>
</div>
