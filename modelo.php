<?php
class Calculos {
    public $funcion ;
    public $resultado ;
   
    public function __construct($funcion=0){
        $this->funcion = $funcion;
		$this->resultado = 0;
    }

    function ejecutaFuncion() {
		$resultado = 0;
		eval("\$resultado = ".$this->funcion.";");
		$this->resultado = $resultado;
		echo $this->resultado;
        die();
	}

    function sumar() {
		$arr = explode("+", $this->funcion);
		$this->resultado = $arr[0]+$arr[1];
		echo $this->resultado;
		die();
	}

    function restar() {
		$arr = explode("-", $this->funcion);
		$this->resultado = $arr[0]-$arr[1];
		echo $this->resultado;
		die();
	}

    function dividir() {
		$arr = explode("/", $this->funcion);
		$this->resultado = $arr[0]/$arr[1];
		echo $this->resultado;
		die();
	}

    function multiplicar() {
		$arr = explode("*", $this->funcion);
		$this->resultado = $arr[0]*$arr[1];
		echo $this->resultado;
		die();
	}
	
}
