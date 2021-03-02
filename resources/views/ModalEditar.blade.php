
<!--ventana para Update--->
<div class="modal fade" id="editChildresn{{ $children->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="{{ route('updateChildren', $children->id) }}">
      @method('PUT')
      @csrf

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre del Niño:</label>
                  <input type="text" name="name" class="form-control" value="{{ $children->name }}" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Edad:</label>
                  <input type="number" name="year" class="form-control" value="{{ $children->year }}" required="true">
                </div>
                <div class="form-group">
                    <label for="sexo">Sexo del Niño</label>
                    <br>
                    <input class="with-gap" type="radio" name="sex" id="Radios1" value="Masculino" {!! $children->sex === 'Masculino' ? 'checked' : '' !!}>
                    <label class="form-check-label" for="Radios1">Masculino</label>
                    <br>

                    <input class="with-gap" type="radio" name="sex" id="Radios2" value="Femenino" {!! $children->sex === 'Femenino' ? 'checked' : '' !!}>
                    <label class="form-check-label" for="Radios2">Femenino</label>
                </div>
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
