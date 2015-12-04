@extends('app')

@section('content')

    <div id="main" class="container-fluid" style="margin-top: 50px">

        <div id="top" class="row">
            <div class="col-sm-3">
                <h2>Textos</h2>
            </div>
            <div class="col-sm-6">

                <div class="input-group h2">
                    <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
				</span>
                </div>

            </div>
            <div class="col-sm-3">
                <a href="{{url('perfil/textos/create')}}" class="btn btn-primary pull-right h2">Novo Texto</a>
            </div>
        </div> <!-- /#top -->


        <hr />
        <div id="list" class="row">

            <div class="table-responsive col-md-offset-1 col-md-10">
                <table class="table table-striped" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Local</th>
                        <th class="actions">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($texts as $text)
                        <tr>
                            <td>{{$text->id}}</td>
                            <td>{{$text->titulo}}</td>
                            <td>{{$text->conteudo}}</td>
                            <td>{{$text->local}}</td>
                            <td class="actions">
                                <a class="btn btn-warning btn" href="{{ url('perfil/textos/'.$text->id.'/edit') }}">
                                    Editar
                                </a>
                                <a class="btn btn-danger btn" data-toggle="modal" data-target='#delete-modal-{{$text->id}}'>
                                    Eliminar
                                </a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="delete-modal-{{$text->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                                    </div>
                                    <div class="modal-body">
                                        Deseja realmente excluir este item?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{action ('TextController@destroy', [$text->id])}}"><button type="button" class="btn btn-primary">Sim</button></a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </tbody>
                </table>

                <div align="center">

                    <?php echo $texts->render();?>

                </div>
            </div>

        </div>

@endsection