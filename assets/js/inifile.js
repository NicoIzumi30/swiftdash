var flashDataElement = document.querySelector('.flash-data');
var flashData = flashDataElement.getAttribute('data-flashdata');
if (flashData) {
	Swal.fire(
		'Sukses',
		'Data Berhasil ' + flashData,
		'success'
	)
}
function coba(e,href) {
    e.preventDefault();
    Swal.fire({
        title: 'Apakah anda yakin',
        text: "data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e74c3c',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Delete'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
}




