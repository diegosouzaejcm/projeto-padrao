<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Text;

class TextController extends Controller
{
    public function index()
    {
        $texts = \App\Text::paginate(16);
        $texts->setPath('');

        return view('admin.textos.index')->with('texts', $texts);
    }

    public function create()
    {
        return view('admin.textos.create');
    }

    public function store(Request $request)
    {
        Text::create($request->all());
        return redirect('perfil/textos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $texts = \DB::table('texts')->where('id',$id)->first();

        return view('admin.textos.edit')->with('text', $texts);
    }

    public function update(Request $request)
    {

        $post = $request->all();

        $data = array(
            'titulo' => $post['titulo'],
            'conteudo' => $post['conteudo'],
            'local' => $post['local'],
        );

        \DB::table('texts')-> where ('id', $post['id'])->update($data);

        return redirect('perfil/textos');
    }


    public function destroy($id)
    {
        \App\Text::destroy($id);

        return redirect()->back();
    }
}
