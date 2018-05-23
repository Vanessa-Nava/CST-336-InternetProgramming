<!DOCTYPE html>
<html>
    <head>
    <title>Adding</title>
    </head>
    <body>
        <br><br>
        <h2>Input Information</h2>
        
        
        Child's Name<br>
        <div>
             <input type="text" id="child"/><br>
        </div>
        Parent's Name<br>
        <div>
            <input type="text" id="parent"/><br>
        </div>
        
        Attendance<br>
        <input type="radio" name="attendance" value = 1>Present<br>
        <input type="radio" name="attendance" value = 3>Absent<br>
        <br>

        Breakfast<br>
        <form>
            <input type="radio" name="ate" value = 2>Has ate breakfast<br>
            <input type="radio" name="ate" value = 4>Has <b>not</b> ate breakfast<br>
        </form>
        
    
        <input type = "submit" id = "insert" value = "Add" class = "btn btn-default"><br>
        <input type = "submit" id = "goBack" value = "Go Back to Administrator Options" class = "btn btn-default">
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
    </body>
</html>