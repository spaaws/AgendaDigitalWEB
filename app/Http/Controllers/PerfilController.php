<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PerfilRequest;

use PhpOffice\PhpWord\Style\Font;

class PerfilController extends Controller
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
        return view('perfil.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\PerfilRequest  $PerfilRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PerfilRequest $request, $id)
    {
        $user = auth()->user();
        $data = $request->all();
        if ($data['password'] != null)
            $data['password'] = Hash::make($data['password']);
        else 
            unset($data['password']);

            //Código para fazer upload de foto
            $nomeFile = null;
            $data['avatar'] = $user->avatar;
                if ($request->hasFile('avatar') && $request->file('avatar')->isValid()){
                    $nomeAvatar = $user->id.kebab_case($user->name);
                    $extension  = $request->avatar->extension();
                    $nomeFile   =  "{$nomeAvatar}.{$extension}";
                    $data['avatar'] = $nomeFile;
                    
                    $upload = $request->avatar->storeAs('users',$nomeFile);

                    if (!$upload)
                        return redirect()
                                    ->back()
                                    ->whithError('Falha ao fazer upload da imagem.');
                }
                
            $update = $user->update($data);

        if($update)
            return redirect()
                        ->route('perfil.index')
                        ->with('success', 'Sucesso ao atualizar!');
            
        return redirect()
                    ->back()
                    ->with('error', 'Falha ao atualizar!');

    }

    public function generateDocx()
    {
        $user = auth()->user();
        
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


        $description = $user->name." - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


        $section->addImage("http://itsolutionstuff.com/frontTheme/images/logo.png");
        $section->addText($description);


        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }
        return response()->download(storage_path('helloWorld.docx'));
        
    }
}
