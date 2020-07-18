<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../public/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="../public/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="../public/img/favicon.ico">

    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="../public/datatables/jquery.dataTables.min.css">    
    <link href="../public/datatables/buttons.dataTables.min.css" rel="stylesheet"/>
    <link href="../public/datatables/responsive.dataTables.min.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-select.min.css">

  </head>
  <body >
    <div class="login-box ">
       <form name="formulario" id="formulario" method="POST">
                          <div class="form-group">
                            <label>Nombre(*):</label>
                            <input type="hidden" name="idusuario" id="idusuario">
                            <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" >
                          </div>
                          <div class="form-group">
                            <label>Número de Documento(*):</label>
                            <input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Documento" >
                          </div>
                          <div class="form-group">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" maxlength="70">
                          </div>
                          <div class="form-group">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Teléfono">
                          </div>
                          <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email" maxlength="50" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label>Login (*):</label>
                            <input type="text" class="form-control" name="login" id="login" maxlength="20" placeholder="Login" >
                          </div>
                          <div class="form-group">
                            <label>Clave (*):</label>
                            <input type="password" class="form-control" name="clave" id="clave" maxlength="64" placeholder="Clave" >
                          </div>
                          <div class="form-group">
                            <label>Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                            <input type="hidden" name="imagenactual" id="imagenactual">
                            <img src="" width="150px" height="120px" id="imagenmuestra">
                          </div>
                          <div class="form-group">
                            <button class="btn btn-primary" type="submit" id="btnRegistraCliente"><i class="fa fa-save"></i> Guardar</button>
                            <a class="btn btn-danger"  href="login.html" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</a>
                          </div>
                        </form>
                </div> 
              <script type="text/javascript" src="scripts/usuario.js"></script>
              </body >

   </html>

