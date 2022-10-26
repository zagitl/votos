
<?php $__env->startSection('content'); ?>
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
    <div class="card-header">
        Editar casilla
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><br />
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('casilla.update', $casilla->id)); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" readonly="true" value="<?php echo e($casilla->id); ?>" name="id" />
            </div>
            <div class="form-group">
                <label for="descripcion">Ubicación:</label>
                <input type="text" value="<?php echo e($casilla->ubicacion); ?>" class="form-control" name="ubicacion" />
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/casilla/edit.blade.php ENDPATH**/ ?>