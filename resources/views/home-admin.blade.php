@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Painel Administrativo</div>

				<div class="panel-body">
					Bem Vindo, {{ auth()->user()->name }} !
				</div>

				<ul>
					<li><a href="{{url('/perfil/textos/')}}"><h5>Editar Textos</h5></a></li>
				</ul>

			</div>
		</div>
	</div>
</div>
@endsection