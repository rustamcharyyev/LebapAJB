<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-success" id="lop" style="bordessr-radius: 15px; box-shadow: 0px 6px 10px 2px rgba(0, 0, 0, 0.5);">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">@yield('menu-block')</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        @if(Request::is('täzelikler/'.(isset($name) ? $name : '')))
        <li class="nav-item">
            @if(Request::is('täzelikler/Ähli Habarlar'))
                <a href="{{ route('news','Ähli Habarlar') }}" class="btn btn-success text-start font-bold p-3 w-100" aria-current="page">
                    @lang('main.allnews')
                </a>
            @else
                <a href="{{ route('news','Ähli Habarlar') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.allnews')
                </a>
            @endif
        </li>
        <li>
            @if(Request::is('täzelikler/Syýasat'))
                <a href="{{ route('news','Syýasat') }}" class="btn btn-success font-bold p- text-start w-100" aria-current="page">
                    @lang('main.politic')
                </a>
            @else
                <a href="{{ route('news','Syýasat') }}" class="btn btn-success p-3 text-start w-100">
                    @lang('main.politic')
                </a>
            @endif
        </li>
        <li>
            @if(Request::is('täzelikler/Ykdysadyýet'))
                <a href="{{ route('news','Ykdysadyýet') }}" class="btn btn-success font-bold p- text-start w-100" aria-current="page">
                    @lang('main.economy')
                </a>
            @else
                <a href="{{ route('news','Ykdysadyýet') }}" class="btn btn-success p-3 text-start w-100">
                    @lang('main.economy')
                </a>
            @endif
        </li>
{{--        <li>--}}
{{--            <a href="#" class="nav-link text-white">--}}
{{--                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>--}}
{{--                Medeniýet--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="nav-link text-white">--}}
{{--                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>--}}
{{--                Syýahatçylyk--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item">
            @if(Request::is('täzelikler/Oba Hojalygy'))
                <a href="{{ route('news','Oba Hojalygy') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.agri')
                </a>
            @else
                <a href="{{ route('news','Oba Hojalygy') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.agri')
                </a>
            @endif
        </li>
        <li>
            @if(Request::is('täzelikler/Saglyk we Sport'))
                <a href="{{ route('news','Saglyk we Sport') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.h_and_s')
                </a>
            @else
                <a href="{{ route('news','Saglyk we Sport') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.h_and_s')
                </a>
            @endif
        </li>
{{--        <li>--}}
{{--            <a href="#" class="nav-link text-white">--}}
{{--                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>--}}
{{--                Bilim--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="nav-link text-white">--}}
{{--                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>--}}
{{--                Garaşsyzlygyň Şanly 30 Ýyllygy--}}
{{--            </a>--}}
{{--        </li>--}}
        <li>
            @if(Request::is('täzelikler/Umumy'))
                <a href="{{ route('news','Umumy') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.gener')
                </a>
            @else
                <a href="{{ route('news','Umumy') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.gener')
                </a>
            @endif
        </li>
        @else
        <li class="nav-item">
            @if(Request::is('beýlekiler/Maglumatlar'))
                <a href="{{ route('other','Maglumatlar') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.file')
                </a>
            @else
                <a href="{{ route('other','Maglumatlar') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.file')
                </a>
            @endif
        </li>
        <li>
            @if(Request::is('beýlekiler/Suratlar'))
                <a href="{{ route('other','Suratlar') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.photo')
                </a>
            @else
                <a href="{{ route('other','Suratlar') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.photo')
                </a>
            @endif
        </li>
{{--        <li>--}}
{{--            <a href="#" class="nav-link text-white">--}}
{{--                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>--}}
{{--                Wideo Ýazgylar--}}
{{--            </a>--}}
{{--        </li>--}}
        <li>
            @if(Request::is('beýlekiler/Çäreler'))
                <a href="{{ route('other','Çäreler') }}" class="btn btn-success font-bold p- text-start w-100" aria-current="page">
                    @lang('main.meas')
                </a>
            @else
                <a href="{{ route('other','Çäreler') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.meas')
                </a>
            @endif
        </li>
        <li>
            @if(Request::is('beýlekiler/Bildirişler'))
                <a href="{{ route('other','Bildirişler') }}" class="btn btn-success font-bold p-3 text-start w-100" aria-current="page">
                    @lang('main.announ')
                </a>
            @else
                <a href="{{ route('other','Bildirişler') }}" class="btn btn-success p-3 text-start w-100" aria-current="page">
                    @lang('main.announ')
                </a>
            @endif
        </li>
        @endif
    </ul>
</div>
