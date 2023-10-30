document.getElementById("btn__registrarse").addEventListener("click", register);
document.getElementById("btn__iniciar-sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", anchoPagina);



var contenedor_login_register = document.querySelector(".contenedor-login-register");
var formulario_login = document.querySelector(".formulario-login");
var formulario_register = document.querySelector(".formulario-register");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_registrer = document.querySelector(".caja-trasera-register");

function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_registrer.style.display = "block";
    }else{
        caja_trasera_registrer.style.display ="block"
        caja_trasera_registrer.style.opacity = "1"
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}
anchoPagina();

function IniciarSesion(){

    if(window.innerWidth > 850){
        formulario_register.style.display ="none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display ="block";
        caja_trasera_registrer.style.opacity ="1";
        caja_trasera_login.style.opacity ="0";
    }else{
        formulario_register.style.display ="none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display ="block";
        caja_trasera_registrer.style.display ="block";
        caja_trasera_login.style.display ="none";
    }
    
}

function register(){

    if(window.innerWidth > 850){
        formulario_register.style.display ="block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display ="none";
        caja_trasera_registrer.style.opacity ="0";
        caja_trasera_login.style.opacity ="1";
    }else{
        formulario_register.style.display ="block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display ="none";
        caja_trasera_registrer.style.display ="none";
        caja_trasera_login.style.display ="block";
        caja_trasera_login.style.opacity ="1";
    }
    
}
