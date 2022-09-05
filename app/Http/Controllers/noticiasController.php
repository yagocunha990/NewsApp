<?php

namespace App\Http\Controllers;
use App\Models\noticias;


use Illuminate\Http\Request;

class noticiasController extends Controller
{

    public function index(){
        // buscar todas as noticias
        $dados = noticias::all();
        return view('noticias_index', compact('dados'));
    }


    public function create(){
        //formulario para criação de uma novo noticias
        return view('noticias_create');
    }


    public function store(Request $request){
        //gravação da noticia na base de dados
        $noticia = new noticias;

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;
        //visibilidade
        if (isset($request->check_visivel)) {
            $noticia->visivel =1;
        } else {
            $noticia->visivel =0;
        }
        //salvar a noticia
        $noticia->save();

        //redireciona para o inicio
        return redirect('/');

    }


    public function show($id)
    {
        //
    }


    public function edit($id){
        //apresentar uma formulario para editar as noticias
        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));

    }


    public function update(Request $request, $id){
        //ATUALIZAR AS NOTICIAS
        $noticia = noticias::find($id);

        //atualizar seus campos
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        //visibilidade
        if (isset($request->check_visivel)) {
            $noticia->visivel =1;
        } else {
            $noticia->visivel =0;
        }

        $noticia->save();

        return redirect('gerir_noticias');

    }
//=================================================================
    public function destroy($id){
        //eliminar uma noticia na base de dados
        noticias::destroy($id);
        return redirect('/gerir_noticias');
    }

    //////////////////////////////////////
     public function apresentarTabelaGestao(){
        //carregar todas as noticias
        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias'));
    }
    //==========================================================
     public function colocarVisivel($id){
        //tornar noticia visivel que estava invisivel
        $noticia =noticias::find($id);
        $noticia->visivel =1;
        $noticia->save();




        return redirect('/gerir_noticias');
     }
     //=======================================================================
     public function colocarInvisivel($id){
        //tornar noticia invisivel que estava visivel
        $noticia =noticias::find($id);
        $noticia->visivel =0;
        $noticia->save();
        return redirect('/gerir_noticias');
     }
}
