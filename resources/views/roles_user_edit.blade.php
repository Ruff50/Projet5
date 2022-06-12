@extends('layouts.app')

@section('main')
    <div class="flex flex-row gap-4 m-5 ">


        <div class="w-1/2">
            <h1 class="text-3xl"> Quels sont vos rôles ?</h1>
        </div>


        <div class="flex-col w-1/2  ">
           
            <form action="{{route('roles_user.update', $util->id)}}" method="post" name="formCinteret">
                @csrf
                <h3>Selectionnez vos rôles</h3>
            <select name="roles[]" multiple class=" h-96  appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">

                    @foreach ($roles as $role)
                   
                    <option
                   
                     value="{{$role->id}}" >{{$role->rolename}} </option>
                        @endforeach
                   
            </select>
                    
                <div>
                    <button class="btn btn-success m-3"> <i class="fa-solid fa-pen"></i> &nbsp Mettre à jour mes rôles</button>
                </div>
            </form>

        </div>

    </div>
@endsection