 <input
     class="
 @if (isset($colors)) {{ $colors }}
 @else
 bg-gray-50 border border-gray-300 text-gray-900 @endif
 
 {{ $classes ?? '' }}
  
 sm:text-sm 
 rounded-lg 
 block 
 p-2.5
 "
     placeholder="{{ $placeholder ?? 'Enter your ' . $name }}" type="{{ $type ?? 'text' }}" id="{{ $name }}"
     name="{{ $name }}">
