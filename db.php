<?php
/**
 * Clase conexion db. Ana Asins
 */
class db
{
  //Atributos necesarios para la conexion.
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";
  //Conector
  private $conexion;
  //Propiedades para controlar errores
  private $error=false;
  private $error_msj="";

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se ha podido realizar la conexion a la bd. Revisar base de datos o parámetros";
      }
  }
  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }
  //Funcion que devuelve mensaje de error
  function msjError(){
    return $this->error_msj;
  }
  //Metodo para la realización de consultas a la bd
  public function realizarConsulta($consulta){
    if($this->error==false){
      $resultado = $this->conexion->query($consulta);
      return $resultado;
    }else{
      $this->error_msj="Imposible realizar la consulta: ".$consulta;
      return null;
    }
  }

  //Metodo para la realización de insercion a la bd
  public function realizarInsert($insert){
    if($this->error==false){
      if (!$this->conexion->query($insert)) {
        echo "Falló la insercion en la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar la insercion: ".$insert;
      return false;
    }
  }

  //Metodo para la realización de actualizacion a la bd
  public function realizarActualizacion($update)
  {
    if($this->error==false){
      if (!$this->conexion->query($update)) {
        echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar la actualizacion: ".$update;
      return false;
    }
  }

  //Metodo para la realización de borrar datos a la bd
  public function realizarBorrado($delete)
  {
    if($this->error==false){
      if (!$this->conexion->query($delete)) {
        echo "Falló el borrado de la tabla: (" . $this->conexion->errno .")" . $this->conexion->error;
        return false;
      }else {
        return true;
      }
    }else{
      $this->error_msj="Imposible realizar el borrado: ".$update;
      return false;
    }
  }
}
 ?>
