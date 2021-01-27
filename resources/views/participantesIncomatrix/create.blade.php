@extends('layout.master')
@section('content')
<h2>INCOMATRIX</h2>
<h3><center>Registro Socio</center></h3>
<form action="{{ route('participantesInco.store') }}" method="post">
	@csrf
	
	<label for="">Nuevo Socio</label>
	<select name="persona_id" class="select2" id="">
		@foreach ($personas as $persona)
		<option value="{{$persona->id}}">{{$persona->primer_nombre}} {{$persona->primer_apellido}}</option>
		@endforeach
	</select>
 {{-- <label for="">Primer Nombre</label>
<input type="text" name="primer_nombre"><br>

<label for="">Primer Apellido</label>

<input type="text" name="primer_apellido"><br> --}}

{{-- <label for="">Pais</label>
<input type="text" name='pais'><br> --}}

<!-- contrato id
<input type="text" name="contrato_id"><br>
 -->
<label for="">Id Registro</label>
<input type="text" name="id_registro"><br>

 <label for="">Upline Id</label>
<select name="upline_id" class="select2" id="">
		@foreach ($participantes as $participante)
		<option value="{{$participante->id_registro}}">{{$participante->primer_nombre}} {{$participante->primer_apellido}} ({{$participante->id_registro}})</option>
		@endforeach
	</select>
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

