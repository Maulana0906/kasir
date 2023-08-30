<?php 
    if(!isset($_GET["username"]) ||
       !isset($_GET["password"]) ){
        header("Location: login.php");
        exit;
       }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
</head>

<body>
    <!-- nav start -->
    <header class="navigation">
        <i class="fa fa-shopping-cart"></i>
        <h3> Kasir kita</h3>
    </header>
    <!-- nav end -->


    <!-- content start -->
    <div class="container">
        <div class="content-1">
            <div class="wrapper-1">
                <h2>Menu</h2>
            </div>
            <div class="wrapper-2">
                <ul>
                    <a id="a-nav1" href="#">
                        <li> Dashboard</li>
                    </a>
                    <a id="a-nav1" href="#" onclick="navbuka('1')">
                        <li> Master <i class="fa fa-sort-desc"> </i>
                            <ul id="ul-nav-1">
                                <a id="slide-nav1" href="#">
                                    <li> Barang</li>
                                </a>
                                <a id="slide-nav1" href="#">
                                    <li> Kategori</li>
                                </a>
                            </ul>
                        </li>
                    </a>
                    <a id="a-nav1" href="#" onclick="navbuka('2')">
                        <li> Transaksi <i class="fa fa-sort-desc"></i>
                            <ul id="ul-nav-2">
                                <a id="slide-nav2" href="#">
                                    <li> Barang</li>
                                </a>
                                <a id="slide-nav2" href="#">
                                    <li> Kategori</li>
                                </a>
                            </ul>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="content-2">
            <h1> Dashboard</h1>
            <div class="card">
                <div class="cont-c1">
                    <h3> Nama Barang </h3>
                </div>
                <div class="cont-c2">
                    <h1> 3 </h1>
                </div>
                <div class="cont-c3">
                    <h2> Tabel Barang >> </h2>
                </div>
            </div>
            <div class="card">
                <div class="cont-c1">
                    <h3> Stok Barang </h3>
                </div>
                <div class="cont-c2">
                    <h1> 45 </h1>
                </div>
                <div class="cont-c3">
                    <h2> Tabel Barang >> </h2>
                </div>
            </div>
            <div class="card">
                <div class="cont-c1">
                    <h3> Telah Terjual </h3>
                </div>
                <div class="cont-c2">
                    <h1> 4 </h1>
                </div>
                <div class="cont-c3">
                    <h2> Tabel Laporan >> </h2>
                </div>
            </div>
            <div class="card">
                <div class="cont-c1">
                    <h3> Tabel Kategori </h3>
                </div>
                <div class="cont-c2">
                    <h1> 25 </h1>
                </div>
                <div class="cont-c3">
                    <h2> Tabel Kategori >> </h2>
                </div>
            </div>
            <div class="cont-bt"> 
            <button type="submit" name="submit" class="logout">
                Logout
            </button>
        </div>
        </div>

    </div>
    <!-- content end -->
    <script src="script.js"></script>
</body>

</html>