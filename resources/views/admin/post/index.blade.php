<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">--}}
{{--            {{ __('Post') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-purple-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <a href="{{route('admin.post.create')}}"
                       class="inline-flex rounded-md bg-orange-600 px-3 py-2 text-center text-sm font-semibold text-white
                        shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2
                        focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Ajouter un article
                    </a>

                </div>
                <div class="p-6">
                    <!-- component -->
                    <div class="text-gray-900 bg-purple-300">
                        <div class="p-4 flex">
                            <h1 class="text-3xl">
                                Articles
                            </h1>
                        </div>
                        <div class="px-3 py-4 flex justify-center">
                            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                                <tbody>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Titre</th>
                                    <th class="text-center p-3 px-5">Mis en avant</th>

                                    <th></th>
                                </tr>
                                @foreach( $posts as $post)

                                <tr class=" even:bg-purple-100 border-b hover:bg-orange-100">
                                    <td class="p-3 px-5">{{ $post->title }}</td>
                                    <td class="p-3 text-center px-5">
                                        @if($post->is_ahead)
                                            <button type="button"
                                                    class="mr-3 text-sm bg-orange-500 text-white py-1 px-3 rounded
                                                    focus:outline-none focus:shadow-outline">
                                                OUI
                                            </button>
                                        @else
                                            <button type="button"
                                                    class="mr-3 text-sm bg-purple-500  text-white py-1 px-2 rounded
                                                    focus:outline-none
                                                    focus:shadow-outline">
                                               NON
                                            </button>
                                        @endif

                                    </td>
                                    <td class="p-3 px-5 flex justify-end">


                                        <a href="{{route('admin.post.edit', ['post' => $post])}}"
                                           class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                            Modifier
                                        </a>
                                        <form action="{{ route('admin.post.destroy', $post) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
