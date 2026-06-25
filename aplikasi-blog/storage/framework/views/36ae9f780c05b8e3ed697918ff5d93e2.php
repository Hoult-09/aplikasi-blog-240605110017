<?php $__env->startSection('title', 'Beranda — Blog Kami'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-4">

    
    <div class="col-lg-8">
        <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php echo $__env->make('pengunjung.partials.kartu-artikel', ['a' => $a], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="card card-artikel p-5 text-center text-muted">
                Belum ada artikel<?php echo e($kategoriAktif ? ' pada kategori "' . $kategoriAktif->nama_kategori . '"' : ''); ?>.
            </div>
        <?php endif; ?>
    </div>

    
    <div class="col-lg-4" id="kategori">
        <?php echo $__env->make('pengunjung.partials.widget-kategori', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pengunjung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\sistem_manajemen_blog\aplikasi-blog\resources\views/pengunjung/index.blade.php ENDPATH**/ ?>