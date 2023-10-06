"use strict";
$(function() {
    $(".validate").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 5
            }
        }
    });

    $("#loginForm").submit(function (e) {
        e.preventDefault();

        var formData = {
            username: $("input[name='name']").val(),
            password: $("input[name='password']").val(),
            _token: $("input[name='_token']").val()
        };

        console.log(formData)

        $.ajax({
            type: "POST",
            url: "/auth/login-process",
            data: formData,
            success: function (data) {
                console.log(data)
                if (data.success) {
                    window.location.href = data.redirect;
                } else {
                    alert("Username atau password salah.");
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});
