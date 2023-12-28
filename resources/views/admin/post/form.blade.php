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
                                                <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
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
                                                            />
                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <!--Post Description-->
                                                            <x-textarea-label for="excerpt" :value="__('Description SEO de l\'article')"/>
                                                            <x-textarea id="excerpt" class=" mt-1 w-full p-1 pl-2"
                                                                        type="textarea"
                                                                        name="excerpt"
                                                                        required
                                                                        autofocus

                                                            ></x-textarea>
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
                                                        />
                                                    </div>
                                                    <!--Start Post slug -->
                                                    <!--Start Post Category & Auteur-->
                                                    <div class="w-full flex justify-between gap-6 my-6">
                                                        <div class="w-full flex flex-col">
                                                            <x-input-label for="slug" :value="__('Auteur de l\'article')" class="mb-3"/>
                                                            <select name="auteur_id">
                                                                @foreach(App\Models\Auteur::all() as $auteur)
                                                                    <option value="{{ $auteur->id }}">{{ $auteur->name }}</option>
                                                                @endforeach
                                                            </select><br>

                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <x-input-label for="slug" :value="__('Categorie de l\'article')" class="mb-3"/>
                                                            <select name="category_id">
                                                                @foreach(App\Models\Category::all() as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select><br>
                                                        </div>
                                                    </div>
                                                    <!--end Post Category & Auteur-->
                                                    <!--Start Is Ahead-->
                                                    <div class="lg:w-3/12 flex my-5">

                                                        <x-input-label for="is_ahead" :value="__('Mettre en avant')" class="mr-3"/>
                                                        <x-text-input id="is_ahead" class=""
                                                                      type="checkbox"
                                                                      name="is_ahead"
                                                                      autofocus
                                                                      value="0"
                                                        />

                                                        <x-input-label for="is_second" :value="__('Mettre en second')" class="ml-3 mr-3"/>
                                                        <x-text-input id="is_second" class=""
                                                                      type="checkbox"
                                                                      name="is_second"
                                                                      autofocus
                                                                      value="0"
                                                        />

                                                    </div>
                                                    <!--End is Ahead-->

                                                    <!-- Start Post Image + description alt-->
                                                    <div class="w-full my-5 flex flex-col lg:flex-row flex-wrap justify-between gap-6">
                                                        <div class="w-full ">
                                                            <!-- Post Image -->
                                                            <x-input-label for="thumbnail" :value="__('Choisir une image')" class="pb-3"/>
                                                            <input id="thumbnail"
                                                                          type="file"
                                                                          name="thumbnail"
                                                                          required
                                                                          autofocus

                                                            />

                                                        </div>
                                                        <!-- Zone d'affichage pour le nom, la miniature et le poids de l'image -->
                                                        <div id="image-info" class="w-1/3">
                                                            <img id="image-preview" src="#" alt="Aperçu de l'image" style="display: none;
                                                            max-width: 300px; max-height: 300px;">
                                                            <p id="image-name">Nom de l'image : Aucune image choisie</p>
                                                            <p id="image-size">Taille de l'image : 0 Ko</p>
                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <!-- Post Alt Description-->
                                                            <x-input-label for="alt_description" :value="__('Description SEO de l\'image')"/>
                                                            <x-text-input id="alt_description" class="block mt-1 w-full p-1 pl-2"
                                                                          type="text"
                                                                          name="alt_description"
                                                                          required
                                                                          autofocus
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
                                                            ></textarea>
                                                        </div>
                                                    </div>
                                                    <!-- End Post Content-->

                                                    <div class="w-full flex justify-end pt-6">
                                                        <x-primary-button type="submit">Créer le post</x-primary-button>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imageInput = document.getElementById('thumbnail');
            const imageName = document.getElementById('image-name');
            const imagePreview = document.getElementById('image-preview');
            const imageSize = document.getElementById('image-size');

            imageInput.addEventListener('change', function () {
                if (this.files && this.files[0]) {
                    // Afficher le nom de l'image
                    imageName.textContent = "Nom de l'image : "+ this.files[0].name;

                    // Afficher la miniature
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    };
                    reader.readAsDataURL(this.files[0]);

                    // Afficher la taille de l'image
                    const sizeInKB = this.files[0].size / 1024;
                    imageSize.textContent = "Taille de l'image : " + sizeInKB.toFixed(2) + ' Ko';
                }
            });
        });
    </script>

</x-app-layout>
