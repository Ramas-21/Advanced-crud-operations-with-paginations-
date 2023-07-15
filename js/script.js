$(document).ready(function(){
    $(document).on("submit","#addForm",function(e){
        e.preventDefault();

        // Ajax
        $.ajax({
            url:"/advanced-crud-operations/ajax.php",
            type:"post",
            dataType:"json",
            data: new FormData(this),
            processData:false,
            contentType:false,
            beforeSend:function(){
                console.log("Wait... Data is loading");
            },
            success:function(response){
                console.log(response);
            },
            error:function(request,error){
                console.log(arguments);
                console.log("Error"+ error);
            },
        });
    });
});