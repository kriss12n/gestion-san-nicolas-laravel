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
                  <th>Descripcion</th>
                  <th>Visible</th>
                  <th>Aciones</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="curso in cursos" :key="curso.id">
                  <td>{{ curso.name }}</td>
                  <td>{{ curso.description }}</td>
                  <td v-if="curso.visible ==1" >si</td>
                  <td v-if="curso.visible ==0" >no</td>

                  <td>
                    <button class="btn btn-info btn-xs" @click="VerCursos(curso)"  data-target="#exampleModalCenter" data-toggle="modal">
                      Ver Asignatura Asociadas
                    </button>

                    <button class="btn btn-success btn-xs" @click="getAlumnosByCategory(curso)">
                    Ver alumnos
                    </button>
                  </td>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                  <div class="modal-content ">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"> {{name}} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                        <h1 v-if="cursosc.length == 0">No Tiene cursos</h1>
                            <table v-if="cursosc.length > 0" class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Nombre Corto</th>
                                        <th>Descripcion</th>
                                        <th>Visible</th>
                                        <th>Mostrar Calificaciones</th>
                                        <th>Aciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="c in cursosc" :key="c.id">
                                        <td>{{ c.fullname }}</td>
                                        <td>{{ c.shortname }}</td>
                                        <td>{{ c.description }}</td>
                                        <td v-if="c.visible ==1" >si</td>
                                        <td v-if="c.visible ==0" >no</td>
                                        <td v-if="c.showgrades ==1" >si</td>
                                        <td v-if="c.showgrades ==0" >no</td>
                                    </tr>
                            </tbody>

            </table>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                  <div class="modal-content ">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle"> Alumnos </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Rut</th>
                                    <th>Correo electronico</th>
                                    <th>Aciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="c in alumnos" :key="c.id">
                                        <td>{{ c.firstname }}</td>
                                        <td>{{ c.lastname }}</td>
                                        <td>{{ c.username }}</td>
                                        <td>{{ c.email }}</td>
                                        <td> <button @click="cargartodo(c)" data-target="#informe" data-toggle="modal" class="btn btn-danger">Obtener certificado de alumno regular</button> </td>
                                    </tr>
                            </tbody>

            </table>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
                </tr>
              </tbody>

            </table>

          </div>
        </div>
      </div>
    </div>
    <button @click="print" data-target="#informe" data-toggle="modal" class="btn btn-success mt-2">Generar reporte de notas</button>
    <div>

				<div class="modal fade"  data-backdrop="static" id="informe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-xl" id="printableTable">
					<di class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Certificado "alumno"</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container" id="printMe">
							<div class="row">
								<div class="col-12">
									<div class="media">
										<img src="https://www.liceosannicolas.cl/wp-content/uploads/2018/10/LogoLiceo2kX2k-300x300.png" style="width:10%"   class="align-self-center mr-4" alt="logo liceo">
										<div class="media-body">
											<h5 class="mt-0 color-black">Liceo politecnico San Nicolás</h5>
											<p class="mb-0">RBD: 4140 - 8 </p>
											<p class="mb-0">Balmaceda 462 - San Nicolás </p>
											<p class="mb-0">Fono: 42-2561512 </p>
										</div>
									</div>
                                    <br>
									<br>
									<br>
									<br>
									<h2 class="text-center"><strong><u>C E R T I F I C A D O</u> </strong> </h2>
                                    <br>
									<br>
									<br>
									<br>
								</div>
							</div>
							<div class="row">
								<div class="col-12">

								</div>

							 	  <div class="col-12">
                                        <div class="row justify-content-center">
                                          <div class="col-1"></div>
                                          <div class="col-10"> <h4>La Dirección del Liceo politecnico San Nicolás de Chillán, certifica que el Sr.(ta):</h4></div>
                                          <div class="col-1"></div>
                                        </div>
                                   <div class="row justify-content-center mt-3">
                                          <div class="col-1"></div>
                                          <div class="col-10">   <h3><strong>{{todo.firstname}} {{todo.lastname}}</strong></h3></div>
                                          <div class="col-1"></div>
                                        </div>
                                   <div class="row justify-content-center mt-3">
                                          <div class="col-1"></div>
                                          <div class="col-10">   <h3>RUT: <strong>{{todo.username}} </strong>, es alumno(a) regular del <strong>{{todo.name}}</strong> de <strong>{{ todo.path && todo.path.includes("/18") ? "Enseñanza Media, " : "Enseñanza Basica, "}}</strong>
                                            inscrito(a) en el Registro N° <strong>{{todo.userid}}</strong> de nuestro establecimiento.</h3></div>
                                          <div class="col-1"></div>
                                        </div>

                                          <div class="row justify-content-center mt-3">
                                          <div class="col-1"></div>
                                          <div class="col-9">   <h4>Se extiende el presente certificado a petición del apoderado para los fines que estime conveniente.
                                             </h4></div>
                                          <div class="col-1"></div>
                                        </div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<br>
									<div class="d-flex row justify-content-around">
										<div class="col-4">

										</div>
										<div class="col-4">
											<hr class="w-100 color-black">
											<p  class="text-center"> Nombre director</p>
											<p class="text-center">DIRECTOR</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</di>

				</div>
				<Button class="btn btn-info" @click="print">Imprimir</Button>
			</div>

    </div>
  </div>
</template>
<script>
import Vue from "vue";
import VueHtmlToPaper from 'vue-html-to-paper';
const options = {
  name: '_blank',
  specs: [
    'fullscreen=yes',
    'titlebar=yes',
    'scrollbars=yes'
  ],
  styles: [
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'https://unpkg.com/kidlat-css/css/kidlat.css'
  ]
}

Vue.use(VueHtmlToPaper, options);
export default {

  data() {
    return {
      cursos: [],
      cursosc: [],
      alumnos:[],
      idcurso:"",
      todo:'',
      name:''
    };
  },
  methods: {
      	print () {
			this.$htmlToPaper('printMe');
    },

    cargartodo(c){
    this.todo = c;
    },

    getCursos() {
      axios.get("Administracion/cursocategoria").then((res) => {
        console.log(res);
        this.cursos = res.data;
      });
    },
    VerCursos(curso){
        this.idcurso= curso.id;
          this.name= curso.name;
        axios.post("Administracion/cursocategoria/"+this.idcurso+"/edit").then((res) => {
        this.cursosc = res.data;
      });
    },
    getAlumnosByCategory(curso){
        this.alumnos = [];
        axios.post("Usuarios/alumnos",{id:curso.id}).then((res)=>{
            let ramo = res.data[0].fullname;
            let alumnosArray = [];


       alumnosArray = res.data.filter(alumno => alumno.fullname === ramo);
            // res.data.map(x =>  !alumnos.includes(x)
            // ? alumnos.push(x)
            // : null

     this.alumnos = alumnosArray;

     $('#modal2').modal('toggle');
        });
    }

  },
  created() {
    this.getCursos();
  },
};
</script>
