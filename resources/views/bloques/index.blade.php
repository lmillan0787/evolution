@extends('layout.master')
@section('title','Bloques')
@section('content')

<a href="{{route('bloques/create',$contrato)}}"><button class="button-primary">Nuevo</button></a>
<table  class="u-full-width">
	<thead>
		<tr>
			<th>Bloque</th>
			<!-- {{$contrato}} -->
		</tr>
	</thead>
</tbody>
@foreach($bloques as $bloque)

<tr>
	<td><a href="{{route('bloques/show',$bloque->nro)}}">{{$bloque->nro}}</a></td>
</tr>

@endforeach
</table>
<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">


@endsection
