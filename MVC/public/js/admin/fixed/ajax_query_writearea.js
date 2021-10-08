$(document).ready(function () {
    $("#btn_submit").click(function () {
       $.ajax({
           type: "POST",
           url: "ajax/sendquery",
           data: $("#query").serialize(),
           dataType: "text",
           success: function (response) {
               $("#notify_content").html(response);
               $("#notify").show(50);
               $("#notify").delay(20000).hide(200);
           }
       }); 
    });
});