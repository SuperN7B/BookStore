<?php $__env->startSection('title'); ?>
Оценки
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('add-grade', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <h3>Студент: <?php echo e($student->name); ?> <?php echo e($student->surname); ?></h3>
        <div class="col-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Предметы</th>
                    <th scope="col">Комментарии</th>
                    <th scope="col">Оценки</th>
                </tr>
                </thead>

                <?php
                    $sum=0;
                ?>
                <?php if(count($student->grade) != 0): ?>
                    <?php $__currentLoopData = $student->grade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span style="display:none"><?php echo e($sum += $grade->grade); ?></span>
                    <tr>
                        <td></td>
                        <td><?php echo e($grade->lecture->title); ?></td>
                        <td><?php echo e($grade->comment); ?></td>
                        <td><?php echo e($grade->grade); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                

            </table>
        </div>
    </div>

    <?php if(count($student->grade) != 0): ?>
        <div class="row">
            <div class="col-12 average">
                <h5>Средняя оценка студента: <span class="badge badge-secondary"><?php echo e(round($sum/count($student->grade), 1)); ?> </span></h5>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>