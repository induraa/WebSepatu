<?php 

	$ambil = $koneksi->query("SELECT * FROM tb_produk WHERE nama_produk='$_GET[nama_produk]'");
	$pecah = $ambil->fetch_assoc();
	$fotoproduk = $pecah['foto_produk'];
	if (file_exists("../images/$fotoproduk")) {
		unlink("../images/$fotoproduk");
	}

	$koneksi->query("DELETE FROM tb_produk WHERE nama_produk='$_GET[nama_produk]'");

	echo "<script>alert('Produk Berhasil di Hapus');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";



 ?>

