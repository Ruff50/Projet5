<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use App\Models\Post;
use App\Models\User;

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
        
        
            $posts = Post::all();
            $users = User::all();
            
    
            return view('post', [
                //'films' c'est la variable utilisé dans le view et $films c'est la variable de la fonction 
                'posts' => $posts,
                'users' => $users,
                
    
            ]);
        
    }

   

    public function create(Request $request)
    {
        
        
       
     //   $path = Storage::disk('public')->put('img', $request->file('images'));
        $posts = Post::with('users')->where('users_id','=','id')->get();
        $users = User::all();
        $posts = Post::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'ddp' => NOW(),
            'censure' => $request->censure,
        //    'photo' => $path,
            'users' => $users,
            'users_id' => $request->id
     

        ]);

      
        
        $posts->save();
       

        return redirect()->route('crud')->with('success', 'Post ajouté');
    }

    public function accueil()
    {
        $posts = Post::with('users')->where('users_id','=','id')->get();
        $users = User::all();
       
       
        return view('welcome', [

            
            'posts' => $posts,
            'users' => $users,
            



        ]);
}

public function delete($id)
{
    $posts = Post::where('id', '=', $id);
    $posts->delete();
    return redirect()->route('crud');
}

public function update(Request $request, $id)
{

  // $path = Storage::disk('public')->put('img', $request->file('image'));    //chemin + nom image
   
   $posts = Post::find($id);
   $posts->titre = $request->titre;
  
 //  $posts->photo = $path;
   $posts->contenu = $request->contenu;
   
   $posts->ddp = NOW();
   $posts->users_id = $request->users;
   $posts->save();
   

   return redirect()->route('crud');
}

public function crud()
{
    $posts = Post::all();
    $users = User::all();
   
   
    return view('crud', [

        
        'posts' => $posts,
         'users' => $users,
        



    ]);
}
public function creates(Request $request)
{
  
 //   $path = Storage::disk('public')->put('img', $request->file('images'));
    $posts = Post::with('users')->where('users_id','=','id')->get();
    $users = User::all();
    $posts = Post::create([
        'titre' => $request->titre,
        'contenu' => $request->contenu,
        'ddp' => NOW(),
        'censure' => $request->censure,
    //    'photo' => $path,
        'users' => $users,
 

    ]);

  
    
    $posts->save();
   

    return redirect()->route('crud')->with('success', 'Post ajouté');



    
}
}
