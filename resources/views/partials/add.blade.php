<!-- Add and Edit trailer modal -->
<div class="modal fade" id="crud-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="trailerCrudModal"></h4>
            </div>
            <div class="modal-body">
                <form name="trailerForm" action="{{ route('trailers.store') }}" method="POST">
                    <input type="hidden" name="trailer_id" id="trailer_id">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Titulo</strong>
                                <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Titulo"
                                    onchange="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Descripcion</strong>
                                <textarea type="text" name="descripcion" id="descripcion" class="form-control"
                                    placeholder="Descripcion" onchange="validate()"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Reparto</strong>
                                <input type="text" name="reparto" id="reparto" class="form-control"
                                    placeholder="Reparto" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Director</strong>
                                <input type="text" name="director" id="director" class="form-control"
                                    placeholder="Director" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Estudio</strong>
                                <input type="text" name="estudio" id="estudio" class="form-control"
                                    placeholder="Estudio" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Fecha de estreno</strong>
                                <input type="date" name="fecha_estreno" id="fecha_estreno" class="form-control"
                                    onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link</strong>
                                <input type="text" name="link" id="link" class="form-control"
                                    placeholder="URL del trailer" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Portada</strong>
                                <input type="text" name="thumbnail" id="thumbnail" class="form-control"
                                    placeholder="Portada" onchange="validate()" onkeypress="validate()">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" id="btn-save" name="btnsave" class="btn btn-primary"
                                disabled>Enviar</button>
                            <a href="{{ route('admin') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    error = false

    function validate() {
        if(document.trailerForm.titulo.value !== '' && document.trailerForm.descripcion.value !== '' && 
            document.trailerForm.reparto.value !== '' && document.trailerForm.director.value !== '' &&
            document.trailerForm.estudio.value !== '' && document.trailerForm.fecha_estreno.value !== null &&
            document.trailerForm.link.value !== '' && document.trailerForm.thumbnail.value !== ''
        )
            document.trailerForm.btnsave.disabled = false;
        else
            document.trailerForm.btnsave.disabled = true;
    }

</script>
