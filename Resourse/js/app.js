
//codigo de usuarios
var usuarios = new Usuarios();
var loginUser =() =>{
    var email = $("#email").val();
    var password = $("#password").val();
    usuarios.loginUser(email,password);
}

$().ready(()=>{
    $("#login").validate()
});