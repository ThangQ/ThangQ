$(document).ready(function () {
    $("#user_name").keyup(function () { 
        $.ajax({
            type: "POST",
            url: "ajax/checkusername",
            data: $("#user_name").serialize(),
            dataType: "text",
            success: function (response) {
                $("#user_name_msg").html(response);
            }
        });
    });
    $("#email").keyup(function () { 
        $.ajax({
            type: "POST",
            url: "ajax/checkemail",
            data: $("#email").serialize(),
            dataType: "text",
            success: function (response) {
                $("#email_msg").html(response);
            }
        });
    });
    $("#password").keyup(function () { 
        $.ajax({
            type: "POST",
            url: "ajax/checkpassword",
            data: $("#password").serialize(),
            dataType: "text",
            success: function (response) {
                $("#password_msg").html(response);
            }
        });
    });
    $("#re_password").keyup(function () { 
        $.ajax({
            type: "POST",
            url: "ajax/checkrepassword",
            data: {
                password: $("#password").val(),
                re_password: $("#re_password").val()
            },
            dataType: "text",
            success: function (response) {
                $("#re_password_msg").html(response);
            }
        });
    });
    // $("#signin").click(function (e) { 
    //     e.preventDefault();
    //     let page_url = $(this).attr('href');
    //     history.pushState(null, '', page_url);
    //     $.ajax({
    //         type: "GET",
    //         url: "signin",
    //         data: {url:"signin"},
    //         dataType: "html",
    //         success: function (response) {
    //             $("body").html(response);
    //         }
    //     });
    // });
    // $("#signup").click(function (e) { 
    //     e.preventDefault();
    //     let page_url = $(this).attr('href');
    //     history.pushState(null, '', page_url);
    //     $.ajax({
    //         type: "GET",
    //         url: "signup",
    //         data: {url:page_url},
    //         dataType: "html",
    //         success: function (response) {
    //             $("body").html(response);
    //         }
    //     });
    // });
});