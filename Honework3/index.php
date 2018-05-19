
<?php

if(isset($_POST['submit'])){
    if(isset($_POST['radio']))
    {
        echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
        $selected_val = $_POST['selectedImage'];  // Storing Selected Value In Variable
        echo "You have selected :" .$selected_val;  // Displaying Selected Value
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Card</title>
        <style>
             @import url("css/styles.css");
        </style>
    </head>
    
    <body>
        <form action="" method="post">
            <h1>Welcome to Card Design</h1>
              Person's Name:<br>
              <input type="text" name="firstname">
              </br></br>
              
              Gender: </br>
              <input type="radio" name="gender" value="male" checked> Male<br>
              <input type="radio" name="gender" value="female"> Female<br><br>
              
              Image to display</br>
              <select name = "selectedImage" id = "image2display">
                      <option value = "">Select One</option>
                      <option value="puppy">Puppy</option>
                      <option value="heart">Heart</option>
                      <option value= "cake">Cake</option>
                </select> </br></br>
                
                <input type="submit" name = "submit" value="Submit">
        </form>

    </body>
</html>