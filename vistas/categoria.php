<?php
require 'header.php'

?>

<!-- Contenido -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">Categoria <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div> 
          <!-- /.box header -->
          <!-- Centro -->
          <div class="panel-body table-responsive" id="listadoregistros">
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">  <!--clases para mejorar apariencia d tabla--> 
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Condicion</th>
              </thead>
              <tbody></tbody>
              <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Condicion</th>
              </tfoot>
            </table>
          </div>
          <div class="panel-body" style="height:400px;" id="formularioregistros">
              <!-- aquí va el form-->
          </div>
          <!-- Fin Centro -->
        </div> <!-- /.box-->
      </div> <!-- /.col-->
    </div> <!-- row -->

      <!-- Your Page Content Here -->

    </section>    <!-- /.content -->
  </div>      <!-- /.content-wrapper -->
<!--Fin contenido -->

<?php
require 'footer.php'
?>
<script type="text/javascript" src="scripts/categoria.js"></script>