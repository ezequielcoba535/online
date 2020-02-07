

var ruta = 'http://localhost/online/public/apiRop';
// var url = 'http://localhost/online/public/apiRop/1',
new Vue({
	el:'#administradores',

	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},
   
	created:function(){
		this.getAdministradores();
	},

	data:{
		// login:'BIEVENIDO'
		administradores:[],
		id_administrador:'',
		nombre:'',
		apellidos:'',
		direccion:'',
		telefono:'',
		email:'',	

	},
	
	methods:{

//////////////traer los datos de la base de datos 
		getAdministradores:function(){
			this.$http.get(ruta)
			.then(function(json){
				this.administradores=json.data
			});
		},
 /////////////////// ya funciona eliminar 
		eliminarAdministrador:function(id){
			var resp=confirm('estas seguro de eliminar')
			
			{
			if (resp) 
				this.$http.delete(ruta +'/'+ id)
				.then(function(resp){
				this.getAdministradores()
				});
			}
		},
//////////// trea los datos de la vista para editar
		showAdministrador:function(id){
			this.$http.get(ruta+ '/' + id)
			.then(function(json){
				this.id_administrador=json.data.id_administrador;
				this.nombre=json.data.nombre;
				this.direccion=json.data.direccion;
				this.apellidos=json.data.apellidos;
				this.telefono=json.data.telefono;
				this.email=json.data.email;
			});
		},

		
 /////////////// ya funciona el agregar
		agregarAdministrador:function(id)
		{
			// construir un objeto que necesitamos por el api
			var administrador={
				id_administrador:this.id_administrador,
				nombre:this.nombre,
				apellidos:this.apellidos,
				direccion:this.direccion,
				telefono:this.telefono,
				email:this.email};
				// para un metodo store se necesita un post
				this.$http.post(ruta,administrador)
				.then(function(resp){
					this.getAdministradores();
					// $('editarAdministrador').modal('hide');
					this.limpiar()
				});
		},
		
//////// ya funciona el editar 
		editarAdministrador:function(id){
			//crear un json
			var administradores={
				    id_administrador:this.id_administrador,
				    nombre:this.nombre,
					apellidos:this.apellidos,
					direccion:this.direccion,
					telefono:this.telefono,
					email:this.email}

			     this.$http.patch(ruta + '/'+ id, administradores)
				 .then(function(json){
					this.getAdministradores();
					this.limpiar();
			});
		},

		limpiar:function(){

			this.nombre='';
			this.apellidos='';
			this.direccion='';
			this.telefono='';
			this.email='';
		}

	}


})	