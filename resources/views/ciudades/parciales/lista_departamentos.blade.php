<div>
	<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Departamentos
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			@foreach ($departamentos as $departamento)
				<a class="dropdown-item" 
					href="{{ route(
						'ciudades.index', [
						'departamento' => $departamento->nombre
						]) }}"
				>
					{{ $departamento->nombre }}
				</a>
			@endforeach
		</div>
	</div>
</div>
<hr>