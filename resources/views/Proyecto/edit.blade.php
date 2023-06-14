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
    <form id="form-actualizar" action="{{route('Proyecto.update', ['id' => $Proyecto->id])}}" id="form-general" class="form-horizontal form--label-right" method="POST" autocomplete="off">
        @csrf @method("put")
	<div class="row">
        <div class="form-group">
            <label for="name">Nombre Proyecto</label>
          <input type="text" name="NombreProyecto" id="NombreProyecto" value="{{$Proyecto->NombreProyecto}}" class="form-control" placeholder="NombreProyecto" required>
          </div>
          <div class="form-group">
            <label for="name">Fuente Fondos</label>
            <input type="text" name="fuenteFondos" id="fuenteFondos" value="{{$Proyecto->fuenteFondos}}" class="form-control" placeholder="fuenteFondos" required>
        </div>
          </div>
          <div class="form-group">
            <label for="name">Monto Planificado</label>
            <input type="text" name="MontoPlanificado" id="MontoPlanificado" value="{{$Proyecto->MontoPlanificado}}" class="form-control" placeholder="MontoPlanificado" required>
          </div>
          <div class="form-group">
            <label for="name">Monto Patrocinado</label>
            <input type="text" name="MontoPatrocinado" id="MontoPatrocinado" value="{{$Proyecto->MontoPatrocinado}}" class="form-control" placeholder="MontoPatrocinado" required>
          </div>
          <div class="form-group">
            <label for="name">Monto Fondos Propios</label>
            <input type="text" name="MontoFondosPropios" id="MontoFondosPropios" value="{{$Proyecto->MontoFondosPropios}}" class="form-control" placeholder="MontoFondosPropios" required>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
          <a href="{{route('Proyecto.index')}}" class="btn btn-light">
             Cancelar
          </a>
          {!! Form::close() !!}
       
         

    </div>
</div>