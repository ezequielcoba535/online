@extends('layouts.master')
@section('contenido')
<br>

<body style="background:  #76D7C4">

<div class="container">
	<div class="row">
		<div class="col-md-4">
			
		</div>

		<div class="col-md-4">

		
		<div>
			<div>
				
				<div><br><br><br><br><br><br><br><br><br>
					<form action="{{url('login')}}" method="POST">
						@csrf
						
						<div class="input-group">
                         <span class="input-group-addon" >
                         <i class="glyphicon glyphicon-user"></i></span>
                         <input type="text" class="form-control" placeholder="Usuario" name="usuario">
						</div>
						<!-- <input type="text" placeholder="Usuario" class="form-control" name="usuario"> -->
						<br>
						<div class="input-group">
                         <span class="input-group-addon" >
                         	<i class="glyphicon glyphicon-lock"></i>
                         </span>
						<input type="password" placeholder="Contraseña" class="form-control" name="password">
						</div>
						<br>
						<center>
							
						<input type="submit" value="Ingresar" class="btn btn-primary btn-block">
						<h5>si no tienes cuenta Registrate qui</h5>
					
					</center>
					    
						
					</form>
				</div>
				<button class="btn btn-warning btn-block" data-toggle="modal" data-target="#cliente">Registrate</button>
				
			</div>
			
				</div>
			</div>
		<div class="col-md-4">
			
		</div>
		
	</div>
</div>
<div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</body>

@endsection