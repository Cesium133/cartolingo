<?php 
    header('content-type: application/json; charset=utf-8');
    require_once("db.php");

    $query = 'SELECT * FROM languagedata';
    $result = pg_query($query) or die("Query failed: " . pg_last_error());
    
    $info = array();

    while ($row = pg_fetch_array($result)) {
        array_push($info, $row);
    };

    echo json_encode($info);


?>