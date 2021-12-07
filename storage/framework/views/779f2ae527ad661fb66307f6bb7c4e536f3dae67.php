<div class="row">
    <div class="col-12">
        <h4>Добавить новый предмет</h4>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form class="form-inline" method="POST" action="<?php echo e(route('lecture')); ?>">
            <input class="form-control" placeholder="Название предмета" type="text" value="<?php echo e(old('titleI')); ?>" name="titleI" required>
            <input class="form-control" placeholder="Описание предмета" type="text" value="<?php echo e(old('descriptionI')); ?>" name="descriptionI" required>
            <button type="submit" class="btn btn-primary">Сохранить</button>

            <?php echo csrf_field(); ?>

        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\gradebook-master\resources\views/create-lecture.blade.php ENDPATH**/ ?>