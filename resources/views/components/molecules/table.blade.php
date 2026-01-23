<table {{ $attributes->merge(['class' => 'min-w-full']) }}>
    <thead class="bg-gray-200">
        <tr>
            {{ $slot }}
        </tr>
    </thead>
    <tbody class="divide-y">
        {{ $body ?? '' }}
    </tbody>
</table>
