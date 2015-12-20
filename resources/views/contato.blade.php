@extends('app')

@section('content')

    <!--Essa View tem altas gambiarras com <br> que deviam ser alteradas por CSS, MAS ESSE PROJETO NAO TEM ARQUIVO CSS ! COMO ASSIM ??-->

<div class="container">
    <div class="row">

        <h2><strong><u>Contatos</u></strong></h2><br>

        <div class="col-sm-6 col-md-4">

            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Rua dos Bobos, número 0 <p> Rio de Janeiro - RJ</p>

        </div>

        <div class="col-sm-6 col-md-4">

            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;empresa@email.com.br<br><br>

        </div>

        <div class="col-sm-6 col-md-4">

            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;( 21 ) 2569-6969<br><br>

        </div>

        <p><strong><br><br><br>Ou, se preferir,<br>Contate-nos por aqui</strong></p>

        <form action="{{ action ('ContatoController@store') }}" method="post">

            {!! csrf_field() !!}

            <div class="col-sm-6 col-md-offset-1 col-md-5">

                <label for="Nome">Insira seu nome:</label>
                <br>
                <input class="form-control" type="text" name="Nome" id="Nome" size="38" autofocus placeholder="  ex: Roberto Silva">

                @if($errors->has('Nome'))
                    <ul class="alert alert-danger contacterror" >
                        Digite um nome com pelo menos 3 caracteres
                    </ul>
                @endif

                <br><br>
                <label for="Telefone">Telefone:</label>
                <br>
                <input class="form-control" type="text" name="Telefone" id="Telefone" size="38" data-mask="00/00/0000" autofocus placeholder="  ex: ( 21 ) 4002-8922">

                @if($errors->has('Telefone'))
                    <ul class="alert alert-danger contacterror" >
                        Digite um número de telefone válido
                    </ul>
                @endif
                <br><br>

                <label for="Email">Insira seu email:</label>
                <br>
                <input  class="form-control" type="text" name="Email" id="Email" size="38" placeholder="  ex: joao@ninguem.com">
                @if($errors->has('Email'))
                    <ul class="alert alert-danger contacterror">
                        Digite um email válido
                    </ul>
                @endif
                <br><br>

            </div>

            <div class="col-sm-6 col-md-5">

                <label for="Mensagem">Mensagem:</label>
                <br>
                <textarea class="form-control" id="Mensagem" name="Mensagem" rows="6" placeholder="  Digite aqui sua mensagem"></textarea>

                @if($errors->has('Mensagem'))
                    <ul class="alert alert-danger contacterror" >
                        Digite uma mensagem com pelo menos 5 caracteres
                    </ul>
                @endif

                <br>

                <!-- \/ NUNCA faça isso (usar a tag stile) \/ -->
                <style>
                    textarea {
                        resize: none;
                    }
                </style>
                <!-- /\ NUNCA faça isso /\ -->

                <div class="g-recaptcha" data-sitekey="6LecGwsTAAAAABx1WrRA3sLx6wembXsAuTlkbHx7"></div>

                <br>

            </div>

            <div class="col-md-12">
                <div align="center">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>


    </div>

</div>

<script src="https://www.google.com/recaptcha/api.js"></script>

@endsection