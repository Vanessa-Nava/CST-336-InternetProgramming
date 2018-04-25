<html>
    <head>
        <title>My first Game</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    <body on load = "move()">
       <div id = "gameWindow">
            This is my first game!
            <img id = "cat" src = "img/cat.png">
            <img id = "dog" src = "img/dog.png">
            <div id = "btnMoveAnimals" class = "button noSelect" onclick = "move();">Move</div>

       </div>
        
    </body>
    <script src="js/functions.js"></script>
</html>