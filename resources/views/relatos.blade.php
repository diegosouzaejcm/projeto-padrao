@extends('app')

@section('content')
    <body>
        <div class="container">
	    <div class="content">
	        <div class="jumbotron">
		    <h1>Essa é a página de relatos</h1>
		</div>
	    </div>
	
	    @foreach($texts as $text)
	        @if($text->local == 'Relatos')
		    <div class="col-md-offset-1 col-md-9">
	                <div class="jumbotron">
	                   <h3>{{$text->titulo}}</h3>
	                   <h6>{{$text->conteudo}}</h6>
	                </div>
	            </div>
	        @endif
	    @endforeach
        </div>
    </body>
@endsection

