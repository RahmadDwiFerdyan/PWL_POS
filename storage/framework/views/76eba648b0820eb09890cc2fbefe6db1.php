

<?php $__env->startSection('content'); ?> 
<div class="container">
  <h1>Profil Saya</h1>
  <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    
    <div class="form-group">
      <label for="photo">Foto Profil</label>
      <input type="file" name="photo" id="photo" class="form-control">
    </div>
    
    <div class="form-group">
      <img src="<?php echo e(Storage::url('photo_user/' . $user->photo)); ?>" alt="Foto Profil" class="img-thumbnail" width="150">
    </div>

    <button type="submit" class="btn btn-primary">Update Foto Profil</button>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/profile/index.blade.php ENDPATH**/ ?>