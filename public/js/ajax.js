$(document).ready(function() {

    /* Trailer DataTable */
    $('#trailers').DataTable();

    /* Save trailer */
    $('body').on('click', '#newTrailer', function(e) {
        e.preventDefault();
        $('#btn-save').val("create-trailer");
        $('#trailer').trigger("reset");
        $('#trailerCrudModal-add').html("Creando un nuevo trailer");
        $('#crud-modal').modal('show');
    });

    /* Edit trailer */
    $('body').on('click', '#editTrailer', function() {
        var trailer_id = $(this).data('id');
        $.get('/trailers/' + trailer_id + '/edit', function(data) {
            $('#trailerCrudModal-add').html("Editando trailer");
            $('#btn-save').val("Editar");
            $('#crud-modal').modal('show');
            $('#trailer_id').val(data.id);
            $('#titulo').val(data.titulo);
            $('#descripcion').val(data.descripcion);
            $('#director').val(data.director);
            $('#reparto').val(data.reparto);
            $('#estudio').val(data.estudio);
            $('#fecha_estreno').val(data.fecha_estreno);
            $('#link').val(data.link);
            $('#thumbnail').val(data.thumbnail);
        })
    });

    /* Delete trailer */
    $('body').on('click', '#deleteTrailer', function() {
        var trailer_id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        confirm("¿Estas seguro que quieres eliminar esto?");

        $.ajax({
            type: "DELETE",
            url: `/trailers/${trailer_id}`,
            data: {
                "id": trailer_id,
                "_token": token,
            },
            success: function(data) {
                $('#msg').html('Trailer eliminado satisfactoriamente');
                $("#trailer_id_" + trailer_id).remove();
            },
            error: function(data) {
                console.log('Error:', data);
            }
        });
    });
});