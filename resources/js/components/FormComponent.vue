<template>
    <div class="container w-25">
        <div class="mb-4">
            <label for="" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cedula</label>
            <input type="text" name="cedula" maxlength="10" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <select class="form-select" name="sexo" id="">
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="">Tipo contrato</label>
            <select class="form-select" name="tipoc" id="">
                <option value="1">Ops</option>
                <option value="2">Termino fijo</option>
                <option value="3">Termino indefinido</option>
                <option value="4">Aprendizaje</option>
            </select>
        </div>
            <button class="btn btn-primary">
                Enviar
            </button>
    </div>
</template>


<script>
    export default{
        mounted(){
            console.log('Componente montado');
        }
    }
</script>