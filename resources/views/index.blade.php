
@extends('inc.layout.head')

@section('title-block')<title>Lebap welaýat Alyjylar Jemgiýetleriniň Birleşigi</title>@endsection

@section('content')

    <div class="container-fluid px-3 px-lg-4">
        <div class="row">
            <div class="col-12 col-md-7 col-xl-8">
                <div class="section-block">
{{--                    <div class="section-heading-blue"></div>--}}
                    <h5 class="section-heading" style="font-size: 32px;">@lang('main.main_news')</h5>
                    <hr class="bg-success mb-2 p-0.5">
                    @if(isset($esasy) and !empty($esasy[0]))
                    <div class="row no-gutters img-shadow mb-3 text-center">
                        <div class="col-xl-7 align-self-center img-outer mb-0 pb-0.5 mr-0 border-b-4 border-success main-image">
                            <a href="{{ route('onepg',$esasy[0]->id) }}">
                                <img class="img-fluid lazy entered loaded mb-0 mr-0" src="/storage/{{ $esasy[0]->img_1 }}" data-src="/storage/{{ $esasy[0]->img_1 }}" alt="{{ $esasy[0]->name }}" title="{{ $esasy[0]->name }}" style="object-fit: fill; height: 304.29px;" data-ll-status="loaded">
                            </a>
                        </div>
                        <div class="col-xl-5 bg-success text-white text-left p-3 p-xl-4">
                            <a href="{{ route('onepg',$esasy[0]->id) }}" class="a-color-white">
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                    <h6 class="xl-h4" style="font-size: 32px;">
                                        @if(!empty($esasy[0]->name_en))
                                            {{ $esasy[0]->name_en }}
                                        @else
                                            {{ $esasy[0]->name }}
                                        @endif
                                    </h6>
                                @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                    <h6 class="xl-h4" style="font-size: 32px;">
                                        @if(!empty($esasy[0]->name_ru))
                                            {{ $esasy[0]->name_ru }}
                                        @else
                                            {{ $esasy[0]->name }}
                                        @endif
                                    </h6>
                                @else
                                    <h6 class="xl-h4" style="font-size: 32px;">{{ $esasy[0]->name }}</h6>
                                @endif
                            </a>
                            {{ $esasy[0]->created_at }}
                        </div>
                    </div>
                    @endif
                    <div class="row px-2">
                        @foreach($esasy as $key=>$el)
                            @if($key != 0)
                                <div class="col-xl-4 px-0 px-xl-2 my-2 my-xl-0 p-2">
                                    <div class="d-none d-xl-flex justify-content-center border-b-4  border-success img-outer img-shadow">
                                        <img class="img-fluid lazy align-self-center entered loaded" style="object-fit:contain;border-top-right-radius: 5px;border-top-left-radius: 5px;" src="/storage/{{ $el->img_1 }}" alt="{{ $el->name }}" style="max-height: 150px; object-fit: contain;" data-ll-status="loaded">
                                    </div>
                                    <div class="p-3 bg-success">
                                        <a href="{{ route('onepg',$el->id) }}" class="d-block a-color-white text-white">
                                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                                @if(!empty($el->name_en))
                                                    {{ \Illuminate\Support\Str::substr($el->name_en, 0, 30).'...' }}
                                                @else
                                                    {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                                @endif
                                            @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                                @if(!empty($el->name_ru))
                                                    {{ \Illuminate\Support\Str::substr($el->name_ru, 0, 30).'...' }}
                                                @else
                                                    {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                                @endif
                                            @else
                                                {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                            @endif
                                        </a>
                                    </div>
                                    <div class="bg-success px-3 py-2 text-white">
                                        {{ $el->created_at }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-4">

                <div class="section-block">

		<img style="height:250px;width:250px; margin-left:125px;" src="im/logo2022.png" data-src="im/logo2022.png" alt="">

{{--                    <div class="section-heading-green"></div>--}}
                    <h5 class="section-heading" style="font-size: 32px;text-align:center;">@lang('main.view')</h5>
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
                                            {{ \Illuminate\Support\Str::substr($el->name_en, 0, 30).'...' }}
                                        @else
                                            {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                        @endif
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                        @if(!empty($el->name_ru))
                                            {{ \Illuminate\Support\Str::substr($el->name_ru, 0, 30).'...' }}
                                        @else
                                            {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                        @endif
                                    @else
                                        {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-3 px-lg-4">
        <div class="row pb-2">
            <div class="col-12 col-md-12 col-xl-12">
                <div class="section-block">
{{--                    <div class="section-heading-orange"></div>--}}
                    <h5 class="section-heading" style="font-size: 32px;">@lang('main.care')</h5>
                    <hr class="bg-success mb-2 p-0.5">
                    @if(isset($care) and !empty($care[0]))
                    <div class="row no-gutters img-outer mb-3">
                        <div class="col-xl-5 order-2 order-xl-1 text-white text-left p-3 p-xl-4">
                            <a href="{{ route('onepg',$care[0]->id) }}" style="color:#198754;">
                                <h6 class="xl-h4" style="font-size: 32px;">
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                        @if(!empty($care[0]->name_en))
                                            {{ $care[0]->name_en }}
                                        @else
                                            {{ $care[0]->name }}
                                        @endif
                                    @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                        @if(!empty($care[0]->name_ru))
                                            {{ $care[0]->name_ru }}
                                        @else
                                            {{ $care[0]->name }}
                                        @endif
                                    @else
                                        {{ $care[0]->name }}
                                    @endif
                                </h6>
                            </a>
                            <span style="color:#198754;">{{ $care[0]->created_at}}</span>
                        </div>
                        <div class="col-xl-7 order-1 align-self-center">
                            <a href="{{ route('onepg',$care[0]->id) }}" title="{{ $care[0]->name}}">
                                <img class="img-fluid img-shadow section-image-bottom-green lazy entered loaded" style="object-fit:fill;" src="/storage/{{ $care[0]->img_1}}" alt="{{ $care[0]->name}}" title="{{ $care[0]->name}}" data-ll-status="loaded">
                            </a>
                        </div>

                    </div>
                    @endif
                    @foreach($care as $key=>$el)
                        @if($key != 0)
                            <div class="row align-items-center no-gutters text-white mb-3 img-outer">
                                <div class="col-xl-2 d-none d-lg-block section-image-bottom-green">
                                    <img class="img-fluid img-shadow lazy entered loaded" src="/storage/{{ $el->img_1}}" data-src="/storage/{{ $el->img_1}}" alt="{{ $el->name}}" title="{{ $el->name}}" data-ll-status="loaded">
                                </div>
                                <div class="col-xl-10 p-2">
                                    <a class="d-block" style="color:#198754;" href="{{ route('onepg',$el->id) }}" title="{{ $el->name}}">
                                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                            @if(!empty($el->name_en))
                                                {{ \Illuminate\Support\Str::substr($el->name_en, 0, 30).'...' }}
                                            @else
                                                {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                            @endif
                                        @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                                            @if(!empty($el->name_ru))
                                                {{ \Illuminate\Support\Str::substr($el->name_ru, 0, 30).'...' }}
                                            @else
                                                {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                            @endif
                                        @else
                                            {{ \Illuminate\Support\Str::substr($el->name, 0, 30).'...' }}
                                        @endif
                                    </a>
                                    <span style="color:#198754;">{{ $el->created_at}}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

{{--    <div class="container-fluid px-3 px-lg-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 col-md-7 col-xl-8">--}}
{{--                <div class="section-block">--}}
{{--                    <div class="section-heading-purple"></div>--}}
{{--                    <h5 class="section-heading">Täzelikler</h5>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="row no-gutters section-content-bg-grey mb-4 ">--}}
{{--                                <div class="col-xl-6 align-self-center text-center section-image-bottom-purple img-shadow">--}}
{{--                                    <a href="https://ashgabat.gov.tm/news/23/dowlet-bastutanymyz-ahal-welayatynyn-babadayhan-etrabynyn-caginde-gurlan-taze-dokma-toplumynyn-acylys-dabarasyna-gatnasdy">--}}
{{--                                        <img class="img-fluid lazy entered loaded" src="/storage/images/news/medium/DVtgCpph9ooRPy8GFy0Xn9nUq6J3M47Rdj382o8T.jpg" data-src="/storage/images/news/medium/DVtgCpph9ooRPy8GFy0Xn9nUq6J3M47Rdj382o8T.jpg" alt="Döwlet Baştutanymyz Ahal welaýatynyň Babadaýhan etrabynyň çäginde gurlan täze dokma toplumynyň açylyş dabarasyna gatnaşdy" title="Döwlet Baştutanymyz Ahal welaýatynyň Babadaýhan etrabynyň çäginde gurlan täze dokma toplumynyň açylyş dabarasyna gatnaşdy" data-ll-status="loaded">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 p-3">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/23/dowlet-bastutanymyz-ahal-welayatynyn-babadayhan-etrabynyn-caginde-gurlan-taze-dokma-toplumynyn-acylys-dabarasyna-gatnasdy" title="Döwlet Baştutanymyz Ahal welaýatynyň Babadaýhan etrabynyň çäginde gurlan täze dokma toplumynyň açylyş dabarasyna gatnaşdy">--}}
{{--                                        Döwlet Baştutanymyz Ahal welaýatynyň Babadaýhan et...--}}
{{--                                    </a>--}}
{{--                                    18.11.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row no-gutters section-content-bg-grey mb-4 ">--}}
{{--                                <div class="col-xl-6 align-self-center text-center section-image-bottom-purple img-shadow">--}}
{{--                                    <a href="https://ashgabat.gov.tm/news/22/turkmenistanyn-garassyzlygynyn-30-yyllygy-mynasybetli-sergi">--}}
{{--                                        <img class="img-fluid lazy entered loaded" data-src="/storage/images/news/medium/fKNkV72lJpP3Aj8d0MynErXGvn0wfRDUwRR7d36u.jpg" alt="Türkmenistanyň Garaşsyzlygynyň 30 ýyllygy mynasybetli sergi" title="Türkmenistanyň Garaşsyzlygynyň 30 ýyllygy mynasybetli sergi" src="/storage/images/news/medium/fKNkV72lJpP3Aj8d0MynErXGvn0wfRDUwRR7d36u.jpg" data-ll-status="loaded">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 p-3">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/22/turkmenistanyn-garassyzlygynyn-30-yyllygy-mynasybetli-sergi" title="Türkmenistanyň Garaşsyzlygynyň 30 ýyllygy mynasybetli sergi">--}}
{{--                                        Türkmenistanyň Garaşsyzlygynyň 30 ýyllygy mynasybe...--}}
{{--                                    </a>--}}
{{--                                    28.09.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row no-gutters section-content-bg-grey mb-4 mb-xl-0">--}}
{{--                                <div class="col-xl-6 align-self-center text-center section-image-bottom-purple img-shadow">--}}
{{--                                    <a href="https://ashgabat.gov.tm/news/21/konullerin-buysanjy">--}}
{{--                                        <img class="img-fluid lazy entered loaded" data-src="/storage/images/news/medium/r45UpxVE2ZHUb5SJRC3VBlqicpcCI6eqUkQTQnWR.jpg" alt="Köňülleriň buýsanjy" title="Köňülleriň buýsanjy" src="/storage/images/news/medium/r45UpxVE2ZHUb5SJRC3VBlqicpcCI6eqUkQTQnWR.jpg" data-ll-status="loaded">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6 p-3">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/21/konullerin-buysanjy" title="Köňülleriň buýsanjy">--}}
{{--                                        Köňülleriň buýsanjy--}}
{{--                                    </a>--}}
{{--                                    31.08.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6">--}}
{{--                            <div class="row align-items-center no-gutters section-content-bg-grey mb-3">--}}
{{--                                <div class="col-xl-3 d-none d-lg-block section-image-bottom-purple img-shadow">--}}
{{--                                    <img class="img-fluid lazy entered loaded" src="/storage/images/news/medium/p3mQw3grjzdU7mHnE34rPjEUX0f6e1OEbOiPG8mL.jpg" data-src="/storage/images/news/medium/p3mQw3grjzdU7mHnE34rPjEUX0f6e1OEbOiPG8mL.jpg" alt="Täze binalar Aşgabada görk berer" title="Täze binalar Aşgabada görk berer" data-ll-status="loaded">--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-9 p-2">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/20/taze-binalar-asgabada-gork-berer" title="Täze binalar Aşgabada görk berer">--}}
{{--                                        Täze binalar Aşgabada görk berer--}}
{{--                                    </a>--}}
{{--                                    26.07.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-center no-gutters section-content-bg-grey mb-3">--}}
{{--                                <div class="col-xl-3 d-none d-lg-block section-image-bottom-purple img-shadow">--}}
{{--                                    <img class="img-fluid lazy entered loaded" src="/storage/images/news/medium/N7w29cSOs0glblZKWWvJ8WNlfQYRtXVuwXTl4hXB.jpg" data-src="/storage/images/news/medium/N7w29cSOs0glblZKWWvJ8WNlfQYRtXVuwXTl4hXB.jpg" alt="Berkarar döwletiň belent binasy" title="Berkarar döwletiň belent binasy" data-ll-status="loaded">--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-9 p-2">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/19/berkarar-dowletin-belent-binasy" title="Berkarar döwletiň belent binasy">--}}
{{--                                        Berkarar döwletiň belent binasy--}}
{{--                                    </a>--}}
{{--                                    03.07.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-center no-gutters section-content-bg-grey mb-3">--}}
{{--                                <div class="col-xl-3 d-none d-lg-block section-image-bottom-purple img-shadow">--}}
{{--                                    <img class="img-fluid lazy entered loaded" src="/storage/images/news/medium/J5QawmWrzrvg8XZ6X2qNs38f0qI0oClIVPbydYR6.jpg" data-src="/storage/images/news/medium/J5QawmWrzrvg8XZ6X2qNs38f0qI0oClIVPbydYR6.jpg" alt="Ajaýyp mukam" title="Ajaýyp mukam" data-ll-status="loaded">--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-9 p-2">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/18/ajayyp-mukam" title="Ajaýyp mukam">--}}
{{--                                        Ajaýyp mukam--}}
{{--                                    </a>--}}
{{--                                    10.05.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-center no-gutters section-content-bg-grey ">--}}
{{--                                <div class="col-xl-3 d-none d-lg-block section-image-bottom-purple img-shadow">--}}
{{--                                    <img class="img-fluid lazy entered loaded" src="/storage/images/news/medium/5MblxUXGnssha5ioAt6kedC9cgyPlbdH4fdiy6Mo.jpg" data-src="/storage/images/news/medium/5MblxUXGnssha5ioAt6kedC9cgyPlbdH4fdiy6Mo.jpg" alt="Arassaçylygyň ak şäheri" title="Arassaçylygyň ak şäheri" data-ll-status="loaded">--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-9 p-2">--}}
{{--                                    <a class="d-block" href="https://ashgabat.gov.tm/news/17/arassacylygyn-ak-saheri" title="Arassaçylygyň ak şäheri">--}}
{{--                                        Arassaçylygyň ak şäheri--}}
{{--                                    </a>--}}
{{--                                    27.04.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-md-5 col-xl-4">--}}
{{--                <div class="section-block">--}}
{{--                    <div class="section-heading-green"></div>--}}
{{--                    <h5 class="section-heading">Bildirişler</h5>--}}
{{--                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">--}}
{{--                        <div class="swiper-wrapper" id="swiper-wrapper-ac910c51b111081b26" aria-live="off" style="transform: translate3d(-1242px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide section-content-bg-green a-color-white text-center p-2 swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="1 / 4" style="width: 404px; margin-right: 10px;">--}}
{{--                                <img style="max-height: 470px; object-fit: contain" class="img-fluid lazy" src="https://ashgabat.gov.tm/assets/images/placeholders/500-400.png" data-src="/storage/images/notices/large/Ga7X3JNOaqmlgBVugJydudishZGV5r4ZPST9Op5l.jpg" alt="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary" title="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary">--}}
{{--                                <div class="p-3 text-left">--}}
{{--                                    <a href="https://ashgabat.gov.tm/notices/1/rysgal-ptb-nyn-internet-banking-hyzmatynyn-ayratynlyklary" class="a-color-white d-block" title="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary">--}}
{{--                                        «Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary--}}
{{--                                    </a>--}}
{{--                                    20.01.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide section-content-bg-green a-color-white text-center p-2 swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="2 / 4" style="width: 404px; margin-right: 10px;">--}}
{{--                                <img style="max-height: 470px; object-fit: contain" class="img-fluid lazy entered loaded" data-src="/storage/images/notices/large/CKJaw41XsjMxGOMWrNkDIgXNsAtHDmcY8Hnw6NL1.jpg" alt="Üns beriň, bäsleşik!" title="Üns beriň, bäsleşik!" src="/storage/images/notices/large/CKJaw41XsjMxGOMWrNkDIgXNsAtHDmcY8Hnw6NL1.jpg" data-ll-status="loaded">--}}
{{--                                <div class="p-3 text-left">--}}
{{--                                    <a href="https://ashgabat.gov.tm/notices/2/uns-berin-baslesik" class="a-color-white d-block" title="Üns beriň, bäsleşik!">--}}
{{--                                        Üns beriň, bäsleşik!--}}
{{--                                    </a>--}}
{{--                                    30.01.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide section-content-bg-green a-color-white text-center p-2 swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="3 / 4" style="width: 404px; margin-right: 10px;">--}}
{{--                                <img style="max-height: 470px; object-fit: contain" class="img-fluid lazy entered loaded" data-src="/storage/images/notices/large/Ga7X3JNOaqmlgBVugJydudishZGV5r4ZPST9Op5l.jpg" alt="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary" title="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary" src="/storage/images/notices/large/Ga7X3JNOaqmlgBVugJydudishZGV5r4ZPST9Op5l.jpg" data-ll-status="loaded">--}}
{{--                                <div class="p-3 text-left">--}}
{{--                                    <a href="https://ashgabat.gov.tm/notices/1/rysgal-ptb-nyn-internet-banking-hyzmatynyn-ayratynlyklary" class="a-color-white d-block" title="«Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary">--}}
{{--                                        «Rysgal» PTB-nyň Internet-banking hyzmatynyň aýratynlyklary--}}
{{--                                    </a>--}}
{{--                                    20.01.2021--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide section-content-bg-green a-color-white text-center p-2 swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="4 / 4" style="width: 404px; margin-right: 10px;">--}}
{{--                                <img style="max-height: 470px; object-fit: contain" class="img-fluid lazy entered loaded" data-src="/storage/images/notices/large/CKJaw41XsjMxGOMWrNkDIgXNsAtHDmcY8Hnw6NL1.jpg" alt="Üns beriň, bäsleşik!" title="Üns beriň, bäsleşik!" src="/storage/images/notices/large/CKJaw41XsjMxGOMWrNkDIgXNsAtHDmcY8Hnw6NL1.jpg" data-ll-status="loaded">--}}
{{--                                <div class="p-3 text-left">--}}
{{--                                    <a href="https://ashgabat.gov.tm/notices/2/uns-berin-baslesik" class="a-color-white d-block" title="Üns beriň, bäsleşik!">--}}
{{--                                        Üns beriň, bäsleşik!--}}
{{--                                    </a>--}}
{{--                                    30.01.2021--}}
{{--                                </div>--}}
{{--                            </div></div>--}}
{{--                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
