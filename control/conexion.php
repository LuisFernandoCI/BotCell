<?php
  class Conexion{
    private $servidor="http://ramptors.net/mysql";
    private $usuario="chatsell";
    private $password="ChatSell*#969798";
    private $base="chatsell";
    protected $con="";

    function __construct(){
        $this->con=new mysqli($this->servidor,$this->usuario,$this->password,$this->base);
        if($this->con->connect_errno){
            echo "Fallo al conectarse con la Base de Datos ".$this->con->connect_error;
        }
        $this->con->set_charset("utf8");
    }

  }
?>