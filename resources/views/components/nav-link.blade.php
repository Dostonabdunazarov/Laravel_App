@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-decoration-none fs-5 inline-flex items-center px-1 pt-1 border-b-2 border-indigo-300 text-sm font-medium leading-5 text-gray-400 focus:outline-none hover:text-gray-300 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'text-decoration-none fs-6 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a  {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
