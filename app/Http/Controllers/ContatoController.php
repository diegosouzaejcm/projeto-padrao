<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class ContatoController extends Controller
{


    public function index()
    {
        return view ("contato");
    }

    public function create()
    {
        //
    }

    public function store(Requests\ContatoRequest $request)
    {
        if(isset($_POST['g-recaptcha-response'])&&($_POST['g-recaptcha-response'])){
            $secret = "6LecGwsTAAAAACtu2YWf8s91orzdom7BcSQ-AP-c";
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
            $arr = json_decode($rsp, TRUE);
            if ($arr['success']){

                $mensagem=null;

                $data =  $request->only('Nome', 'Telefone', 'Email','Mensagem');

                Mail::send('emails.email',$data, function($mensagem) use($data){
                    $mensagem->to('contato@email.com', 'Empresa')
                        ->from('site@email.com', 'Contato')
                        ->subject ('Novo Contato de Cliente');

                });

                echo "<script>alert('Seu formulário foi enviado com sucesso.')</script>";
                return view('contato');

            } else {
                echo "<script>alert('Por favor, faça a verificação do captcha.')</script>";
                return view('contato');
            }
        } else {
            echo "<script>alert('Problemas na verificação do captcha.')</script>";
            return view('contato');
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }



}
