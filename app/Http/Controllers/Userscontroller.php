<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
    
        return view(
            'Users.index',
            [
                'membres' => $users
            ]
        );      
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
        $input = $request->input();
        $request->validate([
            'prenom' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'ddn' => 'required',
            'sexe' => 'required',
            'metier' => 'required',
        ]);

        $util = new User();
        $util->prenom = $request->prenom;
        if (null!==($request->file('avatar'))) {
            $name = $request->file('avatar')->getClientOriginalName();
            $extension = $request->file('avatar')->getClientOriginalExtension();
                 
            if (($name) && ($extension)) {
                $path = $request->file('avatar')->store('/images', 'public');
                $util->avatar = $path;
            } else {
                return redirect()->route('Users.index')->with('status', "problème lors du chargement de l'avatar");
            } 
        }else {
                return redirect()->route('Users.index')->with('status', 'veuillez sélectionner une image pour votre avatar svp'); 

            }
            if (null!==($request->file('pcouverture'))) {
                $name = $request->file('pcouverture')->getClientOriginalName();
                $extension = $request->file('pcouverture')->getClientOriginalExtension();
                     
                if (($name) && ($extension)) {
                    $path = $request->file('pcouverture')->store('/images', 'public');
                    $util->pcouverture= $path;
                } else {
                    return redirect()->route('Users.index')->with('status', "problème lors du chargement de la photo de couverture");
                } 
            }else {
                    return redirect()->route('Users.index')->with('status', 'veuillez sélectionner une image pour votre couverture svp'); 
    
                }
            $util->name = $request->name;
            $util->email = $request->email;
            $util->password =Hash::make($request->password);
            $util->ddn = $request->ddn;
            $util->sexe = $request->sexe;
            $util->metier = $request->metier;
            $util->save();
            return redirect()->route('Users.index')->with('status', "l'utilisateur a bien été ajouté !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membre = User::findOrFail($id);
        
        return view('Users.show', [
            'util' => $membre,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membre= User::find($id);
        
        return view('Users.edit', [
            'util' => $membre
     ]);
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
       
        $request->validate([
            'prenom' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
            'ddn' => 'required',
            'sexe' => 'required',
            'metier' => 'required',
            ]);
        $membre= User::find($id);
        if (null!==($request->file('avatar'))) {
        $name = $request->file('avatar')->getClientOriginalName();
        $extension = $request->file('avatar')->getClientOriginalExtension();
             
        if (($name) && ($extension)) {
            $path = $request->file('avatar')->store('/images', 'public');
            $membre->avatar = $path;
        } else {
            return redirect()->route('Users.index')->with('status', "problème lors du chargement de l'avatar");
        } 
        }
        if (null!==($request->file('pcouverture'))) {
            $name = $request->file('pcouverture')->getClientOriginalName();
            $extension = $request->file('pcouverture')->getClientOriginalExtension();
                 
            if (($name) && ($extension)) {
                $path = $request->file('pcouverture')->store('/images', 'public');
                $membre->pcouverture = $path;
            } else {
                return redirect()->route('Users.index')->with('status', "problème lors du chargement de la photo de couverture");
            } 
            }
            $membre->prenom = $request->prenom;
            
            $membre->name = $request->name;
            $membre->email = $request->email;
            $membre->password =$request->password;
            $date = $request->ddn; //we got DD/MM/YYYY format date from form post data
            $membre->ddn = date('Y/m/d', strtotime($date)); 
            $membre->sexe = $request->sexe;
            $membre->metier = $request->metier;
          
            $membre->save();
            return redirect()->route('Users.index')->with('status', "l'utilisateur a bien été modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return  redirect()->route('Users.index')->with('status', "l'utilisateur a bien été supprimé !");
    }
}


/*<?php */

/*namespace App\Http\Controllers;

use App\Models\Films;
use App\Models\Salles;
use App\Models\Réalisateur;
use Illuminate\Http\Request;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

class Filmscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $cines = Films::with('salle')->with('categories')->get();
        $real = Réalisateur::all();

        return view(
            'Films_Crud.index',
            [
                'films' => $cines,
                'realisateurs' => $real
            ]
        );      
    }

    public function getall()
    {
        $films = Films::with('salle')->get();
        //dd($films);
        return view(
            'Films',
            [
                'Films' => $films
            ]
        );  
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function add(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $input = $request->input();
        $request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required',
            'duree' => 'required',
            'datedesortie' => 'required',
            'langue' => 'required',
            'csa' => 'required'
        ]);

        $film = new Films();
        $film->titre = $request->title;
        if (null!==($request->file('affiche'))) {
            $name = $request->file('affiche')->getClientOriginalName();
            $extension = $request->file('affiche')->getClientOriginalExtension();
                 
            if (($name) && ($extension)) {
                $path = $request->file('affiche')->store('/images', 'public');
                $film->affiche = $path;
            } else {
                return redirect()->route('Films_Crud.index')->with('status', 'problème lors du chargement de l\image');
            } 
        }else {
                return redirect()->route('Films_Crud.index')->with('status', 'veuillez sélectionner une image svp'); 

            }
        
            $film->duree = $request->duree;
            $film->synopsis = $request->contenu;
            $film->datedesortie = $request->datedesortie;
            $film->langue = $request->langue;
            $film->csa = $request->csa;
            $film->realisateurs_id = $request->realisateur;
            $film->salles_id = $request->salle;
            $film->save();
            return redirect()->route('Films_Crud.index')->with('status', 'le film a bien été ajouté !');
       
        }

  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $film = Films::findOrFail($id);
        $real = Réalisateur::all();
        $sal=Salles::all();
        return view('Films_Crud.show', [
            'film' => $film,
            'realisateurs' => $real,
            'salles'=>$sal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        $film= Films::find($id);
        $real = Réalisateur::all();
        $sal=Salles::all();
        return view('Films_Crud.edit', [
            'film' => $film,
            'realisateurs' => $real,
            'salles'=>$sal
        ]);
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:255',
            'contenu' => 'required',
            'duree' => 'required',
            'datedesortie' => 'required',
            'langue' => 'required',
            'csa' => 'required',
            'salle' => 'required',
        ]);
        $film= Films::find($id);
        if (null!==($request->file('affiche'))) {
        $name = $request->file('affiche')->getClientOriginalName();
        $extension = $request->file('affiche')->getClientOriginalExtension();
             
        if (($name) && ($extension)) {
            $path = $request->file('affiche')->store('/images', 'public');
            $film->affiche = $path;
        } else {
            return redirect()->route('Films_Crud.index')->with('status', 'problème lors du chargement de l\image');
        } 
        }
            $film->titre = $request->title;
            
            $film->duree = $request->duree;
            $film->synopsis = $request->contenu;
            $film->datedesortie = $request->datedesortie;
            $film->langue = $request->langue;
            $film->csa = $request->csa;
            $film->realisateurs_id = $request->realisateur;
            $film->salles_id = $request->salle;
            $film->save();
            return redirect()->route('Films_Crud.index')->with('status', 'le film a bien été modifié !');
        
        }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function destroy($id)
    {
        Films::find($id)->delete();
        return  redirect()->route('Films_Crud.index')->with('status', 'le film a bien été supprimé !');
    }
}
*/