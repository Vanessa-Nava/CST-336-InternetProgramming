<?php
session_start();

include 'connection.php';
$connect = getDBConnection();

$sql = "SELECT * FROM user
        WHERE username = :username  
            AND password = :password";
            
$stmt = $connect ->prepare($sql);
$data = array(":username" => $_POST['username'], ":password" => sha1($_POST['password']));

$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

echo $user;
echo $pass;
if($_GET['username'] == "user_1" && $_GET['password'] =="pass"){
    //$_SESSION['username'] = $user['username'];
    header('Location: administrator.php');
} else {
    echo "The values you entered were incorrect. <a href = 'logIn.php'> Retry </a>";
}
?>