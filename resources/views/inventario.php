<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no,
minimal-ui">
<style>
#app {
background-color: #CFD8DC;
}
</style>
</head>
<body>
<div id="app">
<v-app>
<v-main>
<h2 class="text-center">CRUD  Laravel</h2>
<!-- Botón CREAR -->
<v-card class="mx-auto mt-5" color="transparent" max-width="1280" elevation="0">

<v-btn class="mx-2" fab dark color="#E040FB" @click="formNuevo()"><v-icon dark>mdi-plus</v-icon></v-
btn>

<!-- Tabla y formulario -->
<v-simple-table class="mt-5">
<template v-slot:default>
<thead>
<tr class="purple darken-2">
<th class="white--text">ID</th>
<th class="white--text">DESCRIPCIÓN</th>
<th class="white--text">PRECIO</th>
<th class="white--text">STOCK</th>
<th class="white--text text-center">ACCIONES</th>
</tr>
</thead>
<tbody>
<tr v-for="articulo in articulos" :key="articulo.id">
<td>{{ articulo.id }}</td>
<td>{{ articulo.descripcion }}</td>
<td>{{ articulo.precio }}</td>
<td>{{ articulo.stock }}</td>
<td>
<v-btn class="pink" dark small fab
@click="formEditar(articulo.id, articulo.descripcion, articulo.precio,
articulo.stock)"><v-icon>mdi-pencil</v-icon></v-btn>

<v-btn class="error" fab dark small @click="borrar(articulo.id)"><v-icon>mdi-delete</v-
icon></v-btn>

</td>
</tr>
</tbody>
</template>
</v-simple-table>
</v-card>
<!-- Componente de Diálogo para CREAR y EDITAR -->
<v-dialog v-model="dialog" max-width="500">
<v-card>
<v-card-title class="purple darken-4 white--text">Artículo</v-card-title>
<v-card-text>
<v-form>
<v-container>
<v-row>
<input v-model="articulo.id" hidden></input>
<v-col cols="12" md="4">
<v-text-field v-model="articulo.descripcion" label="Descripción" solo
required>{{articulo.descripcion}}</v-text-field>
</v-col>
<v-col cols="12" md="4">
<v-text-field v-model="articulo.precio" label="Precio" type="number" prefix="$" solo
required></v-text-field>
</v-col>
<v-col cols="12" md="4">

<v-text-field v-model="articulo.stock" label="Stock" type="number" solo required></v-
text-field>

</v-col>
</v-row>
</v-container>
</v-card-text>
<v-card-actions>
<v-spacer></v-spacer>
<v-btn @click="dialog=false" color="blue-grey" dark>Cancelar</v-btn>
<v-btn @click="guardar()" type="submit" color="purple accent-3" dark>Guardar</v-btn>
</v-card-actions>
</v-form>
</v-card>
</v-dialog>
</v-main>
</v-app>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.js"
integrity="sha512-
nqIFZC8560+CqHgXKez61MI0f9XSTKLkm0zFVm/99Wt0jSTZ7yeeYwbzyl0SGn/s8Mulbdw+ScCG41hmO2+FKw=="
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.0.2/dist/sweetalert2.all.min.js"></script>
<script>
let url = 'http://localhost:8000/api/articulos/';
new Vue({
el: '#app',
vuetify: new Vuetify(),
data() {
return {
articulos: [],
dialog: false,
operacion: '',
articulo: {
id: null,
descripcion: '',
precio: '',
stock: ''
}
}
},
created() {
this.mostrar()
},
methods: {
//MÉTODOS PARA EL CRUD
mostrar: function () {
axios.get(url)
.then(response => {
this.articulos = response.data;
})
},
crear: function () {
let parametros = { descripcion: this.articulo.descripcion, precio: this.articulo.precio, stock:
this.articulo.stock };
axios.post(url, parametros)
.then(response => {
this.mostrar();
});
this.articulo.descripcion = "";
this.articulo.precio = "";
this.articulo.stock = "";
},
editar: function () {
let parametros = { descripcion: this.articulo.descripcion, precio: this.articulo.precio, stock:
this.articulo.stock, id: this.articulo.id };
//console.log(parametros);
axios.put(url + this.articulo.id, parametros)
.then(response => {
this.mostrar();
})
.catch(error => {
console.log(error);
});
},
borrar: function (id) {
Swal.fire({
title: '¿Confirma eliminar el registro?',
confirmButtonText: `Confirmar`,
showCancelButton: true,
}).then((result) => {
if (result.isConfirmed) {
//procedimiento borrar
axios.delete(url + id)
.then(response => {
this.mostrar();
});
Swal.fire('¡Eliminado!', '', 'success')
} else if (result.isDenied) {
}
});
},
guardar: function () {
if (this.operacion == 'crear') {
this.crear();
}
if (this.operacion == 'editar') {
this.editar();
}
this.dialog = false;
},
formNuevo: function () {
this.dialog = true;
this.operacion = 'crear';
this.articulo.descripcion = '';
this.articulo.precio = '';
this.articulo.stock = '';
},
formEditar: function (id, descripcion, precio, stock) {
this.articulo.id = id;
this.articulo.descripcion = descripcion;
this.articulo.precio = precio;
this.articulo.stock = stock;
this.dialog = true;
this.operacion = 'editar';
}
}
});
</script>
</body>
</html>