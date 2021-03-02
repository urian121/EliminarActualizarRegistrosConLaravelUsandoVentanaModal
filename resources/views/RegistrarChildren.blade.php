<form name="form-data" action="{{ route('SaveChildren') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
    <div class="row">
      <div class="col-md-12">
          <label for="name" class="form-label">Nombre del Niño</label>
          <input type="text" class="form-control" name="name" required='true' autofocus>
      </div>
      <div class="col mt-2">
          <label for="year" class="form-label">Edad</label>
          <input type="number" class="form-control" name="year" required='true'>
      </div>
      <div class="col mt-2">
          <label for="Sexo" class="form-label">Sexo</label>
          <fieldset class="form-group row">
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sex" value="Masculino" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Masculino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sex" value="Femenino">
                  <label class="form-check-label" for="gridRadios2">
                    Femenino
                  </label>
                </div>
              </div>
            </fieldset>
      </div>


    </div>
      <div class="row justify-content-start text-center mt-5">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Niño
              </button>
          </div>
      </div>
</form>
