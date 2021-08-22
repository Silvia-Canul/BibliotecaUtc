
var	route= document.querySelector("[name=route]").value;
var urlLib = route + '/apilibros';
var urlPres= route +'/apiPrestamo';

function init()
{
new Vue({

	http:{
		headers:{
			'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
		}
	},

	el:'#prestamo',

	created:function(){
		this.foliarVenta();
	},

	data:{
		nombre:'QUE ONDA',
		libros:[],
		prestamos:[],
		codigo:'',
		id_libro:'',
		ISBN:'',
		titulo:'',
		describe_estado:'',
		activo:'',
		pago:0,
		tot:0,
		
		cantidades:[1,1,1,1,1,1,1],
		folio:'',
		fecha_prestamo:moment().format('YYYY-MM-DD') //almacena cantidades.
	},

	// area de metodos
	methods:{
		getLibros:function(){
			this.$http.get(urlLib + '/' + this.codigo)
			.then(function(json){
				console.log(json);
				// this.codigo='';
				var prestamo={'id_libro':json.data.id_libro,
							'ISBN':json.data.ISBN,
							'titulo':json.data.titulo,
							//'cantidades':1,
							'describe_estado':json.data.describe_estado,
							'activo':json.data.activo,
							}
				if (prestamo.id_libro){
					this.prestamos.push(prestamo);
				}
				this.codigo='';
				this.$refs.buscar.focus();

			})
		},
	
		// fin de getProducto

		eliminarLibro:function(id){
			this.prestamos.splice(id,1);
		}, 
		/*
		addProd:function(id){
			this.ventas[id].cantidades++;
			this.ventas[id].total=this.ventas[id].cantidades*this.ventas[id].precio;
		},

		minusProd:function(id){
			if (this.ventas[id].cantidades>=2) {
				this.ventas[id].cantidades--;
			}
			
		},
		*/
		foliarVenta:function(){
			this.folio='VTA-' + moment().format('YYMMDDhmmss');

		},
		
		prestamo:function(){
			var detalles2 = [];

			for (var i = 0; i < this.prestamos.length; i++) {
				detalles2.push({
					id_libro:this.prestamos[i].id_libro,
					ISBN:this.prestamos[i].ISBN,
					titulo:this.prestamos[i].titulo,
					describe_estado:this.prestamos[i].describe_estado,
					activo:this.prestamos[i].activo
					
				})
			}
			console.log(detalles2);
			
			var unprestamo = {
				folio:this.folio,
				//id_vendedor:this.id_vendedor,
				tipo:'EF',
				fecha_prestamo:this.fecha_prestamo,
				detalles:detalles2
			}
			
			console.log(unprestamo);
			
			this.$http.post(urlPres,unprestamo)
			.then(function(json){
				console.log(json.data);
			}).catch(function(json){
				console.log(json.data);
			});
			return true;
			


		}
	},
	// fin de metodos
	/*
	computed:{
		total:function(){
			var suma=0;
			for (var i =0;i<this.ventas.length;i++){
				suma=suma + (this.cantidades[i]*this.ventas[i].precio);
			}
			this.tot=suma;
			return suma;
		},

		cambio:function(){
			return this.pago - this.tot;
		},
		totalProd(){
			return (id)=>{
				var total=0;
				if(this.cantidades[id] != null)
					total=this.cantidades[id]*this.ventas[id].precio;
				return total.toFixed(1);
			}
		}
	}
*/
});
}
window.onload=init;