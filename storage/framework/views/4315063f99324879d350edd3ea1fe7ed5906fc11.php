
<?php $__env->startSection('content'); ?>

<div>
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div><br />
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre completo</td>
                <td>foto</td>
                <td>perfil</td>
                <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $candidatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($candidato->id); ?></td>
                <td><?php echo e($candidato->nombrecompleto); ?></td>
                <td>
                    <img src="images/<?php echo e(/$candidato->foto); ?>" width="128px" height="128px">
                </td>
                <td>
                    <a href="pdf/<?php echo e($candidato->perfil); ?>">
                        <img src="/images/pdf.png">
                    </a>
                </td>

                <td><?php echo e($candidato->foto); ?></td>
                <td><?php echo e($candidato->perfil); ?></td>
                <td><a href="<?php echo e(route('candidato.edit', $candidato->id)); ?>" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="<?php echo e(route('candidato.destroy', $candidato->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Esta seguro de borrar <?php echo e($candidato->nombrecompleto); ?>')">Del</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/candidato/list.blade.php ENDPATH**/ ?>