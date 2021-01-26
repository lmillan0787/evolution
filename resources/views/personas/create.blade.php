@extends('layout.master')
@section('content')
<form action="{{ route('personas.store') }}" method="post">
	@csrf
	 <div class="row">
    <div class="six columns">
<label for="">Primer Nombre</label><br>
<input type="text" name="primer_nombre" size="25"><br>
 <label>Primer Apellido</label><br>
<input type="text" name="primer_apellido" size="25"><br>
 <label for="">País</label><br>
<input type="text" name="pais" size="25"><br>

<button type="submit">Enviar</button>


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