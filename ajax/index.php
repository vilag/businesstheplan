<?php

	require_once "../modelos/Index.php";

	$index = new Index();

	switch ($_GET["op"]) {
		

		case 'enviar_datos':
			
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$telefono = $_POST['telefono'];
			$mensaje = $_POST['mensaje'];
			$fecha_hora = $_POST['fecha_hora'];
										
			$rspta=$index->enviar_datos($nombre,$correo,$telefono,$mensaje,$fecha_hora);
			echo json_encode($rspta);
	 		//echo $rspta ? "Anulada" : "No se puede anular";

	 		// Datos para el correo
			$destinatario = "info@sgbusinessplan.com,orel.vilchis@gmail.com";
			//$destinatario = "orel.vilchis@gmail.com";
			$asunto = "Contacto desde Business Plan: ".$nombre;

			$carta = "De: $nombre \n";
			$carta .= "Correo: $correo \n";
			$carta .= "Telefono: $telefono \n";
			$carta .= "Mensaje: $mensaje";

			mail($destinatario, $asunto, $carta);


		break;

		case 'enviar_subs':
			
			$correo_subs = $_POST['correo_subs'];
			$fecha_hora = $_POST['fecha_hora'];

										
			$rspta=$index->enviar_subs($correo_subs,$fecha_hora);
			echo json_encode($rspta);
	 		//echo $rspta ? "Anulada" : "No se puede anular";
		break;
		


	}



?>