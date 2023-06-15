@extends('layouts.principal')
@section('contenido')
	<div class="container">
		<div class="content">
			<h2>Actualizar estudiante</h2>
			<hr/>
			<form class="form-horizontal" action="{{ url('editstudent') }}" method="post">
                @csrf
                <input name="id_student" type="number" value="{{ $student->id }}" hidden>
				<div class="form-group">
					<label class="col-sm-3 control-label">Documento</label>
					<div class="col-sm-2">
						<input type="text" name="document" class="form-control" value="{{ $student->document }}" placeholder="documento" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" value="{{ $student->name }}" placeholder="Nombres" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Apellidos</label>
					<div class="col-sm-4">
						<input type="text" name="lastname" class="form-control" value="{{ $student->lastname }}" placeholder="apellidos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" name="phone" class="form-control" value="{{ $student->phone }}" placeholder="telefono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" name="email" class="input-group date form-control" value="{{ $student->email }}"  placeholder="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
                    <input type="text" name="address" class="input-group date form-control" value="{{ $student->address }}"  placeholder="direccion" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ciudad</label>
					<div class="col-sm-3">
						<input type="text" name="city" class="form-control" placeholder="ciudad" value="{{ $student->city }}" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Semestre</label>
					<div class="col-sm-3">
						<input type="number" name="semester" class="form-control" placeholder="semestre" value="{{ $student->semester }}" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

@endsection