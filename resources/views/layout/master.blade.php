


@section('body')


<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="{{asset('/jquery/jquery-3.5.1.min.js')}}" ></script>
        <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('/css/skeleton.css')}}">
        <link rel="stylesheet" href="{{asset('/select2/select2.min.css')}}">
        <script src="{{asset('/select2/select2.min.js')}}" ></script>
        
    </head>
    <body>
        @section('sidebar')
           <div class='row'>
           <div class="one column">
           	<tr> 
		<td><a class="button button-primary" href="{{ route('personas.index') }}">Personas</a></td>
		<td><a class="button button-primary" href="{{ route('participantes') }}">Forsage</a></td>
		<td><a class="button button-primary" href="{{ route('participantesInco.index') }}">Incomatrix</a></td>
		<td><a class="button button-primary" href="{{ route('participantesTrust.index') }}" >Trust Investing</a></td>
	</tr>
           </div>	

	
	

</div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
    <style type="text/css">
  
a {
  /*font-size: 20px;*/
  line-height: 50px;
  text-align: center;
  width: 150px;
  height: 50px;
}
  
}
  
</style>
</html>



