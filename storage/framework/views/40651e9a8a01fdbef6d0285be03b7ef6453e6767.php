
<?php $__env->startSection('content'); ?>
<style>
.uper {
    margin-top: 40px;
}
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Candidato
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
        <form method="post" action="<?php echo e(route('candidato.store')); ?>" enctype="multipart/form-data">

            <div class="form-group">
                <?php echo csrf_field(); ?>
                <label for="nombrecompleto">Nombre Completo:</label>
                <input type="text" class="form-control" name="nombrecompleto" />
                <br>

                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="M" selected>Mujer</option>
                    <option value="H">Hombre</option>
                </select>
                <br>

                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto" accept="image/png, image/jpeg">
                <br>

                <label for="perfil">Perfil:</label>
                <input type="file" name="perfil" id="perfil" accept="application/pdf">
                <br>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/candidato/create.blade.php ENDPATH**/ ?>