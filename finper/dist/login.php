<!DOCTYPE html>
<html lang="en">

<head>

	<title>Finper</title>
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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8" name="google-signin-client_id" content="228887835233-squ1sc0ktroak624oq8kmbhi1hvtf29r.apps.googleusercontent.com">
    <!-- Meta, title, CSS, favicons, etc. -->

	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
	



</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="https://res.cloudinary.com/ddcszcshl/image/upload/v1645950659/Agencia/Logos/4_itg1i4.png" alt="" class="img-fluid mb-4" style="margin-bottom: -30px !important; width: 30%;">
		<div class="card borderless" style="background: transparent;">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body" id="form_iniciar">
						<h4 class="mb-3 f-w-400" style="color: white;">Iniciar Sesión</h4>
						<hr>
					
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="logina" placeholder="Correo electrónico" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="clavea" placeholder="Contraseña" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<!--<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>-->
						<button class="btn btn-block btn-primary mb-4" style="background-color: #FFFFFF; color: #234066; border-radius: 20px; font-weight: 400 !important;" onclick="login();"><b>Iniciar Sesión</b></button>
						<hr>
						<!--<p class="mb-2 text-muted"><a href="#" class="f-w-400" style="color: white;">¿Olvidaste tu contraseña?</a></p>-->
						<p class="mb-0 text-muted"><a href="#" class="f-w-400" style="color: white;" onclick="abrir_reg();">Registrarse</a></p><br>


					<div id="exampleModalCenter" class="modal fade" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalCenterTitle">Política de Privacidad</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-sm-12 card-body br" style="height: 400px; overflow: scroll;">
                                               <h1>Privacy Policy</h1>
												<p>Last updated: March 08, 2022</p>
												<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
												<p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the <a href="https://www.privacypolicies.com/blog/privacy-policy-template/" target="_blank">Privacy Policy Template</a>.</p>
												<h1>Interpretation and Definitions</h1>
												<h2>Interpretation</h2>
												<p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
												<h2>Definitions</h2>
												<p>For the purposes of this Privacy Policy:</p>
												<ul>
												<li>
												<p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
												</li>
												<li>
												<p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Business Plan.</p>
												</li>
												<li>
												<p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
												</li>
												<li>
												<p><strong>Country</strong> refers to:  Mexico</p>
												</li>
												<li>
												<p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
												</li>
												<li>
												<p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
												</li>
												<li>
												<p><strong>Service</strong> refers to the Website.</p>
												</li>
												<li>
												<p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
												</li>
												<li>
												<p><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a User can log in or create an account to use the Service.</p>
												</li>
												<li>
												<p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
												</li>
												<li>
												<p><strong>Website</strong> refers to Business Plan, accessible from <a href="https://sgbusinessplan.com/" rel="external nofollow noopener" target="_blank">https://sgbusinessplan.com/</a></p>
												</li>
												<li>
												<p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
												</li>
												</ul>
												<h1>Collecting and Using Your Personal Data</h1>
												<h2>Types of Data Collected</h2>
												<h3>Personal Data</h3>
												<p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
												<ul>
												<li>
												<p>Email address</p>
												</li>
												<li>
												<p>First name and last name</p>
												</li>
												<li>
												<p>Phone number</p>
												</li>
												<li>
												<p>Usage Data</p>
												</li>
												</ul>
												<h3>Usage Data</h3>
												<p>Usage Data is collected automatically when using the Service.</p>
												<p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
												<p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
												<p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
												<h3>Information from Third-Party Social Media Services</h3>
												<p>The Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:</p>
												<ul>
												<li>Google</li>
												<li>Facebook</li>
												<li>Twitter</li>
												</ul>
												<p>If You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Service's account, such as Your name, Your email address, Your activities or Your contact list associated with that account.</p>
												<p>You may also have the option of sharing additional information with the Company through Your Third-Party Social Media Service's account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.</p>
												<h3>Tracking Technologies and Cookies</h3>
												<p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
												<ul>
												<li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
												<li><strong>Flash Cookies.</strong> Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read &quot;Where can I change the settings for disabling, or deleting local shared objects?&quot; available at <a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_" rel="external nofollow noopener" target="_blank">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a></li>
												<li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
												</ul>
												<p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: <a href="https://www.privacypolicies.com/blog/privacy-policy-template/#Use_Of_Cookies_Log_Files_And_Tracking" target="_blank">Cookies by PrivacyPolicies Generator</a>.</p>
												<p>We use both Session and Persistent Cookies for the purposes set out below:</p>
												<ul>
												<li>
												<p><strong>Necessary / Essential Cookies</strong></p>
												<p>Type: Session Cookies</p>
												<p>Administered by: Us</p>
												<p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
												</li>
												<li>
												<p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
												<p>Type: Persistent Cookies</p>
												<p>Administered by: Us</p>
												<p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
												</li>
												<li>
												<p><strong>Functionality Cookies</strong></p>
												<p>Type: Persistent Cookies</p>
												<p>Administered by: Us</p>
												<p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
												</li>
												</ul>
												<p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
												<h2>Use of Your Personal Data</h2>
												<p>The Company may use Personal Data for the following purposes:</p>
												<ul>
												<li>
												<p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
												</li>
												<li>
												<p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
												</li>
												<li>
												<p><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
												</li>
												<li>
												<p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
												</li>
												<li>
												<p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
												</li>
												<li>
												<p><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
												</li>
												<li>
												<p><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
												</li>
												<li>
												<p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
												</li>
												</ul>
												<p>We may share Your personal information in the following situations:</p>
												<ul>
												<li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service,  to contact You.</li>
												<li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
												<li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
												<li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
												<li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
												<li><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
												</ul>
												<h2>Retention of Your Personal Data</h2>
												<p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
												<p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
												<h2>Transfer of Your Personal Data</h2>
												<p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
												<p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
												<p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
												<h2>Disclosure of Your Personal Data</h2>
												<h3>Business Transactions</h3>
												<p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
												<h3>Law enforcement</h3>
												<p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
												<h3>Other legal requirements</h3>
												<p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
												<ul>
												<li>Comply with a legal obligation</li>
												<li>Protect and defend the rights or property of the Company</li>
												<li>Prevent or investigate possible wrongdoing in connection with the Service</li>
												<li>Protect the personal safety of Users of the Service or the public</li>
												<li>Protect against legal liability</li>
												</ul>
												<h2>Security of Your Personal Data</h2>
												<p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
												<h1>Children's Privacy</h1>
												<p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
												<p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
												<h1>Links to Other Websites</h1>
												<p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
												<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
												<h1>Changes to this Privacy Policy</h1>
												<p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
												<p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
												<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
												<h1>Contact Us</h1>
												<p>If you have any questions about this Privacy Policy, You can contact us:</p>
												<ul>
												<li>By email: info@sgbusinessplan.com</li>
												</ul> 
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn  btn-secondary" data-dismiss="modal">Aceptar</button>
                                            
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <label style="color: white;">Consulta nuestra</label>&nbsp;<a href="#" data-toggle="modal" data-target="#exampleModalCenter" style="color: white;">Politica de privacidad</a>		

						
					</div>
					
                    
					<div class="card-body" id="form_registrar" style="display: none;">
						<h4 class="mb-3 f-w-400" style="color: white;">Registrarse</h4>
						<hr>
						<div class="form-group mb-4" id="eti_obl">
							<b style="color: white;"> Porfavor captura los datos obligatorios (*)</b>
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="nombre_reg" name="nombre_reg" placeholder="Nombre*" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="apellidop_reg" name="apellidop_reg" placeholder="Apellido Paterno" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="apellidom_reg" placeholder="Apellido Materno" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<div class="form-group mb-4">
							<input type="text" class="form-control" id="correo_reg" placeholder="Correo Electrónico*" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>

						<div class="form-group mb-4" id="eti_pass">
							<b style="color: white;"> Las contraseñas ingresadas no coinciden.</b>
						</div>

						<div class="form-group mb-4">
							<input type="password" class="form-control" id="pass_reg" placeholder="Contraseña*" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<div class="form-group mb-4">
							<input type="password" class="form-control" id="pass_reg2" placeholder="Confirmar Contraseña*" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">
						</div>
						<!--<div class="custom-control custom-checkbox text-left mb-4 mt-2">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Save credentials.</label>
						</div>-->
						<button class="btn btn-block btn-primary mb-4" onclick="guardar_usuario();">Guardar</button>
						<hr>
						<p class="mb-2 text-muted"><a href="#" class="f-w-400" style="color: white;" onclick="abrir_ini();">Iniciar Sesión</a></p>
					</div>
					<div class="card-body" id="form_verif">
						<h4 class="mb-3 f-w-400" style="color: white;">Capturar codigo de verificación</h4>
						<hr>
						<div class="form-group mb-3">
							<input type="hidden" id="idusuario_prereg">
							<input type="text" class="form-control" id="code_verif_input" placeholder="Codigo de verificación" style="background-color: rgba(0, 0, 0, 0.3); color: white; border-color: rgba(255, 255, 255, 0.2); border-width: 1px;">

						</div>
						<button class="btn btn-block btn-primary mb-4" onclick="enviar_verif();">Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<style type="text/css">
	.campo_obligatorio{
		background-color: rgba(247, 56, 16, 0.5) !important; 
		color: white !important; 
		border-color: rgba(255, 255, 255, 0.5) !important; 
		border-width: 1px !important;
	}
</style>



<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>
<script type="text/javascript" src="scripts/login.js?v=<?php echo(rand()); ?>"></script>



</body>

</html>
