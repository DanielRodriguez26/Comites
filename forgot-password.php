<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CONTROL ACTAS Y COMITÉS | Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css?<?PHP echo time();?>">

  
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
   <link href="dist/Parsley.js-2.8.1/src/parsley.css?<?php echo time();?>" rel="stylesheet" type="text/css">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo bg-cyan" style="border-top-left-radius:20px ; border-top-right-radius: 20px;">
    <a href="index.php"><b>RESTABLECER CONTRASEÑA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="border-bottom-left-radius:20px ; border-bottom-right-radius: 20px;">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Escribe tu dirección de correo electronico para restablecer tu contraseña.</p>

      <form  method="post" id="formrecuperar" name="formrecuperar">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="txtrecuperar"  required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" onclick="RECUPERARCONTRASENA()" class="btn  bg-cyan btn-block">ENVIAR</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="index.php">Login</a>
      </p>
      
    </div>
    <!-- /.login-card-body -->
    <p class="login-box-msg  bg-cyan"  style="border-bottom-left-radius:20px ; border-bottom-right-radius: 20px;">
 <small> PAVAS S.A.S.<br>
Copyright © Todos los derechos reservados</small>
  </p>
  </div>
  </div>

</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js?<?php echo time();?>"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script src="dist/Parsley.js-2.8.1/dist/parsley.js?<?php echo time();?>"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js?<?php echo time();?>"></script>
<script src="llamadaslogin.js?<?php echo time();?>"></script>

</body>
</html>
