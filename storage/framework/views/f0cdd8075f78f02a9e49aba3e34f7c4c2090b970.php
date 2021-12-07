<?php $__env->startSection('title'); ?>
    Предметы
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('create-lecture', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Предметы</th>
                    <th scope="col">Описание</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td></td>
                        <td><?php echo e($lecture->title); ?></td>
                        <td><?php echo e($lecture->description); ?></td>
                        <td><a class="btn btn-primary" href="<?php echo e(action('LectureController@getUpdateLecture', $lecture->id)); ?>">Изменить</a></td>
                        <td>
                            <form action="<?php echo e(action('LectureController@destroyLecture', $lecture->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>