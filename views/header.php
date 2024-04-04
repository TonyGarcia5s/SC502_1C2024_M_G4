<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top"> 
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Gran Hotel Desamparados</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target= >
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="#">Home</a> 
                </li> 
                <li class="nav-item">
                    <a class="nav-link me-2" hre†="rooms.php">Habitaciones</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" hre†="#">Servicios</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" hre†="#">Contactanos</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" hre†="#">About</a> 
                </li>
            </ul>
           <div class = "d-flex"> 
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="">
            Inicio de Sesión
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-b>
            Registro
            </button>
        </div>
    </div>
</div>
</nav>


<div class="modal fade" id="loginModal" data-bs-backdrop="static"data-bs-toggle="modal" data->
    <div class="modal-dialog">
        <div class="modal-content">
         <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                 </h5:
                 <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close">  
             </div>
             <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-q">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control shadow-none">
                </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
                <button type="submit" class="btn btn-dark shadow-none">Ingresar</button>
                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
        </div>
    </form>
 </div>
</div>
</div>