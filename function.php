<?php

function getALlUsers($fileName){
    return getData($fileName);
}

function saveData($data, $fileName){
    $dataArr = getData($fileName);
    array_push($dataArr, $data);
    $dataNewJSON = json_encode($dataArr);
    file_put_contents($fileName, $dataNewJSON);
}

function getData($fileName){
    $dataJSON = file_get_contents($fileName);
    return json_decode($dataJSON);
}
