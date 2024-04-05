<!-- Contoh implementasi GET -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    Name: <input type="text" name="name">
    Weight: <input type="text" name="weight">
    <input type="submit">
</form>

<?php
if ($_GET["name"] || $_GET["weight"]) {
    echo "Welcome " . $_GET['name'] . "<br>";
    echo "You are " . $_GET['weight'] . " kgs in weight.";
}
?>

<!-- Contoh implementasi POST -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name">
    Weight: <input type="text" name="weight">
    <input type="submit">
</form>

<?php
if ($_POST["name"] || $_POST["weight"]) {
    echo "Welcome " . $_POST['name'] . "<br>";
    echo "You are " . $_POST['weight'] . " kgs in weight.";
}
?>
