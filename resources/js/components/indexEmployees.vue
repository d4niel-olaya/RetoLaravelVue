<template>
    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <div class="card-title">
                    CRUD EMPLEADOS
                </div>
                <div class="card-body">
                    <a href="/createEmployees" class="btn btn-outline-primary">Crear empleado</a>
                    
                    <a href="/show" class="btn btn-outline-info">Ver listado de empleados</a>
                </div>
            </div>
        </div>
    </div>


</template>



<script>
    export default {
    mounted() {
        console.log("Component mounted.");
    },
}
</script>