@extends('layouts.principal')
@section('contenido')
<div class="container">
		<div class="content">
			<h2>Materias incluidas de {{ $name_student }}</h2>
			<hr />

			

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
					<th>Eliminar</th>
				</tr>
                
                @foreach($subject as $subjects)
                <tr>
							<td>{{ $subjects->name }}</td>
							<td>{{ $subjects->description }}</td>
							<td>{{ $subjects->area }}</td>
                            <td>{{ $subjects->type }}</td>
                            <td>{{ $subjects->credits }}</td>
							<td>{{ $subjects->teacher['name'] }}</td>
                            <td>
                                
							<a href="{{ url('deletesubject/'.$subjects->subject_id.'/'.$id_student ) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            
							</td>
                            
						</tr>
                @endforeach
			</table>
			</div>
		</div>
	</div>
    @endsection