<?php
function getDBConnection() {
    $host = "us-cdbr-iron-east-04.cleardb.net";
    $username = "b34448f92d5192";
    $password = "5e2a40f7";
    $dbname = "heroku_54f345c26e9fb0c"; 

    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}
    
function insertInfo($child, $parent, $ate, $attendance){
    $conn = getDBConnection();
    $sql = "INSERT INTO child (name, parent, Status, breakfast) VALUES ('$child', '$parent', $attendance, $ate)";
    $stmt = $conn ->prepare($sql);
    $stmt->execute();
    
    // $items= $stmt->fetchAll();
    
    // foreach($items as $item){
    //     $childId = $item['child_id'];
    //     echo $childId;
        
    //     //INSERT INTO `child_category` (`child_category_i, `child_id`, `category_id`) VALUES (NULL, '6', '2');
    //     $sql = "INSERT INTO `child_category` (`child_id`, `category_id`) VALUES ('$childId', '$attendance')";
    //     $stmt = $conn->prepare($sql);
    //     $stmt ->execute();
        
    //     $sql = "INSERT INTO `child_category` (`child_category_id`, `child_id`, `category_id`) VALUES (NULL, '$childId', '$ate')";
    //     $stmt = $conn->prepare($sql);
    //     $stmt ->execute();
    
    // }

    
    
    
    
    echo "Information added to the system if you would like to make changes to the child's information click the update option from the previous menu.";
    //echo "Go to update Information to add the child to different groups (present or absent/breakfast or hungry)";
    
}
function deleteInfo($child, $parent){
    $conn = getDBConnection();
    
    // $sql = "SELECT * FROM `child` WHERE `name` = '$child'";
    $sql = "DELETE FROM `child` WHERE `child`.`name` = '$child'";
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    
    
    // $stmt = $conn ->prepare($sql);
    // $stmt->execute();
    // $items= $stmt->fetchAll();
    
    // foreach($items as $item){
    //     $childId = $item['child_id'];
        
    //     $sql = "DELETE FROM `child_category` WHERE `child_category`.`child_id` = '$childId'";
    //     $stmt = $conn->prepare($sql);
    //     $stmt ->execute();
        
    //     $sql = "DELETE FROM `child` WHERE `child`.`name` = '$child'";
    //     $stmt = $conn->prepare($sql);
    //     $stmt ->execute();
        
    // }
    echo "Information deleted from the system";

    
    //echo "Information deleted from the system";
}
function updateInfo($parent,$new){
    $conn = getDBConnection();
    // $sql = "UPDATE `child` SET `parent` = '$new' WHERE `child`.`parent` = $pa";
    // $stmt = $conn->prepare($sql);
    // $stmt ->execute();
    $sql = "SELECT * FROM `child` WHERE parent='$parent'";

    $stmt = $conn->prepare($sql);
    $stmt ->execute();
    $items= $stmt->fetchAll();
    
    foreach($items as $item){
        $childId = $item['child_id'];
        
        $sql = "UPDATE `child` SET `parent` = '$new' WHERE `child`.`child_id` = $childId;";
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
        
    }
    echo "Information was updated";
    
}
function getMatchingItems($name, $category) {
    $db = getDBConnection(); 
    
   // $sql = "SELECT * FROM item WHERE name LIKE '%$query%'"; 
    //$sql =  "SELECT * FROM item WHERE 1";
    
   // $imgSQL = $showImages ? ', item.image_url' : ''; 
    
                                //child.child_id  //child.name        //category.category name                           child_category     child_id     child_category.child_id          catergoty       child_category.category_id = category.category_id  
     $sql = "SELECT DISTINCT child.child_id, child.name, child.parent FROM child INNER JOIN child_category ON child.child_id = child_category.child_id INNER JOIN category ON child_category.child_id =category.category_id  WHERE 1"; 

    if (!empty($name)) {
        $sql .= " AND child.name LIKE '%$name'%s";
    }
    if (!empty($category)) {
        $sql .= " AND category = '$category'";
    }
    
    $statement = $db->prepare($sql); 
    
    $statement->execute(); 
    
    $items = $statement->fetchAll(); 
    
    return $items; 
    }    

?>