<?php
if (empty($_POST["nama"]) && empty($_POST["email"])) {
    header("Location: halaman_error.php");

} elseif (empty($_POST["nama"])) {
    header("Location: nama_error.php");

} elseif (empty($_POST["email"])) {
    header("Location: email_error.php");

} elseif (isset($_POST['nama']) && isset($_POST['email'])) {
    echo "<center>Nama : " . $_POST['nama'] . "</center><br>";
    echo "<center>Email : " . $_POST['email'] . "</center><br>";
}
?>