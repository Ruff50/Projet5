<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function edit($id)
    {   
       
        $user=User::with('roles')->find($id);
        $roles = Roles::all();
        //dd($user);
        return view('roles_user_edit', 
        [   
            'util' => $user,
            'roles' => $roles,
        ]); 
    }

    /**
     * Modifie les centres d'interet d'un utilisateurs
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validate = $request->validate([


            'roles' => 'required|array|min:1',

        ]);

        $user = User::with('roles')->where('id', '=', $id)->get();
        $user = User::find($id);

        $user-> roles()->sync($validate['roles']);
        $user->update();

        return redirect()->route('Users.edit', $id)->with('status', "les rôles ont bien été mis à jour!");;
    }
}
