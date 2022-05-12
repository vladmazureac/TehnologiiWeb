$(function(){
    $("input[type=submit]").click(() => $(".succes").text(""));
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
        submitHandler: function(form){
            $(".form-loading").addClass("active");
            $.ajax({
                url: "support.php",
                type: "POST",
                data: $(form).serialize(),
                success: function(response) {
                    let rs = JSON.parse(response);
                    if(rs.succes) {
                        $(".succes").text(rs.data);
                        $("input[type=text], textarea").val("");
                    }
                    else {
                        $(".succes").text("A aparut o eroare la rularea scriptului");
                    }
                    $(".form-loading").removeClass("active");
                }
            });
        }
    });
});