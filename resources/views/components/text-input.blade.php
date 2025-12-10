@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-lg border border-[#dfe8e4] bg-white text-gray-900 shadow-sm focus:border-[#18bfa0] focus:ring-[#18bfa0]']) }}>
