<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategoriýa goş') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    <form action="{{ route('cat-submit') }}" method="POST" class="p-3 bg-white" enctype="multipart/form-data">
                        @csrf
                        <h1 style="font-size: 32px;" class="mb-3">Kategoriýa giriziň</h1>

                        <div class="mb-3">
                            <label for="name" class="form-label">Kategoriýanyň ady:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ady...">
                        </div>

                        <button type="submit" class="btn btn-success" style="margin-left: 44%;">Kategoriýany göş</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
