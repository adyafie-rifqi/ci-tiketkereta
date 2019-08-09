const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Data',
		text: 'Berhasil ' + flashData,
		type: 'success'
	});
}



$('.tombol-hapus').on('click', function (event) {
	event.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah kamu yakin ?',
		text: "data akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtoncolor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, Hapus'
	}).then((result) => {
		if (result.value == true) {
			document.location.href = href;
		} else {
			Swal.fire({
				title: 'Data',
				text: 'Gagal Dihapus',
				type: 'error'
			});
		}
	});
});
