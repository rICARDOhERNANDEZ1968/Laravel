<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="d-flex justify-content-between">
        <h4 class="card-title">Registro de Proyecto</h4>
    </div>
    {!! Form::open(['route'=>'Proyecto.store', 'method'=>'POST']) !!}

	<div class="row">
        <div class="form-group">
            <label for="name">Nombre Proyecto</label>
            <input type="text"
              class="form-control" name="NombreProyecto" id="NombreProyecto" aria-describedby="helpId" placeholder="Nombre Proyecto" required>
          </div>
          <div class="form-group">
            <label for="name">Fuente Fondos</label>
            <input type="text"
              class="form-control" name="fuenteFondos" id="fuenteFondos" aria-describedby="helpId" placeholder="Fuente Fondos" required>
          </div>
          <div class="form-group">
            <label for="name">Monto Planificado</label>
            <input type="text"
              class="form-control" name="MontoPlanificado" id="MontoPlanificado" aria-describedby="helpId" placeholder="Monto Planificado" required>
          </div>
          <div class="form-group">
            <label for="name">Monto Patrocinado</label>
            <input type="text"
              class="form-control" name="MontoPatrocinado" id="MontoPatrocinado" aria-describedby="helpId" placeholder="Monto Patrocinado" required>
          </div>
          <div class="form-group">
            <label for="name">Monto Fondos Propios</label>
            <input type="text"
              class="form-control" name="MontoFondosPropios" id="MontoFondosPropios" aria-describedby="helpId" placeholder="Monto Fondos Propios" required>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Registrar</button>
          <a href="{{route('Proyecto.create')}}" class="btn btn-light">
            Cancelar
         </a>
         {!! Form::close() !!}
       
         

    </div>
</div>