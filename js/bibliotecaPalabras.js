/**
 * Created by Lesnier on 15/6/2016.
 */
var default_idiom = "ES"
var current_idiom = "";


var login_Text;
var register_Text;
var title_login_page;
var title_register_page;
var input_name;
var input_lastname;
var input_email;
var input_pass;
var input_repass;
var or_Sign_in;
var title_verifier_page;
var text_verific_code;
var input_verific_code;
var btn_send_code;
var text_remember_pass;
var btn_resend_email;
var title_Personal_Data_page;
var input_age_player;
var input_sex;
var text_photo_perfil;
var input_nationality;
var input_phone;
var btn_next;


function changueIdiom(idiom) {

    switch (idiom) {
        case "ES":
        {
            login_Text = "Entrar";
            register_Text = "Registrar";
            title_login_page = "Entrar";
            title_register_page = "Registro";
            input_name = "nombre";
            input_lastname = "apellido";
            input_email = "correo";
            input_pass = "contraseña";
            input_repass = "repetir contraseña";
            or_Sign_in = "O registrarse con:";
            title_verifier_page = "Verificación de cuenta";
            text_verific_code = "Se ha enviado un código de verificación a su correo. Para completar el registro introduzca el código a continuación";
            input_verific_code = "código";
            btn_send_code = "Enviar";
            text_remember_pass = "Recordar Contraseña";
            btn_resend_email  = "Reenviar correo";
            title_Personal_Data_page = "Datos Personales";
            input_age_player = "Edad";
            input_sex = "Sexo";
            text_photo_perfil = "Foto de perfil";
            input_nationality = "Nacionalidad";
            input_phone = "Telefono";
            btn_next = "Continuar";
            break;
        }
        case "US":
        {
            login_Text = "Login";
            register_Text = "Register";
            title_login_page = "Login";
            title_register_page = "Register";
            input_name = "name";
            input_lastname = "last name";
            input_email = "email";
            input_pass = "password";
            input_repass = "repeat password";
            or_Sign_in = "Or sign in with:";
            title_verifier_page = "Account verification";
            text_verific_code = "It sent a verification code to your mail. To complete the registration enter the code below.";
            input_verific_code = "code";
            btn_send_code = "Send";
            text_remember_pass = "Remember password";
            btn_resend_email  = "Resend email";
            title_Personal_Data_page = "Personal Data";
            input_age_player = "Age";
            input_sex = "Sex";
            text_photo_perfil = "Photo profile";
            input_nationality = "Nationality";
            input_phone = "Phone";
            btn_next = "Next";
            break;
        }
    }
}


