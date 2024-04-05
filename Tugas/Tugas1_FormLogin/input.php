<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form method="POST" action="proses.php">
        <table>
            <tr>
                <td>Nama :</td>
                <td><input type="text" id="nama" name="nama"><br></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" id="email" name="email"><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Login</button>
                    <button type="reset">reset</button>
                </td>
            </tr>
        </table>   
    </form>
</body>
</html>
