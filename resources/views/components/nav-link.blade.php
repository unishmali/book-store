@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center  pt-1 border-b-2 border-slate-700 dark:border-indigo-600 text-md font-medium leading-5 text-gray-700 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out ease-in-out hover:text-slate-900'
            : 'inline-flex items-center  pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
