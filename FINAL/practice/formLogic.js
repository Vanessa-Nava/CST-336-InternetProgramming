$(document).ready(function(){
    var score = 0; 
    $("#handle-yes").submit(function(event){
        event.preventDefault();
        console.log("User clicked yes");
        
        $.ajax({
            type: "POST",
            url: "submitAnswer.php",
            dataType: "json",
            data: {"score" : score},
            success :function(data){
                console.log("In success handler: ");
                console.log(data);
                
                $("#yes-count").html(data.times);
            },
           // complete: function(data, )
        })
    })
})