<?php
if (empty($_POST["nama"]) || empty($_POST["email"])) {
    header("Location:Error.php");

} elseif (isset ($_POST['nama']) && isset($_POST['email'])) {
    //ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    //Set timezone ke WIB
    date_default_timezone_set('Asia/Jakarta');

    echo "<h3>Selamat Datang, " . $nama . "</h3>";
    echo "<p>Nama    : $nama <p>";
    echo "<p>Email   : $email<p>";

    //menampilkan data tanggal,hari,dan jam setelah login
    echo "<p>Jam     : ". date("H:i:s") . "<p>";
    echo "<p>Hari    : ". date("l") . "<p>";
    echo "<p>Tanggal : ". date("d F Y") . "<p>";
}
?>