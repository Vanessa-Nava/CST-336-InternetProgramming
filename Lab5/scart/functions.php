

<?php
    function displayResult(){
        //acess the global $items array
        global $items;
        if(isset($items)){
            echo "<table class = 'table'>";
            foreach ($items as $item) {
                $itemName = $item['name'];
                $itemPrice = $item['salePrice'];
                $itemImage = $item['thumbnailImage'];
                $itemId = $item['itemId'];
                
                //display items as table row
                echo '<tr>';
                echo "<td><img src = '$itemImage'></td>";
                echo "<td><h4>$itemName</h4></td>";
                echo "<td><h4>$itemPrice</h4></td>";
                
                echo "<form method = 'post'>";
                echo "<input type = 'hidden' name = 'itemName' value = '$itemName'>";
                echo "<td><button class = 'btn btn-warning'>Add</button></td>";
                echo "</form>";
                
                echo '</tr>';
                
            }
            echo "</table>";
        
        }
    }
?>


