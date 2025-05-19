<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete{{  $art->idarticulo}}">
    <form action="{{url('almacen/articulo',  $art->idarticulo)}}" method="post">
        @method('DELETE')
        @csrf

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Eliminar Articulo.</h4>
                </div>
                <div class="modal-body">
                    <p>Confirme si deseas eliminar la Articulo.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="submit" class="btn btn-primary">ACEPTAR</button>
                </div>
            </div>
        </div>
    </form>
</div>