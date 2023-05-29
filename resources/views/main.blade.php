@extends('inc.layout.head')

@section('title-block')<title>Esasy Habralar</title>@endsection

@section('content')


                    <h3 class="border-bottom mb-3" style="font-size: 32px;">@lang('main.main_news')</h3>
                    @foreach($news as $el)
                        <div class="row">
                            <div class="col-sm-3 d-none d-sm-block text-center">
                                <img class="img-fluid lazy img-shadow entered loaded" src="storage/{{ $el->img_1 }}" data-src="storage/{{ $el->img_1 }}" alt="{{ $el->name }}" style="max-height: 150px;">
                            </div>
                            <div class="col-sm-9">
                                <h6><a href="{{ route('onepg',$el->id) }}" style="font-size: 28px;">
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
                                    </a></h6>
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
                                    <a href="{{ route('onepg',$el->id) }}" class="btn btn-outline-success font-bold p-3">@lang('main.more')</a>
                                </p>
                            </div>
                        </div>
                        <hr class="my-4">
                    @endforeach
                    <div class="container">
                        <div class="row align-items-center justify-content-center d-none d-md-flex">
                            <div class="col-3"></div>
                            <nav class="col-4">
                                    {{ $news->links() }}
                            </nav>
                            <div class="col-5"></div>
                        </div>
                    </div>

                {{--                <div class="col-lg-4 col-md-5">--}}
{{--                    <h3 class="border-bottom mt-3 mt-md-0">Köp okalanlar</h3>--}}
{{--                    <div class="list-group list-group-flush list-group-divider">--}}
{{--                        <a href="https://lebap.gov.tm/news/lebap-welayatynda-taze-yyl-gijesinde-doglan-babek-turkmenistanda-2021-nji-yylda-dunya-inen-ilkinji-babeklerin-biri-boldy-fraxt6cr1cqxlvd" class="list-group-item list-group-item-action">--}}
{{--                            <div class="list-group-item-body">--}}
{{--                                <h4 class="list-group-item-title font-weight-bold text-info"> Lebap welaýatynda Täze ýyl gijesinde doglan bäbek Türkmenistanda 2021-nji ýylda dünýä inen ilkinji bäbekleriň biri boldy </h4>--}}
{{--                                <h5 class="list-group-item-subtitle"> 03.01.2021 </h5>--}}
{{--                                <p class="list-group-item-text"> Türkmenistanda Täze, 2021-nji ýylda ilkinji bäbekleriň biri Lebap welaýatynda Enäniň we çaganyň saglygyny goraýyş merkezinde dünýä indi. Oglanjyk täze... </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="https://lebap.gov.tm/news/kerki-etrabyndaky-corek-karhanasynyn-zahmet-adamlary-tamamlanyp-baryan-yyly-sowly-jemleyarler-3snwf3crwtacjvb" class="list-group-item list-group-item-action">--}}
{{--                            <div class="list-group-item-body">--}}
{{--                                <h4 class="list-group-item-title font-weight-bold text-info"> Kerki etrabyndaky çörek kärhanasynyň zähmet adamlary tamamlanyp barýan ýyly şowly jemleýärler. </h4>--}}
{{--                                <h5 class="list-group-item-subtitle"> 26.12.2020 </h5>--}}
{{--                                <p class="list-group-item-text"> Olar çörek önümleriniň dürli görnüşleriniň ilatyň saçagynda bol bolmagyny gazanýarlar. Çörek bişirijiler ýylyň başyndan bäri çörek we çörek önümlerini... </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="https://lebap.gov.tm/news/koytendag-syrlar-mesgeni-wjdkuc6r7wgxdhe" class="list-group-item list-group-item-action">--}}
{{--                            <div class="list-group-item-body">--}}
{{--                                <h4 class="list-group-item-title font-weight-bold text-info"> Köýtendag - Syrlar Mesgeni </h4>--}}
{{--                                <h5 class="list-group-item-subtitle"> 27.12.2020 </h5>--}}
{{--                                <p class="list-group-item-text"> Ýurdumyzyň gündogar künjeginde ýerleşýän Köýtendag diňe bir özüniň owadan dereleri, täsin tebigaty we syrly gowaklary bilen däl, eýsem, takmynan, 150... </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="https://lebap.gov.tm/news/milli-ozgertmeler-rowaclanyar-ztpwphycbgfoj2q" class="list-group-item list-group-item-action">--}}
{{--                            <div class="list-group-item-body">--}}
{{--                                <h4 class="list-group-item-title font-weight-bold text-info"> Milli özgertmeler rowaçlanýar </h4>--}}
{{--                                <h5 class="list-group-item-subtitle"> 29.12.2020 </h5>--}}
{{--                                <p class="list-group-item-text"> Tamamlanyp barýan Türkmenistan — Bitaraplygyň mekany ýyly ýurdumyz üçin ýakymly pursatlara baý ýyllaryň biri hökmünde kalbymyza ornady. Dünýäniň abraý... </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="https://lebap.gov.tm/news/konstitusiya-we-dowlet-baydagy-yurdumyzyn-esasy-dayanjydyr-ltmhuso8fapt3lz" class="list-group-item list-group-item-action">--}}
{{--                            <div class="list-group-item-body">--}}
{{--                                <h4 class="list-group-item-title font-weight-bold text-info"> Konstitusiýa we Döwlet baýdagy- ýurdumyzyň esasy daýanjydyr </h4>--}}
{{--                                <h5 class="list-group-item-subtitle"> 19.05.2021 </h5>--}}
{{--                                <p class="list-group-item-text"> &nbsp; &nbsp;“Türkmenistan-parahatçylygyň we ynanyşmagyň Watany”  ýylynda  Türkmenistanyň Kärdeşler arkalaşyklarynyň Lebap welaýat birleşmesiniň hem-d... </p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                </div>--}}

@endsection
