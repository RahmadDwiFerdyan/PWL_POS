<?php if(empty($level)): ?>
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kesalahan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                    Data tidak ditemukan
                </div>
                <a href="<?php echo e(url('/level')); ?>" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </div>
<?php else: ?>
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr><th>ID</th><td><?php echo e($level->level_id); ?></td></tr>
                    <tr><th>Kode Level</th><td><?php echo e($level->level_kode); ?></td></tr>
                    <tr><th>Nama Level</th><td><?php echo e($level->level_nama); ?></td></tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\PWL_POS\resources\views/level/show_ajax.blade.php ENDPATH**/ ?>