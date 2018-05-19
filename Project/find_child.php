<?php 
    include 'connection.php';
    
    $con = getDBConnection();
    $child = $_GET['child'];
    
    $sql = "SELECT * FROM child WHERE name = '$child'";
    
    $stmt = $con -> prepare($sql);
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();
    
    echo json_encode($records);
?>