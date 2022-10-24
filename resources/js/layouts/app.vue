<template >
    <body>
    <div class="gallery">
        <div class="box" v-for="imagen in imagenes" >
                <img :src="imagen.ruta"  v-b-modal.modal-1>  
                <h3>{{imagen.nombre}}</h3>
                <p>{{imagen.descripcion}}</p> 
        </div>  
  </b-modal>
    </div>
    </body>
</template>
<script>
    export default {
        data: function () {
            return {
                imagenes: [],
                loading: true,
                modalShow: false
            }
        },
        mounted() {
            this.loadImagenes();
        },
        methods: {
            loadImagenes: function () {
                axios.get('/api/imagenes')
                    .then((response) => {
                        this.imagenes = response.data.data;
                        console.log(this.imagenes)
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>