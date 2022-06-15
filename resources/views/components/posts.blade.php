
 
 @if (session('status'))
 <div class="text-3xl text-left font-bold text-green-600 mt-20 mb-10">
     {{ session('status') }}
 </div>
@endif


@foreach ($posts as $post)



<div class="flex flex-col">
<div class="bg-white shadow rounded-lg  my-4 ">
    
    <a href="/profilepub/{{$post->id}}"> 
    <div class="flex flex-row px-2 py-3 mx-3">
        <div class="w-auto h-auto rounded-full border-2 border-green-500">
            @if (null!==(Auth::user()))
             <img class="w-12 h-12 object-cover rounded-full shadow cursor-pointer"
                alt="User avatar"
                src="{{asset('storage/' . Auth::user()->avatar)}}">
                @endif
        </div>
        <div class="flex flex-col mb-2 ml-4 mt-1 ">
            <div class="text-gray-600 text-sm font-semibold">{{$post->name}} </div>
            <div class="flex w-full mt-1">
                <div class="text-blue-700 font-base text-xs mr-1 cursor-pointer">
                    UX Design
                </div>
                <div class="text-gray-400 font-thin text-xs">
                    • 1 day ago
                </div>
            </div>
        </div>
    </div>
    </a>
    <div class="border-b border-gray-100"></div>
    <div class="text-gray-400 font-medium text-sm mb-7 mt-6 mx-3 px-2">
        @if (($post->photo)!=="")
        <img class="rounded w-full" src="{{asset('storage/' .$post->photo)}}">   
      @endif
    </div>
    <div class="text-gray-600 font-semibold  mb-2 mx-3 px-2">{{$post->titre}} </div>
    <div class="text-gray-500 text-sm mb-6 mx-3 px-2">{{$post->contenu}}</div>
    <div class="flex justify-start mb-4 border-t border-gray-100">
        <div class="flex w-full mt-1 pt-2 pl-5">
            <span
                class="bg-white transition ease-out duration-300 hover:text-red-500 border w-8 h-8 px-2 pt-2 text-center rounded-full text-gray-400 cursor-pointer mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                </svg>
            </span>
            <img class="inline-block object-cover w-8 h-8 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                alt="">
            <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                alt="">
            <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                alt="">
            <img class="inline-block object-cover w-8 h-8 -ml-2 text-white border-2 border-white rounded-full shadow-sm cursor-pointer"
                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.25&amp;w=256&amp;h=256&amp;q=80"
                alt="">
        </div>
        <div class="flex justify-end w-full mt-1 pt-2 pr-5">
            <span
                class="transition ease-out duration-300 hover:bg-blue-50 bg-blue-100 w-8 h-8 px-2 py-2 text-center rounded-full text-blue-400 cursor-pointer mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="14px"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                    </path>
                </svg>
            </span>
            <span
                class="transition ease-out duration-300 hover:bg-gray-50 bg-gray-100 h-8 px-2 py-2 text-center rounded-full text-gray-100 cursor-pointer">
                <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                    </path>
                </svg>
            </span>
        </div>
    </div>
    <div class="flex w-full border-t border-gray-100">
        <div class="mt-3 mx-5 flex flex-row text-xs">
            <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">
                Comments:<div class="ml-1 text-gray-400 text-ms"> 30</div>
            </div>
            <div class="flex text-gray-700 font-normal rounded-md mb-2 mr-4 items-center">
                Views: <div class="ml-1 text-gray-400 text-ms"> 60k</div>
            </div>
        </div>
        <div class="mt-3 mx-5 w-full flex justify-end text-xs">
            <div class="flex text-gray-700  rounded-md mb-2 mr-4 items-center">Likes: <div
                    class="ml-1 text-gray-400 text-ms">{{$likes->where('posts_id', '=', $post->id)->count()  }} </div>
            </div>
            
        </div>
        
    </div>
    <div class=" flex flex-col">
    <form action="{{ route('like') }}" method="post">
        @csrf
        <input type="hidden" name="post_id" value="{{$post->id}}">
        @if (null!=Auth::user())
        <input type="hidden" name="user_id" value="{{Auth::user()->id }}">
        @endif
        <button style="background-color:rgb(59 130 246)"
        class="bg-blue-500 hover:bg-blue-900 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        + j'aime
      
</button>
</form>
    </div>
    {{-- formulaire de commentaire   --}}
    <div class=" flex flex-col h-64">
     @include('components.commentaireform')  
       </div>
       @endforeach  
       

    </div>
        
</div>


{{ $posts->links() }}