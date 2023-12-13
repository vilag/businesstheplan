function init()
{
	

	//listar_categorias();
	//listar_categorias2();
	listar_gastos();

	div_iniciales();

	$("#div_categorias_box").hide();
	$("#div_datos_gasto").hide();

	mostrar_dato_actual();
	select_mes();

	$("#btn_reg_cat").show();
	$("#btn_hide_cat").hide();

	crear_grafica();


}

function crear_grafica()
{
	var idusuario = $("#idusuario").text();
	var fecha_hoy = $("#fecha_process").val();
	var valor_tipo = 2;

	/*$.post("ajax/index.php?op=crear_grafica&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
	$("#grafica_script2").html(r);
					       
	});	*/

	$.post("ajax/index.php?op=crear_grafica_cat&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
	$("#grafica_categorias").html(r);
					       
	});	
}

function abrir_categorias()
{
	$("#div_categorias_box").show();
	$("#btn_reg_cat").hide();
	$("#btn_hide_cat").show();
}

function ocultar_categorias()
{
	$("#div_categorias_box").hide();
	$("#btn_reg_cat").show();
	$("#btn_hide_cat").hide();
	$("#div_datos_gasto").hide();
	ver_categorias();
}

function select_dia()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	$("#valor_tipo").val("1");
	$('#tipo_dia').addClass("tipo_select");
	$('#tipo_semana').removeClass("tipo_select");
	$('#tipo_mes').removeClass("tipo_select");
	$('#tipo_anio').removeClass("tipo_select");

	var idusuario = $("#idusuario").text();

	var fecha_hoy=moment().format('YYYY-MM-DD');
	var nuevo_dia=moment(fecha_hoy).format('DD');
	var nuevo_mes=moment(fecha_hoy).format('MMMM');
	var nuevo_anio=moment(fecha_hoy).format('YYYY');

	$("#dato_actual2").text(nuevo_anio);
	$("#dato_actual").text(nuevo_dia+" "+nuevo_mes);

	var valor_tipo = 1;

	$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
	{
			data = JSON.parse(data);
			var monto = data.monto;

			if (monto==null) {

				$("#gasto_total").text("$ "+"0.00");
			}else{
				
				$("#gasto_total").text("$ "+monto);
			}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					
					       
				});	

	});
	

}

function select_semana()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	$("#valor_tipo").val("4");
	$('#tipo_dia').removeClass("tipo_select");
	$('#tipo_semana').addClass("tipo_select");
	$('#tipo_mes').removeClass("tipo_select");
	$('#tipo_anio').removeClass("tipo_select");

	var idusuario = $("#idusuario").text();

	var fecha_hoy=moment().format('YYYY-MM-DD');
	var dia = moment().format('dddd');
	var dia_start = $("#val_dia").val();

	//alert(dia_start);

	if (dia=="Monday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('1', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('5', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('0', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('6', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Tuesday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('2', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('4', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('1', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('5', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Wednesday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('3', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('3', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('2', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('4', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Thursday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('4', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('2', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('3', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('3', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Friday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('5', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('1', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('4', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('2', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Saturday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('6', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('0', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('5', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('1', 'days').format('YYYY-MM-DD');
		}
	}
	if (dia=="Sunday") {
		if (dia_start==0) {
			 var fecha_ini = moment().subtract('0', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('6', 'days').format('YYYY-MM-DD');
		}
		if (dia_start==1) {
			 var fecha_ini = moment().subtract('6', 'days').format('YYYY-MM-DD');
			 var fecha_fin = moment().add('0', 'days').format('YYYY-MM-DD');
		}
	}

	var dia_ini=moment(fecha_ini).format('DD');
	var dia_fin=moment(fecha_fin).format('DD');
	var mes_ini=moment(fecha_ini).format('MMMM');
	var mes_fin=moment(fecha_fin).format('MMMM');
	var nuevo_mes=moment(fecha_hoy).format('MMMM');
	var nuevo_anio=moment(fecha_hoy).format('YYYY');

	if (dia_ini==dia_fin) {
		//var dias = dia_ini;
		$("#dato_actual").text("");
		$("#dato_actual2").text(dia_ini+" "+nuevo_mes+"  "+nuevo_anio);
	}else{

		if (mes_ini==mes_fin) {
			
			$("#dato_actual").text("");
			$("#dato_actual2").text(dia_ini+" - "+dia_fin+" "+mes_ini+"  "+nuevo_anio);
		}else{
			
			$("#dato_actual").text("");
			$("#dato_actual2").text(dia_ini+" "+mes_ini+" - "+dia_fin+" "+mes_fin+" "+nuevo_anio);
		}

	}	

	$.post("ajax/index.php?op=consul_montos_semana",{fecha_hoy:fecha_hoy,fecha_ini:fecha_ini,fecha_fin:fecha_fin,idusuario:idusuario},function(data, status)
	{
			data = JSON.parse(data);

			var monto_semana = data.monto_semana;

			//alert(data.monto_semana);

			if (monto_semana==null) {

				$("#gasto_total").text("$ "+"0.00");
			}else{
				//alert("entra");
				
				$("#gasto_total").text("$ "+monto_semana);
			}


			$.post("ajax/index.php?op=listar_categorias_next_semana&idusuario="+idusuario+"&fecha_ini="+fecha_ini+"&fecha_fin="+fecha_fin,function(r){
			$("#div_categorias").html(r);

					
					       
			});	

						

	});
}

function select_mes()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	$("#valor_tipo").val("2");
	$('#tipo_dia').removeClass("tipo_select");
	$('#tipo_semana').removeClass("tipo_select");
	$('#tipo_mes').addClass("tipo_select");
	$('#tipo_anio').removeClass("tipo_select");

	var idusuario = $("#idusuario").text();

	var fecha_hoy=moment().format('YYYY-MM-DD');
	var nuevo_mes=moment(fecha_hoy).format('MMMM');
	var nuevo_anio=moment(fecha_hoy).format('YYYY');

	$("#dato_actual2").text(nuevo_anio);
	$("#dato_actual").text(nuevo_mes);

	var valor_tipo = 2;

	$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
	{
			data = JSON.parse(data);
			var monto = data.monto;

			if (monto==null) {

				$("#gasto_total").text("$ "+"0.00");
			}else{
				
				$("#gasto_total").text("$ "+monto);
			}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					
					       
				});

	});
}

function select_anio()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	$("#valor_tipo").val("3");
	$('#tipo_dia').removeClass("tipo_select");
	$('#tipo_semana').removeClass("tipo_select");
	$('#tipo_mes').removeClass("tipo_select");
	$('#tipo_anio').addClass("tipo_select");

	var idusuario = $("#idusuario").text();

	var fecha_hoy=moment().format('YYYY-MM-DD');
	var nuevo_anio=moment(fecha_hoy).format('YYYY');
	$("#dato_actual").text("");
	$("#dato_actual2").text(nuevo_anio);
	var valor_tipo = 3;

	$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
	{
			data = JSON.parse(data);
			var monto = data.monto;

			if (monto==null) {

				$("#gasto_total").text("$ "+"0.00");
			}else{
				
				$("#gasto_total").text("$ "+monto);
			}

			$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
			$("#div_categorias").html(r);

					
					       
			});

	});
}

function mostrar_dato_actual()
{
	var valor_tipo = $("#valor_tipo").val();
	var fecha_hoy=moment().format('YYYY-MM-DD');

	

		var mes_hoy=moment(fecha_hoy).format('MMMM');
		var anio_hoy=moment(fecha_hoy).format('YYYY');
		$("#dato_actual").text(mes_hoy);
		$("#dato_actual2").text(anio_hoy);
		$("#fecha_process").val(fecha_hoy);
	
	
}

function dato_actual_mas()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	var valor_tipo = $("#valor_tipo").val();

	//alert(valor_tipo);

	if (valor_tipo==1) {

		var idusuario = $("#idusuario").text();
		var fecha_process=$("#fecha_process").val();
		var fecha_hoy = moment(fecha_process).add('1', 'days').format('YYYY-MM-DD');
		$("#fecha_process").val(fecha_hoy);
		//alert(fecha_process);
		var nuevo_dia=moment(fecha_hoy).format('DD');
		var nuevo_mes=moment(fecha_hoy).format('MMMM');
		var nuevo_anio=moment(fecha_hoy).format('YYYY');

		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text(nuevo_dia+" "+nuevo_mes);

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				//alert(monto);

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					
					       
				});	

		});
		
	}

	if (valor_tipo==2) {

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).add('1', 'months').format('YYYY-MM-DD');
		var nuevo_mes=moment(nuevo_dato).format('MMMM');
		var nuevo_anio=moment(nuevo_dato).format('YYYY');
		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text(nuevo_mes);
		$("#fecha_process").val(nuevo_dato);

		var idusuario = $("#idusuario").text();
		var fecha_hoy=nuevo_dato;

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					
					       
				});

		});



	}

	if (valor_tipo==3) {

		$("#gasto_total").text("");
		$("#dato_actual2").text("");
		$("#dato_actual").text("");

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).add('1', 'years').format('YYYY-MM-DD');
		var nuevo_anio=moment(nuevo_dato).format('YYYY');
		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text("");
		$("#fecha_process").val(nuevo_dato);

		//var valor_tipo = 2;
		var idusuario = $("#idusuario").text();
		var fecha_hoy = nuevo_dato;

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);
						       
				});

		});
	}

	if (valor_tipo==4) {

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).add('7', 'days').format('YYYY-MM-DD');
		$("#fecha_process").val(nuevo_dato);
		var dia = moment(nuevo_dato).format('dddd');
		var dia_start = $("#val_dia").val();


		if (dia=="Monday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('1', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('5', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('0', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('6', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Tuesday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('2', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('4', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('1', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('5', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Wednesday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('3', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('3', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('2', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('4', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Thursday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('4', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('2', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('3', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('3', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Friday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('5', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('1', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('4', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('2', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Saturday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('6', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('0', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('5', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('1', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Sunday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('0', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('6', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('6', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('0', 'days').format('YYYY-MM-DD');
			}
		}

		var dia_ini=moment(fecha_ini).format('DD');
		var dia_fin=moment(fecha_fin).format('DD');
		var mes_ini=moment(fecha_ini).format('MMMM');
		var mes_fin=moment(fecha_fin).format('MMMM');
		var nuevo_mes=moment(fecha_hoy).format('MMMM');
		var nuevo_anio=moment(fecha_hoy).format('YYYY');

		if (dia_ini==dia_fin) {
			//var dias = dia_ini;
			$("#dato_actual").text("");
			$("#dato_actual2").text(dia_ini+" "+nuevo_mes+"  "+nuevo_anio);
		}else{

			if (mes_ini==mes_fin) {
				
				$("#dato_actual").text("");
				$("#dato_actual2").text(dia_ini+" - "+dia_fin+" "+mes_ini+"  "+nuevo_anio);
			}else{
				
				$("#dato_actual").text("");
				$("#dato_actual2").text(dia_ini+" "+mes_ini+" - "+dia_fin+" "+mes_fin+" "+nuevo_anio);
			}

		}

		var fecha_hoy = nuevo_dato;
		var idusuario = $("#idusuario").text();

		$.post("ajax/index.php?op=consul_montos_semana",{fecha_hoy:fecha_hoy,fecha_ini:fecha_ini,fecha_fin:fecha_fin,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);

				var monto_semana = data.monto_semana;

				//alert(data.monto_semana);

				if (monto_semana==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					//alert("entra");
					
					$("#gasto_total").text("$ "+monto_semana);
				}

				$.post("ajax/index.php?op=listar_categorias_next_semana&idusuario="+idusuario+"&fecha_ini="+fecha_ini+"&fecha_fin="+fecha_fin,function(r){
				$("#div_categorias").html(r);

					
						       
				});	

		});

	}
	
}

function dato_actual_menos()
{
	$("#gasto_total").text("");
	$("#dato_actual2").text("");
	$("#dato_actual").text("");

	var valor_tipo = $("#valor_tipo").val();

	if (valor_tipo==1) {

		var idusuario = $("#idusuario").text();
		var fecha_process=$("#fecha_process").val();
		var fecha_hoy = moment(fecha_process).subtract('1', 'days').format('YYYY-MM-DD');
		$("#fecha_process").val(fecha_hoy);
		//alert(fecha_process);
		var nuevo_dia=moment(fecha_hoy).format('DD');
		var nuevo_mes=moment(fecha_hoy).format('MMMM');
		var nuevo_anio=moment(fecha_hoy).format('YYYY');

		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text(nuevo_dia+" "+nuevo_mes);

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				//alert(monto);

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
					$("#div_categorias").html(r);
							       
					});
					       
				});

		});
		
	}

	if (valor_tipo==2) {

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).subtract('1', 'months').format('YYYY-MM-DD');
		var nuevo_mes=moment(nuevo_dato).format('MMMM');
		var nuevo_anio=moment(nuevo_dato).format('YYYY');
		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text(nuevo_mes);
		$("#fecha_process").val(nuevo_dato);

		var idusuario = $("#idusuario").text();
		var fecha_hoy=nuevo_dato;

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);

					$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
					$("#div_categorias").html(r);
							       
					});
					       
				});

		});


	}

	if (valor_tipo==3) {

		$("#gasto_total").text("");
		$("#dato_actual2").text("");
		$("#dato_actual").text("");

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).subtract('1', 'years').format('YYYY-MM-DD');
		var nuevo_anio=moment(nuevo_dato).format('YYYY');
		$("#dato_actual2").text(nuevo_anio);
		$("#dato_actual").text("");
		$("#fecha_process").val(nuevo_dato);

		//var valor_tipo = 2;
		var idusuario = $("#idusuario").text();
		var fecha_hoy=nuevo_dato;

		$.post("ajax/index.php?op=consul_montos",{fecha_hoy:fecha_hoy,valor_tipo:valor_tipo,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);
				var monto = data.monto;

				if (monto==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					
					$("#gasto_total").text("$ "+monto);
				}

				$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
				$("#div_categorias").html(r);
						       
				});

		});
	}

	if (valor_tipo==4) {

		var fecha_process=$("#fecha_process").val();
		var nuevo_dato = moment(fecha_process).subtract('7', 'days').format('YYYY-MM-DD');
		$("#fecha_process").val(nuevo_dato);
		var dia = moment(nuevo_dato).format('dddd');
		var dia_start = $("#val_dia").val();


		if (dia=="Monday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('1', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('5', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('0', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('6', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Tuesday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('2', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('4', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('1', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('5', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Wednesday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('3', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('3', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('2', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('4', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Thursday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('4', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('2', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('3', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('3', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Friday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('5', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('1', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('4', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('2', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Saturday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('6', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('0', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('5', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('1', 'days').format('YYYY-MM-DD');
			}
		}
		if (dia=="Sunday") {
			if (dia_start==0) {
				 var fecha_ini = moment(nuevo_dato).subtract('0', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('6', 'days').format('YYYY-MM-DD');
			}
			if (dia_start==1) {
				 var fecha_ini = moment(nuevo_dato).subtract('6', 'days').format('YYYY-MM-DD');
				 var fecha_fin = moment(nuevo_dato).add('0', 'days').format('YYYY-MM-DD');
			}
		}

		var dia_ini=moment(fecha_ini).format('DD');
		var dia_fin=moment(fecha_fin).format('DD');
		var mes_ini=moment(fecha_ini).format('MMMM');
		var mes_fin=moment(fecha_fin).format('MMMM');
		var nuevo_mes=moment(fecha_hoy).format('MMMM');
		var nuevo_anio=moment(fecha_hoy).format('YYYY');

		if (dia_ini==dia_fin) {
			//var dias = dia_ini;
			$("#dato_actual").text("");
			$("#dato_actual2").text(dia_ini+" "+nuevo_mes+"  "+nuevo_anio);
		}else{

			if (mes_ini==mes_fin) {
				
				$("#dato_actual").text("");
				$("#dato_actual2").text(dia_ini+" - "+dia_fin+" "+mes_ini+"  "+nuevo_anio);
			}else{
				
				$("#dato_actual").text("");
				$("#dato_actual2").text(dia_ini+" "+mes_ini+" - "+dia_fin+" "+mes_fin+" "+nuevo_anio);
			}

		}

		var fecha_hoy = nuevo_dato;
		var idusuario = $("#idusuario").text();

		$.post("ajax/index.php?op=consul_montos_semana",{fecha_hoy:fecha_hoy,fecha_ini:fecha_ini,fecha_fin:fecha_fin,idusuario:idusuario},function(data, status)
		{
				data = JSON.parse(data);

				var monto_semana = data.monto_semana;

				//alert(data.monto_semana);

				if (monto_semana==null) {

					$("#gasto_total").text("$ "+"0.00");
				}else{
					//alert("entra");
					
					$("#gasto_total").text("$ "+monto_semana);
				}	

				$.post("ajax/index.php?op=listar_categorias_next_semana&idusuario="+idusuario+"&fecha_ini="+fecha_ini+"&fecha_fin="+fecha_fin,function(r){
				$("#div_categorias").html(r);

					
						       
				});						

		});

	}
		
}




function listar_gastos()
{
	var idusuario = $("#idusuario").text();

	$.post("ajax/index.php?op=listar_gastos&idusuario="+idusuario,function(r){
	$("#reg_gastos").html(r);
		       
	});	
}

function listar_categorias2()
{
	var idusuario = $("#idusuario").text();

	$.post("ajax/index.php?op=listar_categorias2&idusuario="+idusuario,function(r){
	$("#div_categorias").html(r);
		       
	});	
}

function listar_categorias()
{
	var idusuario = $("#idusuario").text();

	$.post("ajax/index.php?op=listar_categorias&idusuario="+idusuario,function(r){
	$("#categorias").html(r);
		       
	});	
}

function guardar_gasto()
{
	var idcategoria = $("#idcategoria").val();
	var concepto = $("#concepto").val();
	var cantidad = $("#cantidad").val();

	var fecha=moment().format('YYYY-MM-DD');
	var hora=moment().format('HH:mm:ss');
	var fecha_hora=fecha+" "+hora;

	var idusuario = $("#idusuario").text();

	if (idcategoria>0 && concepto!="" && cantidad>0) {

		$.post("ajax/index.php?op=guardar_gasto",{idcategoria:idcategoria,concepto:concepto,cantidad:cantidad,fecha_hora:fecha_hora,idusuario:idusuario},function(data, status)
		{
			data = JSON.parse(data);

			//listar_gastos();
			$("#concepto").val("");
			$("#cantidad").val("");


			$.post("ajax/index.php?op=listar_gastos_cat&idusuario="+idusuario+"&idcategoria="+idcategoria,function(r){
			$("#reg_gastos").html(r);
				       
			});	


		});	

	}else{
		alert("Por favor captura el concepto y cantidad.");
	}

		

	/*alert(idcategoria);
	alert(concepto);
	alert(cantidad);*/
}

function listar_coin_concep()
{
	$("#coin_concep").show();
	var texto = $("#concepto").val();
	var idusuario = $("#idusuario").val();

		$.post("ajax/index.php?op=listar_coin_concep&texto="+texto+"&idusuario="+idusuario,function(r){
		$("#coin_concep").html(r);
			       
		});	
		
}

function select_concep(concepto)
{
	//alert(idgastos);
	$("#concepto").val(concepto);
	$("#coin_concep").hide();
}

function div_iniciales()
{
	$("#div_grafica").show();
	$("#div_tabla_reg").show();
}

function select_categoria(idcategoria)
{
	$('#categoria'+idcategoria).addClass("back_cat");
	$('#nom_categoria'+idcategoria).addClass("back_cat");
	$('#cant_reg'+idcategoria).addClass("back_cat");
}

function desselect_categoria(idcategoria)
{
	$('#categoria'+idcategoria).removeClass("back_cat");
	$('#nom_categoria'+idcategoria).removeClass("back_cat");
	$('#cant_reg'+idcategoria).removeClass("back_cat");
}

function guardar_categoria()
{
	var idusuario = $("#idusuario").text();
	var nom_categoria_new = $("#nom_categoria_new").val();

	$.post("ajax/index.php?op=guardar_categoria",{idusuario:idusuario,nom_categoria_new:nom_categoria_new},function(data, status)
	{
		data = JSON.parse(data);

		listar_categorias2();
		$("#nom_categoria_new").val("");

	});
}

function capturar_datos_gasto(idcategoria,nombre)
{
	$("#div_categorias_box").hide();
	$("#div_datos_gasto").show();

	$("#nom_categoria_b").text(nombre);
	$("#idcategoria").val(idcategoria);

	var idusuario = $("#idusuario").text();

	$.post("ajax/index.php?op=listar_gastos_cat&idusuario="+idusuario+"&idcategoria="+idcategoria,function(r){
	$("#reg_gastos").html(r);
		       
	});	
}

function ver_categorias()
{
	$("#div_categorias_box").hide();
	$("#div_datos_gasto").hide();

	$("#nom_categoria_b").text("");
	$("#idcategoria").val("");

	listar_gastos();
	//listar_categorias2();

	var valor_tipo = $("#valor_tipo").val();
	var idusuario = $("#idusuario").text();
	var fecha_hoy=$("#fecha_process").val();

	$.post("ajax/index.php?op=listar_categorias_next&idusuario="+idusuario+"&fecha_hoy="+fecha_hoy+"&valor_tipo="+valor_tipo,function(r){
	$("#div_categorias").html(r);
					       
	});
}

function guardar_sugerencia()
{
	var idusuario = $("#idusuario").text();
	var sugerencia = $("#sugerencia_value").val();

	if (sugerencia!="") {

		$.post("ajax/index.php?op=guardar_sugerencia",{idusuario:idusuario,sugerencia:sugerencia},function(data, status)
		{
			data = JSON.parse(data);

			$("#sugerencia_value").val("");	

			janelaPopUp.abre( "example", 'p blue',  'Gracias por tu apoyo' ,  'Sugerencia enviada exitosamente.');
	  		setTimeout(function(){janelaPopUp.fecha('example');}, 2000);

	  		$("#modal_sugerencia").modal("hide");

		});

	}

		
}

function abrir_modal_sug()
{
	$("#modal_sugerencia").modal("show");
}



var janelaPopUp = new Object();
janelaPopUp.abre = function(id, classes, titulo, corpo, functionCancelar, functionEnviar, textoCancelar, textoEnviar){
    var cancelar = (textoCancelar !== undefined)? textoCancelar: 'Cancel';
    var enviar = (textoEnviar !== undefined)? textoEnviar: 'Send';
    classes += ' ';
    var classArray = classes.split(' ');
    classes = '';
    classesFundo = '';
    var classBot = '';
    $.each(classArray, function(index, value){
        switch(value){
            case 'alert' : classBot += ' alert '; break;
            case 'blue' : classesFundo += this + ' ';
            case 'green' : classesFundo += this + ' ';
            case 'red' : classesFundo += this + ' ';
            case 'white': classesFundo += this + ' ';
            case 'orange': classesFundo += this + ' ';
            case 'purple': classesFundo += this + ' ';
            default : classes += this + ' '; break;
        }
    });
    var popFundo = '<div id="popFundo_' + id + '" class="popUpFundo ' + classesFundo + '"></div>'
    var janela = '<div style="padding: 20px;" id="' + id + '" class="popUp ' + classes + '"><h1>' + titulo + "</h1><div><span>" + corpo + "</span></div><button class='puCancelar " + classBot + "' id='" + id +"_cancelar' data-parent=" + id + ">" + cancelar + "</button><button class='puEnviar " + classBot + "' data-parent=" + id + " id='" + id +"_enviar'>" + enviar + "</button></div>";
    $("window, body").css('overflow', 'hidden');
    
    $("body").append(popFundo);
    $("body").append(janela);
    $("body").append(popFundo);
     //alert(janela);
    $("#popFundo_" + id).fadeIn("fast");
    $("#" + id).addClass("popUpEntrada");
    
    $("#" + id + '_cancelar').on("click", function(){
        if((functionCancelar !== undefined) && (functionCancelar !== '')){
            functionCancelar();
            
        }else{
            janelaPopUp.fecha(id);
        }
    });
    $("#" + id + '_enviar').on("click", function(){
        if((functionEnviar !== undefined) && (functionEnviar !== '')){
            functionEnviar();
        }else{
            janelaPopUp.fecha(id);
        }
    });
    
};
janelaPopUp.fecha = function(id){
    if(id !== undefined){
        $("#" + id).removeClass("popUpEntrada").addClass("popUpSaida"); 
        
            $("#popFundo_" + id).fadeOut(1000, function(){
                $("#popFundo_" + id).remove();
                $("#" + $(this).attr("id") + ", #" + id).remove();
                if (!($(".popUp")[0])){
                    $("window, body").css('overflow', 'auto');
                }
            });
            
      
    }
    else{
        $(".popUp").removeClass("popUpEntrada").addClass("popUpSaida"); 
        
            $(".popUpFundo").fadeOut(1000, function(){
                $(".popUpFundo").remove();
                $(".popUp").remove();
                $("window, body").css('overflow', 'auto');
            });
            
       
    }
}


/*$("#btn_save_suge").on("click", function(){
	
  var myText = $("#myText").val();
  janelaPopUp.abre( "asdf", $("#size").val() + " "  + $(this).html() + ' ' + $("#mode").val(),  $("#title").val() ,  myText)

  janelaPopUp.abre( "example", 'p blue',  'Example' ,  'chosse a configuration and click the color!');
  setTimeout(function(){janelaPopUp.fecha('example');}, 2000);

});*/


function abrir_config_dia_ini()
{
	$("#modal_dia_ini").modal("show");
}


function select_dia1()
{
	document.getElementById('btn_dia_ini1').style.backgroundColor = '#039D7E';
	document.getElementById('btn_dia_ini1').style.color = '#FFFFFF';
	document.getElementById('btn_dia_ini2').style.backgroundColor = '#FFFFFF';
	document.getElementById('btn_dia_ini2').style.color = '#000000';
	$("#val_dia").val("0");
}

function select_dia2()
{
	document.getElementById('btn_dia_ini2').style.backgroundColor = '#039D7E';
	document.getElementById('btn_dia_ini2').style.color = '#FFFFFF';
	document.getElementById('btn_dia_ini1').style.backgroundColor = '#FFFFFF';
	document.getElementById('btn_dia_ini1').style.color = '#000000';
	$("#val_dia").val("1");
}
	


init();