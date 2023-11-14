<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edition d'article") }}
        </h2>
    </x-slot>

    <div class="lg:px-20">
        <div class="px-2 lg:py-12">
            <div class="">
                <div class="">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Erreur!</strong>
                            <span class="block sm:inline">Veuillez vérifier les champs du formulaire.</span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="w-full py-4 px-2">
                        <div class="bg-purple-200 rounded shadow mt-7 py-7">
                            <div class="block">
                                <div
                                    class="px-7 header flex bg-purple-200 lg:justify-around md:justify-around justify-start py-[30px] border-b-[2px]
                                    border-slate-100 flex-wrap gap-x-4"
                                >
                                    <div class="w-10/12 flex flex-col lg:flex-row lg:flex-no-wrap items-start">
                                        <div class="w-full">
                                            <div class="py-4 px-2">
                                                <form action="{{ route('admin.post.update', $post->id) }}" method="POST"

                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <!--Start Post Title & Description-->
                                                    <div class="w-full flex flex-col lg:flex-row justify-between gap-6">
                                                        <div class="w-full flex flex-col">
                                                            <!--Post Title-->
                                                            <x-input-label for="title" :value="__('Titre SEO de l\'article')"/>
                                                            <x-text-input id="title" class="block mt-1 w-full p-1 pl-2 mb-3"
                                                                          type="text"
                                                                          name="title"
                                                                          required
                                                                          autofocus
                                                                          value="{{$post->title}}"
                                                            />
                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <!--Post Description-->
                                                            <x-textarea-label for="excerpt" :value="__('Description SEO de l\'article')"/>
                                                            <x-text-input id="excerpt" class=" mt-1 w-full p-1 pl-2"
                                                                          type="text"
                                                                          name="excerpt"
                                                                          required value="{{$post->excerpt}}"
                                                            />
                                                            <div id="excerptCounter" class="text-gray-600 mt-2">0/160 caractères</div>
                                                        </div>
                                                    </div>
                                                    <!--End Post Title & Description -->
                                                    <!--Start Post slug -->
                                                    <div class="my-3">
                                                        <x-input-label for="slug" :value="__('Slug de l\'article')"/>
                                                        <x-text-input id="slug" class="block mt-1 w-full p-1 pl-2"
                                                                      type="text"
                                                                      name="slug"
                                                                      required
                                                                      autofocus
                                                                      value="{{$post->slug}}"
                                                        />
                                                    </div>
                                                    <!--Start Post slug -->
                                                    <!--Start Post Category & Auteur-->
                                                    <div class="w-full flex justify-between gap-6 my-6">
                                                        <div class="w-full flex flex-col">
                                                            <x-input-label for="slug" :value="__('Auteur de l\'article')" class="mb-3"/>
                                                            <select name="auteur_id">
                                                                @foreach(App\Models\Auteur::all() as $auteur)
                                                                    <option value="{{ $auteur->id }}" {{ $post->auteur_id === $auteur->id ?
                                                                    'selected' : '' }}>
                                                                        {{ $auteur->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select><br>


                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <x-input-label for="slug" :value="__('Categorie de l\'article')" class="mb-3"/>
                                                            <select name="category_id">
                                                                @dump($post->category)
                                                                @foreach(App\Models\Category::all() as $category)
                                                                    <option
                                                                        value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select><br>
                                                        </div>
                                                    </div>
                                                    <!--end Post Category & Auteur-->
                                                    <!--Start Is Ahead-->
                                                    <div class="lg:w-6/12 flex justify-start items-center my-5">
                                                        <p class="block font-medium text-sm text-purple-700 my-6 mr-6">Mettre en Premier</p>
                                                        <div class="cursor-pointer my-5 rounded-full bg-gray-200 relative shadow-sm">
                                                            <input type="hidden" name="is_ahead" value="0">
                                                            <input aria-label="toggle 1" type="checkbox" name="is_ahead" id="is_ahead"
                                                                   value="1" {{ $post->is_ahead ? 'checked' : '' }}
                                                                   class="focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-yellow-800
                                                                   focus:bg-purple-800 checkbox w-4 h-4 rounded-full bg-white absolute shadow-sm
                                                                   appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"/>
                                                            <label for="is_ahead" class="toggle-label dark:bg-purple-300 block w-12 h-4
                                                            overflow-hidden
                                                            rounded-full bg-purple-300 cursor-pointer"></label>
                                                        </div>

                                                        <p class="block font-medium text-sm text-purple-700 my-6 mr-6 ml-12">Mettre en Second</p>
                                                        <div class="cursor-pointer my-5 rounded-full bg-gray-200 relative shadow-sm">
                                                            <input type="hidden" name="is_second" value="0">
                                                            <input aria-label="toggle 1" type="checkbox" name="is_second" id="is_second" value="1"
                                                                   {{ $post->is_second ? 'checked' : '' }}
                                                                   class="focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-yellow-800
                                                                   focus:bg-purple-800 checkbox w-4 h-4 rounded-full bg-white absolute shadow-sm
                                                                   appearance-none cursor-pointer border border-transparent top-0 bottom-0 m-auto"/>
                                                            <label for="is_second" class="toggle-label dark:bg-purple-300 block w-12 h-4
                                                            overflow-hidden
                                                            rounded-full bg-purple-300 cursor-pointer"></label>
                                                        </div>

                                                    </div>
                                                    <!--End is Ahead-->

                                                    <!-- Start Post Image + description alt-->
                                                    <div class="w-full my-5 flex flex-col justify-between gap-6">
                                                        <!-- Affichage actuel de l'image thumbnail -->
                                                        @if ($post->thumbnail)
                                                            <div>
                                                                <p class="block font-medium text-sm text-purple-700 my-6">Image actuelle: {{ basename
                                                                ($post->thumbnail) }}</p>
                                                                <img src="{{ asset('storage/'.$post->thumbnail) }}" alt="{{ $post->alt_description }}"
                                                                     style="max-width: 200px; max-height: 200px;">
                                                            </div>
                                                        @endif
                                                        <div class="w-full ">
                                                            <!-- Post Image -->
                                                            <!-- Champ pour télécharger une nouvelle image -->
                                                            <x-input-label for="thumbnail" :value="__('Modifier l\'image')" class="mb-3"/>
                                                            <x-text-input id="thumbnail"
                                                                          type="file"
                                                                          name="thumbnail"
                                                                          autofocus
                                                                          class="relative m-0 w-full min-w-0 flex-auto rounded border border-solid
                                                                          border-neutral-300 bg-clip-padding px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-purple-500 file:px-3 file:py-[0.32rem] file:text-purple-50 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-purple-200 focus:border-purple-600 focus:text-purple-600 focus:shadow-te-primary focus:outline-none file:hover:bg-purple-300 file:hover:text-purple-600"/>

                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <!-- Post Alt Description-->
                                                            <x-input-label for="alt_description" :value="__('Description SEO de l\'image')"/>
                                                            <x-text-input id="alt_description" class="block mt-1 w-full p-1 pl-2"
                                                                          type="text"
                                                                          name="alt_description"
                                                                          required
                                                                          autofocus
                                                                          value="{{ $post->alt_description }}"
                                                            />

                                                        </div>
                                                    </div>
                                                    <!-- End Post Image + description alt-->
                                                    <!-- Start Post Content-->
                                                    <div class="w-full flex justify-between items-center gap-6 my-5">
                                                        <div class="w-full ">
                                                            <label for="content">content</label>
                                                            <textarea name="content"
                                                                      id="content"
                                                                      class="mt-10 border border-gray-300 rounded"
                                                            >{{value: $post->content}}</textarea>
                                                        </div>
                                                    </div>
                                                    <!-- End Post Content-->

                                                    <div class="w-full flex justify-end pt-6">
                                                        <x-primary-button type="submit">Enregistrer les modifications</x-primary-button>
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
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            function slugify(text) {
                // Normalisation des caractères accentués
                const from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç";
                const to = "aaaaaeeeeeiiiiooooouuuunc";
                const regex = new RegExp(from.split('').join('|'), 'gi');

                let slug = text.replace(regex, function (match) {
                    return to.charAt(from.indexOf(match));
                });

                return slug.toLowerCase()
                    .replace(/\s+/g, '-')  // Remplace les espaces par des tirets
                    .replace(/[^\w-]+/g, '') // Enlève tous les caractères non-alphanumériques
                    .replace(/--+/g, '-');  // Remplace les doubles tirets
            }

            titleInput.addEventListener('input', function () {
                slugInput.value = slugify(this.value);
            });
        });
    </script>
    <!--Compteur de caractere-->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const excerptInput = document.getElementById('excerpt');
            const excerptCounter = document.getElementById('excerptCounter');

            excerptInput.addEventListener('input', function () {
                const textLength = this.value.length;
                excerptCounter.textContent = `${textLength}/160 caractères`;

                if (textLength > 160) {
                    excerptCounter.style.color = 'red';
                } else {
                    excerptCounter.style.color = 'gray';
                }
            });
        });
    </script>

</x-app-layout>
