$(function(){
    $(".submit").click(() => $(".succes").text(""));
    $("form[name='login_form']").validate({
        rules: {
            Username: "required",
            Password: {
                required: true,
            },
        },

        messages: {
            Username: "*Va rog introduceți numele",
            Password: "*Va rog introduceți parola"
        },
            submitHandler: function(form){
                $.ajax({
                    url: "login.php",
                    type: "POST",
                    data: $(form).serialize(),
                    success: function(response) {
                        let rs = JSON.parse(response);
                        if(rs.succes) {
                            $(".succes").text(rs.data);
                            $("input[type=text],input[type=password], textarea").val("");
                        }
                        else {
                            $(".succes").text("A aparut o eroare la rularea scriptului");
                        }
                    }
                });
            }
    });
});