<style>
.input-group-text{
    font-size: 15px;
}
</style>
<section id="formulario">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="form-row formulario">
                   <form action="" class="form-row formulario">
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label class="field-label" for="">Código</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">933- </div>
                            </div>
                            <input type="number" placeholder="Código" id="codigo_buscar" class="form-control"></div>
                        </div>
                    <div class="form-group col-12 col-md-6 col-lg-3 offset-lg-1"><label for="">Ciudad</label>
                        <select class="form-control" id="ciudad_buscar">
                            <option selected disabled value=0>Ciudad</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3 offset-lg-1">
                        <label for="">Barrio</label>
                        <select class="form-control" id="barrio_buscar">
                            <option selected disabled value=0>Barrio</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="">Tipo de Inmueble</label>
                        <select class="form-control" id="tipo_inmueble_buscar">
                            <option selected disabled value="0">Tipo de Inmueble</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3 offset-lg-1">
                        <label for="">Gestion</label>
                        <select class="form-control" id="tipo_gestion_buscar">
                            <option selected disabled value="0">Gestion</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-3 offset-lg-1">
                        <label for="">Precio Mínimo</label>
                        <input type="number" placeholder="Precio Mínimo" id="precio_minimo_buscar" class="form-control"></div>
                    <div class="form-group col-12 col-md-6 col-lg-3">
                        <label for="">Precio Máximo</label>
                        <input type="number" placeholder="Precio Máximo" id="precio_maximo_buscar" class="form-control"></div>
                    <div class="form-group col-12 col-md-6 col-lg-3 offset-lg-1 pt-md-2">
                        <br class="d-none d-md-block">
                        <button type="button" id="buscar" class="btn btn-primary btn-lg btn-block">Buscar</button>
                    </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>