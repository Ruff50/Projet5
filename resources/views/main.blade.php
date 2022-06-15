<!-- component -->
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/tailwind.css">
    <script defer="" src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <title>Social Media </title>

    <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css"> -->
</head>

<body class="bg-orange-100" style="">
    <script defer="" src="https://unpkg.com/alpinejs@3.1.1/dist/cdn.min.js"></script>
    <style>
        .hover-image-1 {
            transition: ease-in-out 0.2s;
        }

        .hover-image-1:hover {
            width: 50px;
            height: 50px;
        }
    </style>
    <div class="flex h-screen  dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-80 overflow-y-auto md:block flex-shrink-0 ">
            {{-- <div class=" h-14 flex justify-center">
            <!-- <img src="./images/logo.png" class="w-32 h-24 mt-10"> -->
        </div> --}}
            @include(('components.aside'))
        </aside>

        <div class="flex flex-col flex-1">
            <header class="z-10 py-4  shadow-xs ">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Search input -->
                    <!--
  <input type="search" class="block md:hidden lg:hidden w-1/2 py-2 pl-4 px-4 pr-10 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400 focus:bg-gray-50 focus:outline-none focus:border-blue-500 focus:text-gray-900 focus:shadow-outline-blue" style="border-radius: 25px" placeholder="Search" autocomplete="off"> -->
                    <div class="flex justify-between">
                        <ul class="flex items-center flex-shrink-0 space-x-6">
                            <!-- Profile menu -->
                            <li class="relative ">
                                <button
                                    class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                    <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0"
                                        src="https://picsum.photos/200/200?i=203" alt="" aria-hidden="true">
                                </button>
                            </li>

                            <li class="relative">
                                <button
                                    class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                    <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0"
                                        src="https://picsum.photos/200/200?i=205" alt="" aria-hidden="true">
                                </button>
                            </li>

                            <li class="relative">
                                <button
                                    class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                    <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0"
                                        src="https://picsum.photos/200/200?i=207" alt="" aria-hidden="true">
                                </button>
                            </li>

                            <li class="relative">
                                <button
                                    class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                    <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0"
                                        src="https://picsum.photos/200/200?i=209" alt="" aria-hidden="true">
                                </button>
                            </li>

                            <li class="relative">
                                <button
                                    class="align-middle rounded-full border-2 border-gray-300 shadow-lg  focus:shadow-outline-purple focus:outline-none">
                                    <img class="object-cover w-10 h-10 rounded-full hover-image-1 flex-shrink-0"
                                        src="https://picsum.photos/200/200?i=2011" alt="" aria-hidden="true">
                                </button>
                            </li>

                        </ul>

                    </div>
            </header>
            
            <main class="h-full pb-16 overflow-y-auto">
                <!-- Remove everything INSIDE this div to a really blank page -->

                <!-- Main Contents -->
                <div class="flex flex-col">

                    <div class="mt-16 flex justify-center">
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                <div x-data="{ modelOpen: false }">
                    <button @click="modelOpen =!modelOpen" class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                
                        <span>Ajouter un Post</span>
                    </button>
                
                    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0" 
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100" 
                                x-transition:leave-end="opacity-0"
                                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                            ></div>
                
                            <div x-cloak x-show="modelOpen" 
                                x-transition:enter="transition ease-out duration-300 transform"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="transition ease-in duration-200 transform"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                            >
                                <div class="flex items-center justify-between space-x-4">
                                    
                
                                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </button>
                                </div>
                
                                
                
                                <div>
                                    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
                                      <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                                        <div class="mb-4">
                                          <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
                                            ajouter un Post
                                          </h1>
                                        </div>
                              
                                        <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                                         <form action="{{route('index')}}" method="POST" enctype="multipart/form-data"> 
                
                                            <!--  a ajouter @csrf pou avoir l'autorisation de poster des donner (error 419)  -->
                                          @csrf
                                            <!-- Title -->
                              
                                            <div>
                                              <label class="block text-sm font-bold text-gray-700" for="title">
                                                Titre
                                              </label>
                              
                                              <input
                                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                type="text" name="titre" placeholder="titre"  required/>
                
                                                
                                            </div>
                
                
                                        
                              
                                            <!-- Description -->
                                            <div class="mt-4">
                                              <label class="block text-sm font-bold text-gray-700" for="password">
                                                Contenu
                                              </label>
                                              <textarea name="contenu"
                                                class="block w-full mt-1 border-blue-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                                rows="4" placeholder="400" required></textarea>
                                            </div>
                                             @if (null!=Auth::user())  
                                            <input type="hidden" name="users_id" value="{{Auth::user()->id}}">
                                             @endif
                                            
                                            <label for="affiche">  </label>
                                            <input type="file"class="py-4 text-black" name="images" value="" required>
                                           
                                           
                                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                              <button type="submit"
                                                class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                                Save
                                              </button>
                                              <button type="submit"
                                                class="px-6 py-2 text-sm font-semibold text-gray-100 bg-gray-400 rounded-md shadow-md hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                                                Cancel
                                              </button>
                                              
                                        
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                           </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block md:grid md:grid-flow-row-dense md:grid-cols-3 md:grid-rows- ">
                    <div class="col-span-2">
                        <div class="pt-10">
                            <form class="bg-white shadow rounded-lg mb-6 p-4 w-full md:w-full">
                                <textarea name="message" placeholder="Exprimez vous"
                                    class=" focus:outline-none  w-full rounded-lg p-2 text-sm bg-gray-100 border border-transparent appearance-none rounded-tg placeholder-gray-400"></textarea>
                                <footer class="flex justify-between mt-2">
                                    <div class="flex gap-2">
                                        <span
                                            class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                <polyline points="21 15 16 10 5 21"></polyline>
                                            </svg>
                                        </span>
                                        <span
                                            class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                        </span>
                                        <span
                                            class="flex items-center transition ease-out duration-300 hover:bg-blue-500 hover:text-white bg-blue-100 w-8 h-8 px-2 rounded-full text-blue-400 cursor-pointer">
                                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" class="css-i6dzq1">
                                                <polyline points="4 17 10 11 4 5"></polyline>
                                                <line x1="12" y1="19" x2="20" y2="19"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <button
                                        class="flex items-center py-2 px-4 rounded-lg text-sm bg-blue-600 text-white shadow-lg">Send
                                        <svg class="ml-1" viewBox="0 0 24 24" width="16" height="16"
                                            stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                    </button>
                                </footer>
                            </form>
                        </div>



{{-- POST  --}}

                      <div>
                            @include('components.posts')
                    </div>


                   


                    <div class="hidden md:block lg:block pb-8  sticky top-6">


                        <card class=" w-96 rounded-lg shadow-lg">

                            <header class="font-bold text-2xl px-5 pb-4">
                                Who to follow
                            </header>

                            <main class="px-5">

                                <content class="grid grid-cols-6">

                                    <div class="">
                                        <img src="https://picsum.photos/200/200" class="h-8 w-8 rounded-full">
                                    </div>

                                    <div class="col-span-3 px-1 font-semibold flex flex-col">
                                        <div class="text-sm"> Sangwa Albine </div>
                                        <div class="text-xm text-gray-700 font-light"> @__svngwa._ </div>
                                    </div>

                                    <div class="col-span-2 py-2 justify-self-end">
                                        <button
                                            class=" text-blue-500 text-xs font-semibold text-md rounded-full py-1 px-4">
                                            .Follow
                                        </button>
                                    </div>

                                </content>


                                <content class="grid grid-cols-6 mt-6">

                                    <div class="">
                                        <img src="https://picsum.photos/200/200?i=200" class="h-8 w-8 rounded-full">
                                    </div>

                                    <div class="col-span-3 px-1 font-semibold flex flex-col ">
                                        <div class="text-sm"> Mbonyintege </div>
                                        <div class="text-xm text-gray-700 font-light"> @Cpwr</div>
                                    </div>

                                    <div class="col-span-2 py-2 justify-self-end">
                                        <button
                                            class=" text-blue-500 text-xs font-semibold text-md rounded-full py-1 px-4">
                                            .Follow
                                        </button>
                                    </div>

                                </content>


                            </main>

                        </card>

                        <div class="max-w-sm rounded-lg overflow-hidden shadow-sm m-4 mt-5">

                            <!--first trending tweet-->
                            <div class="flex">
                                <div class="flex-1">
                                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>
                                    <h2 class="px-4 ml-2 w-48 font-bold ">#Microsoft363</h2>
                                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 posts</p>

                                </div>
                                <div class="flex-1 px-4 py-2 m-2">
                                    <a href=""
                                        class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                            <!--second trending tweet-->

                            <div class="flex">
                                <div class="flex-1">
                                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">2 . Politics . Trending</p>
                                    <h2 class="px-4 ml-2 w-48 font-bold ">#HI-Fashion</h2>
                                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">8,464 posts</p>

                                </div>
                                <div class="flex-1 px-4 py-2 m-2">
                                    <a href=""
                                        class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>


                            <!--third trending tweet-->

                            <div class="flex">
                                <div class="flex-1">
                                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">3 . Rock . Trending</p>
                                    <h2 class="px-4 ml-2 w-48 font-bold ">#Ferrari</h2>
                                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,586 Concepts</p>

                                </div>
                                <div class="flex-1 px-4 py-2 m-2">
                                    <a href=""
                                        class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <!--show more-->
                            <div class="flex">
                                <div class="flex-1 p-4">
                                    <h2 class="px-4 ml-2 w-48 font-semibold text-sm text-blue-400">Show more</h2>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>
