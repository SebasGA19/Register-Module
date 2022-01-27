

// Declarar variables
var contenedor_login_register = document.querySelector(".contenedor_login-register")
var formulario_login = document.querySelector(".formulario_login")
var formulario_register = document.querySelector(".formulario_register")
var caja_trasera_login = document.querySelector(".caja_trasera-login")
var caja_trasera_register = document.querySelector(".caja_trasera-register")

function register(){
    // Tamaño normal
    if(window.innerWidth>850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "410px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    // Este else es para que no se despapaye cuando cambie el tamaño de la ventana
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display="none";
        caja_trasera_register.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }
}

function iniciarSesion(){
    // Tamaño normal
    if(window.innerWidth>850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "10px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.opacity="0";
    // Este else es para que no se despapaye cuando cambie el tamaño de la ventana
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left= "0px";
        formulario_login.style.display="block";
        caja_trasera_register.style.display="block";
        caja_trasera_login.style.display="none";
    }
}

function anchoPagina(){
    // Cambiar la distribucion de la pagina dinamicamente
    // Para que no se despapaye cuando se hagan cambios
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

// Function Triggers
anchoPagina();
document.getElementById("btn_registrarse").addEventListener("click",register);
document.getElementById("btn_iniciar-sesion").addEventListener("click",iniciarSesion);
window.addEventListener("resize",anchoPagina);


