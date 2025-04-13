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
        <div class="d-flex align-items-center">
            <div class="mr-3">
                <img src="<?php echo e(asset('storage/photos/' . (Auth::user()->photo ?? 'default.jpg'))); ?>" class="img-thumbnail" width="150">
            </div>
            <div class="flex-grow-1">
                <div class="border p-3 rounded">
                    <p><strong>Nama: </strong><?php echo e(Auth::user()->nama); ?></p>
                    <p><strong>Username: </strong> <?php echo e(Auth::user()->username); ?></p>
                    <p><strong>Level: </strong> <?php echo e(Auth::user()->level->level_nama); ?></p>
                </div>
            </div>
        </div>
        <form action="<?php echo e(url('/user/profile')); ?>" method="POST" enctype="multipart/form-data" class="mt-3">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="photo">Ganti Foto Profil</label>
                <input type="file" name="photo" class="form-control mt-2">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        </form>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('warning')): ?>
    <div class="alert alert-warning">
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/welcome.blade.php ENDPATH**/ ?>