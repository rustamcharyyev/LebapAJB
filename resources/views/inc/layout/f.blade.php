<div class="container-fluid mt-5 text-success" >
    <footer class="row row-cols-6 py-5 pb-0 mt-auto footer bg-light border-top">
        <div class="col">

        </div>
        <div class="col">
            <h5 style="margin-left: -20px;" class="font-bold">Lebap welaýat Alyjylar Jemgiýetleriniň Birleşigi</h5>
            <ul class="nav flex-column" style="list-style: circle;">
                <li class="nav-item mb-2"><a class="nav-link p-0 text-success"><span class="font-bold">Salgy:</span> </a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-success"><span class="font-bold">Telefon belgisi:</span><br> +993 (422) 6-22-40</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-success"><span class="font-bold">Faks:</span><br> +993 (422) 6-19-72</a></li>
                <li class="nav-item mb-2"><a class="nav-link p-0 text-success"><span class="font-bold">E-mail:</span> </a></li>
                <li class="nav-item mb-2"><a href="{{ route('about') }}" class="nav-link p-0 text-success font-bold">@lang('main.about')</a></li>
            </ul>
        </div>

        <div class="col">
            <h5 style="margin-left: -20px;" class="font-bold">@lang('main.pages')</h5>
            <ul class="nav flex-column" style="list-style: circle;">
                <li class="nav-item mb-2"><a href="{{ route('home') }}" class="nav-link p-0 text-success">@lang('main.main_page')</a></li>
                <li class="nav-item mb-2"><a href="{{ route('mainnews') }}" class="nav-link p-0 text-success">@lang('main.main_news')</a></li>
                <li class="nav-item mb-2"><a href="{{ route('news','Ähli Habarlar') }}" class="nav-link p-0 text-success">@lang('main.news')</a></li>
                <li class="nav-item mb-2"><a href="{{ route('contact') }}" class="nav-link p-0 text-success">@lang('main.contact')</a></li>
                <li class="nav-item mb-2"><a href="{{ route('other','Maglumatlar') }}" class="nav-link p-0 text-success">@lang('main.other')</a></li>
            </ul>
        </div>

        <div class="col">
            <h5 style="margin-left: -20px;" class="font-bold">@lang('main.news')</h5>
            <ul class="nav flex-column" style="list-style: circle;">
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Ähli Habarlar') }}" class="nav-link p-0 text-success" aria-current="page">
                        @lang('main.allnews')
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Syýasat') }}" class="nav-link p-0 text-success">
                        @lang('main.politic')
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Ykdysadyýet') }}" class="nav-link p-0 text-success">
                        @lang('main.economy')
                    </a>
                </li>
{{--                <li class="nav-item mb-2">--}}
{{--                    <a href="#" class="nav-link p-0 text-success">--}}
{{--                        Medeniýet--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item mb-2">--}}
{{--                    <a href="#" class="nav-link p-0 text-success">--}}
{{--                        Syýahatçylyk--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Oba Hojalygy') }}" class="nav-link p-0 text-success" aria-current="page">
                        @lang('main.agri')
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Saglyk we Sport') }}" class="nav-link p-0 text-success">
                        @lang('main.h_and_s')
                    </a>
                </li>
{{--                <li class="nav-item mb-2">--}}
{{--                    <a href="#" class="nav-link p-0 text-success">--}}
{{--                        Bilim--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item mb-2">--}}
{{--                    <a href="#" class="nav-link p-0 text-success">--}}
{{--                        Garaşsyzlygyň Şanly 30 Ýyllygy--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item mb-2">
                    <a href="{{ route('news','Umumy') }}" class="nav-link p-0 text-success">
                        @lang('main.gener')
                    </a>
                </li>
            </ul>
        </div>

        <div class="col">
            <h5 style="margin-left: -20px;" class="font-bold">@lang('main.other')</h5>
            <ul class="nav flex-column" style="list-style: circle;">
                <li class="nav-item mb-2">
                    <a href="{{ route('other','Maglumatlar') }}" class="nav-link p-0 text-success" aria-current="page">
                        @lang('main.file')
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('other','Suratlar') }}" class="nav-link p-0 text-success">
                        @lang('main.photo')
                    </a>
                </li>
{{--                <li class="nav-item mb-2">--}}
{{--                    <a href="#" class="nav-link p-0 text-success">--}}
{{--                        Wideo Ýazgylar--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item mb-2">
                    <a href="{{ route('other','Çäreler') }}" class="nav-link p-0 text-success">
                        @lang('main.meas')
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{ route('other','Bildirişler') }}" class="nav-link p-0 text-success">
                        @lang('main.announ')
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</div>
