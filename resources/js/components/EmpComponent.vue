<template>
    <div class="container">
        <div class="card w-75">
            <ul class="list-group list-group-flush list-group-horizontal border border-primary">
                <li class="list-group-item">{{this.props.nombre}}</li>
                <li class="list-group-item">{{this.props.apellido}}</li>
                <li class="list-group-item">{{this.props.cedula}}</li>
                <li class="list-group-item"><a href="" class="btn btn-danger">Eliminar</a></li>
                <li class="list-group-item"><a href="" class="btn btn-primary">Modificar</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
 export default{
        props:['props'],

        mounted(){
            console.log('Componente montado');
        }
    }
</script>
 