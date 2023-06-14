<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
  
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Informacion de Proyecto</h4>
        <div class="table-responsive">
            <div >
                <a href="{{route('Proyecto.store')}}" class="btn btn-primary btn-sm">
                    <i class="fa fa-fw fa-plus-circle"></i> Nuevo registro
                </a>
            </div>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                 
                   <th>NombreProyecto</th>
                    <th>fuenteFondos</th>
                     <th>MontoPlanificado</th>
                     <th>MontoPatrocinado</th>
                     <th>MontoFondosPropios</th>
                      <th>Editar</th>
                      
                       <th>Eliminar</th>
                   </thead>
    <tbody>
    
        @foreach ($proyecto as $proyectos)
        <tr>
            <th scope="row">{{$proyectos->id}}</th>
            <td>
              {{$proyectos->NombreProyecto}}
            </td>
            <td>
                {{$proyectos->fuenteFondos}}
              </td>
              <td>
                {{$proyectos->MontoPlanificado}}
              </td>
              <td>
                {{$proyectos->MontoPatrocinado}}
              </td>
              <td>
                {{$proyectos->MontoFondosPropios}}
              </td> 
              <td style="width: 50px;">
                                          
                <form action="{{route('Proyecto.destroy', ['id' => $proyectos->id])}}" class="d-inline form-eliminar" method="POST">
                    @csrf @method("delete")

            <a class="btn btn-primary btn-sm" href="{{route('Proyecto.edit', ['id' => $proyectos->id])}}" title="Editar">
                <i class="far fa-edit"></i>
            </a>
            
            <button class="btn btn-primary btn-sm" type="submit" title="Eliminar" style="border: 0ch; background-color:white">
                <i class="far fa-trash-alt"></i>
            </button>

            {!! Form::close() !!}
        </td>

        </tr>
        @endforeach
    
   
    
    </tbody>
        
</table>
</div>
</div>
