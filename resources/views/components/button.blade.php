<button
    class=" 

    @switch ($type ?? 'primary') @case('primary')
            bg-blue-500 hover:bg-blue-700 focus:ring-blue-800
            @break
        @case('danger')
            bg-red-500 hover:bg-red-700 focus:ring-red-800
            @break
        @case('success')
            bg-green-500 hover:bg-green-700 focus:ring-green-800
            @break
        @default
            bg-gray-500 hover:bg-gray-700 focus:ring-gray-800 @endswitch
 
    text-white

    @if (isset($classes)) {{ $classes }} @else text-sm px-5 py-2.5 rounded-lg @endif

    text-center  
    px-5 py-2.5
    focus:ring-4 focus:outline-none 
    font-medium 
    "
    type="{{ $btnType ?? 'button' }}"> {{ $value ?? 'Submit' }} </button>
