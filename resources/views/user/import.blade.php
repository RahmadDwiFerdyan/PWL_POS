<form action="{{ url('/user/import_ajax') }}" method="POST" id="form-import" enctype="multipart/form-data">
    @csrf
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="template_download">Download Template</label>
                    <a href="{{ asset('template_user.xlsx') }}" class="btn btn-info btn-sm" download>
                        <i class="fa fa-file-excel"></i> Download
                    </a>
                    <small id="error-kategori_id" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label for="file_user">Pilih File</label>
                    <input type="file" name="file_user" id="file_user" class="form-control" accept=".xls,.xlsx,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                    <small id="error-file_user" class="error-text form-text text-danger"></small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function () {
    $("#form-import").validate({
        rules: {
            file_user: {
                required: true,
                extension: "xlsx"
            }
        },
        submitHandler: function (form) {
            const formData = new FormData(form); // Mengubah form menjadi FormData untuk menangani file

            $.ajax({
                url: form.action,
                type: form.method,
                data: formData,
                processData: false, // Menonaktifkan pemrosesan data untuk FormData
                contentType: false, // Menonaktifkan pengaturan contentType untuk FormData
                success: function (response) {
                    if (response.status) {
                        $('#myModal').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message
                        });
                        tableUser.ajax.reload(); // Memperbarui DataTable
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
                        title: 'Kesalahan Server',
                        text: 'Gagal menghubungi server. Silakan coba lagi.'
                    });
                    console.log('AJAX Error:', xhr.responseText);
                }
            });

            return false; // Mencegah pengiriman form default
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