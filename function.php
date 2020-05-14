<?php
function getData($fileName)
{
    $dataJson = file_get_contents($fileName);
    return json_decode($dataJson);
}

function addUser($user)
{
    $users = $GLOBALS['arrayList'];
    array_push($users, $user);
    saveData($users);
}

function saveData($data)
{
    $jsonData = json_encode($data);
    file_put_contents('data.json', $jsonData);
}

function checkUserName($user, $password)
{
    $arr = $GLOBALS['arrayList'];
    foreach ($arr as $key => $value) {
        if ($user == $value->username && $password == $value->password) {
            return true;
        }
    }
    return false;
}

function checkAvailable($us, $pa)
{
    if ($us == '' || $pa == '') {
        return false;
    }
    $arr = $GLOBALS['arrayList'];
    foreach ($arr as $key => $value) {
        if ($us == $value->username) {
            return false;
        }
    }
    return true;
}
