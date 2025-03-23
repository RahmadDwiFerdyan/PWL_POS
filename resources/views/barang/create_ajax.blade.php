    <form action="{{ url('/barang/ajax') }}" method="POST" id="form-tambah">
        @csrf
        <div id="modal-master" class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kategori Barang</label>
                        <select name="kategori_id" id="kategori_id" class="form-control" required>
                            <option value="">- Pilih Katgeori -</option>
                            @foreach($kategori as $k)
                                <option value="{{ $k->kategori_id }}">{{ $k->kategori_nama }}</option>
                            @endforeach
                        </select>
                        <small id="error-kategori_id" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>barang_kode</label>
                        <input value="" type="text" name="barang_kode" id="barang_kode" class="form-control" required>
                        <small id="error-barang_kode" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>barang_nama</label>
                        <input value="" type="text" name="barang_nama" id="barang_nama" class="form-control" required>
                        <small id="error-barang_nama" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>harga_beli</label>
                        <input value="" type="text" name="harga_beli" id="harga_beli" class="form-control" required>
                        <small id="error-harga_beli" class="error-text form-text text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label>harga_jual</label>
                        <input value="" type="text" name="harga_jual" id="harga_jual" class="form-control" required>
                        <small id="error-harga_jual" class="error-text form-text text-danger"></small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>

<script>
    $(document).ready(function () {
    $("#form-tambah").validate({
        rules: {
            kategori_id: { required: true, number: true },
            barang_kode: { required: true, minlength: 3, maxlength: 10 },
            barang_nama: { required: true, minlength: 3, maxlength: 100 },
            harga_beli: { required: true, minlength: 3, maxlength: 100 },
            harga_jual: { required: true, minlength: 3, maxlength: 100 }
        },
        submitHandler: function (form) {
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: true,
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Cari elemen modal terdekat dan tutup
                                $('#modal-master').closest('.modal').modal('hide');
                                if (typeof dataBarang !== 'undefined') {
                                    dataBarang.ajax.reload();
                                }
                            }
                        });
                    } else {
                        $('.error-text').text('');
                        $.each(response.msgField, function (prefix, val) {
                            $('#error-' + prefix).text(val[0]);
                        });
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Kesalahan',
                            text: response.message
                        });
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan pada server: ' + error
                    });
                }
            });
            return false;
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>