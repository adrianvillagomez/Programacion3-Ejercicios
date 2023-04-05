<?php

class Auto 
{
    private  string $_marca;
    private  string $_color;
    private  float $_precio;
    private  DateTime $_fecha;
    public function __construct($marca,$color,$precio=0,$fecha=new DateTime('2023-04-04')){
        $this->_marca=$marca;
        $this->_color=$color;
        $this->_precio=$precio;
        $this->_fecha=$fecha;
    }

    public function AgregarImpuesto($cantidad){
        if (is_float($cantidad)) {
            $this->_precio += $cantidad;
        }
    }
    public static function MostrarAuto(Auto $auto){
        echo "Color: $auto->_color <br>";
        echo "Precio: $auto->_precio <br>";
        echo "Marca: $auto->_marca <br>";
        echo "fecha: ",$auto->_fecha->format('Y-m-d'),"<br>";
    }
    public function Equals(Auto $auto1,Auto $auto2){
        return $auto1->_marca === $auto2->_marca;
    }
    public static function Add(Auto $auto1,Auto $auto2){
        $retorno=0;
        if($auto1->_marca === $auto2->_marca && $auto1->_color === $auto2->_color)
        {
            $retorno=$auto1->_precio+$auto2->_precio;
        }
        return $retorno;
    }
}