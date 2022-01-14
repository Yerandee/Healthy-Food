<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="assets/login/css/estilos.css">
         <title> healthyfood login</title>
       
    </head>
<body>
<main>
            <!-- CONTENEDOR 40:05-->
<div class="contenedor__todo">
    <div class="caja__trasera">
           <div class="caja__trasera-login">
          <h3>¿Ya tienes una cuenta?</h3>
           <p>Inicia sesión para entrar en la pagina</p>
           <button id="btn__iniciar-sesion">Iniciar Sesión</button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿Aún no tienes una cuenta?</h3>
          <p>Regístrate para entrar en la pagina</p>
          <button id="btn__registrarse">Regístrarse</button>
          </div>
         
    </div>

     <!-- FORMULARIO DE LOGIN Y REGISTRO-->
        <div class="contenedor__login-register">
            <form action="" class="formulario__login">
                <h2> Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>
           <!-- FORMULARIO  REGISTRO-->
            <form action="php/registro_usuario_be.php" method="POST"class="formulario__register">
                <h2> Regístrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electronico" name= "correo">
                <input type="text" placeholder="Tipo de Usuario (A,B,C)" name=tipo.usuario>
                <input type="text" placeholder="Usuario" name=usuario>
                <input type="password" placeholder="Contraseña" name=contrasena>
                <button>Regístrarse</button>
            </form>
        </div>
     </div>
</main>
 <script src="assets/login/js/scrip.js"></script>
 <button><a href="javascript: history.go(-1)">Volver</a></button>
</body>
</html>
