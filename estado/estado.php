<?php
include_once ("../config/config.php");
include ("../config/Database.php");

class estado{
    
    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $empresa = $params['empresa'];
        $nit = $params['nit'];
        $correo = $params['correo'];
        $corte = $params['corte'];
        $comentario = $params['comentario'];
        
        $insert = " INSERT INTO estadfinanc VALUES (NULL, '$empresa', $nit, '$correo',  '$corte', '$comentario')";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll(){
        $sql = "SELECT * FROM estadfinanc ";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM estadfinanc WHERE id= $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $nit = $params["nit"];
        $empresa = $params['empresa'];
        $corte = $params["corte"];
        $correo = $params['correo'];
        $comentario = $params['comentario'];
        $id = $params['id'];

        $update = " UPDATE estadfinanc SET empresa='$empresa', nit=$nit, correo='$correo',  corte='$corte', comentario='$comentario' WHERE id=$id";
        return mysqli_query($this->conexion, $update);
    }

    function delete($id){
        $delete= " DELETE FROM estadfinanc WHERE id = $id ";
        return mysqli_query($this->conexion, $delete);

    }
}



?>