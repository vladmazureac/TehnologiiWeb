$(function(){
    $("form[name='support']").validate({
        rules: {
            nume: "required",
            help: "required",
            posta: {
                required: true,
                email: true
            },
        },

        messages: {
            nume: "*Va rog introduceți numele",
            posta: "*Va rog introduceți o poștă validă",
            help: "*Va rog introduceți problema pentru a vă putea ajuta",
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});