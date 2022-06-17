<template>
    <div class="container ms-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-header">
                        <h5 class="card-title">Módulo recursos humanos</h5>
                        <div class="card-body">
                            <a href="/employees" class="btn btn-outline-primary">Empleados</a>
                            <a href="/contracts" class="btn btn-outline-success">Contratos</a>   
                        </div>
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
