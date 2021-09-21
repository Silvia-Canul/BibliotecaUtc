function init()
{
	var route = document.querySelector("[name=route]").value;
	var UrlL=route + '/apiL';

	new Vue
	({
		http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},

		el:'#libros',

		data:{
			libros:[],
			nom:'hola',
			id_libro:'',
			ISBN:'',
			titulo:'',
			id_autor:'',
            id_editorial:'',
            edicion:'',
            id_carrera:'',
            paginas:'',
            id_clasifidewey:'',
            resenia:'',
            ubicacion:'',
            describe_estado:'',
            foto:'',
            id_ejemplar:'',
            created_at:'',
            updated_at:'',
            activo:'',
            id_coleccion:'',
			id_auxi:'',
			editar:false
			
			
		},
		created:function(){
			this.getLibros();
		},

		methods:{
			getLibros:function(){
				this.$http.get(UrlL)
				.then(function(json){
					this.libros=json.data;
				}).catch(function(json){
					console.log(json);
				});
			},
			
			showModal:function(){
				$('#add_lib').modal('show');
			},

			Salir:function(){
				this.editar=false;

				this.ISBN='';
				this.titulo='';
				this.id_autor='';
				this.id_editorial='';
                this.edicion='';
				this.id_carrera='';
                this.paginas='';
				this.id_clasifidewey='';
				this.resenia='';
                this.ubicacion='';
				this.describe_estado='';
                this.foto='';
				this.id_ejemplar='';
                this.created_at='';
				this.updated_at='';
                this.activo='';
				this.id_coleccion='';

				$('#add_lib').modal('hide');
			},

			agregarL:function(){
				var li={

					ISBN:this.ISBN,
					titulo:this.titulo,
					id_autor:this.id_autor,
					id_editorial:this.id_editorial,
                    edicion:this.edicion,
					id_carrera:this.id_carrera,
                    paginas:this.paginas,
					id_clasifidewey:this.id_clasifidewey,
					resenia:this.resenia,
                    ubicacion:this.ubicacion,
					describe_estado:this.describe_estado,
                    foto:this.foto,
					id_ejemplar:this.id_ejemplar,
                    created_at:this.created_at,
					updated_at:this.updated_at,
                    activo:this.activo,
					id_coleccion:this.id_coleccion,
                    
					
				};
				this.$http.post(UrlL, li)
				.then(function(json){
					this.getLibros();
					
				});
				this.Salir();
				
			},
			editarL:function(id){
				this.editar=true;
				this.$http.get(UrlL +'/'+ id)
				.then(function(json){
					this.ISBN=json.data.ISBN;
                    this.titulo=json.data.titulo;
                    this.id_autor=json.data.id_autor;
                    this.id_editorial=json.data.id_editorial;
					this.edicion=json.data.edicion;
                    this.id_carrera=json.data.id_carrera;
					this.paginas=json.data.paginas;
                    this.id_clasifidewey=json.data.id_clasifidewey;
                    this.resenia=json.data.resenia;
                    this.ubicacion=json.data.ubicacion;
					this.describe_estado=json.data.describe_estado;
                    this.foto=json.data.foto;
					this.id_ejemplar=json.data.id_ejemplar;
                    this.created_at=json.data.created_at;
					this.updated_at=json.data.updated_at;
                    this.activo=json.data.activo;
					this.id_coleccion=json.data.id_coleccion;
					this.id_auxi=json.data.id_libro;	
				
					$('#add_lib').modal('show');
				});
			},
			actualizarL:function(){
				var co={
					
                    ISBN:this.ISBN,
					titulo:this.titulo,
					id_autor:this.id_autor,
					id_editorial:this.id_editorial,
                    edicion:this.edicion,
					id_carrera:this.id_carrera,
                    paginas:this.paginas,
					id_clasifidewey:this.id_clasifidewey,
					resenia:this.resenia,
                    ubicacion:this.ubicacion,
					describe_estado:this.describe_estado,
                    foto:this.foto,
					id_ejemplar:this.id_ejemplar,
                    created_at:this.created_at,
					updated_at:this.updated_at,
                    activo:this.activo,
					id_coleccion:this.id_coleccion,
                   
				};
				this.$http.patch(UrlL + '/'+ this.id_auxi,co)
				.then(function(json){
					this.getLibros();
					
				});
				this.Salir();
			},
			eliminarL:function(id){
				var p=confirm('¿Esta seguro que desea eliminar?');
				if(p==true)
					this.$http.delete(UrlL +'/'+id)
				.then(function(json){
					this.getLibros();
					
				});
			},
			
		}

	});
}
window.onload = init;