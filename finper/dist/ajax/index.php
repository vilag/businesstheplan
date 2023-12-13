<?php
require_once "../modelos/Index.php";

$index=new Index();

switch ($_GET["op"])
	{

		case 'listar_gastos':

			$idusuario = $_GET['idusuario'];
			
			$rspta = $index->listar_gastos($idusuario);

			while ($reg = $rspta->fetch_object())
					{

						echo '

							

							<tr>
                                            <td>'.$reg->nom_categoria.'</td>
                                            <td>'.$reg->concepto.'</td>
                                            <td>'.$reg->cantidad.'</td>
                                            <td>'.$reg->fecha_hora.'</td>
                            </tr>

						';
	
					}			
			
		break;

		case 'listar_gastos_cat':

			$idusuario = $_GET['idusuario'];
			$idcategoria = $_GET['idcategoria'];
			
			$rspta = $index->listar_gastos_cat($idusuario,$idcategoria);

			while ($reg = $rspta->fetch_object())
					{

						echo '

							

							<tr>
                                            <td>'.$reg->nom_categoria.'</td>
                                            <td>'.$reg->concepto.'</td>
                                            <td>'.$reg->cantidad.'</td>
                                            <td>'.$reg->fecha_hora.'</td>
                            </tr>

						';
	
					}			
			
		break;

		case 'listar_categorias2':

			$idusuario = $_GET['idusuario'];
			
			$rspta = $index->listar_categorias($idusuario);

			while ($reg = $rspta->fetch_object())
					{

						echo '

							<div style="width: 100px !important; margin-left: 25px; cursor: pointer;" onmouseover="select_categoria('.$reg->idcategoria.');" onmouseout="desselect_categoria('.$reg->idcategoria.');" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'" align="center">
				                
				                    
				                   

				                    	<button type="button" class="btn  btn-icon btn-dark" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'"><img src="'.$reg->imagen.'" style="width: 70%;"></button><br>
				            			<b id="nom_categoria'.$reg->idcategoria.'" style="font-size: 12px; margin-bottom: 10px;">'.$reg->nombre.'</b>
				                       
				                        
				                    
				               
				            </div>

						';
	
					}			
			
		break;

		/*


			<div style="width: 40% !important; margin-left: 25px; cursor: pointer;" onmouseover="select_categoria('.$reg->idcategoria.');" onmouseout="desselect_categoria('.$reg->idcategoria.');" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'">
				                <div class="card latest-update-card" id="categoria'.$reg->idcategoria.'" style="height: 120px !important; padding-left: 15px; padding-top: 20px; padding-right: 15px; border-radius: 10px;" align="center">
				                    
				                   

				                    	<b id="nom_categoria'.$reg->idcategoria.'" style="font-size: 12px; margin-bottom: 10px;">'.$reg->nombre.'</b>
				                        <b id="cant_reg'.$reg->idcategoria.'" style="font-size: 18px; color: #159A80;">$ '.$reg->sum_categoria.'</b>
				                       
				                        
				                    
				                </div>
				            </div>

		*/

		case 'listar_categorias_next':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->listar_categorias_next($idusuario,$fecha_hoy,$valor_tipo);

						echo '


							<div style="width: 100px !important; margin-left: 10px; margin-right: 10px; cursor: pointer;" align="center">
				                
				                    
				                   

				                    	<button type="button" class="btn  btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter" onclick="ver_categorias();"><img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1647671468/Agencia/FinPer/plus_w_hsy6ga.png" style="width: 70%;"></button><br>
				            			<b style="font-size: 12px; margin-bottom: 10px;">Nueva Categoria</b>
				                       
				                        
				                    
				               
				            </div>



						';

			while ($reg = $rspta->fetch_object())
					{

						echo '

							<div style="width: 100px !important; margin-left: 10px; margin-right: 10px; cursor: pointer;" onmouseover="select_categoria('.$reg->idcategoria.');" onmouseout="desselect_categoria('.$reg->idcategoria.');" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'" align="center">
				                
				                    
				                   

				                    	<button type="button" class="btn  btn-icon btn-dark" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'"><img src="'.$reg->imagen.'" style="width: 70%;"></button><br>
				            			<b id="nom_categoria'.$reg->idcategoria.'" style="font-size: 12px; margin-bottom: 10px;">'.$reg->nombre.'</b>
				                       
				                        
				                    
				               
				            </div>



							

						';
	
					}			
			
		break;

		/*

			<div style="width: 40% !important; margin-left: 25px; cursor: pointer;" onmouseover="select_categoria('.$reg->idcategoria.');" onmouseout="desselect_categoria('.$reg->idcategoria.');" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'">
				                <div class="card latest-update-card" id="categoria'.$reg->idcategoria.'" style="height: 120px !important; padding-left: 15px; padding-top: 20px; padding-right: 15px; border-radius: 10px;" align="center">
				                    
				                   

				                    	<b id="nom_categoria'.$reg->idcategoria.'" style="font-size: 12px; margin-bottom: 10px;">'.$reg->nombre.'</b>
				                        <b id="cant_reg'.$reg->idcategoria.'" style="font-size: 18px; color: #159A80;">$ '.$reg->sum_categoria.'</b>
				                       
				                        
				                    
				                </div>
				            </div>

		*/

		case 'listar_categorias_next_semana':

			$idusuario = $_GET['idusuario'];
			$fecha_ini = $_GET['fecha_ini'];
			$fecha_fin = $_GET['fecha_fin'];
			
			$rspta = $index->listar_categorias_next_semana($idusuario,$fecha_ini,$fecha_fin);

						echo '


							<div style="width: 100px !important; margin-left: 25px; cursor: pointer;" align="center">
				                
				                    
				                   

				                    	<button type="button" class="btn  btn-icon btn-success" data-toggle="modal" data-target="#exampleModalCenter" onclick="ver_categorias();"><img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1647671468/Agencia/FinPer/plus_w_hsy6ga.png" style="width: 70%;"></button><br>
				            			<b style="font-size: 12px; margin-bottom: 10px;">Nueva Categoria</b>
				                       
				                        
				                    
				               
				            </div>



						';

			while ($reg = $rspta->fetch_object())
					{

						echo '

							<div style="width: 40% !important; margin-left: 25px; cursor: pointer;" onmouseover="select_categoria('.$reg->idcategoria.');" onmouseout="desselect_categoria('.$reg->idcategoria.');" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'">
				                <div class="card latest-update-card" id="categoria'.$reg->idcategoria.'" style="height: 120px !important; padding-left: 15px; padding-top: 20px; padding-right: 15px; border-radius: 10px;" align="center">
				                    
				                   

				                    	<button type="button" class="btn  btn-icon btn-dark" onclick="capturar_datos_gasto('.$reg->idcategoria.',\''.$reg->nombre.'\');" id="caja_categoria'.$reg->idcategoria.'"><img src="'.$reg->imagen.'" style="width: 70%;"></button><br>
				            			<b id="nom_categoria'.$reg->idcategoria.'" style="font-size: 12px; margin-bottom: 10px;">'.$reg->nombre.'</b>
				                       
				                        
				                    
				                </div>
				            </div>

						';
	
					}			
			
		break;

		case 'listar_categorias':

			$idusuario = $_GET['idusuario'];
			
			$rspta = $index->listar_categorias($idusuario);

			while ($reg = $rspta->fetch_object())
					{

						echo '

							<option value="'.$reg->idcategoria.'">'.$reg->nombre.'</option>

						';
	
					}			
			
		break;

		case 'guardar_gasto':

			$idcategoria = $_POST['idcategoria'];
			$concepto = $_POST['concepto'];
			$cantidad = $_POST['cantidad'];
			$fecha_hora = $_POST['fecha_hora'];
			$idusuario = $_POST['idusuario'];

			$rspta=$index->guardar_gasto($idcategoria,$concepto,$cantidad,$fecha_hora,$idusuario);
			echo json_encode($rspta);

		break;

		case 'listar_coin_concep':

			$texto = $_GET['texto'];
			$idusuario = $_GET['idusuario'];
			
			$rspta = $index->listar_coin_concep($texto,$idusuario);

			while ($reg = $rspta->fetch_object())
					{

						echo '

						<div style="width: 100%; height: 30px; background-color: #CCC; border-radius: 5px; margin-bottom: 5px; padding-top: 3px; cursor: pointer;" onclick="select_concep('.$reg->concepto.');">
							<b style="padding-left: 10px;">'.$reg->concepto.'</b>
						</div>

						';
	
					}			
			
		break;

		case 'salir':
			//Limpiamos las variables de sesión   
	        session_unset();
	        //Destruìmos la sesión
	        session_destroy();
	        //Redireccionamos al login
	        header("Location: ../auth-signin.html");

		break;

		case 'guardar_usuario':
			
			$nombre = $_POST['nombre'];
			$apellidop_reg = $_POST['apellidop_reg'];
			$apellidom_reg = $_POST['apellidom_reg'];
			$correo_reg = $_POST['correo_reg'];
			$pass_reg = $_POST['pass_reg'];
			$code_verif = $_POST['code_verif'];

									

	 		$destinatario = $correo_reg;
			$asunto = "FinPer: Codigo de verificacion";
			$carta = "Hola ".$nombre." para continuar con el registro siga los siguientes pasos: \n";
			$carta .= "1. Iniciar Sesion en:  https://sgbusinessplan.com/finper/dist/login.php. \n";
			$carta .= "2. Capturar el siguiente codigo para activar la cuenta. \n";
			$carta .= "Codigo: ".$code_verif;
			mail($destinatario, $asunto, $carta);




				$rspta=$index->guardar_usuario($nombre,$apellidop_reg,$apellidom_reg,$correo_reg,$pass_reg,$code_verif);
				echo json_encode($rspta);
		 		//echo $rspta ? "Anulada" : "No se puede anular";


		break;

		case 'enviar_verif':

			//$code_verif_input = $_POST['code_verif_input'];
			$idusuario_prereg = $_POST['idusuario_prereg'];

			$rspta=$index->enviar_verif($idusuario_prereg);
			echo json_encode($rspta);

		break;

		case 'update_valid':

			$code_verif_input = $_POST['code_verif_input'];
			$idusuario_prereg = $_POST['idusuario_prereg'];

			$rspta=$index->update_valid($idusuario_prereg,$code_verif_input);
			echo json_encode($rspta);

		break;

		case 'guardar_categoria':

			$idusuario = $_POST['idusuario'];
			$nom_categoria_new = $_POST['nom_categoria_new'];

			$rspta=$index->guardar_categoria($idusuario,$nom_categoria_new);
			echo json_encode($rspta);

		break;

		case 'guardar_sugerencia':

			$idusuario = $_POST['idusuario'];
			$sugerencia = $_POST['sugerencia'];

			$rspta=$index->guardar_sugerencia($idusuario,$sugerencia);
			echo json_encode($rspta);

		break;

		case 'consul_montos':

			$fecha_hoy = $_POST['fecha_hoy'];
			$valor_tipo = $_POST['valor_tipo'];
			$idusuario = $_POST['idusuario'];

			$rspta=$index->consul_montos($fecha_hoy,$valor_tipo,$idusuario);
			echo json_encode($rspta);

		break;

		case 'consul_montos_semana':

			$fecha_hoy = $_POST['fecha_hoy'];
			//$valor_tipo = $_POST['valor_tipo'];
			$fecha_ini = $_POST['fecha_ini'];
			$fecha_fin = $_POST['fecha_fin'];
			$idusuario = $_POST['idusuario'];

			$rspta=$index->consul_montos_semana($fecha_hoy,$fecha_ini,$fecha_fin,$idusuario);
			echo json_encode($rspta);

		break;

		case 'crear_grafica1':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->crear_grafica();

			while ($reg = $rspta->fetch_object())
					{

						echo '

						 	<script>
				            var xValues = [
				            
				            

						';

						$rspta2 = $index->nom_categria_list($idusuario);
						while ($reg2 = $rspta2->fetch_object())
						{

							echo '
								"'.$reg2->nombre.'",
							';
						}


						echo '

							];
				            var yValues = [
				           

						';

						$rspta3 = $index->cant_categria_list($idusuario,$fecha_hoy,$valor_tipo);
						while ($reg3 = $rspta3->fetch_object())
						{


							echo '
								"'.$reg3->sum_categoria.'",
							';

						}



						echo '

							];
				            var barColors = [
				             
						';


						$rspta4 = $index->nom_categria_list($idusuario);
						while ($reg4 = $rspta4->fetch_object())
						{

							echo '
								"'.$reg4->color.'",
							';
						}

						echo '

							];

				            new Chart("myChart", {
				              type: "doughnut",
				              data: {
				                labels: xValues,
				                datasets: [{
				                  backgroundColor: barColors,
				                  data: yValues
				                }]
				              },
				              options: {
				                title: {
				                  display: true,
				                  text: "World Wide Wine Production 2018"
				                }
				              }
				            });
				            </script>

						';
	
					}			
			
		break;

		case 'crear_grafica_semana1':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->crear_grafica();

			while ($reg = $rspta->fetch_object())
					{

						echo '

						 	<script>
				            var xValues = [
				            
				            

						';

						$rspta2 = $index->nom_categria_list($idusuario);
						while ($reg2 = $rspta2->fetch_object())
						{

							echo '
								"'.$reg2->nombre.'",
							';
						}


						echo '

							];
				            var yValues = [
				           

						';

						$rspta3 = $index->cant_categria_list_semana($idusuario,$fecha_hoy,$valor_tipo);
						while ($reg3 = $rspta3->fetch_object())
						{


							echo '
								"'.$reg3->sum_categoria.'",
							';

						}



						echo '

							];
				            var barColors = [
				             
						';


						$rspta4 = $index->nom_categria_list($idusuario);
						while ($reg4 = $rspta4->fetch_object())
						{

							echo '
								"'.$reg4->color.'",
							';
						}

						echo '

							];

				            new Chart("myChart", {
				              type: "doughnut",
				              data: {
				                labels: xValues,
				                datasets: [{
				                  backgroundColor: barColors,
				                  data: yValues
				                }]
				              },
				              options: {
				                title: {
				                  display: true,
				                  text: "World Wide Wine Production 2018"
				                }
				              }
				            });
				            </script>

						';
	
					}			
			
		break;

		case 'crear_grafica3':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->crear_grafica();

			while ($reg = $rspta->fetch_object())
					{	


						echo '
							<script type="text/javascript">

								var options = {
						          series: [{
						          name: "Total",
						          data: [
						          

						';	


								$rspta3 = $index->cant_categria_list($idusuario,$fecha_hoy,$valor_tipo);
								while ($reg3 = $rspta3->fetch_object())
								{


									echo '
										"'.$reg3->sum_categoria.'",
									';

								}


						echo '

							

						          ]
						        }],
						          chart: {
						          height: 350,
						          type: "bar",
						        },
						        plotOptions: {
						          bar: {
						            borderRadius: 10,
						            dataLabels: {
						              position: "top", // top, center, bottom
						            },
						          }
						        },
						        dataLabels: {
						          enabled: true,
						          formatter: function (val) {
						            return "$ " + val;
						          },
						          offsetY: -20,
						          style: {
						            fontSize: "12px",
						            colors: ["#304758"]
						          }
						        },
						        
						        xaxis: {
						          categories: [

						          

						';

								$rspta2 = $index->nom_categria_list($idusuario);
								while ($reg2 = $rspta2->fetch_object())
								{

									echo '
										"'.$reg2->nombre.'",
									';
								}

						echo '


								],
						          position: "bottom",
						          axisBorder: {
						            show: false
						          },
						          axisTicks: {
						            show: false
						          },
						          crosshairs: {
						            fill: {
						              type: "gradient",
						              gradient: {
						                colorFrom: "#D8E3F0",
						                colorTo: "#BED1E6",
						                stops: [0, 100],
						                opacityFrom: 0.4,
						                opacityTo: 0.5,
						              }
						            }
						          },
						          tooltip: {
						            enabled: true,
						          }
						        },
						        yaxis: {
						          axisBorder: {
						            show: false
						          },
						          axisTicks: {
						            show: false,
						          },
						          labels: {
						            show: false,
						            formatter: function (val) {
						              return "$ " + val;
						            }
						          }
						        
						        },
						        title: {
						          text: "",
						          floating: true,
						          offsetY: 330,
						          align: "center",
						          style: {
						            color: "#444"

						          }
						        }
						        };

						        var chart = new ApexCharts(document.querySelector("#grafica_script2"), options);
						        chart.render();

						    </script>	


						';
	
					}			
			
		break;


		case 'crear_grafica23':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->crear_grafica();

			while ($reg = $rspta->fetch_object())
					{	

						echo '
						<script type="text/javascript">

							var options = {
					          series: [{
					          data: [


						';

								$rspta2 = $index->cant_categria_list($idusuario,$fecha_hoy,$valor_tipo);
								while ($reg2 = $rspta2->fetch_object())
								{



									echo '
										 "'.$reg2->sum_categoria.'",
									';

								}


						echo '




					          ]
					        }],
					          chart: {
					          type: "bar",
					          height: 380
					        },
					        plotOptions: {
					          bar: {
					            barHeight: "100%",
					            distributed: true,
					            horizontal: true,
					            dataLabels: {
					              position: "bottom"
					            },
					          }
					        },
					        colors: [


						';

								$rspta3 = $index->nom_categria_list($idusuario);
								while ($reg3 = $rspta3->fetch_object())
								{

									echo '
										"'.$reg3->color.'",
									';
								}



						echo '


							
					         
					        
					        ],
					        dataLabels: {
					          enabled: true,
					          textAnchor: "start",
					          style: {
					            colors: ["#fff"]
					          },
					          formatter: function (val, opt) {
					            return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val
					          },
					          offsetX: 0,
					          dropShadow: {
					            enabled: true
					          }
					        },
					        stroke: {
					          width: 1,
					          colors: ["#fff"]
					        },
					        xaxis: {
					          categories: [

					          
					          

						';

								$rspta4 = $index->nom_categria_list($idusuario);
								while ($reg4 = $rspta4->fetch_object())
								{

									echo '
										"'.$reg4->nombre.'",
									';
								}

						echo '

							],
					        },
					        yaxis: {
					          labels: {
					            show: false
					          }
					        },
					        title: {
					            text: "",
					            align: "center",
					            floating: true
					        },
					        subtitle: {
					            text: "",
					            align: "center",
					        },
					        tooltip: {
					          theme: "dark",
					          x: {
					            show: false
					          },
					          y: {
					            title: {
					              formatter: function () {
					                return ""
					              }
					            }
					          }
					        }
					        };

					        var chart = new ApexCharts(document.querySelector("#grafica_script2"), options);2833
					        chart.render();

					    </script>

						';
						
	
					}			
			
		break;

		case 'crear_grafica_cat':

			$idusuario = $_GET['idusuario'];
			$fecha_hoy = $_GET['fecha_hoy'];
			$valor_tipo = $_GET['valor_tipo'];
			
			$rspta = $index->crear_grafica_cat($idusuario);

			while ($reg = $rspta->fetch_object())
					{	

						$gasto_total = $reg->gasto_total;
						$porc = round(($reg->sum_categoria/($reg->gasto_total/2))*100,1);

						echo '

							<div style="width: 100%; height: 50px; margin-bottom: 15px;">
								<b>'.$reg->nombre.'</b>&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 20px;">$ '.$reg->sum_categoria.'</b>&nbsp;&nbsp;&nbsp;&nbsp;<b>'.$porc.'%</b>
								<div style="left: 0; right: 0; width: '.$porc.'%; background-color: '.$reg->color.'; height: 20px;">
								</div>
							</div>

						';
						
	
					}			
			
		break;

		

	}


?>