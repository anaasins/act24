<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de todos los jugadores de la DB</title>
  </head>
  <body>
    <table border="1px">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Procedencia</th>
          <th>Altura</th>
          <th>Peso</th>
          <th>Posicion</th>
          <th>Equipo</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <?php
        include 'jugador.php';
        $jugador=new Jugador();
        $tablalista=$jugador->ListaJugadores();
        foreach ($tablalista as $fila) {
            echo "<tr><td>" .$fila["codigo"]
            ."</td><td>" .$fila["Nombre"]
            ."</td><td>" .$fila["Procedencia"]
            ."</td><td>" .$fila["Altura"]
            ."</td><td>" .$fila["Peso"]
            ."</td><td>" .$fila["Posicion"]
            ."</td><td>" .$fila["Nombre_equipo"]
            ."</td><td><a href='borrarjugadorDB.php?codigo=".$fila["codigo"]."'>Borrar registro</a></td></tr>";
        }
       ?>
    </table>
  </body>
</html>
