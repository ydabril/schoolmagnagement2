@extends('layouts.principal')
@section('contenido')
	<div class="container">
		<div class="content">
			<h2>Agregar asignatura</h2>
			<hr/>
			<form class="form-horizontal" action="{{ url('insertsubject') }}" method="post">
                @csrf
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombre de la asignatura</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="nombre" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Descripcion</label>
					<div class="col-sm-3">
						<textarea name="description" class="form-control" placeholder="descripcion"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cantidad de creditos</label>
					<div class="col-sm-4">
						<input type="text" name="credits" class="form-control" placeholder="creditos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Area de conocimiento</label>
					<div class="col-sm-4">
						<input type="text" name="area" class="input-group date form-control"  placeholder="area" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo de asignatura</label>
					<div class="col-sm-3">
						<select name="type" class="form-control">
							<option value=""> Seleccionar tipo </option>
                           <option value="Electiva">Electiva</option>
							<option value="Obligatoria">Obligatoria</option>
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Asignar docente</label>
					<div class="col-sm-3">
						<select name="teacher" class="form-control">
                            <option value=""> Seleccionar docente </option>
                            @foreach($teachers as $teacher)
							<option value="{{ $teacher->id }}">{{ $teacher->name." ".$teacher->lastname }}</option>
                            @endforeach
						</select>
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