<?php 
    include 'connection.php';
    
    $con = getDBConnection();
    $parent = $_GET['parent'];
    
    $sql = "SELECT * FROM child WHERE parent = '$parent'";
    
    $stmt = $con -> prepare($sql);
    $stmt -> execute();
    
    $records = $stmt -> fetchAll();
    
    echo json_encode($records);
?>