@extends('layouts/app')




@section('main')

@include('components/addFilms')

    <h1 class="text-3xl text-center font-bold text-gray-300 mt-20 mb-10">Liste des Films</h1>
    @if (session('status'))
    <div class="text-3xl text-left font-bold text-green-600 mt-20 mb-10">
        {{ session('status') }}
    </div>
@endif
@if ($errors->any())
<div class="text-red-600 text-2xl text-left font-semibold">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <table class="min-w-full mb-14">
      <thead class="h-12">
        <tr>
          <th
            class="text-white bg-gray-600">
            Titre</th>
            <th
            class="text-white bg-gray-600">
            Réalisateur</th>  
            <th
            class="text-white bg-gray-600">
            Action</
          </tr>
      </thead>

      <tbody class="bg-gray-900">
       
        @foreach ($membres as $membre)  
        
        <tr>
          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center font-bold text-red-600">
                <a href="{{route('Films_Crud.show', $film->id)}}"> {{ $membre->prenom}}{{ $membre->name}} </a>
              </div>

            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center font-bold text-red-600">
                <a href="/realisateur/{{$film->realisateurs_id}}"> {{ $membre->email}}</a>
              </div>

            </td>
          </td>

          @if (null!==(Auth::user()))


          <div class="text-2xl text-left text-amber-900 mt-20 mb-10">Welcome <b>{{Auth::user()->name}}</b></div>
          <p>Liste des roles :</p>
          
          @foreach ($membres as $membre)
          @if ($membre->name===Auth::user()->name)
          @foreach ($membre->roles as $role)
          {{$role->rolename}} <br>
          @endforeach
          
          @endif
          <br>
          @endforeach
          @endif


















          <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
            <div class="flex items-center font-bold text-red-600">
              <a href="/realisateur/{{$film->realisateurs_id}}"> {{ $membre->email}}</a>
            </div>

          </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
              <div class="flex items-center justify-between font-bold text-red-600 flex1 m-0">
                <a href="{{route('Films_Crud.edit', $film->id)}}" style="color:darkgreen">Mettre à jour</a>
                <form action="{{route('Films_Crud.destroy', $film->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                <input type="submit" value="Supprimer">
                </form>  
              </div>
 
            </td>
        </tr>
        @endforeach 
    </tbody>
  </table>   


    
@endsection