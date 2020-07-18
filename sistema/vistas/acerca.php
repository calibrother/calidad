<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Acerca de</h1>
	                        <div class="box-tools pull-right">
	                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                    	<h4>Proyecto: </h4> <p>Sistema de Ventas y Compras</p>
		                <h4>Empresa: </h4> <p>J&O COMPUTER E.I.R.L.</p>
		                <h4>Desarrollado por: </h4> <p>ALEJANDRO CACHAY GUTIERREZ</p>
                    <p>CARLOS EUGENDIO RIVERA</p>		
                    <p>CLAUDIA MOROCHO ROSALES</p>       
                    <p>JOSE HUAMANI CAHUANA</p>              
                    <p>RICHAR LOPEZ MORILLO</p>                     
                    <p>TANIA SANTI ARRIETA</p>                        
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<?php 
}
ob_end_flush();
?>


