<template>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Rut</th>
                    <th>Email</th>
                    <th>Telefono</th>
                </tr>
              </thead>
                <tbody>
                    <tr v-for=" a in alumnos" :key="a.id">
                        <td>{{a.firstname}}</td>
                        <td>{{a.lastname}}</td>
                        <td>{{a.username}}</td>
                        <td>{{a.phone1}}</td>
                        <td>{{a.email}}</td>
                    </tr>
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
            alumnos:[]
        }
    },
methods: {
    getAlumnos(){
        axios.get("Usuarios").then((res)=>{

            this.alumnos = res.data;

        });
    }
},
created() {
    this.getAlumnos();
},
}
</script>
