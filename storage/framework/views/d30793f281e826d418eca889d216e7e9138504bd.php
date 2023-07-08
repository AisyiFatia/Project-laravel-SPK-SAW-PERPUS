
<?php $__env->startSection('content'); ?>

<!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang di Menu Utama Admin
                    </h6>
                </div>
                <div class="card-body">
                    <p>
                        Selamat Datang di Menu Utama Admin, ini adalah tentang tutorial perhitungan algoritma SAW
                    </p>
                </div>
            </div>

        </div>
    </div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Produk</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td><?php echo e($item->nama); ?></td>
                            
                            <td>
                                <?php echo e((($item->C1 / $C1max['subkriterias'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['subkriterias'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['subkriterias'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['subkriterias'])*$widget4['kriterias'])); ?>

                            </td>
                            
                            
                            
                            
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/home.blade.php ENDPATH**/ ?>