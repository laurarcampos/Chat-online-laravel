<?php

namespace App\Http\Controllers;

use App\Models\ModelNoticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiasRequest;
use App\Models\User;

class NoticiasController extends Controller
{   
    private $objUsers;
    private $objNoticias;

    public function __construct(){
        $this->objUsers = new User();
        $this->objNoticias = new ModelNoticia();
    }

    public function index()
    {
        $noticias = ModelNoticia::all();
        return view('adm-dashboard', compact('noticias'));
    }
    
    
    
     public function create()
    {
        $user=$this->objUsers->all();
        return view('noticias.create', compact('user'));
    }

   
    public function store(NoticiasRequest $request)
    {
        $cad=$this->objNoticias->create([
            'id_users' => $request->id_users,
            'titulo'=>$request->titulo,
            'mensagem'=>$request->mensagem
        ]);

        if($cad){
            return redirect(to:'noticias');
        }
    }


    public function show(string $id)
    {
        $noticia = $this->objNoticias->find($id);
        return view('noticias.show', compact('noticia'));
    }

 
    public function edit(string $id)
    { 
        $noticia = $this->objNoticias->find($id);
        $user = $this->objUsers->all();
        return view('noticias.create', compact('user', 'noticia'));           

    }

    
    public function update(NoticiasRequest $request, string $id)
    {
        $this->objNoticias->where(['id'=>$id])->update([
            'id_users' => $request->id_users,
            'titulo'=>$request->titulo,
            'mensagem'=>$request->mensagem,
        ]);
        return redirect(to:'noticias');
    }
 
    public function destroy(string $id)
    {
        $del=$this->objNoticias->destroy($id);
        return($del)?"sim":"não";
    } 
}   