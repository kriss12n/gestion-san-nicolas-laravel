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
                    <th>Nombre curso</th>
                    <th>Acciones</th>
                </tr>
              </thead>
                <tbody>
                    <tr>
                    <td>1</td>
                    <td>3º B</td>
                    <td> <button @click="downloadFile" class="btn btn-primary" >obtener SIGE</button> </td>
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

import fileSaver from "file-saver";

export default {

methods: {
   async downloadFile(){
      let data = [
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"19823029", verificador:"4", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.6"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"19475847", verificador:"k", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.7"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"32546575", verificador:"6", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.6"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"27684759", verificador:"4", codigo:"6252003", codigo2:"6252003", calificacion_final:"4.5"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"13213432", verificador:"5", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.5"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"21414546", verificador:"k", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.6"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"12314546", verificador:"0", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.4"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"41345464", verificador:"1", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.3"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"23487548", verificador:"4", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.1"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"58748590", verificador:"4", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.0"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"58744503", verificador:"5", codigo:"6252003", codigo2:"6252003", calificacion_final:"6.2"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"12312345", verificador:"2", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.8"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"47362748", verificador:"8", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.5"  },
          {rdb:"4140", rdbv:"0", codigo_enseñanza:"510", grado:"1", letra:"b", rut:"46352748", verificador:"9", codigo:"6252003", codigo2:"6252003", calificacion_final:"5.9"  },
      ]

    let s = "";

        for (let i = 0; i < data.length; i++) {

            s +=`${data[i].rdb}     ${data[i].rdbv}     ${data[i].codigo_enseñanza}      ${data[i].grado}       ${data[i].letra}        ${data[i].rut}      ${data[i].verificador}      ${data[i].codigo}       ${data[i].codigo2}      ${data[i].calificacion_final}   \r\n`;
        }

        var FileSaver = require('file-saver');
        var blob = new Blob([s], {type: "text/plain;charset=ut-f8"});
        FileSaver.saveAs(blob, "SIGE.txt");

    }
},


}
</script>
