<template>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush" v-for="item in this.props">
            <li class="list-group-item">{{item.nombre}}</li>
            <li class="list-group-item">{{item.apellido}}</li>
            <li class="list-group-item">{{item.cedula}}</li>
        </ul>
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
 