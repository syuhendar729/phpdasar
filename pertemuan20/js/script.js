// ambil elemen yg dibutuhkan

var keyword = document.getElementById('keyword')
var tombolcari = document.getElementById('tombolcari')
var container = document.getElementById('container')

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
	// body...

	// buat objek ajax
	var xhr = new XMLHttpRequest()

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		// body...
		if ( xhr.readyState == 4 && xhr.status == 200 ) {
			// console.log('ajax ok')
			container.innerHTML = xhr.responseText
		}
	}

	// eksekusi ajax
	xhr.open('GET', 'ajax/anime.php?keyword=' + keyword.value, true)
	xhr.send()
})





