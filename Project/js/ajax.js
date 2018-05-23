$(document).ready(function(){
    $("#name_btn").on('click', function(){
        
        if($("#name").val() != ""){
            $("#admin").html("<h2>Search Results</h2>");
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
            $("#admin").html("<h2>Search Results</h2>");
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
        else if($("#id").val() != ""){
            $("#admin").html("<h2>Search Results</h2>");
            $.ajax({
                type : "GET",
                url : "find_by_id.php",
                dataType : "json",
                data : {"id" : $("#id").val()},
                success : function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#admin").append("ID: " + data[i]['child_id'] + "<br>");
                        $("#admin").append("Child name : " + data[i]['name'] + "<br>");
                        $("#admin").append("Parent name : " + data[i]['parent'] + "<br>");
                        $("#admin").append("<br>");
                    }
                },
                complete : function(data, status){
                    
                }
            });
        }
        else{
            $("#admin").html("");
        }
    });
    
    $("#insert").on('click', function(){
        
        var ate = $('input[name=ate]:radio:checked').val();
        var attendance = $('input[name=attendance]:radio:checked').val();
        var parent = $("#parent").val();
        var child = $("#child").val();
        
        
        $.ajax({
            type : "GET",
            url : "db_call.php",
            dataType : "json",
            data : {"sql" : "INSERT INTO child (name, parent, Status, breakfast) VALUES ('" + child + "', '" + parent + "', " + attendance + ", " + ate + ")"},
            success : function(data){
                alert("Success");
                location.href = 'administrator.php';
            },
            complete : function(data, status){
                
            }
        });
        
    });
    
    $("#goBack").on('click', function(){
        location.href = 'administrator.php';
    });
    
});