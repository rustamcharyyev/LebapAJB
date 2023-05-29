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

    <div class="py-1">
        <div class="container-fluid mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-secondary table-striped table-bordered border-light">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kategoriýanyň id</th>
                                <th>Kategoriýanyň ady</th>
                                <th>Dörän wagty</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cat as $key=>$el)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $el->id }}</td>
                                    <td>{{ $el->cat_name }}</td>
                                    <td>{{ $el->created_at }}</td>
                                    <td><a href="{{ route('update-cat', $el->id) }}">Üýtget</a></td>
                                    <td><a href="{{ route('delete-cat', $el->id) }}">Aýyr</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
