<?php $__env->startSection('title'); ?>
    Студенты
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('create-student', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>

                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->surname); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->phone); ?></td>
                        <td><a class="btn btn-primary" href="<?php echo e(action('GradeController@getGrade', $student->id)); ?>">Оценки</a></td>
                        <td><a class="btn btn-primary" href="<?php echo e(action('StudentController@getUpdateStudent', $student->id)); ?>">Изменить</a></td>
                        <td>
                            <form action="<?php echo e(action('StudentController@destroyStudent', $student->id)); ?>" method="post">
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