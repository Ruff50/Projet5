<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getall()
    {
        return view('post');
    }

    public function add(Request $request){

       
     
    
        $validate = $request->validate([
            'titre' => 'required|max:255',
            'contenu' => 'required|max:255',
            'ddp' => 'required|max:150',
            'photo' => 'required|max:255',
            
           
    
    
        ]);
    
        $posts = new Post();
    
        $posts->titre = $validate['titre'];
        $posts->contenu = $validate['contenu'];
      
        //$posts->affiche = $validate['affiche'];
      
        $posts->ddp = $validate['ddp'];
        $posts->photo = $validate['photo'];
        
    
        $posts->save();
    
    
        return redirect()->route('post');
    }


    public function create(Request $request)
    {
        $path = Storage::disk('public')->put('img', $request->file('images'));
        
       
       
        $posts = Post::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'ddp' => NOW(),
            'censure' => $request->censure,
            'photo'=> $path,
     

        ]);

      
        
        $posts->save();
       

        return redirect()->route('post')->with('success', 'Post ajouté');
    }
}
