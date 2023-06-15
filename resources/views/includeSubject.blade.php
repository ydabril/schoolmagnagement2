@extends('layouts.principal')
@section('contenido')
<div class="container">
		<div class="content">
			<h2>Incluir asignaturas para {{$name_student}}</h2>
			<hr />

			@if(isset($validateCredits))
				@if($validateCredits==1)
					<div class="alert alert-dismissable" style="color: #050705; background-color: #e36666; border-color: #ba0b0b;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> no puede superar el maximo de 7 creditos.</div>';
				@endif
			@endif
			@if(isset($error))
				@if($error==1)
					<div class="alert alert-dismissable" style="color: #050705; background-color: #e36666; border-color: #ba0b0b;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> no puede incluir una materia que ya tenga matriculada</div>';
				@endif
			@endif
			<form class="form-inline" method="get">
				<div class="form-group">
					
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>Nombre</th>
                    <th>Descripcion</th>
                    <th>area del conocimiento</th>
					<th>tipo</th>
					<th>creditos</th>
                    <th>Docente asignado</th>
					<th>seleccionar</th>
				</tr>
                <form action="{{ url('insertincludesubject') }}" method="post">
                    @csrf
                <input type="number" name="student" value="{{$id_student}}" hidden>
                @foreach($subject as $subjects)
                <tr>
							<td>{{ $subjects->name }}</td>
							<td>{{ $subjects->description }}</td>
							<td>{{ $subjects->area }}</td>
                            <td>{{ $subjects->type }}</td>
                            <td>{{ $subjects->credits }}</td>
							<td>{{ $subjects->teacher['name']." ".$subjects->teacher['lastname'] }}</td>
                            <td>
                                
                                
                            <input class="form-check-input" type="checkbox" value="{{ $subjects->id }}" name="include[]" id="flexCheckDefault">
							</td>
                            
						</tr>
                @endforeach
                
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Incluir asignaturas seleccionadas">
					
                </form>
                
				
			</table>
			</div>
		</div>
	</div>
    @endsection
