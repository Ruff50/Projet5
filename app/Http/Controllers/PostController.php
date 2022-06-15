<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Like;
use App\Models\Post;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{   

    // celle de florent pour les commentaires d'un post 
    //celle de florent
    public function comment(Request $request)
{
//dd($request->posts_id);
    $comments = new Commentaire();
    $comments->user_id = $request->users_id;
    $comments->posts_id = $request->posts_id;
    $comments->comment = $request->comments;
    $comments->ddc = now();
    $comments->save();
    return redirect('/')->with('status', 'commentaire ajouté avec succès !');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function nblikes($id)
    {
        $posts = Post::withcount('likes')->find($id);
        return view('nblikes', [
            'posts' => $posts,
        ]);
    }
    


    public function index()
    {
        $users= User::with('posts')->latest()->get();
       $likes = Like::all();
       $posts = Post::paginate(3);
        $comments = Commentaire::all()->sortDesc();
       
        
        return view('index', [
            'posts' => $posts,
            'users' => $users,
            'comments' => $comments,
            'likes' => $likes
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

//dd($request);

       $path = Storage::disk('public')->put('images', $request->file('images'));
       // $posts = Post::with('users')->where('user_id','=','id')->get();
        //$users = User::all();
        $post = new Post();
        $post->user_id = $request->users_id;
        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->ddp = NOW();
        $post->censure = $request->censure;
        $post->photo = $path;
        $post->save();

        return redirect()->route('index')->with('status', 'Post ajouté avec succès !');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
           
    
            return redirect()->route('index')->with('success', 'Post ajouté');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function PostLike(Request $request)
    {

        $like = new Like();

        $like->posts_id = $request->post_id;
        $like->user_id = $request->user_id;
        $like->save();
        return redirect()->back();
    }


}
