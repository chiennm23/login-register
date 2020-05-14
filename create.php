<?php
include 'function.php';
?>

<?php
$path = 'data.json';
$arrayList = getData($path);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $us = $_POST['username'];
    $pa = $_POST['password'];
    if ($_POST['act'] == "LogIn") {
        if (checkUserName($us, $pa)) {
            echo 'Chao mung ' . $us;
        } else {
            echo 'Dang nhap that bai. vui long nhap lai';
        }
    } else if ($_POST['act'] == "Register") {
        $user = [
            'username' => $us,
            'password' => $pa
        ];
        if (checkAvailable($us, $pa)) {
            addUser($user);
            echo "Dang ki thanh cong";
        } else {
            echo "Dang ki that bai " . $us . " da ton tai truoc do";
        }
    }
}
?>