

<?php $__env->startSection('content'); ?>

<?php if(count($errors)>0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e($error); ?>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session('success')); ?>

    </div>
<?php endif; ?>

<div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria</h6>
        </div>
  <div class="card-body">
    <form action="<?php echo e(route('kriteria.update' , $kriteria->id )); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
      <div class="form-group">
          <label>Kode</label>
          <input type="text" class="form-control" name="kode" value="<?php echo e($kriteria->kode); ?>">
      </div>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo e($kriteria->nama); ?>">
    </div>
    <div class="form-group">
        <label>Bobot</label>
        <input type="text" class="form-control" name="bobot" value="<?php echo e($kriteria->bobot); ?>">
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block">Update Kriteria</button>
        <a href="<?php echo e(route('kriteria.index')); ?>" class="btn btn-primary btn-block"> Kembali </a>
    </div>
  </form>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/kriteria/edit.blade.php ENDPATH**/ ?>