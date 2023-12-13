<?php
    require 'header.php';
?>    
  
     


<style type="text/css">
    .campos_obligatorios{
        border-style: groove !important;
        border-color: white !important;
    }
</style> 
<!-- /End Header -->

        

       


       <div class="fables-testimonial fables-after-overlay py-4 py-md-5 my-4 my-lg-5 half-width-testimonial bg-rules" style="margin-top: -1px !important;">
            <div class="container z-index position-relative"> 
                <div class="row">
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".4s">  
                           <!--<p class="white-color font-25 mb-2">See what</p>-->
                           <h2 class="fables-second-text-color font-35 font-weight-bold"><span class="white-color">DESARROLLO DE ESTRATEGIAS DIGITALES</span></h2>
                           <p class="fables-third-text-color mt-4 mb-4">
                               Automatiza tus procesos y aumenta la productividad, incrementa tus ventas y reduce costos implementando herramientas digitales a la medida de tu negocio. 
                           </p> 
                           <div style="margin-bottom: 100px !important;">
                              <div style="width: 10%; height: 50px; float: left;">
                                  <img src="images/iconos/desarrollo_web.png" style="width: 100% !important;">
                              </div>
                              <div style="width: 80%; height: 50px; float: left; margin-left: 5%; padding-top: 10px;">
                                 <p style="color: white; font-size: 20px; font-weight: 300;">Desarrollo Web</p> 
                              </div>
                          </div> 

                          <div style="margin-bottom: 100px !important;">
                              <div style="width: 10%; height: 50px; float: left;">
                                  <img src="images/iconos/marketing_d.png" style="width: 100% !important;">
                              </div>
                              <div style="width: 80%; height: 50px; float: left; margin-left: 5%; padding-top: 10px;">
                                 <p style="color: white; font-size: 20px; font-weight: 300;">Marketing Digital</p> 
                              </div>
                          </div>

                          <div style="margin-top: 180px !important;">
                              <div style="width: 10%; height: 50px; float: left;">
                                  <img src="images/iconos/diseno.png" style="width: 100% !important;">
                              </div>
                              <div style="width: 80%; height: 50px; float: left; margin-left: 5%; padding-top: 10px;">
                                 <p style="color: white; font-size: 20px; font-weight: 300;">Diseño publicitario</p> 
                              </div>
                          </div>
                           
                    </div>
                    <div class="col-12 col-md-6 wow fadeIn mt-4 mt-md-5 mt-lg-0" data-wow-duration="2.5s" data-wow-delay=".4s">
                       <div class="position-relative image-container" style="height: 650px !important; background-color: #012034; padding: 30px;"> 
                            <div > 
                                   <h5 style="color: #DEDFE0;">¿Te gustaria recibir una asesoria gratuita?</h5><br> 
                                   <p class="position-relative z-index font-weight-light fables-third-text-color" style="color: #DEDFE0; margin-bottom: 15px;">Contáctanos y con gusto te ayudaremos.</p>

                                   <label id="eti_campos_obl" style="color: white; font-size: 12px;">Porfavor captura los campos requeridos (*)</label>
                                   
                            </div> 
                            <form class="fables-contact-form" style="margin-top: 30px;">
                              <div class="form-group"> 
                                <input type="text" class="form-control rounded-0 p-3"  placeholder="Nombre*" id="nombre" style="height: 40px; background-color: rgba(0, 0, 0, 0.2); border-style: none;">   
                              </div>
                              <div class="form-group"> 
                                <input type="email" class="form-control rounded-0 p-3" placeholder="Correo*" id="correo" style="height: 40px;  background-color: rgba(0, 0, 0, 0.2); border-style: none;">
                              </div>
                              <div class="form-group"> 
                                <input type="text" class="form-control rounded-0 p-3" placeholder="Teléfono" id="telefono" style="height: 40px;  background-color: rgba(0, 0, 0, 0.2); border-style: none;">   
                              </div>
                              <div class="form-group"> 
                                  <textarea class="form-control rounded-0 p-3" placeholder="Mensaje*" rows="3" id="mensaje" style="background-color: rgba(0, 0, 0, 0.2); border-style: none;"></textarea>
                              </div>                       
                              <button type="button" class="btn fables-second-background-color rounded-0 text-white btn-block p-3" onclick="enviar_datos();">Enviar</button>
                            </form>     
                        </div>  
                         
                    </div>
                </div>
               
            </div>
       </div>

       <style type="text/css">
           .campos_req{
                border-style: groove !important;
                border-color: white !important;
           }
       </style>


       <div class="fables-index-products large-mb fables-after-overlay py-4 py-md-5 mt-md-5 bg-rules" style="background-image: url(assets/custom/images/index-testimonial.jpg); margin-top: -170px !important;">
           <div class="container z-index position-relative overflow-hidden" style="margin-top: 100px !important;"> 
               <div class="row">
                   <div class="col-12 col-md-7 wow fadeInLeft">
                       <h2 class="fables-second-text-color font-35 font-weight-bold">Nuestros <span class="white-color">Servicios</span></h2>
                       <p class="fables-third-text-color mt-4 mb-md-5">
                           Creamos estrategias digitales a la medida de tu negocio, implementando lo mejor en tecnologia. 
                       </p>
                   </div>
                   <!--<div class="col-12 col-md-5 col-lg-3 text-right offset-lg-2 my-4 my-md-0 mt-md-5 mt-lg-0 text-center">
                       <a href="#" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-5 py-2">View all products</a>
                   </div>-->
               </div>   
               <div class="owl-carousel owl-theme dots-0 circle-nav carousel-items-4" style="margin-top: 30px;"> 
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay=".4s">
                       <div class="row">
                           <div class="fables-product-img col-12">
                              <img class="card-img-top w-100 rounded-0" src="images/servicios/sistemasweb.png" alt="dress fashion">
                              
                          </div>
                          <div class="card-body col-12">
                            <h5 class="card-title mx-3">
                                <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">SISTEMAS WEB</a>
                            </h5>
                            <p class="card-text fables-fifth-text-color font-15 mx-3">Automatización de procesos administratvios, incremento de rendimiento y productividad. </p>
                            <!--<p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>-->
                            <!--<p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>-->
                          </div>
                       </div>
                     </div>  
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay=".8s">
                       <div class="row">
                           <div class="fables-product-img col-12">
                              <img class="card-img-top rounded-0 w-100" src="images/servicios/pagina_web.png" alt="dress fashion">
                              
                          </div>
                          <div class="card-body col-12">
                            <h5 class="card-title mx-3">
                                <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">PAGINAS WEB</a>
                            </h5>
                            <p class="card-text fables-fifth-text-color font-15 mx-3">Creación de sitios web adaptables a cualquier dipositivo, diseños amigables para mostrar lo mejor de tus productos y servicios.</p>
                            <!--<p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>-->
                            <!--<p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>-->
                          </div>
                       </div>
                    </div> 
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay="1.2s">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0 w-100" src="images/servicios/marketing_digital.png" alt="dress fashion">
                                      
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">MARKETING DIGITAL</a>
                                    </h5>
                                    <p class="card-text fables-fifth-text-color font-15 mx-3">Posicionamiento de marca y aumento de ventas mediante un plan de medios digitales.</p>
                                    <!--<p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>-->
                            <!--<p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>-->
                                  </div>
                               </div>
                    </div>  
                     <div class="card rounded-0 mb-4 border-light wow fadeIn" data-wow-delay="1.6s">
                               <div class="row">
                                   <div class="fables-product-img col-12">
                                      <img class="card-img-top rounded-0 w-100" src="images/servicios/diseno.png" alt="dress fashion">
                                      
                                  </div>
                                  <div class="card-body col-12">
                                    <h5 class="card-title mx-3">
                                        <a href="#" class="fables-main-text-color fables-store-product-title fables-second-hover-color">DISEÑO PUBLICITARIO</a>
                                    </h5>
                                    <p class="card-text fables-fifth-text-color font-15 mx-3">Presenta tus productos y servicios de forma creativa, muestra el potencial de tu negocio a todos tus clientes.</p>
                                    <!--<p class="font-weight-bold fables-second-text-color my-2 mb-3 mx-3">$ 98.00</p>-->
                            <!--<p class="fables-product-info"><a href="#" class="btn fables-second-border-color fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2">
                            <span class="fables-iconcart"></span> 
                            <span class="fables-btn-value">ADD TO CART</span></a></p>-->
                                  </div>
                               </div>
                        </div>   
                      
                     
                </div>  
           </div>
       </div>



        <div class="container">
            <div class="my-4 my-md-5 overflow-hidden">
               
                <div class="text-center mb-5 wow fadeInDown" data-wow-delay="1s">
                    <h3 class="fables-about-top-head fables-forth-text-color font-15 semi-font d-inline-block bg-white position-relative" style="margin-bottom: 40px; margin-top: 150px;">
                        <span class="mx-4">Metodologia</span>
                    </h3>
                    <p class="fables-forth-text-color text-center mb-4 mb-lg-5">Objectives & Key Results es una metodología de planificación cuyo propósito es establecer objetivos de manera abierta y colaborativa. En concreto un OKR es una combinación de un objetivo y unos resultados clave lo cual nos ayuda a visualizar qué es el éxito que buscamos y a entender si lo estamos consiguiendo.</p>
                    <!--<h2 class="fables-second-text-color mt-3 font-30 font-weight-bold text-center">Provide you the great Services</h2> -->
                </div> 
               
            </div>
       </div>


       
       <div class="container"> 
            <div class="row mt-4 my-md-5 overflow-hidden">
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
                    <div class="border p-3 p-md-4 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                               
                                <img src="images/iconos/objetivo.png" width="50px">
                            </div>
                            <div class="col-12 col-lg-9">
                                <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading" style="color: #1A324B;">Objetivos</h2>
                                <div class="font-15 fables-forth-text-color">
                                    Se refiere al QUÉ hay que lograr. Es algo concreto, que llama a la acción y que resulta ambicioso e inspirador. 
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
                   <div class="border p-3 p-md-4 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                                <img src="images/iconos/resultado.png" width="50px">
                            </div>
                            <div class="col-12 col-lg-9">
                               <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading" style="color: #1A324B;">Resultados Clave</h2>
                               <div class="font-15 fables-forth-text-color">
                                    Tiene que ver con el CÓMO vamos a lograr un objetivo, a la vez que sirve de indicador de referencia de la consecución del objetivo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
                   <div class="border p-3 p-md-4 text-center text-lg-left">
                        <div class="row">
                            <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                                <img src="images/iconos/tareas.png" width="50px">
                            </div>
                            <div class="col-12 col-lg-9">
                               <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading" style="color: #1A324B;">Tareas</h2>
                                <div class="font-15 fables-forth-text-color">
                                    Actividades que nos ayudan a tener los resultados clave esperados.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        

   
            
     
<!-- Start page content -->
<div class="fables-page-content" style="margin-top: -25px;">
        
        

       <div class="fables-light-background-color py-3 py-md-4 py-lg-5">
           <div class="container">
                <div class="col-12 col-md-12" align="center"> 
                    <h3 class="position-relative z-index white-color mb-3 font-25 font-weight-bold" style="color: #2C3E4F;">Nuestra experiencia</h3>  
                </div> 
               <div class="owl-carousel owl-theme nav-0 carousel-items-6 dots-0">
                  <div> 
                      <img src="images/empresas/pg.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="images/empresas/reyna.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="images/empresas/linco.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="images/empresas/atlamedic.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="images/empresas/sanisol.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  <div> 
                      <img src="images/empresas/balche.png" alt="Fables Template" class="border-hover fables-partner-carousel-img">  
                  </div>
                  

                </div>  
           </div>
       </div>


       
       
     
</div>
<!-- /End page content -->

<script type="text/javascript" src="scripts/index.js?v=<?php echo(rand()); ?>"></script>
    
<?php
    require 'footer.php';
?>  