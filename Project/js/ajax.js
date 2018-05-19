$(document).ready(function(){
    $("#name_btn").on('click', function(){
        
        if($("#name").val() != ""){
            $.ajax({
                type : "GET",
                url : "find_child.php",
                dataType : "json",
                data : {"child" : $("#name").val()},
                success : function(data){
                    
                    for(var i = 0; i < data.length; i++){
                        $("#admin").append("Child name : " + data[i]['name'] + "<br>");
                        $("#admin").append("Parent name : " + data[i]['parent'] + "<br>");
                        $("#admin").append("<br>");
                    }
                    
                },
                complete : function(data, status){
                    
                }
            });
        }
        else if($("#parent").val() != ""){
            $.ajax({
                type : "GET",
                url : "find_parent.php",
                dataType : "json",
                data : {"parent" : $("#parent").val()},
                success : function(data){
                
                    for(var i = 0; i < data.length; i++){
                        $("#admin").append("Child name : " + data[i]['name'] + "<br>");
                        $("#admin").append("Parent name : " + data[i]['parent'] + "<br>");
                        $("#admin").append("<br>");
                    }
                    
                    
                },
                complete : function(data, status){
                    
                }
            });
        }
    });
});