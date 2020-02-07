@extends('layouts.master')
@section('titulo','administrador')

@section('contenido')

<body style="background: #AED6F1">

<br>
<div id="administradores">
	<!-- @{{login}} -->
 <div class="container">
	<div class="row">
		<div class="col-xs-10">
			
		</div>
		
	</div>
	<div class="row">
		<div class="col-xs-12"> <a href="logout"class="btn btn-danger">Exit</a> 

			<center><h1>Seccion Administradores de la Pagina</h1></center>  


			<br>	
			<button class="btn btn-block btn-success" data-toggle="modal" data-target="#agregar">Agregar Administrador</button><br>	
			<table class="table 
			table-striped table-bordered">
		
				<thead style="background:#E74C3C " >
					<th>ID</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>DIRECCION</th>
					<th>TELEFONO</th>
					<th>GMAIL</th>
					<th>ACCIONES</th>
				</thead>
					

				<tbody>
					<tr v-for="(administradores,index) in administradores">

						<td>@{{administradores.id_administrador}}</td>
						<td>@{{administradores.nombre}}</td>
						<td>@{{administradores.apellidos}}</td>
						<td>@{{administradores.direccion}}</td>
						<td>@{{administradores.telefono}}</td>
						<td>@{{administradores.email}}</td>

						<td> <span class="glyphicon glyphicon-pencil btn btn-info"
              data-toggle="modal" data-target="#editarAdministrador"
							V-on:click="showAdministrador(administradores.id_administrador)"> </span>
							
							<span class="glyphicon glyphicon-trash btn btn-danger" 
							v-on:click="eliminarAdministrador(administradores.id_administrador)"> </span></td>
						
					</tr>
					
				</tbody>
			</table>
			
		</div>
		
	</div>
	<div class="row">
		<div class="col-xs-4">

			
		</div>
		
	</div>
<!-- inicio del modal -->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Administradores</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>Id</label>
          <input type="text"  class="form-control" v-model="id_administrador"><br>


          <label>Nombre</label>
          <input type="text"  class="form-control" v-model="nombre"><br>
          <label>Apellido</label>
          <input type="text"  placeholder="apellido" v-model="apellidos" class="form-control">
          <br>
         <!--  <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br> -->
          <br>
          <label>Gmail</label>
          <input type="text"  placeholder="gmail" class="form-control" v-model="email"><br>
          <label>Telefono</label>
          <input type="number"  placeholder="Telefono" class="form-control" v-model="telefono"><br>


        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarAdministrador(id_administrador)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- fin de agregrar modal -->

<!-- Modal Editar -->
<div class="modal fade" id="editarAdministrador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong> Editar_Administrador</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <div class="row">
        <div class="col-xs-12">
          <label>id</label>
          <input type="text" disabled=""  class="form-control" v-model="id_administrador" placeholder="id">
          <br>
          <label>Nombre</label>
          <input type="text" name="nombre" class="form-control" v-model="nombre"><br>
          <label>Apellido</label>
          <input type="text" name="apellidos" placeholder="apellido" v-model="apellidos" class="form-control">
          <br>
           <label>Direccion</label>
          <input type="text" name="direccion" placeholder="direccion" v-model="direccion" class="form-control">

        <!--   <input type="text" name="apmaterno" placeholder="Apellido materno" class="form-control" v-model="apmaterno"><br> -->
          <br>
          <label>Gmail</label>
          <input type="text" name="email" placeholder="gmail" class="form-control" v-model="email"><br>
          <label>Telefono</label>
          <input type="number" name="telefono" placeholder="telefono" class="form-control" v-model="telefono"><br>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="editarAdministrador(id_administrador)">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin de modal -->
	
</div>
</div>
@endsection

@push('scripts')
  <script src="js/vue-resource.js"></script>
  <script src="js/ropas.js"></script>
  <script src="js/vue.js"></script>
  <script src="js/jquery.min.js"></script>
  
@endpush