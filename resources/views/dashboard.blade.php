<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="overflow: scroll;height:610px;">
                    <table class="table table-secondary table-striped table-bordered border-light">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Täzeligiň ady(TM)</th>
                                <th>Täzeligiň ady(RU)</th>
                                <th>Täzeligiň ady(EN)</th>
                                <th>Kategoriýasy</th>
                                <th>Beýany(TM)</th>
                                <th>Beýany(RU)</th>
                                <th>Beýany(EN)</th>
                                <th>Surat 1</th>
                                <th>Surat 2</th>
                                <th>Surat 3</th>
                                <th>Surat 4</th>
                                <th>Surat 5</th>
                                <th>Dörän wagty</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $key=>$el)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $el->name }}</td>
                                <td>{{ $el->name_ru }}</td>
                                <td>{{ $el->name_en }}</td>
                                <td>{{ $el->cat_id }}</td>
                                <td>{{ $el->content }}</td>
                                <td>{{ $el->content_ru }}</td>
                                <td>{{ $el->content_en }}</td>
                                <td>{{ $el->img_1 }}</td>
                                <td>{{ $el->img_2}}</td>
                                <td>{{ $el->img_3 }}</td>
                                <td>{{ $el->img_4 }}</td>
                                <td>{{ $el->img_5 }}</td>
                                <td>{{ $el->created_at }}</td>
                                <td><a href="{{ route('update-news', $el->id) }}">Üýtget</a></td>
                                <td><a href="{{ route('delete-news', $el->id) }}">Aýyr</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
