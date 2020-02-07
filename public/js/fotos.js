
var urlRuta = 'http://localhost/online/public/apiFot';
var ruta = 'http://localhost/online/public/apiImage';

new Vue({
	el:'#productos',

	http:{
		headers:{
			'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
		}
	},
   
	created:function(){
		this.getProductos();
	},


	data:{
		login:'BIEVENIDO',
		productos:[],
		id_producto:'',
		tipo:'',
		nombre:'',
		descripcion:'',
		foto:'',
	},

	methods:{
		getProductos:function(){
			this.$http.get(urlRuta)
			.then(function(json){
			   this.productos=json.data
			});
			
		},

		eliminarProducto:function(id){
			var resp=confirm('estas seguro de eliminar')
			
			{
			if (resp) 
				this.$http.delete(urlRuta +'/'+ id)
				.then(function(resp){
				this.getProductos()
				});
			}
		},

		showProducto:function(id){
			this.$http.get(urlRuta + '/' + id)
			.then(function(json){
				this.id_producto=json.data.id_producto;
				this.nombre=json.data.nombre;
				this.descripcion=json.data.descripcion;
				this.tipo=json.data.tipo;
				this.foto=json.data.foto;
			});
		},

////////// agrega un producto de la base de tados 
		agregarProducto:function(id)
		{
			// construir un objeto que necesitamos por el api
			var producto={
				id_producto:this.id_producto,
				nombre:this.nombre,
				tipo:this.tipo,
				descripcion:this.descripcion,
				foto:this.foto};
				// para un metodo store se necesita un post
				this.$http.post(urlRuta,producto)
				.then(function(resp){
					this.getProductos();
					// $('editarAdministrador').modal('hide');
					this.limpiar()
				});
		},


		editarProducto:function(id){
			//crear un json
			var productos={
				    id_producto:this.id_producto,
				    nombre:this.nombre,
					tipo:this.tipo,
					descripcion:this.descripcion,
					foto:this.foto}

			     this.$http.patch(urlRuta + '/'+ id, productos)
				 .then(function(json){
					this.getProductos();
					this.limpiar();
			});
		},

		limpiar:function(){

			this.id_producto='';
			this.tipo='';
			this.descripcion='';
			this.nombre='';
			this.foto='';
		}

	}


})