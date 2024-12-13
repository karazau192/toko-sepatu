<?php
$title = "Tabel Pemesanan Sepatu";
$orders = [
    ["no" => 1, "name" => "Ani", "email" => "Ani@gmail.com", "phone" => "0813896478", "model" => "Nike", "size" => 38, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 2, "name" => "Anto", "email" => "Anto@gmail.com", "phone" => "081389438", "model" => "Diadora", "size" => 40, "quantity" => 1, "payment" => "Belum lunas"],
    ["no" => 3, "name" => "Agus", "email" => "Agus@gmail.com", "phone" => "081383478", "model" => "Reebok", "size" => 38, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 4, "name" => "Anadin", "email" => "Anadin@gmail.com", "phone" => "081389790", "model" => "Adidas", "size" => 39, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 5, "name" => "Andi", "email" => "Andi@gmail.com", "phone" => "081389790", "model" => "Nike", "size" => 39, "quantity" => 2, "payment" => "Lunas"],
    ["no" => 6, "name" => "Andin", "email" => "Andin@gmail.com", "phone" => "081389777", "model" => "Converse", "size" => 42, "quantity" => 1, "payment" => "Belum Lunas"],
    ["no" => 7, "name" => "Anji", "email" => "Anji@gmail.com", "phone" => "081449777", "model" => "Converse", "size" => 40, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 8, "name" => "Adrian", "email" => "Adrian@gmail.com", "phone" => "086749777", "model" => "Adidas", "size" => 40, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 9, "name" => "Supri", "email" => "Supri@gmail.com", "phone" => "086734777", "model" => "Reebok", "size" => 38, "quantity" => 1, "payment" => "Lunas"],
    ["no" => 10, "name" => "Gilang", "email" => "Gilang@gmail.com", "phone" => "086444777", "model" => "Reebok", "size" => 39, "quantity" => 1, "payment" => "Lunas"]
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
        <a class="buttonhome" href="index.php"><h1>Toko Sepatuku</h1></a>
        <nav>
            <ul>
                <li><a href="portal.php">PORTAL</a></li>
                <li><a href="forminput.php">INPUT</a></li>
                <li><a href="table.php">TABLE</a></li>
            </ul>
        </nav>
    </header>

    <h1><?php echo $title; ?></h1>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>No Tlp</th>
                <th>Model Sepatu</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Status Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['no']; ?></td>
                <td><?php echo $order['name']; ?></td>
                <td><?php echo $order['email']; ?></td>
                <td><?php echo $order['phone']; ?></td>
                <td><?php echo $order['model']; ?></td>
                <td><?php echo $order['size']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['payment']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="forminput.php"><button class="submit">Close</button></a>
</body>
</html>
