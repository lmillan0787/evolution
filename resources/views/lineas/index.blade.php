@extends('layout.master')
@section('title','Lineas')
@section('content')

<a href="{{route('lineas/create',$contrato)}}"><button class="button-primary">Nuevo</button></a>
<table  class="u-full-width">
	<thead>
		<tr>
			<th>Lineas</th>
			
		</tr>
	</thead>
</tbody>
@foreach($lineas as $linea)

<tr>
	<td>{{$linea->nro}}</td>
</tr>

@endforeach
</table>
<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">


@endsection