<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan POST</title>
</head>
<body>
<form method="POST" action="postAct.php">
    <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
            <td width="130">Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr> 
            <td width="130">Email</td> 
            <td><input type="text" name="email"></td> 
        </tr> 
        <tr> 
            <td colspan=2 align=center> 
                <input type=submit name=btnLogin value=Login> 
                <input type=reset name=reset value=reset>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
