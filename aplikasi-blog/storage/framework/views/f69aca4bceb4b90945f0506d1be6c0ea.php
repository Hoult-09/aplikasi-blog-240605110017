<?php $__env->startSection('title', $artikel->judul . ' — Blog Kami'); ?>

<?php $__env->startSection('content'); ?>


<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb small">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('pengunjung.index')); ?>" style="color: var(--green)">Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('pengunjung.index', ['kategori' => $artikel->id_kategori])); ?>" style="color: var(--green)">
                <?php echo e($artikel->kategori->nama_kategori ?? '-'); ?>

            </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
            <?php echo e(\Illuminate\Support\Str::limit($artikel->judul, 40)); ?>

        </li>
    </ol>
</nav>

<div class="row g-4">

    
    <div class="col-lg-8">
        <article class="card card-artikel">
            <img src="<?php echo e($artikel->gambar_url); ?>" alt="<?php echo e($artikel->judul); ?>" class="gambar">
            <div class="card-body p-4 p-md-5">
                <span class="badge-kategori"><?php echo e($artikel->kategori->nama_kategori ?? '-'); ?></span>

                <h1 class="h3 fw-bold mt-3 mb-3"><?php echo e($artikel->judul); ?></h1>

                <div class="d-flex align-items-center gap-2 mb-4">
                    <span class="avatar-inisial"><?php echo e(strtoupper(substr($artikel->penulis->nama_depan ?? '?', 0, 1))); ?></span>
                    <div class="small">
                        <div class="fw-semibold text-dark"><?php echo e($artikel->penulis ? $artikel->penulis->nama_lengkap : 'Anonim'); ?></div>
                        <div class="text-muted"><?php echo e($artikel->hari_tanggal); ?></div>
                    </div>
                </div>

                <div class="fs-6 lh-lg text-secondary">
                    <?php echo nl2br(e($artikel->isi)); ?>

                </div>

                <hr class="my-4">
                <a href="<?php echo e(route('pengunjung.index')); ?>" class="btn btn-baca">&larr; Kembali ke Beranda</a>
            </div>
        </article>
    </div>

    
    <div class="col-lg-4">
        <div class="card widget p-3">
            <h2 class="h5 fw-bold mb-3 px-2">Artikel Terkait</h2>

            <?php $__empty_1 = true; $__currentLoopData = $terkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('pengunjung.show', $t->id)); ?>"
                   class="d-flex gap-3 align-items-center p-2 rounded text-dark terkait-item">
                    <img src="<?php echo e($t->gambar_url); ?>" alt=""
                         style="width:64px;height:48px;object-fit:cover;border-radius:8px;background:#dfe6ec;flex-shrink:0;">
                    <div>
                        <div class="fw-semibold small lh-sm"><?php echo e(\Illuminate\Support\Str::limit($t->judul, 50)); ?></div>
                        <div class="text-muted" style="font-size:.75rem"><?php echo e($t->hari_tanggal); ?></div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-muted small px-2 mb-0">Belum ada artikel terkait.</p>
            <?php endif; ?>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pengunjung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\sistem_manajemen_blog\aplikasi-blog\resources\views/pengunjung/detail.blade.php ENDPATH**/ ?>