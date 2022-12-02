<button {{ $attributes->merge(['type' => 'submit', 'class' => 'shadow-lg hover:shadow-none inline-flex items-center px-4 py-2 hover:text-black bg-gradient-to-r from-amber-500 via-orange-500 to-blue-700 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
