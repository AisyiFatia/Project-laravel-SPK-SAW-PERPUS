
<?php $__env->startSection('content'); ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
            <a href="<?php echo e(route('subkriteria.create')); ?>" class="btn btn-dark float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
        <h5 class="m-0 font-weight-bold text-dark">Subkriteria</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th><?php echo e($item->nama); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    ?>
                    <?php $__currentLoopData = $subkriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($no++); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->C1); ?></td>
                        <td><?php echo e($item->C2); ?></td>
                        <td><?php echo e($item->C3); ?></td>
                        <td><?php echo e($item->C4); ?></td>
                        <td>
                            <div class="ml-4">
                                <form action="<?php echo e(route('subkriteria.destroy', $item->id )); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <a href="<?php echo e(route('subkriteria.edit', $item->id )); ?>" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                                    <button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('apa kamu yakin akan menghapus data?')"><i class="fas fa-fw fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/subkriteria/index.blade.php ENDPATH**/ ?>