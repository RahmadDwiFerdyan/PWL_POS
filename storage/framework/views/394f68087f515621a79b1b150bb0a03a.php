
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Barang</h3>
            <div class="card-tools">
                <button onclick="modalAction('<?php echo e(url('/barang/import')); ?>')" class="btn btn-info">Import Barang</button>
                <a href="<?php echo e(url('/barang/export_excel')); ?>" class="btn btn-primary"><i class="fa fa-file-excel"></i>Export Barang </a>
                <a href="<?php echo e(url('/barang/export_pdf')); ?>" class="btn btn-danger" target="_blank"><i class="fa fa-file-pdf"></i> Export Barang</a>
                <button onclick="modalAction('<?php echo e(url('/barang/create_ajax')); ?>')" class="btn btn-success">Tambah Data (Ajax)</button>
            </div>
        </div>
        <div class="card-body">
            <!-- Filter Data -->
            <div class="row">
                <div class="col-md-12"> 
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="kategori_id" name="kategori_id" required>
                                <option value="">- Semua -</option>
                                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->kategori_id); ?>"><?php echo e($item->kategori_nama); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <small class="form-text text-muted">Kategori Barang</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pesan Sukses atau Error -->
            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>
            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <!-- Tabel Barang -->
            <table class="table table-bordered table-sm table-striped table-hover" id="table-barang">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
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
        var tableBarang;
        $(document).ready(function () {
            tableBarang = $('#table-barang').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(url('barang/list')); ?>",
                    dataType: "json",
                    type: "POST",
                    data: function (d) {
                        d.kategori_id = $('#kategori_id').val();
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        width: "5%",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "barang_kode",
                        className: "",
                        width: "10%",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "barang_nama",
                        className: "",
                        width: "37%",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "harga_beli",
                        className: "",
                        width: "10%",
                        orderable: true,
                        searchable: false,
                        render: function (data, type, row) {
                            return new Intl.NumberFormat('id-ID').format(data);
                        }
                    },
                    {
                        data: "harga_jual",
                        className: "",
                        width: "10%",
                        orderable: true,
                        searchable: false,
                        render: function (data, type, row) {
                            return new Intl.NumberFormat('id-ID').format(data);
                        }
                    },
                    {
                        data: "kategori",
                        className: "",
                        width: "14%",
                        orderable: true,
                        searchable: false
                    },
                    {
                        data: "aksi",
                        className: "text-center",
                        width: "14%",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Event untuk pencarian dengan tombol Enter
            $('#table-barang_filter input').unbind().on('keyup', function (e) {
                if (e.keyCode === 13) { // Enter key
                    tableBarang.search(this.value).draw();
                }
            });

            // Event untuk filter kategori
            $('#kategori_id').change(function () {
                tableBarang.draw();
            });
        });
    </script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\PWL_POS\resources\views/barang/index.blade.php ENDPATH**/ ?>