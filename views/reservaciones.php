<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<style>
  .custom-bg{
    background-color: #2ec1ac;
}
.custom-bg:hover{
    background-color: #279e8c;
}
.availability-form{
  margin-top: -50px;
  z-index: 2;
  position:relative ;
}
@media screen and (max-width:575px){
  .availability-form{ 
    margin-top: 25px;
   padding: 0 35px;
  }
  
}
  </style>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-while px-lg-3 py-log-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index1.php">Gran Hotel Desamparados</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link me-2" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Habitaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Servicios</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active me-2" aria-current="page" href="#">Reservaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contacto</a>
        </li>
        </ul>
        </li>
       
      <div class="d-flex">
        
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
          Inicio Sesion 
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#registroModal">
          Registro 
        </button>
      </div>
    </div>
  </div>
</nav>


<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i> Inicio de sesion
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for= class = "form-label">Direccion de Email</label>
            <input type="email" class="form-control shadow-none">
            </div>
            <div class="modal-body">
              <div class="mb-4">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control shadow-none">
                </div>
            <div class="d-flex align-items-center justify-content-between ">
                <button type="submit" class="btn btn-dark shadow-none">Iniciar Sesion</button>
                <a href="javascrip: void(0)" class="text-secondary text-decoration-none">Olvidaste tu Contraseña?</a>
        
              </div>
            </div>
        </div>

        </form>
     
    </div>
  </div>
</div>

<div class="modal fade" id="registroModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-add fs-3 me-2"></i> Registro 
          </h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <span class="badge bg-light text-dark mb-3 text-wrap lh-base">
            Los Datos de registro tiene que coicidir con los de la identificaccion para poder realizar la reserva 
          </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 ">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control shadow-none" >
              </div>
              <div class="col-md-6 ps-0">
                <label class="form-label">Email</label>
                <input type="email" class="form-control shadow-none" >
              </div>
              <div class="col-md-6 ps-0  mb-3">
                <label class="form-label">Numero de telefono</label>
                <input type="number" class="form-control shadow-none" >
              </div>
              <div class="col-md-12 ps-0 mb-3 ">
                <label class="form-label">Fotografia</label>
                <input type="file" class="form-control shadow-none" >
              </div>
              <div class="col-md-6 ps-0 ">
                <label class="form-label">Direccion</label>
            <textarea class="form-control shadow-none"  rows="1"></textarea>
              </div>

              <div class="col-md-6 ps-0  mb-3">
                <label class="form-label">Codigo Postal</label>
                <input type="number" class="form-control shadow-none" >
              </div>
              <div class="col-md-12 ps-0 mb-3 ">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control shadow-none" >
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control shadow-none" >
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Confirmacion de Contraseña</label>
                <input type="password" class="form-control shadow-none" >
              </div>
              
            </div>
            
          </div>
          <div class="text-center my-1 ">
            <button type="submit" class="btn btn-dark shadow-none" > REGISTRAR </button>
          </div>


        </div>
        
            </div>
            </div>
        </div>
        
        <div class="container-fluid">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/IMG_40905.PNG" />
        </div>
        
        
        
      </div>
     
    </div>
  </div>
</div>
</div>  
<!--//"Check Booking"//-->

<div class="container availability-form">
  <div class="row">
    <div class="col-log-12 bg-while shadow p-4 rounded">
      <h5 class="mb-4"> Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font: weight:500;">Check-in</label>
                <input type="date" class="form-control shadow-none" >
          </div>
                <div class="col-lg-3 mb-3">      
          <label class="form-label" style="font: weight:500;">Check-out</label>
                <input type="date" class="form-control shadow-none" >
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight :500;">Adult</label>
          <select class="form-select" arial-label="Default select example">
                 
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
          </div>
          <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select" arial-label="Default select example">
                 
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2 ">
            <button type="submit" class="btn rext-while shadow-none custom-bg">Submit</button>
          </div>
                  
          </div>
          </div>
        
      </form>
    </div>
  </div>
</div>

<!--//"Rooms"//-->
<h2 class="mt-5 pt-4  mb-4 text-center fw-bold h-font">Nuestras Habitaciones</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin: auto; ">
  <img src="./images/habitacio7.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Habitacion Simple</h5>
    <h6 class="card-title">$50 por noche</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Características</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap ">
           1 Cama Matrimonial 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           1 baño
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Tv inteligente
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Mini Refri 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Coffe-maker 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Sofa cama 
          </span>

   </div>

   <div class="rating mb-4">
   <h6 class="mb-1">Calificación</h6>
   <span class="badge rounded-pill bg-light">
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   </span>
 </div>
 <div class="d-flex">
   <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a> 
  </div>
    </div>
    </div>
    </div>
  

    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin: auto; ">
  <img src="./images/aire.png" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Habitacion Premium</h5>
    <h6 class="card-title">$60 por noche</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Características</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap ">
           1 Cama Matrimonial 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           1 baño
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Tv inteligente
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Mini Refri 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Coffe-maker 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Aire Acondicionado  
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Sofa cama 
          </span>

   </div>

   <div class="rating mb-4">
   <h6 class="mb-1">Calificación</h6>
   <span class="badge rounded-pill bg-light">
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   </span>
 </div>
 <div class="d-flex">
   <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a> 
  </div>
    </div>
    </div>
    </div>


    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow " style="max-width: 350px; margin: auto; ">
  <img src="./images/Familiar.png" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Habitacion Familiar</h5>
    <h6 class="card-title">$80 por noche</h6>
    <div class="features mb-4">
     <h6 class="mb-1">Características</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap ">
           2 Cama Matrimonial 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           1 baño
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Tv inteligente
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Mini Refri 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
           Coffe-maker 
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap ">
          Sofa cama 
          </span>

   </div>

   <div class="rating mb-4">
   <h6 class="mb-1">Calificación</h6>
   <span class="badge rounded-pill bg-light">
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   <i class="bi bi-star-fill text-warning"></i>
   </span>
 </div>
 <div class="d-flex">
   <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Reservar</a> 
  </div>
    </div>
    </div>
    </div>
    
  
<div class="col-lg-12 text-center mt-5">
      <a hred="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Más Habitaciones>>></a>
    </div>
  </div>
</div>
</div>
<!--Buscanos-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Contacto</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-while rounded">
    <iframe class="w-100 rounded" height="320"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15721.654951399383!2d-84.0643801!3d9.899457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e303fe0a32c5%3A0x45a59dacd19daaba!2sGran%20Hotel%20Desamparados!5e0!3m2!1ses-419!2scr!4v1711949081735!5m2!1ses-419!2scr"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
      <h5> Telefono</h5>
      <a href="tel: +506 86467728" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>+506 86467728
      </a>
    </div>
    <div class="col-lg-4 col-md-4">
      
      <div class="bg-white p-4 rounded mb-4">
      <h5>Siguenos </h5>
      <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Instagram
    </span>
      </a>
      <br>
      
      <a href="#" class="d-inline-block mb-3 ">
        <span class="badge bg-light text-dark fs-6 p-2">
        <i class="bi bi-instagram me-1"></i>Facebook
    </span>
      </a>
    </div>
    </div>
</
 <div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">Gran Hotel Desamparados</h3>
      <p>
      Nuestro hogar lejos de casa. 
      En nuestro hotel, no solo te alojas, 
      ¡te conviertes en parte de nuestra familia!
       Experimenta la calidez y la atención personalizada que nos distingue.
       ¡Gracias por ser parte de nuestra historia!
      </p>
 </div>
 <div class="col-lg-4 p-4">
  <h5 class="mb-3">Links</h5>
  <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Inicio</a><br>
  <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Habitaciones</a><br>
  <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Contacto</a><br>
  <a href="#"class="d-inline-block mb-2 text-dark text-decoration-none">Reservaciones</a><br>

</div>
  </div>
 </div>
      

<br><br><br>
<br><br><br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    
    
  });
</script>
</body>
</html>