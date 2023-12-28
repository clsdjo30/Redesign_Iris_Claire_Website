<div class="w-full flex flex-col justify-center shadow-lg border mb-1">
    <div class="flex flex-row justify-center items-center gap-8 bg-purple-50 py-4">
        <a href="{{ route('blog') }}">
        <x-icon-home class="w-8 h-8 fill-purple-800 " />
        </a>
        @foreach($showCategories as $category)
            <ul>
                <li class="text-lg text-purple-600 font-ligth ">
                    <a href="{{ route('blog.category', $category->name) }}"
                        class="{{ request()->is('blog/category/'.$category->name) ? 'bg-purple-900 px-10 text-purple-50 rounded ' : '' }}">
                        {{$category->name}}
                    </a>
                <span class="ml-8 text-orange-500"> | </span>
                </li>

            </ul>
        @endforeach
    </div>

</div>
