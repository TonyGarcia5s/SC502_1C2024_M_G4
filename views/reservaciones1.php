<!doctype html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gran Hotel Desamparados</title>
    <link rel="shortcut icon" href="assets/img/download-icon-city+home+hotel+icon-1320086447685977083_32.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href=" assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href=" assets/css/bootstrap.min.css">



    <!-- Bootstrap Min CSS --> 
    <!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<!-- Boxicons Min CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.min.css">
		<!-- Odometer Min CSS -->
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<!-- Date Picker CSS-->
		<link rel="stylesheet" href="assets/css/date-picker.min.css">
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css"> 
		<!-- Beautiful Fonts CSS --> 
		<link rel="stylesheet" href="assets/css/beautiful-fonts.css">
		
		<!-- Dark CSS -->
		<link rel="stylesheet" href="assets/css/dark.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
	   
	   <!-- Favicon -->
	   <link rel="icon" type="image/png" href="assets/img/favicon.png">
	   
    
    </head> 

<header class="hero">
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">Gran Hotel Desamparados</h2>
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="index.php" class="nav_links">Inicio</a>
                </li>
                <li class="nav_items">
				<a href="habitacion.php"
					class="nav_links">Habitaciones</a>
                </li>
                <li class="nav_items">
                    <a href="servicio.php" class="nav_links">Servicios</a>
                </li>
                <li class="nav_items">
                    <a href="tours.php" class="nav_links">Tours</a>
                </li>
                <li class="nav_items" >
                    <a href="reservaciones.php" class="nav_links">Reservaciones</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Contacto</a>
                </li>
            </ul>
        </nav>
        <section class="hero_container container">
            <h1 class="hero_title">Reservaciones</h1>
            <p class="hero_paragraph">Bienvenido a nuestro hotel, donde la comodidad y la hospitalidad se encuentran</p>
            
        </section>
    </header>

    <div class="check-area mb-minus-70">
            <div class="container">
                <form class="check-form">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Fecha de Ingreso</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-1">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2024">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
									
						<div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Fecha de Salida</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-2">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2024">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div> 
						</div>
						<div class="col-lg-3">
							<div class="mb-3">
                                <label for="habitacion" class="form-label">Habitaciones</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="habitacion"
                                    id="habitacion"
                                >
                                    <option value>Seleccionar</option>
                                    <?php foreach ($data ['habitaciones']as $habitacion){?>
                                        <option value="<?php echo $habitacion ['id']?><?php echo $habitacion ['estilo']?></option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                            
                            
								
						</div>
                        <div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn">
									Revisar Disponibilidad
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Start Exclusive Area -->
		<section class="exclusive-area pt-100 pb-70"> 
			<div class="container">
				<div class="section-title">
					<span>Habitaciones mas populares</span>
					<h2>Las que los clientes mas buscan </h2>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">Habitacion #1</span>
										<h3>Habitacion Balco<n/h3>
										<span class="review">
											4.5
											
										</span>
										<p>Habitacion con sofa cama, cama matrimonial,baño privado, coffe maker y mini refri</p>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">Habitacion #9</span>
										<h3>Habitacion AC</h3>
										<span class="review">
											4.5
											
										</span>
										<p>Habitacion con  Aire,sofa cama, cama matrimonial,baño privado  y mini refri</p>
										
										
									</div>
								</div>
                                </div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Exclusive Area -->


<footer class="footer-top-area footer-top-area-two pt-100">
			<div class="container">

			<div class="footer-middle-area pt-60">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<a href="index.html">
									<img src="assets/img/logohotel.jpeg" alt="Image">
								</a>
								<ul class="social-icon">
									<li>
										
											<i class="bx bxl-facebook"></i>
										
									</li>
									<li>
										
											<i class="bx bxl-twitter"></i>
									
									</li>
									<li>
										
											<i class="bx bxl-pinterest-alt"></i>
										
									</li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Quienes somos:</h3>
								<ul>
								<p>Somos un equipo comprometido a proporcionar a nuestros huéspedes una experiencia cómoda y acogedora durante su estadía. Nuestro objetivo es asegurarnos de 
									que te sientas bienvenido y cuidado mientras disfrutas de tu tiempo con nosotros.</p>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Servicios</h3>
								<ul>
									<li>
										
											<i class="right-icon bx bx-chevrons-right"></i>
											Servicio de desayuno
									
									</li>
									<li>
									
											<i class="right-icon bx bx-chevrons-right"></i>
											Limpieza garantizada
									
									</li>
									<li>
										
											<i class="right-icon bx bx-chevrons-right"></i>
											Comodidades
										
									</li>
									<li>

											<i class="right-icon bx bx-chevrons-right"></i>
											Aire Acondicionado 
										
									</li>
									<li>

											<i class="right-icon bx bx-chevrons-right"></i>
											Eventos
									
									</li>
									<li>
									<i class="right-icon bx bx-chevrons-right"></i>
											Servicio de cena 
		
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-widget">
								<h3>Contacto</h3>
								<ul class="information">
									<li class="address">
										<i class="flaticon-maps-and-flags"></i>
										<span>Dirrecion</span>
										San Jose,Desamparados centro
									</li>
									<li class="address">
										<i class="flaticon-call"></i>
										<span>Celular</span>
										<a href="+506 86467728">
											+506 86467728
										</a>
									</li>
									<li class="address">
										<i class="flaticon-envelope"></i>
										<span>Email</span>
										<a href="mailto:hello@ecorik.com">
											granhoteldesamparados@gmail.com
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom-area">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copy-right">
								<p>Copyright @2024 <a href="index.php">Gran Hotel Desamparados</a>. All Rights Reserved</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="designed">
								<p>Designed By <i class='bx bx-heart'></i> <a href="https://envytheme.com/" target="_blank">Grupo 4</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-shape">
				<img src="assets/img/shape/white-shape-bottom.png" alt="Image">
			</div>
		</footer>