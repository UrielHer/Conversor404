<?php
	class Convertidor
	{
		private $cantidad;
		private $unidad;
		private $resultado;

		function __construct()
		{
			$this->cantidad = 0;
			$this->unidad = 0;
			$this->resultado = 0;
		}

		public function setDatos($cantidad, $unidad)
		{
			$this->cantidad=$cantidad;
			$this->unidad=$unidad;
		}

		/*Conversor en metros*/
		public function convCm()
		{
			$this->resultado = $this->cantidad*100;
			return $this->resultado;
		}

		public function convMm()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}

		public function convKm()
		{
			$this->resultado = $this->cantidad/1000;
			return $this->resultado;
		}
		/* Termina Conversor en metros*/

		/*Conversor en Litros*/
		public function convDl()
		{
			$this->resultado = $this->cantidad*10;
			return $this->resultado;
		}

		public function convMl()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}
		/*Termina Conversor en Litros*/

		/*Conversor en Kilogramos*/
		public function convGr()
		{
			$this->resultado = $this->cantidad*1000;
			return $this->resultado;
		}

		public function convMg()
		{
			$this->resultado = $this->cantidad*1000000;
			return $this->resultado;
		}
		/*Termina Conversor en Kilogramos*/
	}
?>