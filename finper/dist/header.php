<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro de gastos</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <meta http-equiv="Expires" content="0">
  	<meta http-equiv="Last-Modified" content="0">
  	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  	<meta http-equiv="Pragma" content="no-cache">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    
    <script type="text/javascript">
        if (window.history.forward(1) != null) {window.history.forward(1);}
    </script>

</head>
<body class="" style="overflow: hidden !important;">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="https://res.cloudinary.com/ddcszcshl/image/upload/v1645948571/Agencia/Iconos/2_gyx3sj.png" alt="User-Profile-Image">
						<div class="user-details">
							<span><?php echo $_SESSION['nombre'];?></span>
							<h2 id="idusuario" style="display: none;"><?php echo $_SESSION['idusuario']; ?></h2>
							<div id="more-details" style="display: none;">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<!--<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>-->
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<!--<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>-->
					<li class="nav-item">
					    <a href="#" class="nav-link" onclick="abrir_modal_sug();"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Sugerencias</span></a>
					</li>
					<!--
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
						<ul class="pcoded-submenu">
							<li><a href="bc_alert.html">Alert</a></li>
							<li><a href="bc_button.html">Button</a></li>
							<li><a href="bc_badges.html">Badges</a></li>
							<li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
							<li><a href="bc_card.html">Cards</a></li>
							<li><a href="bc_collapse.html">Collapse</a></li>
							<li><a href="bc_carousel.html">Carousel</a></li>
							<li><a href="bc_grid.html">Grid system</a></li>
							<li><a href="bc_progress.html">Progress</a></li>
							<li><a href="bc_modal.html">Modal</a></li>
							<li><a href="bc_spinner.html">Spinner</a></li>
							<li><a href="bc_tabs.html">Tabs & pills</a></li>
							<li><a href="bc_typography.html">Typography</a></li>
							<li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
							<li><a href="bc_toasts.html">Toasts</a></li>
							<li><a href="bc_extra.html">Other</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item">
					    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
					    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>-->

				</ul>
				
				<!--<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Upgrade To Pro</h6>
						<p>Please contact us on our email for need any support</p>
						<a href="https://1.envato.market/PgJNQ" target="_blank" class="btn btn-primary btn-sm text-white m-0">Upgrade</a>
					</div>
				</div>-->
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1645950659/Agencia/Logos/4_itg1i4.png" style="width: 70px;" alt="" class="logo">
						<img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1645950659/Agencia/Logos/4_itg1i4.png" style="width: 70px;" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<!--<li class="nav-item">
							
						</li>-->
						<!--<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dropdown
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Mega
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">UI Element</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alert</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Cards</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
												<li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Forms</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Elements</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Validation</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Masking</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Wizard</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Picker</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Select</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Application</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-check-square"></i> To-Do</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-image"></i> Gallery</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-help-circle"></i> Helpdesk</a></li>
											</ul>
										</div>
										<div class="col">
											<h6 class="mega-title">Extension</h6>
											<ul class="pro-body">
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Editor</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Invoice</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-calendar"></i> Full calendar</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
												<li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>-->
					</ul>
					<ul class="navbar-nav ml-auto">
						<!--<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
									<span class="badge badge-pill badge-danger">5</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>-->
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1645948571/Agencia/Iconos/2_gyx3sj.png" class="img-radius" alt="User-Profile-Image">
										Cerrar Sesión &nbsp;&nbsp;
										<a href="ajax/usuario.php?op=salir" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<!--<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>-->
								</div>
							</div>
						</li>
					</ul>
				</div>

							<div id="modal_sugerencia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalCenterTitle">Sugerencias</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                        	<!--<div class="col-sm-12 card-body br">
                                        		<button type="button" class="btn  btn-secondary" onclick="">Nueva</button>
                                        	</div>-->
                                        	<div class="col-sm-12 card-body br">
                                        		<b style="color: black;">Ayudanos a mejorar para ti.</b><br><br>
                                        		<label style="color: black;">¿Tienes alguna idea para ayudarte a controlar tus gastos? Mandanos tu sugerencia y con gusto lo harémos para ti.</label>
                                        	</div>
                                            <div class="col-sm-12 card-body br">
                                                
                                                
                                                <textarea class="form-control" id="sugerencia_value"></textarea>
                                            </div>
                                        </div>

                                        <!--<section class="colorfulForm">
										    <label>Title</label>
										    <input type="text" id="title" value="Colorful popup" class="l2"/><br>
										    <label>Text</label>
										  <textarea id="myText" class="l2">My text example</textarea><br>
										    <label>Mode</label>
										    <select class="l2" id="mode">
										        <option value="">confirm</option>
										        <option value="alert">alert</option>
										    </select><br>
										    <label>Size</label>
										    <select class="l2" id="size">
										        <option value="p">small</option>
										        <option value="m">medium</option>
										        <option value="g">big</option>
										    </select><br>
										  <label>Color</label>
										  <button class="l1 blue">blue</button> 
										  <button class="l1 green">green</button> 
										  <button class="l1 red">red</button>  
										  <button class="l1 white" style="border: 1px solid #555; color: #555;">white</button>
										  <button class="l1 orange">orange</button> 
										  <button class="l1 purple">purple</button> 
										</section>-->

                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn  btn-primary" id="btn_save_suge" onclick="guardar_sugerencia();">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <style type="text/css">
                            	@import url(https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic);
								@-webkit-keyframes popUpEntrada {
								  0%{opacity: 0; margin-top: -20%;}
								  75%{margin-top: 5%;}
								  100%{opacity: 1;}
								}
								@keyframes popUpEntrada {
								  0%{opacity: 0; margin-top: -20%;}
								  75%{margin-top: 5%;}
								  100%{opacity: 1;}
								}
								@-webkit-keyframes popUpSaida {
								  0%{opacity: 1;}
								  75%{opacity: 1; margin-top: -20%;}
								  100%{opacity: 0;margin-top: 40%;}
								}
								@keyframes popUpSaida {
								  0%{opacity: 1;}
								  75%{opacity: 1; margin-top: -20%;}
								  100%{opacity: 0;margin-top: 40%;}
								}
								body, html, root, document{
								  display: block
								  height: 500px;
								}
								 .popUpFundo{
								    display: none;
								    position: fixed;
								    top: 0;
								    left: 0;
								    width: 100%;
								    height: 100%;
								    margin: 0;
								    padding: 0;
								    background-color:#4879c3;
								    opacity: 0.8;
								    z-index: 50;
								}
								.popUp{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    display: none;
								    position: fixed;
								    top: 40%;
								    left: 50%;
								    padding: 0;
								    font-size: 14px;
								    font-family: 'PT Sans', sans-serif;
								    color: #fff;
								    border-style:none;
								    z-index: 999;
								    overflow: hidden;
								}
								.popUp button:focus{
								    outline-style: none;
								}
								.popUp>h1{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    margin: 0;
								    padding: 5px;
								    min-height: 40px;
								    font-size: 1.2em;
								    font-weight: bold;
								    text-align: center;
								    color: #fff;
								    background-color: transparent;
								    border-style: none;
								    border-width: 5px;
								    border-color: black;
								}
								.vermelha>h1{
								    border-color: #fa5032;
								}
								.verde>h1{
								    border-color: #42ad4f;
								}
								.azul>h1{
								    border-color: #659cff;
								}

								.popUp>div{
								    display: block;
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 100%;
								    padding: 5%;
								    text-align: center;
								    vertical-align: middle;
								    border-width: 1px;
								    border-color: #ccc;
								    border-style: none none solid none;
								    overflow: auto;
								}
								.popUp>div>span{
								    display: table-cell;
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    margin: 0;
								    padding: 0;
								    vertical-align: middle;
								}
								.popUp>button{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    margin: 0;
								    padding: 10px;
								    width: 50%;
								    border: 1px none #ccc;
								    color: #fff;
								    font-family: inherit;
								    cursor: pointer;
								}
								.alert{
								    width: 100% !important;
								}
								.popUp .puCancelar{
								    float: left;
								    display: none;
								}

								.popUp .puEnviar{
								    float: right;
								    display: none;
								}

								.p{
								    margin: 0;
								    width: 100%;
								    max-width: 300px;
								    height: 100%;
								    max-height: 200px;
								    transform: translate(-50%, -50%);
								}

								.p>div{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 100%;
								    height: calc(100% -108px);
								    margin: 0;
								    padding: 0;
								    border-style: none;
								    
								}
								.p>div>div, .p span{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 300px;
								    height: 108px;
								    margin: 0;
								    padding: 0;
								    border-style: none;

								}

								.p>button{
								    height: 50px;
								    
								}
								.puEnviar{
								    margin: 5px 0;
								}
								.puCancelar{
								    margin: 5px 0;
								}


								.m{
								    margin: 0;
								    width: 100%;
								    max-width: 400px;
								    height: 100%;
								    max-height: 300px;
								    transform: translate(-50%, -50%);
								}
								.m>div{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 100%;
								    height: calc(100% -108px);
								    margin: 0;
								    padding: 0;
								    border-style: none;
								    border-color:#ccc;
								}
								.m>div>div, .m>span, .m>div>span{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 400px;
								    height: 208px;
								    margin: 0;
								    padding: 0;
								    border-style: none;
								}

								.m>button{
								    height: 50px;
								}

								.g{
								    margin: 0;
								    width: 100%;
								    max-width: 600px;
								    height: 100%;
								    max-height: 500px;
								    transform: translate(-50%, -50%);
								}
								.g>div{
								    box-sizing: border-box;
								    -webkit-box-sizing: border-box;
								    -moz-box-sizing: border-box;
								    width: 100%;
    height: calc(100% -108px);
    margin: 0;
    padding: 0;
    border-style: none;
    border-color: #ccc;
}
.g>div>div, .g span{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 600px;
    height: 408px;
    margin: 0;
    padding: 0;
    border-style: none;
}
.g>button{
   height: 60px;
}


.alert.puEnviar{
    display: none;
}

.popUpEntrada{
    display: block !important;
    animation: popUpEntrada 0.5s;
    -webkit-animation: popUpEntrada 0.5s;
}
.popUpSaida{
    display: block !important;
    animation: popUpSaida 0.5s;
    -webkit-animation: popUpSaida 0.5s;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
}

.blue{
    background-color:#51b2d6;
}
.blue>button{
    background-color:#38a7d0;
}
.blue>button:hover{
    background-color:#72c1de;
}
.popUpFundo.blue{
    background-color:#134152;
}
.green{
    background-color: #43b649;
}
.green>button{
    background-color:#3da743;
}
.green>button:hover{
    background-color:#4fbe55;
}
.popUpFundo.green{
    background-color:#173f19;
}
.red{
    background-color: #d55c4b;
}
.red>button{
    background-color: #d04b38;
}
.red>button:hover{
    background-color: #d86959;
}
.popUpFundo.red{
    background-color:#4a1811;
}
.orange{
    background-color: #f9a025;
}
.orange>button{
    background-color: #f89710;
}
.orange>button:hover{
    background-color: #f9ac42;
}
.popUpFundo.orange{
    background-color: #8c5b02;
}
.purple{
    background-color: #ab4bd5;
}
.purple>button{
    background-color: #a238d0;
}
.purple>button:hover{
    background-color: #b159d8;
}
.popUpFundo.purple{
    background-color: #3f114a;
}
.white{
    background-color: #fff;
    color: #555;
}
.white>h1{
  color: #000;
}
.white>button{
    background-color: #f3f3f3;
    color: #555;
}
.white>button:hover{
    background-color: #e3e3e3;
}

.popUpFundo.white{
    background-color:#555;
}


/*
That part is just for the form
*/
.colorfulForm{
  width: 350px;
  margin: 60px auto;
}
.colorfulForm input, .colorfulForm textarea, .colorfulForm select{
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 350px;
  padding: 5px;
  background-color: #f3f3f3;
  border: 1px solid #ccc;
  border-radius: 2px; 
}

.colorfulForm label{
  display: block;
  font-family: Verdana, Arial;
  margin: 10px 0 5px 0;
}
.colorfulForm button{
  width: 100px;
  margin: 3px 7px;
  padding: 5px;
  color: #fff;
  border-style: none;
}
                            </style>
				
			
	</header>
	<!-- [ Header ] end -->