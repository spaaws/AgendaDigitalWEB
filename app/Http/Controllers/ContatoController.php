<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Http\Requests\ContatoRequest;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContatoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        //Está chamando a pagina index.blade.php dentro de views/contatos.
        $registros = Contato::where('user_id', Auth::id())->get();
        //$registros = Contato::latest()->paginate(5);
          return view('contatos.index',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Está chamando a pagina create.blade.php dentro de views/contatos.
        return view('contatos.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoRequest $request)
    {
             
        $dados = $request->all();
        $registro = new Contato();
        
        //Passando dados para o Model para salvar dados no Bando de Dados
        $registro->nome         = $dados['nome'];
        $registro->email        = $dados['email'];
        $registro->fone         = $dados['fone'];
        $registro->facebook     = $dados['facebook'];
        $registro->twitter      = $dados['twitter'];
        $registro->instagram    = $dados['instagram'];
        $registro->cep          = $dados['cep'];
        $registro->logradouro   = $dados['logradouro'];
        $registro->bairro       = $dados['bairro'];
        $registro->localidade   = $dados['localidade'];
        $registro->uf           = $dados['uf'];
        $registro->user_id      = $dados['user_id'];

        $registro->save();

        //Redirecioando para a view index
        return redirect()
                    ->route('contatos.index')
                    ->withSuccess('Contato cadastrado com sucesso!');
        
        return redirect()
                    ->back()
                    ->withError('Falha ao cadastrar este contato!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = Contato::find($id);
        return view('contatos.show',compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Contato::find($id);
        return view('contatos.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContatoRequest $request, $id)
    {
        $registro = Contato::find($id);
        $dados = $request->all();
        
        //Passando dados para o Model para salvar dados no Bando de Dados
        $registro->nome         = $dados['nome'];
        $registro->email        = $dados['email'];
        $registro->fone         = $dados['fone'];
        $registro->nome         = $dados['nome'];
        $registro->facebook     = $dados['facebook'];
        $registro->twitter      = $dados['twitter'];
        $registro->instagram    = $dados['instagram'];
        $registro->cep          = $dados['cep'];
        $registro->logradouro   = $dados['logradouro'];
        $registro->bairro       = $dados['bairro'];
        $registro->localidade   = $dados['localidade'];
        $registro->uf           = $dados['uf'];
        $registro->user_id      = $dados['user_id'];

        Contato::find($id)->update($dados);   

        //Redirecioando para a view index
        return redirect()
                    ->route('contatos.index')
                    ->withSuccess('Contato atualizado com sucesso!');

        return redirect()
                    ->back()
                    ->withError('Falha ao atualizar este contato!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->delete_contato);
        //Contato::find($id)->delete();
        //Contato::destroy($id);
        //$contato->delete();
        $registro = Contato::findOrFail($request->delete_contato);
        $registro->delete();
        return redirect()
                    ->route('contatos.index')
                    ->withSuccess('Contato excluído com sucesso!');
        return redirect()
                    ->back()
                    ->withError('Falha ao excluir este contato!');
    }
}
