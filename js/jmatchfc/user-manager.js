


var loginResult;

function userRegister() {

    var name = document.getElementById("input_name").value;
    var lastaname = document.getElementById("input_lastname").value;
    var email = document.getElementById("input_email").value;
    var password = document.getElementById("input_pass").value;

    var parametrosParaPost = {
        "name": name,
        "last_name": lastaname,
        "email": email,
        "password": password
    };


    $.ajax({
        data: parametrosParaPost,
        url: 'server/funciones/RegistroCliente.php',
        type: 'post',
        beforeSend: function () {
            $("#mensage").html("en proceso");

            //            $.mobile.loading( "show", 
            //              {
            //            text: "",
            //            textVisible: "false",
            //            theme: "a",
            //            textonly: "true",
            //            html: ""
            //              });
        },
        success: function (response) {
            alert(response);
            $("#mensage").html(response);
            //              $.mobile.loading( "hide" );

        }
    });
}

function userLogin() {
    var email = document.getElementById("input_login_email").value;
    var password = document.getElementById("input_login_pass").value;

    var parametrosParaPost = {
        "email": email,
        "password": password
    };


    $.ajax({
        data: parametrosParaPost,
        url: 'server/funciones/LoginCliente.php',
        type: 'post',
        beforeSend: function () {
          //  $("#mensage").html("en proceso");

                        $.mobile.loading( "show", 
                          {
                        text: "Loading...",
                        textVisible: "true",
                        theme: "b",
                        textonly: "false",
                        html: ""
                          });
        },
        success: function (response) {           
          $("#mensage").html("respuesta" + response);
            var a = JSON.parse(response);
            if (a.result[0].message == "true") {               
                //$("#mensage").html("logueado");              
                 $.mobile.changePage("userProfile.html");
                 $.mobile.loading( "hide" );
            } else {
            //    $("#mensage").html("error de usuario o contraseña");
            }

        }
    });

}


function refreshPage() {
  jQuery.mobile.pageContainer.pagecontainer('change', window.location.href, {
    allowSamePageTransition: true,
    transition: 'none',
    reloadPage: true 
    // 'reload' parameter not working yet: //github.com/jquery/jquery-mobile/issues/7406
  });
}
