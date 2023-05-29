@extends('inc.layout.head')

@section('title-block')<title>Beýlekiler</title>@endsection

@section('menu-block'){{$name1}} @endsection

@section('content')

    <h3 class="border-bottom mb-3" style="font-size: 32px;">{{$name1}}</h3>
    @foreach($news as $el)
        <div class="row">
            @if($name1 != 'Maglumatlar' and $name1 == 'Suratlar')
            <div class="col-sm-3 d-none d-sm-block text-center">
                    <img class="img-fluid lazy img-shadow entered loaded" src="../storage/{{ $el->path }}" data-src="storage/{{ $el->path }}" alt="{{ $el->name }}" style="max-height: 150px;">
            </div>
            @elseif($name1 != 'Maglumatlar')
                <div class="col-sm-3 d-none d-sm-block text-center">
                    <img class="img-fluid lazy img-shadow entered loaded" src="../storage/{{ $el->img_1 }}" data-src="storage/{{ $el->path }}" alt="{{ $el->name }}" style="max-height: 150px;">
                </div>
            @endif
            <div class="col-sm-9">
                <h6>
                    @if($name1 == 'Maglumatlar')
                        <a href="{{ $el->path }}" download="" style="font-size: 28px;">
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                @if(!empty($el->name_en))
                                    {{ $el->name_en }}
                                @else
                                    {{ $el->name }}
                                @endif
                            @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                @if(!empty($el->name_ru))
                                    {{ $el->name_ru }}
                                @else
                                    {{ $el->name }}
                                @endif
                            @else
                                {{ $el->name }}
                            @endif
                        </a>
                    @else
                        <a href="{{ route('onepg',$el->id) }}" style="font-size: 28px;">
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                @if(!empty($el->name_en))
                                    {{ $el->name_en }}
                                @else
                                    {{ $el->name }}
                                @endif
                            @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                @if(!empty($el->name_ru))
                                    {{ $el->name_ru }}
                                @else
                                    {{ $el->name }}
                                @endif
                            @else
                                {{ $el->name }}
                            @endif
                        </a>
                    @endif
                </h6>
                <p class="mb-1">
                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                        @if(!empty($el->content_en))
                            {{ Illuminate\Support\Str::substr($el->content_en,0,50) }}
                        @else
                            {{ Illuminate\Support\Str::substr($el->content,0,50) }}
                        @endif
                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                        @if(!empty($el->content_ru))
                            {{ Illuminate\Support\Str::substr($el->content_ru,0,50) }}
                        @else
                            {{ Illuminate\Support\Str::substr($el->content,0,50) }}
                        @endif
                    @else
                        {{ Illuminate\Support\Str::substr($el->content,0,50) }}
                    @endif
                </p>
                <p class="d-flex justify-content-between">
                    <span class="text-muted">{{ $el->updated_at }}</span>
                    @if($name1 != 'Maglumatlar' and $name1 != 'Suratlar')
                        <a href="{{ route('onepg',$el->id) }}" class="btn btn-outline-success font-bold p-3">Dowamy</a>
                    @endif
                </p>
            </div>
        </div>
        <hr class="my-4">
    @endforeach
    <div class="container">
        <div class="row align-items-center justify-content-center d-none d-md-flex">
            <div class="col-5"></div>
            <nav class="col-4">
                <ul class="pagination">
                    <li class="page-item" id="lop">
                        {{ $news->links() }}
                    </li>
                </ul>
            </nav>
            <div class="col-3"></div>
        </div>
    </div>

@endsection
