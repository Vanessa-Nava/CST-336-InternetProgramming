<?php 
    include 'connection.php';
    
    $con = getDBConnection();
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM child WHERE child_id = $id";
    
    $stmt = $con -> prepare($sql);
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();
    
    echo json_encode($records);
?>