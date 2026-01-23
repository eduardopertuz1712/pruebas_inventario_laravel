@props(['text', 'type' => 'button', 'class' => 'bg-blue-600 hover:bg-blue-700'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => "text-white font-bold py-2 px-4 rounded $class"]) }}>
    {{ $text }}
</button>
