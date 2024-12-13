<?php
$title = "Toko Sepatu Sebaptu";
$headerTitle = "Toko Sepatuku";
$products = [
    ["image" => "$110 Yeezy 350 V2 Cream_Triple White CP9366.jpeg", "name" => "Sepatu Olahraga", "price" => "Rp 350.000"],
    ["image" => "Nike Launch The Tiempo VIII React Pro - SoccerBible.jpeg", "name" => "Sepatu Formal", "price" => "Rp 450.000"],
    ["image" => "download.jpeg", "name" => "Sepatu Kasual", "price" => "Rp 250.000"],
    ["image" => "Sneakers DIADORA HERITAGE Donna colore Bianco.jpeg", "name" => "Sepatu Kece", "price" => "Rp 500.000"],
    ["image" => "Reebok Club C Double Sneaker.jpeg", "name" => "Sepatu Hitzh", "price" => "Rp 700.000"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a class="buttonhome" href="index.php"><h1><?php echo $headerTitle; ?></h1></a>
        <nav>
            <ul>
                <li><a href="portal.php">PORTAL</a></li>
                <li><a href="forminput.php">INPUT</a></li>
                <li><a href="table.php">TABLE</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Home</h2>
            <h3>Selamat datang di Toko Sepatuku, destinasi pilihan bagi pecinta sepatu di seluruh Indonesia. Sebagai toko sepatu terkemuka, kami menawarkan beragam koleksi sepatu yang dirancang untuk memenuhi segala kebutuhan dan gaya hidup Anda...</h3>
            <h3>Di Toko Sepatuku, kami mengutamakan kepuasan pelanggan dengan pelayanan yang ramah dan profesional...</h3>
        </section>

        <section id="products">
            <h2>Produk Kami</h2>
            <div class="product-grid">
                <?php foreach ($products as $product): ?>
                <div class="product">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['price']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="about">
            <h2>Tentang Kami</h2>
            <h3>Toko Sepatuku telah menjadi pilihan utama bagi pelanggan yang mencari sepatu berkualitas tinggi sejak tahun 2000...</h3>
            <h3>Selama lebih dari dua dekade, Toko Sepatuku telah membangun reputasi sebagai toko yang selalu mengutamakan kepuasan pelanggan...</h3>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami di:</p>
            <ul>
                <li>Telepon: 0812-3456-7890</li>
                <li>Email: info@sebaptu.com</li>
                <li>Alamat: Jl. Merdeka No. 123, Jakarta</li>
            </ul>
        </section>
    </main>
</body>
</html>
