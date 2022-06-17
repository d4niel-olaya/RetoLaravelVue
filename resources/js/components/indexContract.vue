<template>
    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <div class="card-title">
                    CRUD Contratos
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-outline-primary">Crear Contrato</a>
                    
                    <a href="/showContracts" class="btn btn-outline-info">Ver listado de Contratos</a>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default{
        mounted(){
            console.log('Componente montado');
        },
    }
</script>