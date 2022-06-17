<template>
    <div class="container">
        <div class="card w-75">
            <ul class="list-group list-group-flush list-group-horizontal border border-primary" v-for="item in this.props">
                <li class="list-group-item">{{item.id}}</li>
                <li class="list-group-item">{{item.tipo}}</li>
                <li class="list-group-item"><a class="btn btn-danger">Eliminar</a></li>
                <li class="list-group-item"><a href="" class="btn btn-primary">Modificar</a></li>
                <li></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default{
        props:['props'],
        mounted(){
            console.log('Componente montado');
        },
    }
</script>