<template>

    <div>
        componente
    </div>

</template>


<script>
    export default{
        props:['props'],
        
        data(){
            return{
                message:''
            }
        },
        mounted(){
            console.log('Componente montado');
        },
        
    }
</script>