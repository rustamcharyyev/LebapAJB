<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Täzelik goş') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin-post-submit') }}" method="POST" class="p-3 bg-white" enctype="multipart/form-data">
                        @csrf
                        <h1 style="font-size: 32px;" class="mb-3">Täzelik giriziň</h1>

                        <div class="mb-3">
                            <label for="name1" class="form-label">Täzeligiň doly ady (Türkmen dili):</label>
                            <input type="text" name="name1" id="name1" class="form-control" placeholder="Ady...">
                        </div>

                        <div class="mb-3">
                            <label for="name2" class="form-label">Täzeligiň doly ady (Rus dili):</label>
                            <input type="text" name="name2" id="name2" class="form-control" placeholder="Ady...">
                        </div>

                        <div class="mb-3">
                            <label for="name3" class="form-label">Täzeligiň doly ady (Iňlis dili):</label>
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

                        <div class="mb-3">
                            <label for="message1" class="form-label">Täzeligiň beýany (Türkmen dili):</label>
                            <textarea name="message1" id="message1" class="form-control" placeholder="Beýany..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message2" class="form-label">Täzeligiň beýany (Rus dili):</label>
                            <textarea name="message2" id="message2" class="form-control" placeholder="Beýany..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message3" class="form-label">Täzeligiň beýany (Iňlis dili):</label>
                            <textarea name="message3" id="message3" class="form-control" placeholder="Beýany..."></textarea>
                        </div>

                        <div class="field_wrapper">
                            <div>
                                <label for="img_1" class="btn btn-success mb-2">Ugratjak suradyňyzy saýlaň</label>
                                <input type="file" name="img_1" id="img_1" hidden class="form-control">
                            </div>
                        </div>

                        <div class="container">
                            <div class="row row-cols-1 mb-3">
                                <div class="col">
                                    <a href="javascript:void(0);" id="pl" class="add_button bg-primary text-white p-2 nav-link" style="border-radius: 15px;" title="Add field">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi d-block mx-auto mb-1 bi-plus-lg" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" style="margin-left: 44%;">Täzeligi göş</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
