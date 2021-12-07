<?php $__env->startSection('title'); ?>
    Предметы
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->is_admin == 1): ?>
    <?php echo $__env->make('create-lecture', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Предметы</th>
                    <th scope="col">Описание</th>
                    <?php if(Auth::user()->is_admin == 1): ?>
                        <th></th>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </thead>

                <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td></td>
                        <td><?php echo e($lecture->title); ?></td>
                        <td><?php echo e($lecture->description); ?></td>
                        <?php if(Auth::user()->is_admin == 1): ?>
                            <td><a class="btn btn-primary" href="<?php echo e(action('LectureController@getUpdateLecture', $lecture->id)); ?>">Изменить</a></td>
                            <td>
                                <form action="<?php echo e(action('LectureController@destroyLecture', $lecture->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button class="btn btn-danger" type="submit">Удалить</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/lecture.blade.php ENDPATH**/ ?>