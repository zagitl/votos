
<?php $__env->startSection('content'); ?>
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Eleccion
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
        <form method="post" action="<?php echo e(route('eleccion.store')); ?> " 
        enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="periodo">periodo:</label>
                <input type="Text" id="periodo"
                 class="form-control" name="periodo" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha:</label>
                <input type="date" id="fecha"
                 class="form-control" name="fecha" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha Apertura:</label>
                <input type="date" id="fechaapertura"
                 class="form-control" name="fechaapertura" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Hora de Apertura:</label>
                <input type="time" id="horaapertura"
                 class="form-control" name="horaapertura" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Fecha de cierre:</label>
                <input type="date" id="fechacierre"
                 class="form-control" name="fechacierre" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Hora de cierre:</label>
                <input type="time" id="horacierre"
                 class="form-control" name="horacierre" />
            </div>
            <div class="form-group">
                <label for="ubicacion">Observaciones:</label>
                <input type="Text" id="observaciones"
                 class="form-control" name="observaciones" />
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/eleccion/create.blade.php ENDPATH**/ ?>