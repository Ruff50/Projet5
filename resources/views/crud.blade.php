<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
  <title>Document</title>
</head>
<body>
  


@include('layouts.header')

    

<link
href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
rel="stylesheet">
<!-- component -->
@include('includes.formulaire')

@if (session('status'))
                  <div class="text-2xl text-center font-bold text-green-600 mb-10  bg-gray-900 body-font">
                      {{ session('status') }}
                  </div>
                  @endif
<p class="text-lg text-center font-bold m-5"> Liste des Post </p>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
<tr class="text-left border-b border-gray-300">
  <th class="px-4 py-3">TITRE</th>
  <th class="px-4 py-3">EXTRAIT</th>
  <th class="px-4 py-3">IMAGE</th>
<th class="px-4 py-3">VIEW</th>
  <th class="px-4 py-3">DELETE</th>
<th class="px-4 py-3">UPDATE</th>
</tr>
@foreach ($posts as $post)


<tr class="bg-gray-700 border-b border-gray-600">
  <td class="px-4 py-3">{{$post->titre}}</td>
  <td class="px-4 py-3">{{$post->contenu}}</td>
  <td class="px-4 py-3"><img class="w-20" src="/storage/{{$post->photo}}"></td>
  <td class="px-4 py-3"><a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
  <i class="material-icons-outlined text-base">visibility</i></a> </td>
<td class="px-4 py-3">@include('includes.delete') </td>
<td class="px-4 py-3">@include('includes.update')
   <td>	
</tr>
@endforeach





<!-- component -->
</body>
</html>