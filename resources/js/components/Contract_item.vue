<template>
    <div class="container">
        <div class="card w-75">
            <ul class="list-group list-group-flush list-group-horizontal border border-primary">
                <li class="list-group-item">{{this.props.id}}</li>
                <li class="list-group-item"><input type="text" v-show="modify" v-model="type"></li>
                <li class="list-group-item" v-text="type"></li>
                <li class="list-group-item"><a class="btn btn-danger">Eliminar</a></li>
                <li class="list-group-item"><a class="btn btn-primary" @click="update" >Modificar</a></li>
                <li class="list-group-item"><a class="btn btn-outline-danger" v-show="cancelbtn" @click="cancel">Cancelar</a></li>
                <li class="list-group-item"><a  class="btn btn-outline-success" v-show="accept">Aceptar</a></li>
                
            </ul>
        </div>
    </div>
</template>


<script>
    export default{
        props:['props'],
        mounted(){
            console.log('Componente de item montado');
        },
        data(){
            return{
                accept:false,
                modify:false,
                cancelbtn:false,
                type:this.props.tipo,
            }
        },
        methods:{
            update:function(){
                this.modify=true;
                this.cancelbtn=true;
                this.accept=true;
                axions.get('/update');
            },
            cancel:function(){
                this.cancelbtn=false;
                this.type = this.props.tipo;
                this.modify=false;
                this.accept = false;
            }
        },
        
    }
</script>