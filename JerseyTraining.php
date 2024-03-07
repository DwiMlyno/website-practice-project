<?php
 $servername = "localhost";
 $username = "root";
 $password = "123";
 $conn = new PDO("mysql:host=$servername;dbname=dm-store", $username, $password);
 $kategory =isset($_GET['kategory']) ? $_GET['kategory']:
$stmt = $conn->prepare("SELECT * FROM produk WHERE kategory=?");
$stmt->execute(['Training']);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$produkproduk = $stmt->fetchAll();
?>
<div class="container">
<img src="<?php echo $produk["image"] ?>" alt="Card image cap" style="float:left"></a>
<h5><?php echo $produk["name"] ?> </h5>
<p><?php echo $produk["detail"] ?> </p>
<p >Rp. <?php echo $produk["price"] ?></p>
</div>
