<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Beýlekiler') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin-other-submit') }}" method="POST" class="p-3 bg-white" enctype="multipart/form-data">
                        @csrf
                        <h1 style="font-size: 32px;" class="mb-3">Beýleki gerekli maglumatlary ugradyň</h1>

                        <div class="mb-3">
                            <label for="name1" class="form-label">Maglumatyň ady (Türkmen dili):</label>
                            <input type="text" name="name1" id="name1" class="form-control" placeholder="Ady...">
                        </div>

                        <div class="mb-3">
                            <label for="name2" class="form-label">Maglumatyň ady (Rus dili):</label>
                            <input type="text" name="name2" id="name2" class="form-control" placeholder="Ady...">
                        </div>

                        <div class="mb-3">
                            <label for="name3" class="form-label">Maglumatyň ady (Iňlis dili):</label>
                            <input type="text" name="name3" id="name3" class="form-control" placeholder="Ady...">
                        </div>

                        <div class="mb-3">
                            <select name="cat" id="cat" class="form-select">
                                <option>Kategoriýasyny saýlaň</option>
                                @foreach($cat as $el)
                                    <option value="{{ $el['id'] }}">{{ $el['cat_name'] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="field_wrapper">
                            <div>
                                <label for="img_1" class="btn btn-success mb-2">Ugratjak faýlyňyzy saýlaň</label>
                                <input type="file" name="img_1" id="img_1" hidden class="form-control">
                            </div>
                        </div>

{{--                        <div class="container">--}}
{{--                            <div class="row row-cols-1 mb-3">--}}
{{--                                <div class="col">--}}
{{--                                    <a href="javascript:void(0);" id="pl" class="add_button bg-primary text-white p-2 nav-link" style="border-radius: 15px;" title="Add field">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi d-block mx-auto mb-1 bi-plus-lg" viewBox="0 0 16 16">--}}
{{--                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <button type="submit" class="btn btn-success" style="margin-left: 44%;">Täzeligi göş</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-1">
        <div class="container-fluid mx-auto sm:px-6 lg:px-8">
            <div class="row">
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <table class="table table-secondary table-striped table-bordered border-light">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategoriýa id</th>
                                    <th>Maglumatyň ýoly</th>
                                    <th>Dörän wagty</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($files as $key=>$el)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $el->cat_id }}</td>
                                        <td>{{ $el->path }}</td>
                                        <td>{{ $el->created_at }}</td>
                                        <td><a href="{{ route('delete-other', [$el->id,$el->cat_id]) }}">Aýyr</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <table class="table table-secondary table-striped table-bordered border-light">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kategoriýanyň id</th>
                                    <th>Suradyň ýoly</th>
                                    <th>Dörän wagty</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($img as $key=>$el)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $el->cat_id }}</td>
                                        <td>{{ $el->path }}</td>
                                        <td>{{ $el->created_at }}</td>
                                        <td><a href="{{ route('delete-other', [$el->id,$el->cat_id]) }}">Aýyr</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
