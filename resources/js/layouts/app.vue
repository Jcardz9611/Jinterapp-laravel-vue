<template >
    <body>
    <div class="gallery">
        <div class="box" v-for="imagen in imagenes" >
                <img :src="imagen.ruta"  @click="showModal(imagen.ruta)">  
                <h3>{{imagen.nombre}}</h3>
                <p>{{imagen.descripcion}}</p> 
        </div>  
       
    </div>

    <div v-if="modalShow" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <img :src='selectedImgPath'/>
            </div>
            <div class="vertical-center">
                <button @click="hideModal()" type="button">X</button>
            </div>
          </div>
        </div>
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
            },
            showModal(ruta) {
                this.modalShow = true;
                this.selectedImgPath = ruta
                console.log(ruta)
                
               
            },
            hideModal() {
                this.modalShow = false; 
            }
        }
    }
</script>