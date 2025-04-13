<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Halo, apa kabar?</h3>
        <div class='card-tools'></div>
    </div>
    <div class="card-body">
        Selamat datang, semuanya. Ini adalah halaman utama dari aplikasi ini.
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Profil Saya</h3>
    </div>
    <div class="card-body">
        <form action="<?php echo e(url('/user/profile')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="photo">Foto Profil</label><br>
                <img src="<?php echo e(asset('storage/photos/' . (Auth::user()->photo ?? 'default.png'))); ?>" class="img-thumbnail" width="150">
                <input type="file" name="photo" class="form-control mt-2">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/welcome.blade.php ENDPATH**/ ?>