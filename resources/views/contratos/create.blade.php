@extends('layout.master')
@section('content')
<h3><center>Nuevo Contrato</center></h3>
<form action="{{ route('contratos/store') }}" method="post">
	@csrf
	 <div class="row">
    <div class="six columns">
<label for="">Nombre del Contrato</label><br>
<input type="text" name="nombre" size="25"><br>
 <label>Moneda en la que opera</label><br>
<input type="text" name="cripto_opera" size="25"><br>
 
<button type="submit" class="button primary-button">Enviar</button>


<input type="button" class="button" onclick="history.back()"  name="volver atrás" value="Volver">

</div>
</div>

</form>

</tr>
@endsection

<script>
	function volver(){

		window.locationf='{{url('personas')}}'


	}


</script>