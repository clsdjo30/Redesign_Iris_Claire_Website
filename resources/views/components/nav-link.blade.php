@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-purple-600 text-md font-medium leading-5 text-purple-900
            dark:text-purple-100 focus:outline-none focus:border-red-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-3 border-transparent text-md  font-medium leading-5 text-purple-500 dark:text-purple-400
            hover:text-purple-700 dark:hover:text-purple-50 hover:border-purple-300 dark:hover:border-purple-700 focus:outline-none
            focus:text-purple-700
            dark:focus:text-gray-300 focus:border-red-300 dark:focus:border-red-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
