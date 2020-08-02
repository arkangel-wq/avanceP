<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Panel De Control</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Tortilleria</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.tabla usuarios -->
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <div class="card-header">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Agregar Usuario</button>
        </div>

        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tabla tabladatatable">
            <thead>
              <tr>
                <!-- /campos -->
                <th style="width:5px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>

                <th>Ultimo inicio de Sesion </th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Administrador</td>
                <td>angel</td>
                <td><img src="vistas/img/user.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activo</button></td>
                <td>2020-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
              <tr>
                <th scope="row">1</th>
                <td>Vendedor</td>
                <td>Marcos</td>
                <td><img src="vistas/img/user.png" class="img-thumbnail" width="40px"></td>
                <td>Vendedor</td>
                <td><button class="btn btn-success btn-xs">Desactivado</button></td>
                <td>2020-12-11 12:05:37</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                  </div>
          </table>
          <!-- /.content -->
        </div>
  </section>

  <!-- Modal  bootrap-->
  <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="modalAgregarUsuario" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">



        <div class="modal-header" style="background:#343a40;color:white">

          <h5 class="modal-title" id="modalAgregarUsuario">Agregar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form role="form">
            <div class="card-body">



            </div>
            <!-- /.card-body -->
          </form>
        </div>
        <!-- /.card -->




      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal  bootrap-->
<?php
$crearUsuario = new ControladorUsuarios();
$crearUsuario->ctrCrearUsuario();

?>
</form>



</div>
</div>
<!-- /.content-wrapper -->