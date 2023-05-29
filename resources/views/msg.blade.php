<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Habarlaşanlar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="overflow-x: scroll;">
                    <table class="table table-secondary table-striped table-bordered border-light">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ady</th>
                            <th>Telefon belgisi</th>
                            <th>e-mail</th>
                            <th>Temasy</th>
                            <th>Beýany</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $key=>$el)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $el->name }}</td>
                                <td>{{ $el->phone }}</td>
                                <td>{{ $el->email }}</td>
                                <td>{{ $el->subject }}</td>
                                <td>{{ $el->content }}</td>
                                <td><a href="{{ route('deletecont', $el->id) }}">Aýyr</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
