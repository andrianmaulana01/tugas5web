<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form method="GET">
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
                <div>
            <label>NPM</label> <br>
            <input name="npm" type="text" placeholder="Masukkan NPM">
        </div>

        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <label>Tanggal Lahir</label> <br>
            <input name="tanggal_lahir" type="date">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <br> <?php // membuka tag PHP

    // Menangkap data NPM dari URL
    $nama = $_GET['nama'] ?? '';
    $npm = $_GET['npm'] ?? '';
    $alamat = $_GET['alamat'] ?? '';
    $tanggal_lahir = $_GET['tanggal_lahir'] ?? '';

    // Menampilkan data yang diinputkan
    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }
    
    if ($npm) {
        echo "<strong>NPM:</strong> {$npm} <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }

    if ($tanggal_lahir) {
        // Format tanggal menjadi dd-mm-yyyy
        $format_tanggal = date("d-m-Y", strtotime($tanggal_lahir));
        echo "<strong>Tanggal Lahir:</strong> {$format_tanggal} <br>";
    }

    // jangan lupa tutup tag PHP
    ?>

</body>
</html>