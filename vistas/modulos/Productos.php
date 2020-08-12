  
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Productos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Tortilleria</a></li>
            <li class="breadcrumb-item active">Productos</li>
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
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar Producto</button>
        </div>
      <div class="box-body">
       <table class="table table-bordered table-striped dt-responsive tablaProductos  " width="100%"> 
        <thead>
          <tr>
             <th style="width:10px">#</th>
               <th>Imagen </th>
                <th>Codigo</th>
                <th>Descripcion</th>
                  <th>Categoria</th>
                    <th>Stock</th>
                      <th>Precio de Compra</th>
                        <th>Precio de venta</th>
                          <th>Fecha</th>
         
           <th>Acciones</th>
        </thead>
       
       </table>
      </div>
    </div>
  </section>
</div>
 
<!----------------------------------------------------------
MODAL PARA AGREGAR PRODUCTOS  
---------------------------------------------------------->
  <div class="modal fade" id="modalAgregarProducto" tabindex="-1" role="dialog" aria-labelledby="modalAgregarProducto" aria-hidden="true">
    <form role="form" method="post" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background:#343a40;color:white">
            <h5 class="modal-title" id="modalAgregarProducto">Agregar Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="card-body">
              <div class="form-group">
                <div>

                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Seleccionar Categoria</label>
                  <select class="form-control select2" style="width: 210%;" id="nuevaCategoria" name="nuevaCategoria" required>
                    <option selected="selected">Seleccionar Categoria</option>
                    <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                  foreach ($categorias as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                  }

                  ?>
                  </select>
                </div>

                </div>
              
<!----------------------------------------------------------
CODIGO
---------------------------------------------------------->
             <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-code"></i></span>
                  </div>
                  <input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>
<!----------------------------------------------------------
DESCRIPCION
---------------------------------------------------------->
                </div>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-comment-medical""></i></span>
                  </div>
                  <input type="text" class="form-control" name="nuevaDescripcion"placeholder="Ingresar Descripcion" required>
                </div>
<!----------------------------------------------------------
STOCK
---------------------------------------------------------->  
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-check""></i></span>
                  </div>
                  <input type="number" class="form-control" name="nuevoStock"min="0" placeholder=" Stock" required>
                </div>
<!----------------------------------------------------------
CODIGO
---------------------------------------------------------->
              <div class="row">
    
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-check""></i></span>
                      </div>
                      <input type="number" class="form-control" name="nuevoPrecioVenta"min="0" placeholder="Precio Venta" required>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-check""></i></span>
                      </div>
                      <input type="number" class="form-control" name="nuevoPrecioVenta"min="0" placeholder="Precio Venta" required>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <br>
                  <br>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label>
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>
                      </div>
                    </div>
                    <!-- /input-group -->
                  </div>
                  <div class="col-lg-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
                      <span class="input-group-text"><i class="fas fa-percent""></i></span>
                    </div>
                    <!-- /input-group -->
                  </div>
                 
                </div>
            
                
<!----------------------------------------------------------
CATEGORIA

                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Seleccionar Categoria</label>
                  <select class="form-control select2" style="width: 210%;" name="nuevaCategoria">
                    <option selected="selected">Seleccionar Categoria</option>
                    <option>Taladros</option>
                    <option>Clavos</option>
                    <option>Delaware</option>
                  </select>
                </div>---------------------------------------------------------->
        <!--=====================================
        PIE DEL MODAL
        ======================================-->
         <div class="form-group">
            <label>Subir Foto</label>
            <input type="file" class="nuevaImagen" name="nuevaImagen" class="center-block">
            <p class="center-block">Peso maximo de la foto 200Mb</p>
            <img src="vistas/img/usuarios/Default/anony.png" class="thumbnail center-block previsualizar" width="100px">
          </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        </div>
      </div>
  </div>
</div>
        
      </form>
    </div>
  </div>
</div>
<!----------------------------------------------------------
MODAL PARA AGREGAR PRODUCTOS  
---------------------------------------------------------->
<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->
<!-- Modal  bootrap-->
  <div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="modalEditarCategoria" aria-hidden="true">
    <form role="form" method="post" enctype="multipart/form-data">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background:#343a40;color:white">
            <h5 class="modal-title" id="modalEditarCategoria">Editar Productos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="card-body">
                <!-- Nombre -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control"  id="editarNombre" name="editarNombre" >
                </div>
                <!-- Usuario -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario</label>
                  <input type="text" class="form-control" id="editarUsuario" name="editarUsuario" readonly >
                </div>
                <!-- Password -->
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control"  id="editarPassword" name="editarPassword" >
                  <input type="hidden" name="passwordActual" id="passwordActual">
                </div>
                <!-- /.card-header -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Perfil</label>
                      <select class="form-control select2" style="width: 100%;"  id="editarPerfil" name="editarPerfil">
                        <option selected="selected">Selecciona Perfil</option>
                        <option>Administrador </option>
                        <option>Vendedor</option>
                      </select>
                    </div>
                    <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
          <div class="form-group">
            <label>Subir Foto</label>
            <input type="file" class="nuevaFoto" name="editarFoto" class="center-block">
            <p class="center-block">Peso maximo de la foto 200Mb</p>
            <img src="vistas/img/usuarios/Default/anonymous.png" class="thumbnail center-block previsualizar" width="100px">
            <input type="hidden" name="fotoActual" id="fotoActual">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modificar Usuario</button>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        </div>
      </div>
  </div>
</div>
  
      </form>
    </div>
  </div>
</div>