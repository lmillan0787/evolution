@extends('layout.master')
@section('content')
<h3><center>Nuevo Bloque</center></h3>
<form action="{{ route('bloques.store') }}" method="post">
	@csrf
	 <div class="row">
    <div class="six columns">
<label for="">Bloque</label><br>
<input type="text" name="nro" size="25"><br>
<input type="text" name="contrato_id" value="{{$contrato}}">


<button type="submit" class="button primary-button">Enviar</button>


<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">

</div>
</div>

</form>


@endsection