function move(){
    var xCat = Math.floor(Math.random() * 401);
    var yCat = Math.floor(Math.random() * 201);
    var xDog = Math.floor(Math.random()*411);
    var yDog = Math.floor(Math.random() * 201);
    // alert('xCat = ' + xCat + ', yCat = ' + yCat);
    //alert('xDog = ' + xDog + ', yDog = ' + yDog);
    $('#cat').style.left = xCat + 'px';
    $('#cat').style.left = yCat + 'px';
                
    $('#dog').style.left = xDog + 'px';
    $('#dog').style.left = yDog + 'px';
                
}