<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario nuevo jugador.</title>
  </head>
  <body>
    <form action="insertarjugadorDB.php" method="post">
      Codigo:<br>
      <input type="text" name="codigo">
      <br><br>
      Nombre:<br>
      <input type="text" name="nombre">
      <br><br>
      Procedencia:<br>
      <input type="text" name="procedencia">
      <br><br>
      Altura:<br>
      <input type="text" name="altura">
      <br><br>
      Peso:<br>
      <input type="text" name="peso">
      <br><br>
      Posicion:<br>
      <input type="text" name="posicion">
      <br><br>
      Nombre equipo:<br>
      <input type="text" name="equipo" value="Warriors" readonly>
      <br><br>
      <input type="submit" value="Registrar">
    </form>
  </body>
</html>
