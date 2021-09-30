@props(['btn' => 'primary'])
@php
$primary = 'uppercase inline-flex justify-center align-middle py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';

$success = 'uppercase inline-flex justify-center align-middle py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500';

$warning = 'uppercase inline-flex justify-center align-middle py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500';

$danger = 'uppercase inline-flex justify-center align-middle py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500';

$default = 'uppercase inline-flex justify-center align-middle py-2 px-4 border border-transparent shadow-sm text-xs font-medium rounded-md text-black hover:bg-black hover:text-white focus:outline-none';

// if ($active) $classes .= ' bg-blue-500 text-white';


switch ($btn) {
    case 'primary':
        $classes = $primary;
        break;

    case 'success':
        $classes = $success;
        break;
    
    case 'warning':
        $classes = $warning;
        break;
    
    case 'danger':
        $classes = $danger;
        break;
    
    default:
        $classes = $default;
        break;
}
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>


