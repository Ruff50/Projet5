<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Commentaire;
use Illuminate\Http\Request;


class PostController extends Controller
{   

    // celle de florent pour les commentaires d'un post 
    //celle de florent
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
        $membre= User::with('posts')->get();
        // $posts = Post::all();
        $posts = Post::paginate();
       
        
        return view('index', [
            'posts' => $posts,
            'membre' => $membre
            ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
}
