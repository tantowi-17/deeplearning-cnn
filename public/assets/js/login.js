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
});
