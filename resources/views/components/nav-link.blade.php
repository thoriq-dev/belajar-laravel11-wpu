@props(['href'])

<a href="{{ $href }}"
   class="{{ request()->is(trim($href, '/')) ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ request()->is(trim($href, '/')) ? 'page' : 'false' }}">
   {{ $slot }}
</a>
