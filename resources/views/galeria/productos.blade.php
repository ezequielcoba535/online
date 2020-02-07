@extends('layouts.master')
@section('titulo','productos')

@section('contenido')

<body style="background: #AED6F1">
<br><br>
<div id="productos">

<div class="container">
  <div class="row">
    <div class="col-xs-10">
      
    </div>
    
  </div>

<div class="row">
	<div class="col-xs-12"> <a href="logout"class="btn btn-danger">Exit</a> 

      <center><h1>Seccion de Productos</h1></center> 


       <button class="btn btn-block btn-success" data-toggle="modal" data-target="#agregar">Agregar Producto</button><br>	
			<table class="table 
			table-striped table-bordered">
		
				<thead style="background:#117864 " >
					<th>ID_PRODUCTO</th>
					<th>TIPO</th>
					<th>DESCRIPCCION</th>
					<th>NOMBRE</th>
					<th>FOTO</th>
					<th>ACCIONES</th>
					
				</thead>
					

				<tbody>
					<tr v-for="(productos,index) in productos">

						<td>@{{productos.id_producto}}</td>
						<td>@{{productos.tipo}}</td>
						<td>@{{productos.descripcion}}</td>
						<td>@{{productos.nombre}}</td>
						<td><img v-bind:src="`imagenes/${productos.foto}`" class="image" height="100px" width="100px"></td>

						<td> <span class="glyphicon glyphicon-pencil btn btn-primary"
              data-toggle="modal" data-target="#editarProducto"
							V-on:click="showProducto(productos.id_producto)"> </span>
							
							<span class="glyphicon glyphicon-trash btn btn-danger" 
							v-on:click="eliminarProducto(productos.id_producto)"> </span></td>
						
					</tr>
					
				</tbody>
			</table>
		</div>	
	</div>
  <div class="row">
    <div class="col-xs-4">

      
    </div>
    
  </div>
<!-- inicio de la ventana modal -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Agregar un Producto</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Id</label>
          <input type="text"  class="form-control" v-model="id_producto"><br>


          <label>Tipo</label>
          <input type="text"  class="form-control" v-model="tipo"><br>
          <label>Descripcion</label>
          <input type="text"  placeholder="descripcion" v-model="descripcion" class="form-control">
          <br>
         <!--  <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br> -->
          <br>
          <label>Nombre</label>
          <input type="text"  placeholder="nombre" class="form-control" v-model="nombre"><br>
          <label>Foto</label>
        <!--   <input type="file" class="form-control" @change="alSeleccionar" accept="imge/jpg"><br> -->


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarProducto(id_producto)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- fin de agregrar modal -->

<!-- Modal Editar -->
<div class="modal fade" id="editarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong> Editar_Producto</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Producto</label>
          <input type="text" disabled=""  class="form-control" v-model="id_producto" placeholder="id">
          <br>
          <label>Tipo</label>
          <input type="text" name="tipo" class="form-control" placeholder="tipo" v-model=tipo><br>
          <label>Descrpcion</label>
          <input type="text" name="descripcion" placeholder="descripcion" v-model="descripcion" class="form-control">
          <br>
           <label>Nombre</label>
          <input type="text" name="nombre" placeholder="nombre" v-model="nombre" class="form-control">

        <!--   <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br> -->
          <br>
          <label>Foto</label>
          <input type="file" class="form-control" @change="alSeleccionar" accept="imge/jpg"><br>
          


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="editarProducto(id_producto)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection

@push('scripts')
  <script src="js/vue-resource.js"></script>
  <script src="js/fotos.js"></script>
  <script src="js/vue.js"></script>
  <script src="js/jquery.min.js"></script>
  
@endpush