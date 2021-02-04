@extends('layout.master')
@section('content')
<h2 align="center">{{ $contrato->nombre }}</h2>
<h3><center>Registro Socio</center></h3>
<form action="{{ route('participantes/store') }}" method="post">
	@csrf
	
	<label for="" align="center">Nuevo Socio</label>
	
	<div class="row" align="center">
		<div class="twelve columns">
			
			<select name="persona_id" class="select2" id="" class="u-full-width">
				@foreach ($personas as $persona)
				<option value="{{$persona->id}}">{{$persona->primer_nombre}} {{$persona->primer_apellido}}</option>
				@endforeach
			</select>
		</div>
	</div><br>
	
	
	<div class="row" align="center">
		<div class=" twelve columns">
			<label for="">Id Registro</label>
			<input u-full-width type="text" name="id_registro"><br>
			<input type="text" hidden=""  name="contrato_id" value="{{ $contrato->id }}">
		</div>
	</div><br>
	<div class="row" align="center">
		<div class="twelve columns">
			
			<label for="">Upline Id</label>
			<select name="upline_id" class="select2" id="">
				<option value="1">Upline Global(0)</option>
				@foreach ($participantes as $participante)
				<option value="{{$participante->id_registro}}">{{$participante->primer_nombre}} {{$participante->primer_apellido}} ({{$participante->id_registro}})</option>
				@endforeach
			</select>
		</div>
	</div><br>
	
	
	<div class="row" align="center">
		<div class="twelve columns">
			<label for="">Fecha de Registro</label>
			<input type="date" class="form-control input-lg" name="fecha_registro"><br>
		</div>
	</div><br>
	<div class="row" align="center">
		<div class="twelve columns">
			<label for="">Bloque</label>
			
			<select name="bloque_id" class="select2" class="u-full-width">
				@foreach ($bloques as $bloque)
				<option value="{{ $bloque->id }}">{{ $bloque->nro }}</option>
				
				@endforeach
			</select>
		</div>
	</div><br>
	
	<div class="row" align="center">
		<div class="twelve columns">
			<label for="">Línea</label>
			<select name="linea_id" class="select2" class="u-full-width">
				@foreach ($lineas as $linea)
				<option value="{{ $linea->id }}">{{ $linea->nro }}</option>
				
				@endforeach
			</select>
		</div>
	</div><br>
	<div class="row" align="center">
		<div class= "twelve columns">
			<button type="submit" class="button-primary">Enviar</button>
		</div>
	</div>
</form>
<script>
$(document).ready(function() {
$('.select2').select2();
});
</script>
@endsection