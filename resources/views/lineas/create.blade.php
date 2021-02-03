@extends('layout.master')
@section('content')
<h3><center>Nueva Linea</center></h3>
<form action="{{ route('lineas.store') }}" method="post">
	@csrf
	 <div class="row">
    <div class="six columns">
<label for="">Número de Línea</label><br>
<input type="text" name="nro" size="25"><br>
<input type="text" name="contrato_id" value="{{$contrato}}">
 

<button type="submit" class="button primary-button">Enviar</button>


<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">

</div>
</div>

</form>

</tr>
@endsection