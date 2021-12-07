<div class="row">
    <div class="col-12">
        <h4>Добавить Студента</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(route('student')); ?>">
            <input class="form-control" placeholder="Имя" type="text" value="<?php echo e(old('nameI')); ?>" name="nameI" required>
            <input class="form-control" placeholder="Фамилия" type="text" value="<?php echo e(old('surnameI')); ?>" name="surnameI" required>
            <input class="form-control" placeholder="Почта" type="text" value="<?php echo e(old('emailI')); ?>" name="emailI" required>
            <input class="form-control" placeholder="Телефон" type="text" value="<?php echo e(old('phoneI')); ?>" name="phoneI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>

            <?php echo csrf_field(); ?>

        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/create-student.blade.php ENDPATH**/ ?>