<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Actualizar Registro con Ventana Modal y Ajax :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
</head>
<body>
  
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera <span>&#160;</span></h5>
    </div>
</nav>


<div class="container mt-5 p-5">

<h4 class="text-center">Lista de Niños</h4>
<hr>


<div class="row text-center" id="capa">
  <div class="col-md-6"> 
    <strong>Registrar Empleado</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Empleados</strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">
        <div class="col-sm-4">
        <form method="post" name="formRegistraEmpleado" id="formRegistraEmpleado">
              <div class="row">
                <div class="col-md-12">
                    <label for="Nombre" class="form-label">Nombre del Empleado</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required='true' autofocus>
                </div>
                <div class="col mt-2">
                    <label for="fechaInicio" class="form-label">Fecah Inicio</label>
                    <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" required='true'>
                </div>
                <div class="col mt-2">
                    <label for="fechaFin" class="form-label">Fecha Fin</label>
                    <input type="date" class="form-control" name="fechaFin" id="fechaFin" required='true'>
                </div>
              </div>
                <div class="row justify-content-start text-center mt-5">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" id="btnEnviar">
                            <span class="spinner-border spinner-border-sm mr-2"></span>
                            Registrar Empleado
                        </button>
                    </div>
                </div>
          </form>
          </div>  
         

          <div class="col-sm-8">
              <div class="row">
                <div class="col-md-12 p-2">
                    <div class="table-responsive" id="respuesta">
                        <h4>holaaaa</h4>
                    </div>
                </div>
              </div>
          </div>
          </div>
      </div>
  </div>
</div>


</div>


<script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $(".cargando").fadeOut(1000);
});

    $(document).ready(function() {

      $(".spinner-border").hide(); //Ocultando el cargando
      
      $('#btnEnviar').click(function(e){
        e.preventDefault();
        var url = "DataEmpleado.php"; 

            $('#btnEnviar').removeClass('btn-primary');
            $('#btnEnviar').addClass('btn-success');
            $("#btnEnviar").attr('disabled',true); //Desabilitar el boton
            $(".spinner-border").show();   //Mostrar Cargando   

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#formRegistraEmpleado").serialize(),
           success: function(data)            
           {
             $('#respuesta').html(data);  
             $(".spinner-border").hide(); 
             $("#btnEnviar").attr('disabled',false);
             $('#btnEnviar').removeClass('btn-success');
             $('#btnEnviar').addClass('btn-primary');
             $("#btnEnviar").text("Registrar Empleado");      
           }
         });
      });

    });
    </script>

</body>
</html>