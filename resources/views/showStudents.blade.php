@extends('layouts.principal')
@section('contenido')
<div class="container">
		<div class="content">
			<h2>Lista de Estudiantes</h2>
			<hr />

			

			<form class="form-inline" method="get">
				<div class="form-group">
					
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
                    <th>No</th>
					<th>Documento</th>
					<th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
					<th>email</th>
					<th>Direccion</th>
					<th>ciudad</th>
                    <th>semestre</th>
                    <th>incluir asigaturas</th>
                    <th>Asigaturas matriculadas</th>
                    <th>Acciones</th>
				</tr>
                @foreach($students as $student)
                <tr>
							<td>{{ $student->id }}</td>
							<td>{{ $student->document }}</td>
							<td>{{ $student->name }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->phone }}</td>
							<td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->city }}</td>
                            <td>{{ $student->semester }}</td>
                            <td>
								<a href="{{ url('includesubject/'.$student->id) }}"  class="btn btn-primary btn-sm">incluir</a>
							</td>
                            <td>
								<a href="{{ url('showsubject/'.$student->id) }}"  class="btn btn-primary btn-sm">ver</a>

							</td>
							<td>
								<a href="{{ url('updatestudent/'.$student->id) }}" title="Editar datos" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="{{ url('deletestudent/'.$student->id) }}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
                @endforeach
                
				
			</table>
			</div>
		</div>
	</div>
    @endsection