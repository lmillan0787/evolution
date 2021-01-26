<form action="{{ route('participantes/store') }}" method="post">
	@csrf
	
primer nombre
<input type="text" name="primer_nombre"><br>
primer apellido
<input type="text" name="primer_apellido"><br>
contrato id
<input type="text" name="contrato_id"><br>
id registro
<input type="text" name="id_registro"><br>
upline id
<input type="text" name="upline_id"><br>
fecha registro
<input type="date" name="fecha_registro"><br>
bloque id
<input type="text" name="bloque_id"><br>
<button type="submit">Enviar</button>
	



</form>

