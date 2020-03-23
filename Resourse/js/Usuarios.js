class Usuarios{
    constructor(){

    }
    loginUser(email, password){
        if(email == ""){
            $("#email").focus();
            M.toast({html: 'Ingrese el email', classes: 'rounded'});
        }else{
            if(password == ""){
                $("#password").focus();
                M.toast({html: 'Ingrese su password', classes: 'rounded'});
            }else{
                if(validarEmail(email)){
                    if(6<= password.length){
                        $.post(
                            "Index/userLogin/",
                            {email,password},
                            (response)=>{
                                console.log(response);
                            }
                        );
                    }else{
                        $("#password").focus();
                        M.toast({html: 'Introdusca al menos 6 caracteres', classes: 'rounded'}); 
                    }

                }else{
                    $("#email").focus();
                    M.toast({html: 'Ingrese una dreccion de correo electronico valida', classes: 'rounded'});
                }
            }
        }
        
    }
}

$(document).ready(function() {
    
});