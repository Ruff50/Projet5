<div class="flex flex-col">
    
    <div
        class="flex items-center self-center w-full max-w-xl p-4 overflow-hidden text-gray-600 focus-within:text-gray-400">
        @if (null !== Auth::user())
            <img class="w-10 h-10 object-cover rounded-full shadow mr-2 cursor-pointer" alt="User avatar"
                src="{{ asset('storage/' . Auth::user()->avatar) }}">
        @endif


        <form action="/comment" method="POST" enctype="multipart/form-data" class="w-full">
            @csrf
            <input type="search"
                class="w-full py-2 pl-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-white focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue"
                style="border-radius: 25px" placeholder="Ajouter un commentaire..." autocomplete="off" name="comments">

            <input type="hidden" name="posts_id" value="{{ $post->id }}">
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <input type="submit" class="sr-only" value="valider">
        </form>
    </div>
    <div class="flex flex-col items-center ">
       
        @foreach ($comments->where('posts_id', '=', $post->id) as $comment)
            <div class="flex my-3 ">
                <img src="{{asset('storage/' . $comment->user->avatar)}}" class="h-8 w-8 rounded-full">




                <div class="flex items-center justify-start space-x-2 w-full">
                    <div class="block">
                        <div class="flex justify-center items-center space-x-2">
                            <div class="bg-gray-100 w-auto rounded-xl px-2 pb-2">
                                <div class="font-medium">
                                    <a href="#" class="hover:underline text-sm">
                                        <small>{{ $comment->user->name }}</small>
                                    </a>
                                </div>



                                <div class="text-xs w-full">
                                    {{ $comment->comment }}
                                </div>


                            </div>
                            <div
                                class="self-stretch flex justify-center items-center transform transition-opacity duration-200 opacity-0 hover:opacity-100">
                                <a href="#" class="">
                                    <div
                                        class="text-xs cursor-pointer flex h-6 w-6 transform transition-colors duration-200 hover:bg-gray-100 rounded-full items-center justify-center">
                                        <svg class="w-4 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                            </path>
                                        </svg>
                                    </div>

                                </a>
                            </div>
                        </div>
                        <div class="flex justify-start items-center text-xs w-full">
                            <div class="font-semibold text-gray-700 px-2 flex items-center justify-center space-x-1">
                                <a href="#" class="hover:underline">
                                    <small>Like</small>
                                </a>
                                <small class="self-center">.</small>
                                <a href="#" class="hover:underline">
                                    <small>Reply</small>
                                </a>
                                <small class="self-center">.</small>
                                <a href="#" class="hover:underline">
                                    <small>15 hour</small>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            
       

    </div>
