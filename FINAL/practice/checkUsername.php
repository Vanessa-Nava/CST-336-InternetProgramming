<?php

    include 'connection.php';
    $con = connectToDB();
    
    $username = $_GET['username'];
    
    
    $sql = "SELECT * FROM `fp_login` WHERE username='$username'";
    
    $statement = $con->prepare($sql);
    $statement ->execute();
    
    
    $response= array();
    
    //Only if the login is successful
    if($statement -> rowCount() > 0){
        $result = $statement ->fetch(PDO::FETCH_ASSOC);
        
        //print_r($result);
        
        $response['lastLogin'] = $result['lastLogin'];
        $response['lastLoginStatus'] = $result['lastLoginStatus'];
        
        
    }
     
    
   // $result = array('username' => $username);
    echo json_encode($response);

?>
