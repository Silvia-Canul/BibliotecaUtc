function init()
{
  
    var urlP='http://localhost/bibliotecas/public/pres';

    new Vue
    ({
        http:{
			headers:{
				'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
			}
		},

        el:'#prestamo',

        data:{
            prestamos:[],
            fecha_salida:'',
            fecha_devolucion:'',
            estado_prestamo:'',
            duracion_prestamo:''
        },
        created:function(){
            this.getPrestamos();
        },

        methods:{
            getPrestamos:function(){
                this.$http.get(urlP)
                .then(function(json){
                    this.prestamos=json.data;
                });
            },

        }
    })
}