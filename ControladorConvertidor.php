<?php
	extract($_POST);
	require_once('claseconvertidor.php');

	$objConvertidor = new Convertidor();

	$objConvertidor->setDatos($cantidad, $unidad);

	if(isset($btnconvertir)){
		switch ($unidad) {
			case 1: $resultado = $objConvertidor->convCm();
			$mensaje = "la conversion es: ".$resultado. "cm";
				break;
			
			case 2: $resultado = $objConvertidor->convMm();
			$mensaje = "la conversion es: ".$resultado. "mm";
				break;

			case 3: $resultado = $objConvertidor->convKm();
			$mensaje = "la conversion es: ".$resultado. "km";
				break;

			case 4: $resultado = $objConvertidor->convDl();
			$mensaje = "la conversion es: ".$resultado. "decilitros";
				break;
			
			case 5: $resultado = $objConvertidor->convMl();
			$mensaje = "la conversion es: ".$resultado. "mililitros";
				break;

			case 6: $resultado = $objConvertidor->convGr();
			$mensaje = "la conversion es: ".$resultado. "gramos";
				break;

			case 7: $resultado = $objConvertidor->convMg();
			$mensaje = "la conversion es: ".$resultado. "miligramos";
				break;

			default: echo "error";
				break;
		}

		include('index.html');
		return $mensaje;

	}else{
		echo "No elegiste nada";
	}
?>