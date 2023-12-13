function init()
{
	$("#eti_campos_obl").hide();
}

function enviar_datos()
{
	//alert("Entra");

	var nombre = $("#nombre").val();
	var correo = $("#correo").val();
	var telefono = $("#telefono").val();
	var mensaje = $("#mensaje").val();

	var fecha=moment().format('YYYY-MM-DD');
	var hora=moment().format('HH:mm:ss');
	var fecha_hora=fecha+" "+hora;

	//alert(fecha_hora);

	if (nombre!="" && correo!="" &&mensaje!="") {

		$.post("ajax/index.php?op=enviar_datos",{
			nombre:nombre,
			correo:correo,
			telefono:telefono,
			mensaje:mensaje,
			fecha_hora:fecha_hora
		},function(data, status)
		{
			data = JSON.parse(data);

			//alert("Datos enviados correctamente");

			$(location).attr("href","post_form.php");

			$("#nombre").val("");
			$("#correo").val("");
			$("#telefono").val("");
			$("#mensaje").val("");

		});
		
	}else{

		$('#nombre').addClass("campos_req");
		$('#correo').addClass("campos_req");
		$('#mensaje').addClass("campos_req");

		$("#eti_campos_obl").show();
		//$('#nombre').addClass("campos_req");

	}

		


	//alert(nombre+" "+correo+" "+telefono+" "+mensaje);
}

function enviar_subs()
{
	var correo_subs = $("#correo_subs").val();
	var fecha=moment().format('YYYY-MM-DD');
	var hora=moment().format('HH:mm:ss');
	var fecha_hora=fecha+" "+hora;

	$.post("ajax/index.php?op=enviar_subs",{
		correo_subs:correo_subs,
		fecha_hora:fecha_hora
	},function(data, status)
	{
		data = JSON.parse(data);

		alert("Suscripción realizada exitosamente.");
		$("#correo_subs").val("");

	});
}

init();