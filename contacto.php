
<?php
    require 'header.php';
?>  
     
<!-- Start Header -->
<!--<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Contact 1</h2>
    </div>
</div> --> 
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="index.php" class="fables-second-text-color">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacto</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
    <div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="row">
                        <!--<div class="col-12 col-sm-6 col-md-4 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".5s">
                            <span class="fables-iconmap-icon fa-3x fables-main-text-color fables-second-hover-color"></span> 
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                            <p class="font-14 fables-forth-text-color">
                            level13, 2Elizabeth St, Melbourne,Victor 2000</p>
                        </div>-->
                        <div class="col-12 col-sm-6 col-md-6 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay=".8s">
                            <span class="fables-iconphone fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Correo & Número de teléfono</h2>
                            <p class="font-14 fables-forth-text-color">info@sgbusinessplan.com</p>
                            <p class="font-14 fables-forth-text-color">(33) 3460 6340</p>

                        </div>
                        <div class="col-12 col-sm-6 col-md-6 text-center mb-5 mb-md-0 wow fadeInDown" data-wow-delay="1.1s">
                            <span class="fables-iconshare-icon fa-3x fables-main-text-color fables-second-hover-color"></span>
                            <h2 class="font-16 semi-font fables-main-text-color my-3">Mantente en contacto</h2>
                            <ul class="nav fables-contact-social-links"> 
                                <li><a href="https://www.facebook.com/Business-Plan-101561092365965" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                                <!--<li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                                <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="mt-0 mb-5 my-md-5"> 
                        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Contacta con nosotros</h3>
                        <p class="mt-3 fables-forth-text-color  text-center">Permitenos platicar contigo y ofrecerte lo mejor de nuestros servicios, estas a un paso de comenzar a transformar tu negocio. Escribenos y con gusto te ayudaremos. </p>

                    </div> 
                    
                    
                </div>
            </div>        
               
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-6 wow fadeInLeft">
                    <form class="fables-contact-form">
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3"  placeholder="Name" id="nombre">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" class="form-control rounded-0 p-3" placeholder="Email" id="correo">
                      </div>
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3" placeholder="Teléfono" id="telefono">   
                      </div>
                      <div class="form-group"> 
                          <textarea class="form-control rounded-0 p-3" placeholder="Message" rows="3" id="mensaje"></textarea>
                      </div>                       
                      <button type="button" class="btn fables-second-background-color rounded-0 text-white btn-block p-3" onclick="enviar_datos();">Enviar</button>
                    </form>
                </div>
                <div class="col-12 col-sm-6 wow fadeInRight">
                    <img src="images/fondo_contacto.jpg" width="100%">
                    <!--<div id="map" data-lng="31.248848" data-lat="29.966324" data-icon="assets/custom/images/map-marker.png" data-zom="12" style="width:100%;height:420px"></div>-->
                </div>
        </div>        
    </div> 
<!-- /End page content -->

<script type="text/javascript" src="scripts/index.js?v=<?php echo(rand()); ?>"></script>
    
<?php
    require 'footer.php';
?>