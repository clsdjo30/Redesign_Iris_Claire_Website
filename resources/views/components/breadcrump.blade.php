<div class="w-full shadow-lg border mb-1">
    <div class="flex flex-row justify-start items-center gap-2 lg:gap-8 bg-purple-50 py-4 overflow-x-auto whitespace-nowrap">
        <a href="{{ route('blog') }}" class="shrink-0">
            <x-icon-home class="w-8 h-8 fill-purple-800 mr-3" />
        </a>
        <ul class="flex space-x-2 lg:space-x-8">
            @foreach($showCategories as $category)
                <li class="text-lg text-purple-600 font-light">
                    <a href="{{ route('blog.category', $category->name) }}"
                       class="{{ request()->is('blog/category/'.$category->name) ? 'bg-purple-900 text-purple-50 rounded px-3' : '' }}">
                        {{ $category->name }}
                    </a>
                </li>
                @if(!$loop->last)
                    <span class="text-orange-500">|</span>
                @endif
            @endforeach
        </ul>
    </div>
</div>

