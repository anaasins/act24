<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar jugador</title>
  </head>
  <body>
    <?php
      include 'jugador.php';
      $jugador=new Jugador();

      $borrar=$jugador->Borrarjugador($_GET["codigo"]);

      if ($borrar==true) {
       ?>
       <p>Se ha borrado con exito</p>
       <a href="index.php">Volver a inicio</a>
       <a href="listajugadores.php"> Borrar otro registro</a>
       <?php
      }else {
        ?>
        <a href="listajugadores.php">No se ha podido borrar.</a>
        <?php
      }
     ?>
  </body>
</html>
