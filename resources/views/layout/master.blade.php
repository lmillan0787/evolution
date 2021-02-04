


@section('body')


<html>
    <head>
        <title> @yield('title')</title>
        <script src="{{asset('/jquery/jquery-3.5.1.min.js')}}" ></script>
        <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('/css/skeleton.css')}}">
        <link rel="stylesheet" href="{{asset('/select2/select2.min.css')}}">
        <script src="{{asset('/select2/select2.min.js')}}" ></script>
        
    </head>
    <body>
        @section('sidebar')
        <div class="row"> <a class="button button-primary" href="{{ url('/') }}">Inicio</a> <img src="{{ asset('img/logo_evolution.png') }}" align="right" width="10%" height="10%" ></div>
           

           <div class="row">
             <a class="button button-primary" href="{{ route('personas.index') }}" style="margin-top: -2% ">Personas</a>
           </div>
                 
         <div class="row">
                   <div class="col">
                     <a class="button button-primary" href="{{ route('contratos') }}">Contratos</a>
                   </div>
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



