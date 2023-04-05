<?php
include "ejercicio03.php";
    class Garage
    {
        private string $_razonSocial;
        private float $_precioHora;
        private $_autos =array();

        public function __construct($razonSocial,$precio=0,$autos){
            $this->_razonSocial=$razonSocial;
            $this->_precioHora=$precio;
            $this->_autos = $autos;
        }

        function MostrarGarage(){
            echo "<br>";
            echo "Razon Social: $this->_razonSocial <br>";
            echo "Precio Hora: $this->_precioHora";
            echo "<br>";
            echo "Autos :";   
            echo "<br>";
           foreach ($this->_autos as $key=> $value) {
                echo "<br>",Auto::MostrarAuto($value),"<br>";
           }
        }
        function Equals(Auto $auto,Garage $garage){
           return in_array($auto,$garage->_autos);
        }

        function Add(Auto $auto,Garage $garage){
            $retorno="";
            if (!$garage->Equals($auto,$garage)) {
                array_push($garage->_autos,$auto);
                $retorno= "Agregado con exito";
            }else{
                $retorno= "El auto ya exite en el garage";
            }
            return $retorno;
        }
        function Remove(Auto $auto,Garage $garage){
            $retorno="";
            if($garage->Equals($auto,$garage)){
                $indice = array_search($auto, $garage->_autos);
                unset($garage->_autos[$indice]);
                $retorno= "Eliminado con exito";
            }else{
                $retorno= "El auto no exite";
            }
            return $retorno;
        }

    }