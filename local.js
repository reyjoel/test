$(function(){
    $(".add").click(function(){
        $(".add_article").removeClass("hidden");
    });

    $(".submit").click(function(){
        var title = $.trim($(".add_title").val());
        var content = $.trim($(".add_content").val());
        var data = {
            "title": title,
            "content": content
        }

        $.post("controller.php",
            data,
            function(data, status){
                if(status){
                    alert("Data: " + data + "\nStatus: " + status);
                }else{
                    alert("error")
                }
        });
    })
      
});