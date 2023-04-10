<?php

function insertLocation($data)
{
    
    global $pdo;
    // validation
    if (validateLatLng($data['lat'], $data['lng'])) {

        $sql = "INSERT INTO locations (`title`, `lat`, `lng`, `type`) VALUES (:title , :lat , :lng , :typ);";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':title' => $data['title'], ':lat' => $data['lat'], ':lng' => $data['lng'], ':typ' => $data['type']]);
        return $stmt->rowCount();
    }
}

function getLocations($params = []){
    global $pdo;
    $condition = '';
    // The in_array() function searches an array for a specific value
    if(isset($params['verified']) && in_array($params['verified'] , ['0','1'])){
        $condition = "where verified = {$params['verified']}";
    }else if(isset($params['keyword'])){
        //this condition search evry caracther that come from POST['keyword']
        $condition = "WHERE verified =1 and title like '%{$params['keyword']}%'";
    }
    
    $sql = "SELECT * FROM locations $condition";
   
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

//Location is different from locations function . A preview of the location that is pinned on the map
function getLocation($id){
    global $pdo;
    $sql = "SELECT * FROM locations WHERE id= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ);

}


function toggleStatus($id){
    global $pdo;
    $sql = "UPDATE locations SET verified = 1-verified WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->rowCount();
}