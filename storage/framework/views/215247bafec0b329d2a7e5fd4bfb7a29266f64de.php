<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        

                            
                        
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->C1 / $C1max['subkriterias']); ?></td>
                            <td><?php echo e($item->C2 / $C2max['subkriterias']); ?></td>
                            <td><?php echo e($item->C3 / $C3max['subkriterias']); ?></td>
                            <td><?php echo e($item->C4 / $C4max['subkriterias']); ?></td>
                        
                    </tr>
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH C:\SPK PERPUS\PERPUS\resources\views/admin/saw/normalisasi.blade.php ENDPATH**/ ?>