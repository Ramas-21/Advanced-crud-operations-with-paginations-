$(document).ready(function(){
    $(document).on("submit","#addForm",function(e){
        e.preventDefault();

        // Ajax
        $.ajax({
            url:"/advanced-crud-operations/ajax.php",
        })
    })
})