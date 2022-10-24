<template>
    <form @submit.prevent="upload">
        <input @change="handleOnChange" type="file">
         <input @change="handleName" id="nombre" name="nombre" type="text">
        <input @change="handleDescription" id="descripcion" name="descripcion" type="text">
        <button>Upload</button>
    </form>
</template>

<script>
    export default{
        data: () => ({
            image: '',
            nombre: '',
            descripcion : ''
        }),
    

    methods: {
            handleOnChange(e) {
                this.image = e.target.files[0]
            },
            handleDescription(e) {
                this.descripcion = e.target.value
            },
            handleName(e) {
                this.nombre = e.target.value
            },
            upload() {
                const formData = new FormData
                formData.set('image', this.image)
                formData.set('nombre',this.nombre)
                formData.set('descripcion',this.descripcion)
                axios.post('/upload', formData)
                .then((response) => {
                        
                    })
                    .catch(function (error) {
                        console.log(error.response.data);
                    });
            }
        }
    }
</script>
