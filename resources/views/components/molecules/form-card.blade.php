@props(['title', 'submitText' => 'Guardar', 'action', 'method' => 'POST'])

<div class="container mx-auto p-6 max-w-md">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $title }}</h1>
    </div>

    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $action }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
        @csrf
        @if($method !== 'POST')
            @method($method)
        @endif

        {{ $slot }}

        <div class="flex gap-4">
            <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ $submitText }}
            </button>
            <a href="{{ route('productos.index') }}" class="flex-1 text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Cancelar
            </a>
        </div>
    </form>
</div>
