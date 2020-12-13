<template>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
        <button @click="downloadFile" >crear txt</button>
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

import fileSaver from "file-saver";

export default {

methods: {
   async downloadFile(){
      let data = [
          {rdb:"123",rdbv:"6",rut:"19823029-4",verificador:"4"},
          {rdb:"123",rdbv:"6",rut:"19475847-k",verificador:"k"},
          {rdb:"123",rdbv:"6",rut:"32546575-6",verificador:"6"},
          {rdb:"123",rdbv:"6",rut:"27684759-0",verificador:"0"},
      ]

    let s = "";

    // for (let i = 0; i < data.length; i++) {
    //     s[i] = data[i].nombre+"	"+data[i].apellido+" "+data[i].rut+" "+data[i].verificador+"\r\n"
    // }

        for (let i = 0; i < data.length; i++) {

            s +=`${data[i].rdb}     ${data[i].rdbv}     ${data[i].rut}      ${data[i].verificador}   \r\n`;
        }




        var FileSaver = require('file-saver');
        var blob = new Blob([s], {type: "text/plain;charset=ut-f8"});
        FileSaver.saveAs(blob, "SIGE.txt");

    }
},


}
</script>
