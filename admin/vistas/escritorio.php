<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
}else{

 
require 'header.php';
require_once('../modelos/Usuario.php');
  $usuario = new Usuario();
  $rsptan = $usuario->cantidad_usuario();
  $reg=$rsptan->fetch_object();
  $reg->nombre;
?>
<div class="content-wrapper">
    <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="panel-body">
          <div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href="#"><span style="color:gray;">Hora actual en</span><br />Perú</a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FLima" width="100%" height="140" frameborder="0" seamless></iframe> </div>
            <?php if ($_SESSION['tipousuario']=='Administrador') {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="small-box bg-red">
                <a href="asistencia.php" class="small-box-footer">
                <div class="inner">
                  <h5 style="font-size: 20px;">
                    <strong>Lista asistencias </strong>
                  </h5>
                  <p>Módulo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>&nbsp;
                <div class="small-box-footer">
                      <i class="fa"></i>
                </div>
                </a>
              </div>
            </div>
            <?php } ?>
            <?php if ($_SESSION['tipousuario']!='Administrador') {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="small-box bg-red">
                <a href="asistenciau.php" class="small-box-footer">
                <div class="inner">
                  <h5 style="font-size: 20px;">
                    <strong>Mi lista asistencias </strong>
                  </h5>
                  <p>Módulo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list" aria-hidden="true"></i>
                </div>&nbsp;
                <div class="small-box-footer">
                      <i class="fa"></i>
                </div>

                </a>
              </div>
            </div>
            <?php } ?>



            <?php if ($_SESSION['tipousuario']=='Administrador') {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="small-box bg-blue">
                <div class="inner">
                  <h4 style="font-size: 20px;">
                    <strong>Empleados:   </strong>
                  </h4>
                  <p>Total <?php echo $reg->nombre; ?></p>
                </div>
                <div class="icon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <a href="usuario.php" class="small-box-footer">Agregar <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php } ?>


            <?php if ($_SESSION['tipousuario']=='Administrador') {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="small-box bg-green">
                
                <a href="rptasistencia.php" class="small-box-footer">
                <div class="inner">
                  <h5 style="font-size: 20px;">
                    <strong>Reporte de asistencias </strong>
                  </h5>
                  <p>Módulo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list-alt" aria-hidden="true"></i>
                </div>&nbsp;
                <div class="small-box-footer">
                      <i class="fa"></i>
                </div>

                </a>
              </div>
            </div>
            <?php } ?>
            <?php if ($_SESSION['tipousuario']!='Administrador') {
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="small-box bg-aqua">
                
                <a href="rptasistenciau.php" class="small-box-footer">
                <div class="inner">
                  <h5 style="font-size: 20px;">
                    <strong>Mi reporte de asistencias </strong>
                  </h5>
                  <p>Módulo</p>
                </div>
                <div class="icon">
                  <i class="fa fa-list" aria-hidden="true"></i>
                </div>&nbsp;
                <div class="small-box-footer">
                      <i class="fa"></i>
                </div>

                </a>
              </div>
            </div>
            <?php } ?>
            <!--fin centro-->
          </div>
        </div>
      </div>
      <!-- /.box -->

  </section>
    <!-- /.content -->
</div>

<?php
require 'footer.php'; 
}
ob_end_flush();
?>