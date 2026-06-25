
<div class="card widget p-3">
    <h2 class="h5 fw-bold mb-3 px-2">Kategori Artikel</h2>

    <div class="list-group list-group-flush">
        <a href="<?php echo e(route('pengunjung.index')); ?>"
           class="list-group-item <?php echo e(! $idKategori ? 'active' : ''); ?>">
            Semua Artikel <span class="badge"><?php echo e($totalArtikel); ?></span>
        </a>

        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('pengunjung.index', ['kategori' => $k->id])); ?>"
               class="list-group-item <?php echo e((int) $idKategori === $k->id ? 'active' : ''); ?>">
                <?php echo e($k->nama_kategori); ?> <span class="badge"><?php echo e($k->artikel_count); ?></span>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH D:\Web\laragon\www\aplikasi-blog\resources\views/pengunjung/partials/widget-kategori.blade.php ENDPATH**/ ?>