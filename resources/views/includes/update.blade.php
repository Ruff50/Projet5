


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
            <i @click="modelOpen =!modelOpen" class="material-icons-round text-base mb-8">edit</i>

            <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                role="dialog" aria-modal="true">
                <div class="flex items-end justify-center  px-4 text-center md:items-center sm:block sm:p-0">
                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

                    <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        class="inline-block w-full max-w-xl p-4  overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                        <div class="flex items-center justify-between space-x-4">


                            <button @click="modelOpen = false"
                                class="text-gray-600 focus:outline-none hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>



                        <div>
                            <div class="flex flex-col items-center min-h-screen   sm:justify-center sm:pt-0">
                                <div class="w-full px-16   overflow-hidden bg-white rounded-lg lg:max-w-4xl">
                                    <div class="mb-4">
                                        <h1
                                            class="font-serif text-3xl font-bold underline decoration-gray-400 text-black">
                                            Modifier
                                        </h1>
                                    </div>

                                    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                                        <form action="{{ route('update', $post['id']) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf

                                            <div>
                                                <label class="block text-sm font-bold text-black" for="title">
                                                    Titre
                                                </label>

                                                <input
                                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-black"
                                                    type="text" name="titre" value="{{ $post->titre }}" required />


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

                                            <select name="membres"
                                                class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                                @foreach ($users as $user)
                                                    <option value="{{ $user['id'] }}">
                                                        {{ $user['nom'] }} {{ $user['prenom'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            
                                            <label for="affiche"> </label>
                                            <input type="file" class="py-4 text-black" name="photo" value="" required>



                                            <div class="flex items-center justify-start mt-4 gap-x-2">
                                                <button type="submit"
                                                    class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 text-black">
                                                    Save
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
