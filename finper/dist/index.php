<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: auth-signin.html");
}
else
{
require 'header.php';
if ($_SESSION['administrador']==1 || $_SESSION['usuario']==1)
{
?>
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container" style="overflow: scroll; height: 100vh;">
    <div class="pcoded-content">
        
        <!-- [ Main Content ] start -->
        <div class="row">

            
            <div class="col-sm-12 card-body br" style="margin-top: -40px;">
                            


                            <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalCenterTitle">Nueva Categoria</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-sm-12 card-body br">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" id="nom_categoria_new" maxlength="30">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn  btn-primary" data-dismiss="modal" onclick="guardar_categoria();">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                            



            </div>

        </div>

        <div class="row">
            <div class="col-sm-12 card-body br" align="center">

                <b style="margin: 15px; cursor: pointer;" onclick="select_dia();" id="tipo_dia">Dia</b><b style="margin: 15px; cursor: pointer;" onclick="select_semana();" id="tipo_semana">Semana</b><img src="assets/images/iconos/editar.png" onclick="abrir_config_dia_ini();" style="width: 13px; margin-top: -20px; margin-left: 3px; margin-left: -8px; cursor: pointer;"><b style="margin: 15px; cursor: pointer;" onclick="select_mes();" id="tipo_mes">Mes</b><b style="margin: 15px; cursor: pointer;" onclick="select_anio();" id="tipo_anio">Año</b><br><br>
                <b id="gasto_total" style="font-size: 30px;"></b><br><br>
                <b id="dato_actual">MES</b>&nbsp;<b id="dato_actual2">ANIO</b>
                <input type="hidden" id="fecha_process">
                <input type="hidden" id="valor_tipo" value="3">
                

                

            </div>
            <div style="width: 100%; position: absolute; margin-top: 80px;">
                <img src="assets/images/iconos/right-arrow.png" style="width: 50px; transform: rotate(180deg); cursor: pointer; left: 50px;" onclick="dato_actual_menos();">
                <img src="assets/images/iconos/right-arrow.png" style="width: 50px; right: 10px; position: absolute; cursor: pointer;" onclick="dato_actual_mas();">
            </div>
            <div style="width: 100%; margin-bottom: 30px;" align="center">
                
                <button id="btn_reg_cat" type="button" class="btn  btn-primary" style="width: 100%; border-radius: 20px;" onclick="abrir_categorias();">Registrar</button>
                <button id="btn_hide_cat" type="button" class="btn  btn-dark" style="width: 100%; border-radius: 20px;" onclick="ocultar_categorias();">Regresar</button>

            </div>
        </div>

        <style type="text/css">

            .tipo_select{
                border-bottom: solid;
            }
            
        </style>
            

        


        

        <div id="grafica_script2">          

        </div>

        <div id="grafica_script">          

        </div>

       
        <style type="text/css">
            @import url(https://fonts.googleapis.com/css?family=Roboto);

            body {
              font-family: Roboto, sans-serif;
            }

            #chart {
              max-width: 650px;
              margin: 35px auto;
            }

        </style>

       
        
        

        <style type="text/css">
            .back_cat{
                background-color: #2C3E50;
                color: white !important;
            }
        </style>

        <div class="row" id="div_datos_gasto">

            
            
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-12">
                <div class="card flat-card">
                        
                        

                        
                        <div class="col-sm-6 card-body br">
                            <b id="nom_categoria_b" style="font-size: 30px;"></b> 
                            <input type="hidden" id="idcategoria">
                        </div>
                        <div class="col-sm-12 card-body br">
                            <label>Concepto</label>
                            <input type="text" class="form-control" id="concepto" maxlength="30">
                            <div style="width: 100%; height: auto; max-height: 150px; overflow: scroll;" id="coin_concep">
                                
                            </div>
                        </div>
                        <div class="col-sm-12 card-body br">
                            <label>Monto</label>
                            <input type="number" class="form-control" id="cantidad">
                        </div>
                        <div class="col-sm-12 card-body br" align="center">
                            <button type="button" class="btn" onclick="guardar_gasto();" style="background-color: black; color: white;">
                                    Guardar
                            </button> 
                        </div>

                   

                </div>
                    
            </div>

            <!-- Latest Customers end -->
        </div>
        <!--<div class="row">
            <div class="col-md-12 col-xl-12" style="margin-bottom: 20px;">               

                <button type="button" class="btn" style="background-color: black; color: white;">Tabla</button> 
                <button type="button" class="btn" style="background-color: black; color: white;">Grafica</button> 
                              
            </div>
        </div>-->

        <div class="row">
            <div class="col-md-12 col-xl-12" id="div_categorias_box">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="card-body p-0">
                            <div class="col-sm-12 card-body br">

                                <div class="row" id="div_categorias" style="height: 200px; overflow: scroll;">
            
                                </div>

                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12" id="div_grafica">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="card-body p-0">
                            <div class="col-sm-12 card-body br">

                                <div class="row" id="grafica_categorias" style="padding-left: 20px; height: 250px; overflow: scroll;">          

                                </div>

                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 col-xl-12" id="div_tabla_reg" style="margin-top: 30px;">
                <div class="card flat-card">
                    <div class="row-table">
                        <div class="card-body p-0">
                            <div class="table-responsive" style="height: 200px;">

                                <table class="table table-hover mb-0" style="overflow: scroll;">
                                    <thead>
                                        <tr>
                                            <th>Categoria</th>
                                            <th>Concepto</th>
                                            <th>Cantidad</th>
                                            <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody id="reg_gastos">
                                        
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

                            <div id="modal_dia_ini" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <b style="color: black;">Selecciona el primer de la semana de tu preferencia</b>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                           
                                            <div class="col-sm-12 card-body br" align="center">
                                                
                                                <button onclick="select_dia1();" id="btn_dia_ini1" type="button" class="btn" style="border-style: solid; border-width: 1px; border-color: black; background-color: #039D7E; color: #000000;">Domingo</button>
                                                <button onclick="select_dia2();" id="btn_dia_ini2" type="button" class="btn" style="border-style: solid; border-width: 1px; border-color: black; margin-left: 50px;">Lunes</button>
                                                <input type="hidden" id="val_dia" value="0">
                                            </div>
                                        </div>

                                        

                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn  btn-primary" id="btn_save_suge" onclick="guardar_sugerencia();">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
<script type="text/javascript" src="scripts/index.js?v=<?php echo(rand()); ?>"></script>
</body>

</html>


<?php
}
else
{
  require 'noacceso.php';
}

?>

<?php 
}
ob_end_flush();
?>
