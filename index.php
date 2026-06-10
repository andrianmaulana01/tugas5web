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

    <?php // membuka tag PHP

    $nama = $_GET['nama'] ?? '';
    $alamat = $_GET['alamat'] ?? '';
    $tanggal_lahir = $_GET['tanggal_lahir'] ?? '';

    // di sini nanti kita akan tampilkan variabel $nama, $alamat, dan $tanggal_lahir
    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
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