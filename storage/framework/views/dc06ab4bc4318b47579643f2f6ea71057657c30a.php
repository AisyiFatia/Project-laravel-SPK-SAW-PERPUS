
<?php $__env->startSection('content'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary float-right"><i
                    class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
            <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Tahun Terbit</th>
                            <th width="50px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td><?php echo e($item->nama_buku); ?></td>
                                <td><?php echo e($item->tahun_terbit); ?></td>
                                <td>
                                    <div class="container">
                                        <a href="<?php echo e(route('produk.edit', $item->id)); ?>"
                                            class="btn bg-gradient-success btn-sm text-white"><i
                                                class="fas fa-fw fa-edit"></i></a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/produk/index.blade.php ENDPATH**/ ?>