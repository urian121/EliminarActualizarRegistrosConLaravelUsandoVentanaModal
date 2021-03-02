
<!---msj de niño registrado correctamente -->
@if(Session::has('message'))
  <div class="col-lg-12" id="msj">
    <div class="alert alert-success alert-success-style1 alert-success-stylenone">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
        <span class="adminpro-icon adminpro-checked-pro admin-check-sucess admin-check-pro-none"></span>
        <p class="message-alert-none">
        
            <strong> {{ Session::get('message') }} </strong>
        </p>
    </div>
</div>
@endif


<!--msj de niño eliminado correctamente --->
@if(Session::has('msjdelete'))
 <div class="alert alert-danger" role="alert" id="msj">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <p> 
        <strong> {{ Session::get('msjdelete') }} </strong> 
    </p>
</div>
@endif



<!---msjs de actualizar registro del  niño -->
@if(Session::has('msjupdate'))
    <div class="alert alert-primary" role="alert" id="msj">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      <strong> {{ Session::get('msjupdate') }} </strong> 
    </div>
@endif