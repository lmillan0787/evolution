@extends('layout.master')
@section('content')
<form action="{{ route('participantes/store') }}" method="post">
	@csrf
	<select name="persona" class="select2" id="">
		@foreach ($participantes as $participa)
		<option value="{{$participa->persona_id}}">{{$participa->primer_nombre}} {{$participa->primer_apellido}}</option>
		@endforeach
	</select>
 <label for="">Primer Nombre</label>
<input type="text" name="primer_nombre"><br>

<label for="">Primer Apellido</label>

<input type="text" name="primer_apellido"><br>

<label for="">Pais</label>
<input type="text" name='pais'><br>

<!-- contrato id
<input type="text" name="contrato_id"><br>
 -->
<label for="">Id Registro</label>
<input type="text" name="id_registro"><br>

 <label for="">Upline Id</label>
<input type="text" name="upline_id"><br>

 <label for="">Fecha de Registro</label>
<input type="text" class="datepicker" name="fecha_registro"><br>

 <label for="">Bloque</label>
<input type="text" name="bloque_id"><br>

<button type="submit" class="button-primary">Enviar</button>
	



</form>
<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
@endsection

