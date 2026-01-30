@php
    $user = auth()->user();
@endphp

@if($user && $user->role === 'admin')
    <x-layout-admin>
        {{ $slot }}
    </x-layout-admin>
@else
    <x-layout-user>
        {{ $slot }}
    </x-layout-user>
@endif
