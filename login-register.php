<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <fieldset>
        <legend>LogIn</legend>
        UserName
        <input type="text" name="username">
        <br><br>
        PassWord
        <input type="text" name="password">
        <br><br>
        <input type="submit" name="act" value="LogIn">
        <input type="submit" name="act" value="Register">
    </fieldset>
</form>
<?php
include 'create.php';
?>
</body>
</html>

