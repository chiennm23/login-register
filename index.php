<?php
include "function.php";

$contacts = getALlUsers("data.json");
?>
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
<a href="add.php">Add</a>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
    </tr>
    <?php if (isset($contacts)):?>
    <?php foreach ($contacts as $index => $contact):?>
    <tr>
        <td><?php echo $index ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $phone ?></td>
        <td><?php echo $email ?></td>
    </tr>
    <?php endforeach;?>
    <?php else: ?>
        <tr>
            <td colspan="4">No Sigin</td>
        </tr>
    <?php endif; ?>
</table>
</body>
</html>
