@props(['btn' => 'primary'])

@php
$primary = 'border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px';

$success = 'border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px';

$warning = 'border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px';

$danger = 'border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px';

$default = 'border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px';

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


