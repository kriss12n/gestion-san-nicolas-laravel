<template>
     <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <table class="table">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Nombre Corto</th>
                        <th>Descripcion</th>
                        <th>Visible</th>
                        <th>Mostrar Calificaciones</th>
                        <th>Aciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

    data() {
        return {
            Alumnos:[]
        }
    },
    methods: {
         getAlumnos(){
            axios.get("/Usuarios/alumnos").then((res)=>{

                console.log(res);

            });
        }
    },
    created() {
        this.getAlumnos();
    },
}
</script>
