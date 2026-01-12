@props(['type' => 'submit'])

<button type="{{ $type }}" {{ $attributes->merge([
    'class' => 'inline-flex items-center px-4 py-2.5 bg-gradient-to-r from-red-600 
                to-red-700 border border-transparent rounded-lg font-semibold 
                text-xs text-white uppercase tracking-widest hover:from-red-700 
                hover:to-red-800 active:from-red-800 focus:outline-none focus:ring-2 
                focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 
                transition ease-in-out duration-150 disabled:opacity-50',
]) }}>
    {{ $slot }}
</button>