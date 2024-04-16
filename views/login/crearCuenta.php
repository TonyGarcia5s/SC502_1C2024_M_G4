<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta Nueva</title>
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP ?>app/recursos/css/estilos.css">
</head>
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo controlador::$rutaAPP ?>app/recursos/css/images/inicioSesion.jpeg');">
            <div class="wrap-input100 validate-input m-b-23" data-validate="User is required">
                <form class="login100-form validate-form" id="miform">
                    <span class="login100-form-title p-b-49">
                       CREAR CUENTA NUEVA
                       <hr>
                    </span>
        

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                        <span class="label-input100">Correo</span>
                        <input class="input100" type="text" name="username" placeholder="Ingrese su Correo" id="mail">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" name="pass" placeholder="Ingrese su contraseña" id="pass">
                        <hr>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Crear Cuenta
                            </button>
                        </div>
                    </div>

                    <div align="center" class="alert" id="mensaje" style="display: none; width: 100%; font-size: 20px;"></div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <a href="ContraseñaNueva.php">Restablecer contraseña</a>
                        <label>¿Ya tienes cuenta?</label>
                        <a href="IniciarSesion.php">Iniciar Sesión</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>

    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/animsition/js/animsition.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/select2/select2.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/daterangepicker/daterangepicker.min.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/vendor/countdowntime/countdowntime.js"></script>
    <script src="<?php echo controlador::$rutaAPP ?>app/views/login/assets/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#miform").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    dataType: "json",
                    url: "<?php echo controlador::$rutaAPP ?>index.php?action=crear_cuenta",
                    type: "POST",
                    data: {
                        usr: $("#mail").val(),
                        pass: $("#pass").val()
                    },
                    success: function (data) {
                        if (data.success == false) {
                            $("#mensaje").show();
                            $("#mensaje").html(data.msg);
                            $('.log-status').addClass('wrong-entry');
                            $('.alert').fadeIn(700);
                            setTimeout("$('.alert').fadeOut(1800);", 1500);
                        } else {
                            window.location = data.link;
                        }
                    },
                    error: function (response) {
                        $("#mensaje").show();
                        $("#mensaje").html(response.responseText);
                    }
                });
            });
            $('.form-control').keypress(function () {
                $('.log-status').removeClass('wrong