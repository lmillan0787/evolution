
<ul>

	@foreach ($participantes as $participante)
<li>
{{$participante->primer_nombre}}
{{$participante->primer_apellido}}
{{$participante->nombre}}
</li>
@endforeach


</ul>
