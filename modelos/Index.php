<?php
 	require "../config/Conexion.php";

 	Class Index
 	{
 		public function __construct()
		{

		}

		public function enviar_datos($nombre,$correo,$telefono,$mensaje,$fecha_hora)
		{
			
				$sql="INSERT INTO contacto (nombre,correo,telefono,mensaje,fecha_hora,tipo) VALUES('$nombre','$correo','$telefono','$mensaje','$fecha_hora','Solicitud')";
				return ejecutarConsulta($sql);
								
		}

		public function enviar_subs($correo_subs,$fecha_hora)
		{
			
				$sql="INSERT INTO contacto (correo,fecha_hora,tipo) VALUES('$correo_subs','$fecha_hora','Suscripción')";
				return ejecutarConsulta($sql);
								
		}
		


 	}

?>