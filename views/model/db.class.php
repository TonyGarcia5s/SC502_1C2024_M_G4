<?php
class BaseDeDatos

{
protected $conexion;
protected $isConnected=false;
public function conectar()
{
    $this->conexion=new mysqli("localhost","root", "devoloping","granHotel");//datos de la base de datos a la que se está conectando primero va la ip, el usuario de root, la contraseña q colocamos,base de datos a la q se esta conectando

    if($this->conexion->connect_error) {
        echo "Error de conexion".$this->conexion->connect_error;
        $this->isConnected=false;
    }else {
        $this->isConnected=true;
    }
    return $this->isConnected=true;
}

public function consultar($sql)
{
    $result=$this->conexion->query($sql);
    if($this->conexion->errno) {
        echo "Error mysql:".$this->conexion->error;
    }
    return $result;
}
public function numero_filas($result)
{
    return $result->num_rows;
}

public function cerrar()
{
    $this->conexion->close();
}

public function select_msqli($query) {
    $con=mysqli_connect('localhost','root','developin','sistema_web')
    or die("connection failed".mysqli_error());

    $result = mysqli_query($con,$query);

    return $result;
}

}