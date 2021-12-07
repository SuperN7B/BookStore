

<?php $__env->startSection('title'); ?>
    Учителя
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(Auth::user()->is_admin == 1): ?>
    <?php echo $__env->make('create-teacher', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Эл. Почта</th>
                    <th scope="col">Телефон</th>
                    <?php if(Auth::user()->is_admin == 1): ?>
                        <th></th>
                        <th></th>
                    <?php endif; ?>
                </tr>
                </thead>
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($teacher->is_admin == 0): ?>
                    <tr>
                        <td></td>
                        <td><?php echo e($teacher->name); ?></td>
                        <td><?php echo e($teacher->surname); ?></td>
                        <td><?php echo e($teacher->email); ?></td>
                        <td><?php echo e($teacher->phone); ?></td>
                        <?php if(Auth::user()->is_admin == 1): ?>
                        <td><a class="btn btn-primary" href="<?php echo e(action('UserController@getUpdateTeacher', $teacher->id)); ?>">Изменить</a></td>
                        <td>
                            <form action="<?php echo e(action('UserController@destroyTeacher', $teacher->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button class="btn btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        <?php endif; ?>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </table>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/teacher.blade.php ENDPATH**/ ?>