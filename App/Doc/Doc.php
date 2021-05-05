<?php 

// =====================================
// ============ DOKUMENTASI ============
// =====================================




// PENGATURAN DATABASE
// -------------------

/*
	Untuk mengatur jika membutuhka database. 
	berada di folder App/Pengaturan/Pengaturan di bagian Database
*/





// PENGATURAN BASE URL
// -------------------

/*
	Base url di gunakan untuk mengatur url default dari sebuah website.
	Bisa di di atur di folder App/Pengaturan di bagian URL
	
*/



// PENGATURAN CONTOLLER
// --------------------

/*
	Controller default untuk memanggil controller yang berada di BASE URL
	Bisa di atur di folder App/Pengaturan dibagian Default Controller

	Di bagian Default Method "Kalau bisa jangan dirubah"
*/


// PEMBUATAN MODEL
// ---------------

/*
	Buat file model di folder models

	lalu syntak tulis syntak dasar


	<?php
	class Nama_file {
		private $db;

		public function __construct(){
			$this-db = new Database
		}


		
		method anda disini	

		ingat -> nama untuk menampung class Database bebas , tidak harus db


	}

*/





// PENGATURAN VIEW DAN MODEL
// -------------------------

/*
	Untuk load view dan model digunakan di Controller
	dengan memanggil method view dan controller

	view
		$this->view('file');	tanpa .php
								syntak tersebut berarti akan memanggil file.php di folder view

		$this->view('masuk/file');
								syntak ini memanggil file.php di dalam folder view dan di dalam folder masuk



	Model
		$this->model('Nama_model');

*/



// PARSING DATA KE VIEW
// --------------------

/*
	Cara membawa data untuk di tampilkan di view cukup muda

	Controller:	$variabel['judul'] = "Home";
				$this->view('anang/index', $variabel);


	View:	di folder anang dan file index.php
			<title> <?php echo $data['judul']; ?> </title>

			Untuk penggilan data yang di bawah dari controller harus menggunakan 
			$data['nama_index'];


*/



// PENAMAAN FILE CONTROLLERS, MODELS, VIEWS
// ----------------------------------------

/*
	Untuk penaam file harus menggunakan Huruf Besar
	contoh penamaan controller : Mahasiswa.php
	contoh penamaan model : Mahasiswa_model.php

	Huruf pertama harus huruf besar

	untuk penamaan view, bebas. 
	bisa kecil semua bisa huruf kapital sesuka kalian
*/







// PENGGUNAAN DATABASE
// -------------------

/*
	1. buat object database di model
		$this->db = new Database;

	2. tulis qury database di method query
		$this->db->query("SELECT * FROM nama_tabel");

	3. type return dari model yang diterima di controller
		- return rowCount()		: menghitung baris
		- return resultSet()	: mengambil semua baris
		- return single()		: mengambil satu baris tertentu

	4. untuk query yang mengubah isi database maka wajib menggunakan method bind dan execute
		- insert data : 
			$this->db->query("INSERT INTO nama_tabel VALUES(:param, :param2)");

			$this->db->bind("param", $variabel_penampung);
			$this->db->bind("param2", $variabel_penampung);

			$this->db->execute();


/*



// PENGGUNAAN FLASHER
// ------------------

/*
	1. Setting pesan
		Pesan::setPesan(isi_pesan, aksi, tipe_css);

	2. Panggil pesan
		Pesan::getPesan();

	3. Untuk mengatur desain pesan bisa ke Folder App/Kendali/Pesan dan di method getPesan();
*/












// PENGGUNAAN IMG CSS JS 
// ---------------------

/*
	Cara menyimpan file tersebut harus berada di dalam folder MyFramework
	atau setara dengan file index.php atau setara dengan folder App

	1.) Buat folder (contoh : Assets)
	2.) Didalam folder buat folder lagi IMG , CSS,  JS
	3.) Simpan img kalian di Folder IMG, css kalian di CSS, js kalian di JS

	ingat -> nama folder bebas sesuka kalian

	Cara akses di view dengan cara
	misal :
	<img src="<?php echo BASEURL; ?>/img/anang.jpg">


	ingat -> baseurl atur sebagai letak folder kalian

	disi saya asumsikan kalian meletakkan folder MyFramework nya di

	htdoc : untuk windows
	html  : untuk linux

	maka base url : http://localhost/MyFramework/

	jika kalian meletakkan folder MyFramework nya di dalam folder lain maka tingal
	sesuaikan saja
	

*/






// ==========================================================
// ==========================================================
// =================== ANANG NUR PRASETYA ===================
// ====================== TAHUN 2021 ========================
// =================== WA : 082139650264 ====================
// ============== Email : anangnr.pras@gmail.com ============
// ==========================================================
// ==========================================================