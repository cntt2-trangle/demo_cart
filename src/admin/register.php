<?php
    require_once('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h3>Register Form</h3>
    <form action="RegisterSubmit.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
                
            </tr>
            <tr>
                <td>Re-enter Password: </td>
                <td><input type="password" name="re-password"></td>
                
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Register</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>