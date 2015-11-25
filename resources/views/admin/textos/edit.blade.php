@extends('app')

@section('content')

    <div id="main" class="container-fluid">

        <h3 class="page-header">Criar Item</h3>

        <form action="{{ action ('TextController@update') }}" method="post">

            {!! csrf_field() !!}

            <div class="row">

                <input type="hidden" name="id" value="{{$text->id}}">

                <div class="form-group col-md-offset-1 col-md-6">
                    <label for="titulo">Título:</label>
                    <br>
                    <input type="text" name="titulo" class="form-control" id="titulo" autofocus value="{{$text->titulo}}">

                </div>
                <div class="form-group col-md-offset-1 col-md-6">
                    <label for="conteudo">Conteúdo:</label>
                    <br>
                    <textarea type="text" name="conteudo" class="form-control" id="conteudo" size="300"  maxlength="120">{{$text->conteudo}}</textarea>
                </div>
            </div>

            <hr />

            <div class="row">
                <div class="col-md-offset-1 col-md-12">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{url('/perfil/textos')}}" class="btn btn-default">Cancelar</a>
                </div>
            </div>

        </form>
    </div>

@endsection