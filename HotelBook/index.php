<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Hotel Booking App</title>
</head>

<body>
    <header class="bg-dark text-white text-center py-3">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ml-4 active">
                        <a class="nav-link h3" href="product.php" id="nav-produk" style="font-size: 20px;">HotelBooks</a>
                    </li>
                    <li class="nav-item ml-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'product.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="product.php" id="nav-produk">Produk</a>
                    </li>
                    <li class="nav-item ml-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'prices.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="prices.php" id="nav-daftar-harga">Daftar Harga</a>
                    </li>
                    <li class="nav-item ml-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="about.php" id="nav-tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item ml-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'insertHotel.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="insertHotel.php" id="nav-pesan-kamar">Pesan Kamar</a>
                    </li>
                    <li class="nav-item ml-4 <?php echo (basename($_SERVER['PHP_SELF']) == 'listHotel.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="listHotel.php" id="nav-lihat-pesanan">Lihat Pesanan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>