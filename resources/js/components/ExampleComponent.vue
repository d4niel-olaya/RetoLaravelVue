<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acciones para realizar</div>
                    <div class="card-body">
                        <a href="/employees">Crear empleados</a>
                        <a href="/show">Ver listado de empleados</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
