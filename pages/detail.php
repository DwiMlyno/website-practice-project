<?php
include "koneksi.php";
$conn = connect();
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$stmt = $conn->prepare("SELECT * FROM produk WHERE id=?");
$stmt->execute([$id]);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$produk = $stmt->fetch();
?>
<nav class=" navbar-warning navbar-expand-lg bg-dark text-red">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <div class="logo">
                    <li class="nav-item active">
                        <h2 style="font-family:Brush Script MT">DM Store</h2>
                        <!-- <a href="index.php" class="nav-link">DM Store</a> -->
                        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    </li>
                </div>
                <li class="nav-item dropdown">
                    <a style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serifBrush Script MT;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="JerseyHome.php">Jersey Home</a>
                        <a class="dropdown-item" href="JerseyAway.php">Jersey Away</a>
                        <a class="dropdown-item" href="JerseyGK.php">Jersey GoalKeeper</a>
                        <a class="dropdown-item" href="JerseyTraining.php">Jersey Training</a>
                    </div>
                </li>
            </ul>
            <!-- <div class="diskon">
                <img src="/gambar/navbar.jpg" style="width:500px;height:40px;" alt="">
            </div> -->
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

            </form> -->
            <div class="d-flex flex-row row-reverse mx-2">
                <a href="/index.php?page=tambah" class="btn btn-primary">Tambah</a>
            </div>
            <br>
            <div class="d-flex flex-row row-reverse">
                <a href="index.php" class="btn btn-primary">Home</a>
            </div>
            
            <!-- <input class="search"> -->
        </div>
    </nav>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="row row-produk">
        <div class="col lg-5">
            <figure class="figure">
                <img src="<?php echo $produk["image"] ?>" alt="Card image cap" class="figure-img img-fluid" style="border-radius: 5px; width:450px;" >
                <figcaption class="figure-caption text-center">
                <img src="<?php echo $produk["image"] ?>" alt="Card image cap" class="figure-img img-fluid" style="border-radius: 10px; margin:5px; width:70px;" >
                <img src="<?php echo $produk["image"] ?>" alt="Card image cap" class="figure-img img-fluid" style="border-radius: 10px; margin:5px; width:70px;" >
                <img src="<?php echo $produk["image"] ?>" alt="Card image cap" class="figure-img img-fluid" style="border-radius: 10px; margin:5px; width:70px;" >
                </figcaption>
            </figure>
        </div>
        <div class="col-lg-7">
            <h4><?php echo $produk["name"] ?></h4>
            <div class="garis"></div>
            <h3 class="text-muted">Rp. <?php echo $produk["price"] ?></h3>

            <button type="button" class="btn btn-dark btn-sm">-</button>            
            <span class="mx-2">16</span>
            <button type="button" class="btn btn-warning btn-sm">+</button>
            <span class="mx-2">Tersisa 700 buah</span>
            <div class="deskripsi my-5">
                <li><?php echo $produk["detail1"] ?></li>
                <li><?php echo $produk["detail2"] ?></li>
                <li><?php echo $produk["detail3"] ?></li>
                <li><?php echo $produk["detail4"] ?></li>
                <li><?php echo $produk["detail5"] ?></li>
                <li><?php echo $produk["detail6"] ?></li>
            </div>
            <div class="btn-produk mt-5">
                <a href="#" class="btn btn-dark text-white btn-lg btn-custom">Keranjang</a>
                <a href="#" class="btn btn-warning text-white btn-lg btn-custom">Beli sekarang</a>
            </div>
        </div>
    </div>
</div>
<style>
    .container {
        font-family: Arial, Helvetica, sans-serif;
        display: inline;
        position: absolute;
    }
</style>
<!-- <img src="<?php echo $produk["image"] ?>" alt="Card image cap" style="float:left"></a>
<h2><?php echo $produk["name"] ?> </h2>
<li><?php echo $produk["detail"] ?></li>
<strong>
    <p>Rp. <?php echo $produk["price"] ?></p>
</strong> -->