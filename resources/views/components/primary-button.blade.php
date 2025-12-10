<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 rounded-lg font-semibold text-sm text-white bg-gradient-to-r from-[#125c4b] to-[#18bfa0] shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#18bfa0] focus:ring-offset-2 focus:ring-offset-white transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
