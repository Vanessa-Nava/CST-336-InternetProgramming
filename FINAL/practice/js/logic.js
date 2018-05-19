$( document ).ready(function() {
    console.log( "ready!" );
    
    $('#username').on('input', function(){
        
        sendInfoToServer($('#username').val());
        console.log("User Type: " + $('#username').val());
    });
    
    function sendInfoToServer(username){
        $.ajax({
            type : "GET",
            url  : "checkUsername.php",            
            dataType : "json",
            data : {"username" : username},            
            success : function(data){
                
                console.log("In sucess handler: ");
                console.log(data.lastLogin);
                console.log("Successful?" + data.lastLoginStatus);
                
                
                if(data.lastLogin && data.lastLoginStatus){
                      var status = "last attempt at "+ data.lastLogin  + " was ";
                
                    //$("#last-login-info").html(data.lastLogin);
                    if(data.lastLoginStatus == 'U'){
                        status+= "unsuccesful";
                    }else{
                        status += "successful";
                    }
                
                
                      $("#last-login-info").html(status);
                }
              
                //console.log(data);
                
                
                
            },
            complete: function(data,status) { 
            }

        });
    }
});




