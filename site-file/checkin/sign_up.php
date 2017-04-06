<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="checkin/sing_up_handler_mysql.php" method="post">
    <table>
        <tr>
            <td><label for="username">Usename:</label></td>
            <td><input type="text" name="username" value="" id="username"/></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" value="" id="email"/></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" value="" id="password"/></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right"><input type="submit" value="Send"></td>
        </tr>
    </table>
</form>
</body>
</html>