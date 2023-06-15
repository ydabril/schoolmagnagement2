@extends('layouts.principal')
@section('contenido')
	<div class="container">
		<div class="content">
			<h2>Agregar docente</h2>
			<hr/>
			<form class="form-horizontal" action="{{ url('insertteacher') }}" method="post">
                @csrf
				<div class="form-group">
					<label class="col-sm-3 control-label">Documento</label>
					<div class="col-sm-2">
						<input type="text" name="document" class="form-control" placeholder="documento" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Apellidos</label>
					<div class="col-sm-4">
						<input type="text" name="lastname" class="form-control" placeholder="apellidos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telefono</label>
					<div class="col-sm-4">
						<input type="text" name="phone" class="form-control" placeholder="telefono" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" name="email" class="input-group date form-control"  placeholder="email" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						<textarea name="address" class="form-control" placeholder="dirección"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ciudad</label>
					<div class="col-sm-3">
						<input type="text" name="city" class="form-control" placeholder="ciudad" required>
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