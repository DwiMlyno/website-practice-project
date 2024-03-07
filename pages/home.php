<?php
include "koneksi.php";
$conn = connect();
$stmt = $conn->prepare("SELECT * FROM produk");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$produkproduk = $stmt->fetchAll();
?>
<nav class=" navbar fixed-top navbar-warning navbar-expand-lg bg-dark text-red">
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
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="gambar/Store kit and jersey.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="gambar/banner2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="gambar/banner1.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="barang">
        <div class="container">
            <div class="row">
                <?php foreach ($produkproduk as $produk) : ?>
                    <div class="col-sm">
                        <div class="container mt-5 mb-5">
                            <div class="d-flex flex-row flex-wrap">
                                <div class="card border-0" style="width: 18rem;">
                                    <a href="/index.php?page=detail&id=<?php echo $produk['id']?>"><img class="card-img-top" src="<?php echo $produk["image"] ?>" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $produk["name"] ?> </h5>
                                        <strong>
                                            <p class="card-text">Rp. <?php echo $produk["price"] ?></p>
                                            <p></p>
                                        </strong>
                                        <!-- <p><?php echo $produk["description"] ?></p> -->
                                        <!-- <a href="#" class="btn btn-warning">Beli</a>
                                        <a href="#" class="btn btn-warning">Keranjang</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>