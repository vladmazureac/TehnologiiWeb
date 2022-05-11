$(function(){
    $("form[name='register_form']").validate({
        rules: {
            Username: "required",
            Password: {
                required : true,
            },
            PasswordRepeat: {
                equalTo: "#password",
                required : true
            },
            email: {
                required: true,
                email: true
            },
        },

        messages: {
            Username: "*Va rog introduceți numele",
            email: "*Va rog introduceți o poștă validă",
            PasswordRepeat: "*Va rog introduceți aceeași parola",
            Password: "*Va rog introduceți parola"
        },
        submitHandler: function(form){
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function(response) {
                    $('#answers').html(response);
                }
            });
        }
    });
});