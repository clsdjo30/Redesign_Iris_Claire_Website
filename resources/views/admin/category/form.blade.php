<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Edition de categorie") }}
        </h2>
    </x-slot>

    <div class="px-20">
        <div class="px-2 py-12">
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
                            <div class="hidden lg:block md:hidden">
                                <div
                                    class="px-7 header flex bg-purple-200 lg:justify-around md:justify-around justify-start py-[30px] border-b-[2px]
                                    border-slate-100 flex-wrap gap-x-4"
                                >
                                    <div class="w-10/12 flex flex-no-wrap items-start">
                                        <div class="w-full">
                                            <div class="py-4 px-2">
                                                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <!--Start Post Title & Description-->
                                                    <div class="w-full flex justify-between gap-6">
                                                        <div class="w-full flex flex-col">
                                                            <!--Post Title-->
                                                            <x-input-label for="name" :value="__('Nom de la Categorie')"/>
                                                            <x-text-input id="name" class="block mt-1 w-full p-1 pl-2 mb-3"
                                                                          type="text"
                                                                          name="name"
                                                                          required
                                                                          autofocus
                                                            />
                                                        </div>
                                                        <div class="w-full flex flex-col">
                                                            <!--Post Title-->
                                                            <x-input-label for="description" :value="__('Déscription de la Catégorie')"/>
                                                            <x-text-input id="description" class="block mt-1 w-full p-1 pl-2 mb-3"
                                                                          type="text"
                                                                          name="description"
                                                                          required
                                                                          autofocus
                                                            />
                                                        </div>

                                                    </div>
                                                    <!--End Post Title & Description -->

                                                    <x-primary-button type="submit">Ajouter la catégorie</x-primary-button>
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

</x-app-layout>
