@props(['title'])

<div class="container mx-auto p-6 max-w-2xl">
    <div class="bg-white rounded-lg shadow-md p-8">
        {{ $slot }}
    </div>
</div>
