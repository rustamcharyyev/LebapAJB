@extends('inc.layout.head')

@section('title-block')<title>{{ $data->name }}</title>@endsection

@section('content')

    <div class="container-fluid px-3 px-lg-4">
        <div class="row">
            <div class="col-12 col-md-7 col-xl-8">
                <div class="section-block">
                    {{--                    <div class="section-heading-blue"></div>--}}
                    <h5 class="section-heading" style="font-size: 32px;">
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            @if(!empty($data->name_en))
                                {{ $data->name_en }}
                            @else
                                {{ $data->name }}
                            @endif
                        @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                            @if(!empty($data->name_ru))
                                {{ $data->name_ru }}
                            @else
                                {{ $data->name }}
                            @endif
                        @else
                            {{ $data->name }}
                        @endif

                    </h5>
                    <hr class="bg-success mb-2 p-0.5">
                    <div class="row px-2">
                        <p><small>{{ $data->created_at }} &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi inline-block bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>{{ $data->view }}</small></p>
                        <div class="container mt-2 mb-4">
                            <div class="row">
                                <div class="col">
                                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                                            @if(!empty($data->img_2))
                                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" aria-current="true"></button>
                                            @endif
                                            @if(!empty($data->img_3))
                                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            @endif
                                            @if(!empty($data->img_4))
                                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            @endif
                                            @if(!empty($data->img_5))
                                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            @endif
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
{{--                                                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>--}}
                                                <img class="bg-secondary" style="height: 30rem; object-fit: contain" src="/storage/{{ $data->img_1 }}" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                            </div>
                                            @if(!empty($data->img_2))
                                                <div class="carousel-item">
                                                    {{--                                                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>--}}
                                                    <img class="bg-secondary" style="height: 30rem; object-fit: contain" src="/storage/{{ $data->img_2 }}" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                </div>
                                            @endif
                                            @if(!empty($data->img_3))
                                                <div class="carousel-item">
                                                    {{--                                                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>--}}
                                                    <img class="bg-secondary" style="height: 30rem; object-fit: contain" src="/storage/{{ $data->img_3 }}" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                </div>
                                            @endif
                                            @if(!empty($data->img_4))
                                                <div class="carousel-item">
                                                    {{--                                                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>--}}
                                                    <img class="bg-secondary" style="height: 30rem; object-fit: contain" src="/storage/{{ $data->img_4 }}" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                </div>
                                            @endif
                                            @if(!empty($data->img_5))
                                                <div class="carousel-item">
                                                    {{--                                                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></svg>--}}
                                                    <img class="bg-secondary" style="height: 30rem; object-fit: contain" src="/storage/{{ $data->img_5 }}" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                </div>
                                            @endif
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p> &emsp;
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                @if(!empty($data->content_en))
                                    {{ $data->content_en }}
                                @else
                                    {{ $data->content }}
                                @endif
                            @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                @if(!empty($data->content_ru))
                                    {{ $data->content_ru }}
                                @else
                                    {{ $data->content }}
                                @endif
                            @else
                                {{ $data->content }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-4">

                <div class="section-block">
                    {{--                    <div class="section-heading-green"></div>--}}
                    <h5 class="section-heading" style="font-size: 32px;">@lang('main.view')</h5>
                    <hr class="bg-success mb-2 p-0.5">
                    <div class="list-group list-group-bordered">
                        @foreach($kop as $el)

                            <a href="{{ route('onepg',$el->id) }}" class="list-group-item list-group-item-action">
                                <div class="list-group-item-figure inline-block">
                                    <img class="img-fluid img-shadow lazy popular-news-image section-image-bottom-green entered loaded w-20 inline-block" src="/storage/{{ $el->img_1 }}" data-src="/storage/{{ $el->img_1 }}" alt="{{ $el->name }}" title="{{ $el->name }}" data-ll-status="loaded">
                                </div>
                                <div class="list-group-item-body inline-block">
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
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>







@endsection
