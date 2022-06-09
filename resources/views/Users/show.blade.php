@extends('layouts/app')

@section('main')
<div class="bg-gray-100 dark:bg-slate-800 relative rounded-lg p-8 sm:p-12 shadow-lg">
    <form action="{{Route('Films_Crud.show', $film->id)}}" method="POST" enctype="multipart/form-data">
        <br>
        @csrf
    
        <select name="realisateur">
            @foreach ($realisateurs as $realisateur) 
            <option
            @if ($film->realisateurs_id===$realisateur->id) selected @endif
            value="{{$realisateur->id}}">{{$realisateur->nom}} {{$realisateur->prenom}}</option>
           @endforeach
         </select>
         <br><br>  
        <div class="mb-6">
        <label for="title">titre:</label>
        <input id="title" type="text" name="title" value="{{$film->titre}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
        border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
        readonly="readonly">
        </div>
        <br>
        <br>
        <div class="mb-6">
            <label for="affiche">
            Affiche du film:
             </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <img class="lg:h-96 md:h-72 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{asset('storage/' . $film->affiche)}}" alt="image">
            </div>
          </div>
        </div>
        <div class="mb-6">
            <label for="duree">durée:</label>
            <input id="duree" type="text" name="duree" value="{{$film->duree}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
            border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
            readonly="readonly">
        </div>
        <div class="mb-6">
        <label for="contenu">Synopsis:</label>
        <textarea id="contenu" name="contenu" cols="30" rows="5" class="w-full rounded p-3 text-gray-800 dark:text-gray-50
        dark:bg-slate-700 border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none
        focus:border-primary" readonly="readonly">{{$film->synopsis}}</textarea>
        </div>
        <div class="mb-6">
            <label for="datedesortie">date de sortie:</label>
                <input id="date" name="datedesortie" type="text" value="{{$film->datedesortie}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" readonly="readonly">
         <br>
        <div>
            <div class="mb-6">
                <label for="version">version:</label>
                <input id="version" type="text" name="langue" value="{{$film->langue}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
                border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
                readonly="readonly">
            </div> 
            <div class="mb-6">
                <label for="csa">csa:</label>
                <input id="version" type="text" name="csa" value="{{$film->csa}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
                border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
                readonly="readonly">
            </div>
            <select name="salle">
            @foreach ($salles as $salle)
            <option
            @if ($film->salles_id===$salle->id) selected @endif
            value="{{$salle->id}}">{{$salle->nom}}</option>   
            @endforeach 
          </select>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
                
            </div>
@endsection