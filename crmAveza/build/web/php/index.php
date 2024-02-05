<!DOCTYPE html>
<html>
  <head>
    <title>CRM AVEZA - Inicio de Sesión</title>
    <link rel="icon" href="..\img\Triangulos aveza.ico" />
    <link rel="stylesheet" href="..\style css\style.css" />

    <meta charset="utf-8" />
  </head>

  <body class="fondo">
   
  <!-- <img src="..\img\fondo.jpg" alt="fondo" title="AVEZA SAS" /> -->
    <header>
      <div class="logo-aveza">
        <img src="..\img\LOGO AVEZA.png" alt="logo-aveza" title="AVEZA SAS" />
      </div>
      <h1 class="titulo">Inicio de Sesión</h1>
    </header>

    <main>
      <form name="IngresoCRM" method="POST" action="validacion.php">
        <br />
        <br />
        <div class="ingresousuario">
          <label for="usuario" class="labelusuario">Usuario:</label>
          <input
            type="number"
            name="usuario"
            id="username"
            class="cajausuario"
          />
        </div>
        <br />
        <br />
        <div class="ingresocontraseña">
          <label for="contraseña" class="labelcontraseña">Contraseña:</label>
          <input
            type="password"
            name="contrasena1"
            id="password"
            class="cajausuario"
          />
        </div>
        <br />
        <br />
        <div class="tipodeusuario">
          <label for="tipodeusuario" class="labeltipousuario"
            >Tipo de usuario:
          </label>

          <select name="tipodeusuario" id="idusuario" class="cajausuario">
            <option value="">Elija una opcion</option>
            <option value="1">Administrador</option>
            <option value="2">Cliente</option>
          </select>
        </div>
        <br />
        <br />
        <div class="botonesiniciosesion">
          <!-- <input
            type="submit"
            name="Ingresar"
            value="Ingresar"
            class="botones"
            href="Menu.html"
          /> -->
                    
          <input type="submit" value="Ingresar" class="botones">

          <input
            type="button"
            name="cancelar"
            value="Cancelar"
            class="botones"
          />
          <!-- <br />
        <br /> -->
          <!-- <input
            type="button"
            name="crearusuario"
            value="Crear usuario"
            class="botones"
            href="CrearUsuario.html"
          /> -->
         <a class="botones" href="..\CrearUsuario.html"><input type="button" value="Crear Usuario"></a>

        </div>
        <br />
        <div class="linkolvido">
        <a href="..\RecordatorioContrasena.html" class="olvidocontraseña"
          >¿Olvidó su contraseña?</a>
           	
      	</div>
      </form>
      
    </main>
  </body>
</html>

