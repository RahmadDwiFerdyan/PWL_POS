
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Level</h3>
            <div class="card-tools">
                <button onclick="modalAction('<?php echo e(url('/level/import')); ?>')" class="btn btn-info">Import Level</button>
                <a href="<?php echo e(url('/level/export_excel')); ?>" class="btn btn-primary"><i class="fa fa-file-excel"></i> Export Level</a>
                <a href="<?php echo e(url('/level/export_pdf')); ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-pdf"></i> Export Level</a>
                <button onclick="modalAction('<?php echo e(url('/level/create_ajax')); ?>')" class="btn btn-success">Tambah Data
                    (Ajax)</button>
            </div>
        </div>
        <div class="card-body">

            <!-- Pesan Sukses atau Error -->
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <!-- Tabel level -->
            <table class="table table-bordered table-sm table-striped table-hover" id="table-level">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode level</th>
                        <th>Nama level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false"
        data-width="75%"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        // Fungsi untuk memuat konten modal
        function modalAction(url = '') {
            $('#myModal').load(url, function () {
                $('#myModal').modal('show');
            });
        }

        // Inisialisasi DataTable
        var tableLevel;
        $(document).ready(function () {
            tableLevel = $('#table-level').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(url('level/list')); ?>",
                    dataType: "json",
                    type: "POST",
                    data: function (d) {
                        d.level_id = $('#level_id').val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "level_kode",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "level_nama",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Event untuk pencarian dengan tombol Enter
            $('#table-kategori_filter input').unbind().on('keyup', function (e) {
                if (e.keyCode === 13) { // Enter key
                    tableLevel.search(this.value).draw();
                }
            });

            $('#kategori_id').change(function () {
                tableLevel.draw();
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/level/index.blade.php ENDPATH**/ ?>