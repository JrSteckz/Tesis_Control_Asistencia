<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.html");
}else{


require 'header.php';


 ?>
    <div class="content-wrapper">
    <!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Carpetas</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Bandeja de Entrada
                  <span class="label label-danger pull-right">1</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Elementos Enviados</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Borradores</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Elementos Archivados <span class="label label-success pull-right">5</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> lementos Eliminados</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Grupos</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Nuevo Grupo</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Mensaje</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="" data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Mensaje: Actividad de Entrega</h3>
                <h5>De: example@fitsoftwareperu.com
                  <span class="mailbox-read-time pull-right">15 Agosto 2020 11:03 PM</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Eliminar">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Atras">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="" data-original-title="Siguiente">
                    <i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="" data-original-title="Imprimir">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Hola Jhuan,</p>

                <p>Para todos los participantes:</p>

                <p>Este es un recordatorio para todos sobre la proxima conferenca de este miercoles 17 de agosto a ñas 9:15 a.m. Por favor, anote la fecha y hora, yh presentese unos cuantos minutos antes a fin de que podamos asegurarnos de que todos esten disponibles. Estos son los detalles de la conferencia:</p>

                <p>Hora: 9:15 a.m.<br>
                Numero telefonico: 931910448<br>
                Codigo de llamada: 34334434</p>

                <p>Asistentes:<br>
                ° Jhuan<br>
                ° Luis<br>
                ° Yitzak<br>
                ° Ticona<br>
                ° Carrera<br></p>
                <p>Si tiene preguntas, pongase en contacto a este correo.</p>
                <p>Gracias,<br>Luis Durand</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix">

              </ul>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Volver</button>
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Siguiente</button>
              </div>
              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Eliminar</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php 


require 'footer.php';
 ?>
 <script src="scripts/departamento.js"></script>
 <?php 
}

ob_end_flush();
  ?>

