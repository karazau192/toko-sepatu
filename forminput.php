<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Sepatu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a class="buttonhome" href="index.php"><h1><?php echo "Toko Sepatuku"; ?></h1></a>
        <nav>
            <ul>
                <li><a href="pesan.php">PESAN</a></li>
                <li><a href="forminput.php">INPUT</a></li>
                <li><a href="table.php">TABLE</a></li>
            </ul>
        </nav>
    </header>

    <h1>Form Pemesanan Sepatu</h1>
    <form id="orderForm" action="proses_pemesanan.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama Pelanggan:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="number" id="telepon" name="telepon" placeholder="Masukkan nomor telepon Anda" required>
        </div>

        <div class="form-group">
            <label for="model">Model Sepatu:</label>
            <input type="checkbox" name="model[]" value="Nike">Nike
            <input type="checkbox" name="model[]" value="adidas">adidas
            <input type="checkbox" name="model[]" value="Converse">Converse
            <input type="checkbox" name="model[]" value="Reebok">Reebok
            <input type="checkbox" name="model[]" value="Diadora">Diadora
            <input type="checkbox" name="model[]" value="Puma">Puma
        </div>

        <div class="form-group">
            <label for="ukuran">Ukuran Sepatu:</label>
            <input type="radio" name="ukuran" value="35">35
            <input type="radio" name="ukuran" value="36">36
            <input type="radio" name="ukuran" value="37">37
            <input type="radio" name="ukuran" value="38">38
            <input type="radio" name="ukuran" value="39">39
            <input type="radio" name="ukuran" value="40">40
            <input type="radio" name="ukuran" value="41">41
            <input type="radio" name="ukuran" value="42">42
            <input type="radio" name="ukuran" value="43">43
            <input type="radio" name="ukuran" value="ukuran lainnya">Custom Ukuran
        </div>

        <div class="form-group">
            <label for="pembayaran">Metode Pembayaran:</label>
            <select id="pembayaran" name="pembayaran" required>
                <option value="">Pilih metode pembayaran</option>
                <option value="Tunai">Tunai</option>
                <option value="Kartu Kredit">Kartu Kredit</option>
                <option value="Transfer Bank">Transfer Bank</option>
                <option value="e-Wallet">e-Wallet</option>
                <option value="Shopee Pay Later">Shopee Pay Later</option>
            </select>
        </div>

        <div class="form-group">
            <label for="catatan">Catatan Tambahan:</label>
            <textarea id="catatan" name="catatan" rows="4" placeholder="Tambahkan catatan jika ada"></textarea>
        </div>

        <button type="submit">Pesan Sekarang</button>
    </form>
</body>
</html>
