<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
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
                
                'posts' => $posts,
                'users' => $users,
                
                
    
            ]);
        
    }

   

    public function create(Request $request)
    {
        
        
       
       $path = Storage::disk('public')->put('img', $request->file('images'));
        $posts = Post::with('users')->where('users_id','=','id')->get();
        $users = User::all();
        $posts = Post::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'ddp' => NOW(),
            'censure' => $request->censure,
           'photo' => $path,
            'users' => $users,
            'users_id' => $request->id
     

        ]);

      
        
        $posts->save();
       

        return redirect()->route('crud')->with('success', 'Post ajouté');
    }

    public function accueil()
    {
        $posts = Post::all();
        $users = User::all();
        
        $comments = Commentaire::where('posts_id', '!=', '0')->with('users')->orderBy('created_at', 'DESC')->get();
       
       
        return view('welcome', [

            
            'posts' => $posts,
            'users' => $users,
            'comments' => $comments,



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

    $path = Storage::disk('public')->put('img', $request->file('images'));
        $posts = Post::find($id);
       
        $posts->update([
           
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'ddp' => NOW(),
            'censure' => $request->censure,
            'photo' => $path,
            
        ]);
            
        
         
        $posts->save();
       

        return redirect()->route('crud')->with('success', 'Post ajouté');
     
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
  
   $path = Storage::disk('public')->put('img', $request->file('images'));
    $posts = Post::with('users')->where('users_id','=','id')->get();
    $users = User::all();
    $posts = Post::create([
        'titre' => $request->titre,
        'contenu' => $request->contenu,
        'ddp' => NOW(),
        'censure' => $request->censure,
        'photo' => $path,
        'users' => $users,
 

    ]);

  
    
    $posts->save();
   

    return redirect()->route('crud')->with('success', 'Post ajouté');



    
}

public function comment(Request $request)
{
   
    $comments = new Commentaire();
    $comments->users_id = $request->users_id;
    $comments->posts_id = $request->posts_id;
    $comments->comment = $request->comments;
    $comments->ddc = now();
    $comments->save();
    return redirect('/')->with('commentaire ajouter', 'ok');
}
}
