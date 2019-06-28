$(function () {
	$('.tombol-modal-tambah').on('click', function () {
		$('.modal-title').html('Tambah Data Mahasiswa');
	});

	$('.tampil-modal-edit').on('click', function () {
		$('.modal-title').html('Edit Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Edit Data');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function (data) {
				$('#nama').val(data.nama);
				$('#nrp').val(data.nrp);
				$('#jurusan').val(data.jurusan);
				$('#email').val(data.email);
				$('#id').val(data.id);
			}
		});
	});
});