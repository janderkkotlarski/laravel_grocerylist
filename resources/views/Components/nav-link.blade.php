<!-- blade properties with 'active' as entry -->
@props(['active' => false, 'type' => 'a'])



<!-- Just a simple link with blade meta-coding -->
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active ? 'page' : 'false'}}"
{{ $attributes }}>{{ $slot }}</a>
<!-- $attributes contains all the attributes of the selected nav link -->

