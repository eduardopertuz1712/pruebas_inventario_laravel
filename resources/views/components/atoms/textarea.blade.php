@props(['label', 'name', 'placeholder' => '', 'value' => '', 'rows' => 4])

<div class="mb-4">
    <label for="{{ $name }}" class="block text-sm font-semibold text-gray-700 mb-2">
        {{ $label }}
    </label>
    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500']) }}
    >{{ old($name, $value) }}</textarea>
    @error($name)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</div>
