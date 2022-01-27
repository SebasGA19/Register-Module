<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title Modulo Registro y Login></title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>
    <body>

        <main>
            <div class="contenedor_todo">
                
                <div class="caja_trasera">
                    
                    <div class="caja_trasera-login">
                        <h3>Ya tienes cuenta?</h3>
                        <p> Inicia sesión para entrar en la pagina</p>
                        <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja_trasera-register">
                        <h3>Aun no tienes una cuenta?</h3>
                        <p> Registrate para que puedas iniciar sesión</p>
                        <button id="btn_registrarse">Registrarse</button>
                    </div>
                </div>

                <!--Formularios login y registro-->
                <div class="contenedor_login-register">
                    <!--Login-->
                    <form action="" class="formulario_login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>
                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario_register" >
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>

            </div>
        </main>
        <script src="assets/js/script.js"></script>
    </body>
</html>