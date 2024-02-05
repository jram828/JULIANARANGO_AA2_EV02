<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agendar cita</title>
    <link rel="icon" href="..\img\Triangulos aveza.ico" />
    <link rel="stylesheet" href="..\style css\style.css" />
  </head>
  <body>
    <div class="logo-aveza">
      <img src="..\img\LOGO AVEZA.png" alt="LOGO AVEZA" title="AVEZA SAS" />
    </div>
    <h1 class="titulo">Agendar cita</h1>
    <nav class="menu-principal">
      <ul>
        <li><a href="Menu.php">Inicio</a></li>
        <li>
          <a href="registro-de-cliente.php">Registro de cliente</a>
        </li>
        <li><a href="#">Cotización</a></li>
        <li><a href="#">Financiamiento</a></li>
        <li><a href="generar-contrato.php">Contrato</a></li>
        <li><a href="agendar-cita.php">Agendar citas</a></li>
        <li>
          <a href="GenerarDocumentosLegales.php">Generar documentos legales</a>
        </li>
        <li>
          <a href="configurar-recordatorio.php">Configurar recordatorios</a>
        </li>
        <li>
          <a href="#">Conocimiento de Litigios</a>
          <ol class="menu-vertical">
            <li><a href="#">Por Cliente</a></li>
            <li><a href="#">Por Tipo de Caso</a></li>
          </ol>
        </li>
        <li><a href="#">Generar Factura</a></li>
        <li><a href="#">Cerrar Sesión</a></li>
      </ul>
    </nav>
    <br />
    <div class="recordatorio-cita">
      <label for="fecha" class="label-recordatorio">Ingrese fecha:</label>
      <input type="date" name="fecha" id="fecha" />
      <label for="hora" class="label-recordatorio">Ingrese hora:</label>
      <input type="time" name="hora" id="hora" />
    </div>
    <br />

    <div class="recordatorio-cita">
      <label for="aviso" class="label-recordatorio2"> Enviar a:</label>
    </div>
    <br />

    <div class="recordatorio-cita">
      <input type="checkbox" name="aviso" value="celular" />
      <label class="label-recordatorio">Celular</label>
      <input type="checkbox" name="aviso" value="Email" />
      <label class="label-recordatorio">Email</label>
    </div>
    <br />

    <!-- <div class="tipo-de-cita"> -->
    <div class="recordatorio-cita">
      <label for="aviso" class="label-recordatorio2"> Tipo de cita:</label>
    </div>
    <br />

    <div class="recordatorio-cita">
      <input type="radio" name="cita" id="audiencia" />
      <label class="label-recordatorio">Audiencia</label>
      <br />
      <input type="radio" name="cita" id="reunion-abogado" />
      <label class="label-recordatorio3">Reunión con el abogado</label>
    </div>
    <br />

    <div class="comentarios">
      <label for="comentarios">Comentarios</label> <br />
      <textarea
        name="comentarios"
        id="comentarios"
        cols="30"
        rows="10"
      ></textarea>
    </div>
    <br />
    <div class="botonesiniciosesion">
      <input type="submit" class="botones" value="Guardar" />
    </div>
  </body>
</html>
