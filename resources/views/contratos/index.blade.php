@extends('layout.master')
@section('content')
<h3>Contratos Activos</h3>

<div class="row">
	
<a href="{{ route('contratos/create') }}" class="button button-primary">Nuevo Contrato</a>


</div>
<table class="u-full-width">

	<h2>Contratos Inteligentes Evolution</h2>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Cripto Utilizada</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($contratos as $contrato )
		<tr>
			<td>

	<a href="{{ route('participantes',$contrato->id) }}">{{$contrato->nombre}}</a>
	</td>
	<td>
	{{ $contrato->cripto_opera }}
</td>
		</tr>
		@endforeach</td>
	</tbody>
</table>

@endsection