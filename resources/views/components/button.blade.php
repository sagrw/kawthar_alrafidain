<button onclick="{{ $onClick ?? '' }}" id="{{ $id ?? null }}"
    {{ $attributes->class(['mt-4 px-8 py-2 border border-blue-600 rounded-full bg-blue-500 hover:bg-blue-600 text-xl text-white shadow-lg']) }}>
    {{ $slot }}
</button>
