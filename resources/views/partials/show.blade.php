<div class="modal fade" id="crud-modal-show" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="trailerCrudModal-show"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>{{ $trailer->titulo }}</h2>
                        <video id="vid{{ $trailer->id }}" class="video-js vjs-default-skin" controls width="640"
                            height="264"
                            data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src":"{{ $trailer->link }}"}] }'>
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a
                                web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
                                    video</a>
                            </p>
                        </video>
                        <h2>Descripcion</h2>
                        <p>{{ $trailer->descripcion }}</p>
                        <h2>Reparto</h2>
                        <p>{{ $trailer->reparto }}</p>
                        <h2>Director</h2>
                        <p>{{ $trailer->director }}</p>
                        <h2>Estudio</h2>
                        <p>{{ $trailer->estudio }}</p>
                        <h2>Fecha de estreno</h2>
                        <p>{{ $trailer->fecha_estreno }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
