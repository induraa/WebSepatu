<?php  
  session_start();
  $koneksi = new mysqli("localhost", "root", "","tokok");
 
 ?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>ABC shoes</title>
  </head>
  <body style="background-color: #b8b1b1;">


    <nav class="navbar navbar-expand-lg navbar-light bg-warning" style="background-color: rgba(60, 58, 58, 0.8) ;">
      <div class="container">
        <a class="navbar-brand" href="#">ABC Shoes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="checkout.php">Checkout</a>
           <?php if (isset($_SESSION["pelanggan"])) : ?>
              </li>

              <li>
                <a class="nav-link" href="riwayat.php">Riwayat</a>
              </li>

               <li >
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>

           <?php else:  ?>
             </li>
               <li >
                <a class="nav-link" href="login.php">Login</a>
              </li>
           <?php endif ?>
            
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>
  <div class="container-fluid" style="margin: 0;padding: 0;">
	<div class="image" style="margin-top: -21px">
		<img src="images/bg.jpg" style="width: 100%;  height: 650px;">
	</div>
</div>
  <br>
 



    <div class="container" >

    <h4 class="text-center mt-3" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #000000; border-bottom: 2px solid #000000;">Alan Walker Pernah Belanja disini coyyy omagaa, langsung jadi Alan Runner coy.</h4>

    <h2>Produk Kami</h2>
      <div class="row">
        

        <?php $ambil = $koneksi->query("SELECT * FROM tb_produk"); ?>
        <?php while ($perproduk = $ambil->fetch_assoc()) { ?>
        <div class="col-md-3">  
          <div class="card">
              <img src="images/<?= $perproduk['foto_produk']; ?>" class="card-img-top" alt="" width="100" height="220">
              <div class="card-body">
                <h6 class="card-title"><?= $perproduk['nama_produk']; ?></h6>
                <h3 class="card-title"><?= "Rp. " .number_format($perproduk['harga_produk']);  ?></h3>
                <p class="card-text"><?= substr($perproduk['deskripsi_produk'], 0, 50);  ?></p>
                <a href="beli.php?id=<?= $perproduk['nama_produk']; ?>" class="btn btn-primary">Beli Produk</a>
                 <a href="detailproduk.php?id=<?= $perproduk['nama_produk']; ?>" class="btn btn-warning">Detail</a>
              </div>
            </div>
        </div>
        <?php } ?>

      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <br>
  </body>
  <footer style="background-color: #000000; border-top: 4px solid #000000;  ">
          <br>
		<div class="container m-t-100" style="padding-bottom: 50px;">
			<div class="row">
				<div class="col-md-4">
					<h3 style="color: #ffffff"><b>ABC Shoes</b></h3>
					<p style="color: #ffffff">Jl. Ringroad Barat, Gamping Kidul, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55184</p>
					<p style="color: #ffffff"><i class="glyphicon glyphicon-earphone"></i> +1111111111</p>
					<p style="color: #ffffff"><i class="glyphicon glyphicon-envelope"></i> abc@mail.com</p>
				</div>
				<div class="col-md-4">
					<h5><b></b></h5>
					<p><a href=""  style="color: #000"></a></p>
					<p><a href=""  style="color: #000"></a></p>
					<p><a href=""  style="color: #000"></a></p>
				</div>

				<div class="col-md-4">
					
				</div>
			</div>

		</div>

		<div class="copy" style="background-color: #000000; padding: 5px; color: #ffffff; text-align: center;">
			<span>Copyright&copy; ABC Shoes</span>
		</div>
	</footer>
</html>