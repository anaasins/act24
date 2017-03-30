<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario para actualizar un jugador</title>
  </head>
  <body>
    <form action="actualizarjugadorDB.php" method="post">
      Codigo:<br>
      <input type="text" name="codigo" value=<?=$_GET["codigo"]?> readonly>
      <br><br>
      Nombre:<br>
      <input type="text" name="nombre" value=<?=$_GET["nombre"]?>>
      <br><br>
      Procedencia:<br>
      <input type="text" name="procedencia" value=<?=$_GET["procedencia"]?>>
      <br><br>
      Altura:<br>
      <input type="text" name="altura" value=<?=$_GET["altura"]?>>
      <br><br>
      Peso:<br>
      <input type="text" name="peso" value=<?=$_GET["peso"]?>>
      <br><br>
      Posicion:<br>
      <input type="text" name="posicion" value=<?=$_GET["posicion"]?>>
      <br><br>
      Nombre equipo:<br>
      <input type="text" name="equipo" value=<?=$_GET["equipo"]?> readonly>
      <br><br>
      <input type="submit" value="Actualizar">
    </form>
  </body>
</html>
