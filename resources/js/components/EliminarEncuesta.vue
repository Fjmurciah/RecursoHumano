<template>

 <input type="submit"
  class="btn btn-danger d-block w-100 mb-2"
  value="Eliminar X"
  @click="elliminarHoja"
  >

</template>
<script>
export default {
  data () {
    return {
    }
  },
    props:['hojaId'],
    methods:{
        elliminarHoja(){
this.$swal({
  title: 'Deseas eliminar esta encuesta?',
  text: "Si eliminas este encuesta no se podra recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText:'No'
}).then((result) => {
  if (result.value) {
      const params={
          id: this.hojaId
      }
      //enviar peticion al servidor
    axios.post(`/encuesta/${this.hojaId}`, {params, _method: 'delete'})
        .then(respuesta=>{

            //ELIMINAR DEL DOM
            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

        })
        .catch(error=>{
            console.log(error)
        })

    this.$swal({
        title: 'Encuesta eliminada',
        text:'Se elimino la encuesta',
        icon:'success'
    })
  }
})
        }
    }
}
</script>
