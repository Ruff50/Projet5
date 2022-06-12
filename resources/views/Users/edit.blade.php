@extends('layouts/app')

@section('main')

@if ($errors->any())
<div class="text-red-600 text-2xl text-left font-semibold">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
<div class="bg-gray-100 dark:bg-slate-800 relative rounded-lg p-8 sm:p-12 shadow-lg">
    <form action="{{Route('Users.update', $util->id)}}" method="POST" enctype="multipart/form-data">
        <br>
        @csrf
        @method('PATCH')
    
       
         
         <div class="mb-6">
          <label for="title">Prénom:</label>
          <input id="title" type="text" name="prenom" value="{{$util->prenom}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
          border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
          >
          </div>
        <br>
        
        <div class="mb-6">
          <label for="title">Nom:</label>
          <input id="title" type="text" name="name" value="{{$util->name}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
          border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
          >
          </div>
          <br>
        
          <div class="mb-6">
            <label for="title">email:</label>
            <input id="title" type="text" name="email" value="{{$util->email}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
            border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
           >
            </div>
            <br>
            <div class="mb-6">
              <label for="password" class="sr-only">Password</label>
              <input id="password" name="password" type="password" value="{{$util->password}}" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password" >
            </div>
        
            <div class="mb-6">
              <label for="ddn">date de naissance:</label>
                  <input id="date" name="ddn" type="date" value="{{$util->ddn}}" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>      
           <br>
          <div>
            <label for="sexe">Sexe :</label>
                    <div>
                        <input type="radio" id="sexeHomme" name="sexe" @if ($util->sexe===1) checked @endif value="1">
                        <label for="sexeHomme">Homme</label>
                    </div>
                    <div>
                        <input type="radio" id="sexeFemme" name="sexe" @if ($util->sexe===0) checked @endif value="0">
                        <label for="sexeFemme">Femme</label>
                    </div>
                    <div>
                      <br>
                      <br>
                      <label class="block text-sm font-medium text-gray-700"> Photo </label>
                      <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                          <img class="" src="{{asset('storage/' . $util->avatar)}}" alt="avatar">
                          <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                          </svg>
                        </span>
                        <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                          <span class="">Change</span>
                          <input id="avatar" name="avatar" type="file">
                        </label></button>
                        </div>
                    </div>
        <br>
            <div class="mb-6">
            <label for="Coverphoto">
            Coverphoto:
             </label>
          <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
            <div class="space-y-1 text-center">
              <img class="lg:h-96 md:h-72 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{asset('storage/' . $util->pcouverture)}}" alt="image">
              <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              <div class="flex text-sm text-gray-600 mt-10">
                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input id="file-upload" name="pcouverture" type="file" class="sr-only">
                </label>
                <p class="pl-1 text-black">or drag and drop</p>
              </div>
              <p class="text-xs text-black">
                PNG, JPG, GIF up to 10MB
              </p>
            
            
            
            </div>
          </div>
        </div>
        <br>
        <div class="metier">
          <label for="metier">Métier:</label>
          <input id="metier" type="text" name="metier" value="{{$util->metier}}" class="w-full rounded p-3 text-gray-800 dark:text-gray-50 dark:bg-slate-700
          border-gray-500 dark:border-slate-600 outline-none focus-visible:shadow-none focus:border-primary"
          >
      </div>
        <input type="submit" value="Modifier l'utilisateur" class="w-full text-gray-100 hover:text-gray-700
    bg-yellow-400 rounded border border-primary dark:border-slate-600 p-3 transition ease-in-out
    duration-500 hover:bg-yellow-300 mt-14">


    </form>
    <br>
    <br>
    <br>
    <br>
                
            </div>
@endsection