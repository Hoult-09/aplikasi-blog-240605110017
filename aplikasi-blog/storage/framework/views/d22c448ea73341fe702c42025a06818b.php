
<article class="card card-artikel mb-4">
    <img src="<?php echo e($a->gambar_url); ?>" alt="<?php echo e($a->judul); ?>" class="gambar">
    <div class="card-body p-4">
        <span class="badge-kategori"><?php echo e($a->kategori->nama_kategori ?? '-'); ?></span>

        <h2 class="h4 fw-bold mt-3 mb-2">
            <a href="<?php echo e(route('pengunjung.show', $a->id)); ?>" class="text-dark"><?php echo e($a->judul); ?></a>
        </h2>

        <div class="d-flex align-items-center gap-2 mb-3 text-muted small">
            <span class="avatar-inisial"><?php echo e(strtoupper(substr($a->penulis->nama_depan ?? '?', 0, 1))); ?></span>
            <span><?php echo e($a->penulis ? $a->penulis->nama_lengkap : 'Anonim'); ?></span>
            <span>&middot;</span>
            <span><?php echo e($a->hari_tanggal); ?></span>
        </div>

        <p class="text-secondary mb-3"><?php echo e($a->ringkasan); ?></p>

        <a href="<?php echo e(route('pengunjung.show', $a->id)); ?>" class="btn btn-baca">Baca Selengkapnya &rarr;</a>
    </div>
</article>
<?php /**PATH D:\Web\laragon\www\aplikasi-blog\resources\views/pengunjung/partials/kartu-artikel.blade.php ENDPATH**/ ?>