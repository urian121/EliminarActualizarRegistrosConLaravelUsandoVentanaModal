
<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn{{ $children->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center">
                ¿Realmente deseas eliminar a ?
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            {{ $children->name }}
          </strong>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <a  class="btn btn-danger" href="{{ route('deleteChildren', $children->id) }}">Borrar</a>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->
