
<?php $__env->startSection('content'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo e(route('kriteria.create')); ?>" class="btn btn-primary float-right"><i
                    class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
            <h5 class="m-0 font-weight-bold text-primary">Kriteria</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__currentLoopData = $kriteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($item->kode); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->bobot); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/kriteria/index.blade.php ENDPATH**/ ?>