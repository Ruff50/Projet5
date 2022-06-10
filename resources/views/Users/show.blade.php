@extends('layouts/app')

@section('main')
<div class="bg-gray-100 dark:bg-slate-800 relative rounded-lg p-8 sm:p-12 shadow-lg">
    <form action="{{Route('Users.show', $util->id)}}" method="POST" enctype="multipart/form-data">
        <br>
        @csrf
        <div class="mb-6">
        <label for="title">Prénom:</label>
        <input id="title" type="text" name="prenom" value="{{$util->prenom}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
        border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
        readonly="readonly">
        </div>
        <br>
        <br>
        <div class="mb-6">
          <label for="title">Nom:</label>
          <input id="title" type="text" name="name" value="{{$util->name}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
          border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
          readonly="readonly">
          </div>
          <br>
          <br>
          <div class="mb-6">
            <label for="title">email:</label>
            <input id="title" type="text" name="email" value="{{$util->email}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
            border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
            readonly="readonly">
            </div>
            <br>
            <br>
            <div class="mb-6">
              <label for="ddn">date de naissance:</label>
                  <input id="date" name="ddn" type="date" value="{{$util->ddn}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" readonly="readonly">
           <br>
          <div>
            <label for="sexe">Sexe :</label>
                    <div>
                        <input type="radio" id="sexeHomme" name="sexe" @if ($util->sexe===1) checked @endif disabled>
                        <label for="sexeHomme">Homme</label>
                    </div>
                    <div>
                        <input type="radio" id="sexeFemme" name="sexe" @if ($util->sexe===0) checked @endif disabled>
                        <label for="sexeFemme">Femme</label>
                    </div>
                    <br>
            <label for="avatar">
            Avatar:
             </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <img class="lg:h-12 md:h-12 w-full object-cover object-center" src="{{asset('storage/' . $util->avatar)}}" alt="avatar">
            </div>
          </div>
        </div>
        <label for="Coverphoto">
          Coverphoto:
           </label>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
          <div class="space-y-1 text-center">
            <img class="lg:h-96 md:h-72 w-full object-cover object-center" src="{{asset('storage/' . $util->pcouverture)}}" alt="avatar">
          </div>
        </div>
      </div>
        <div class="metier">
            <label for="metier">Métier:</label>
            <input id="metier" type="text" name="metier" value="{{$util->metier}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
            border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
            readonly="readonly">
        </div>
       
    </form>
    <br>
    <br>
    <br>
    <br>
                
            </div>
@endsection