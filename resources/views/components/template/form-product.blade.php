<div class="flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">{{ $title ?? 'Product Form' }}</h1>
        <form>
            <div class="mb-4">
                <x-atoms.label type="Product Name" />
                <x-atoms.input placeholder="Enter product name"/>
            </div>
            <div class="mb-4">
                <x-atoms.label type="number" />
                <x-atoms.input type="number" placeholder="Enter product price"/>
            </div>
            <div class="mt-6">
                <x-atoms.button text="Submit" />
            </div>
        </form>
    </div>
</div>
