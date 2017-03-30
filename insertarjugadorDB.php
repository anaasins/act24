<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insercion de nuevos jugadores.</title>
  </head>
  <body>
    <?php
    //comprobamos que han rellenado todos los campos
    if (empty($_POST['codigo'])==false AND empty($_POST['nombre'])==false AND empty($_POST['procedencia'])==false AND empty($_POST['altura'])==false AND empty($_POST['peso'])==false AND empty($_POST['posicion'])==false AND empty($_POST['equipo'])==false) {
      //incluimos el fichero de las consultas y creamos un objeto.
      include 'jugador.php';
      $jugador=new Jugador();
      //llamamos a la funcion que nos inserta en la bd
      $resultado=$jugador->Insertarjugador($_POST["codigo"],  $_POST["nombre"], $_POST["procedencia"], $_POST["altura"], $_POST["peso"], $_POST["posicion"], $_POST["equipo"]);

      //sacamos el ultimo registro por pantalla
      echo "<h3>ULTIMO REGISTRO:</h3>";
      $tablajugador=$jugador->DevolverJugadorCodigo($_POST["codigo"]);
      foreach ($tablajugador as $fila) {
        echo "Codigo: ".$fila['codigo'];
        echo "<br>";
        echo "Nombre: ".$fila['Nombre'];
        echo "<br>";
        echo "Procedencia: ".$fila['Procedencia'];
        echo "<br>";
        echo "Altura: ".$fila['Altura'];
        echo "<br>";
        echo "Peso: ".$fila['Peso'];
        echo "<br>";
        echo "Posicion: ".$fila['Posicion'];
        echo "<br>";
        echo "Equipo: ".$fila['Nombre_equipo'];
      }

      //enlace para actualizar los campos que acabas de insertar.
      echo "<br>";
      echo "<a href='actualizarjugador.php?codigo=".$fila["codigo"]."&nombre=".$fila["Nombre"]."&procedencia=".$fila["Procedencia"]."&altura=".$fila["Altura"]."&peso=".$fila["Peso"]."&posicion=".$fila["Posicion"]."&equipo=".$fila["Nombre_equipo"]."'>Actualizar registro.</a>";

      //Enlace borrar registro.
      echo "<br>";
      echo "<a href='listajugadores.php'>Borrar registro.</a>";

    }else {
      echo "<a href='insertarjugador.php'> Debes rellenar todos los campos </a>";
    }
     ?>
  </body>
</html>
