<?php
include("koneksi.php");
    if (isset($_POST['submit'])) 
    {
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO produk(name, price,) VALUES(?, ?)");
        $stmt->execute([$_POST['name'],  $_POST['price']] );
    }

?>
<form action="/index.php?page=tambah" method="post" class="d-flex flex-column gap-2">
     <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="price" name="price" id="price" class="form-control">
    </div>
    <input type="submit" value="submit" name="submit" class="btn btn-primary">
</form>