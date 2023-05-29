<!DOCTYPE html>
<html lang="en" dir="ltr" id="top">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        @yield('title-block')
        <link rel="icon" type="image/x-icon" href="/storage/img/favicon.ico">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media (min-width: 280px) {

            .bey{
                height: 150px;
            }
        }
        @media (min-width: 1025px) {
            .bey{
                height: 175px;
            }
            .cat{
                margin-left: -23px;
            }
        }
        @media (max-width: 1024px) {

            .bey{
                height: 125px;
            }
            .dog{
                display: none!important;
            }
        }
        body{
            padding-top: 10rem;
        }
    </style>

    @include('inc.layout.n')

    <div class="container">

        @include('inc.alerts')

        <div class="row">
            @if(Request::is('/') or Request::is('esasyhabarlar') or Request::is('habarlaşmak') or Request::is('admin') or (Illuminate\Support\Facades\Route::current()->uri == 'täzelikler/{id2}/show') or Request::is('biz-barada'))
            <div class="col-12">
                <div class="px-4 py-3 border border-dark" style="border-radius: 15px;box-shadow: 0px 6px 10px 2px rgba(0, 0, 0, 0.5);">

                    <div class="container-fluid px-0">

                        <div class="row px-xl-5">
                            <div class="col-lg-12 col-md-12">
                                @yield('content')
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            @else
            <div class="col-4">
                @include('inc.layout.s')
            </div>
            <div class="col-8">
                <div class="px-4 py-3 border border-dark" style="border-radius: 15px;box-shadow: 0px 6px 10px 2px rgba(0, 0, 0, 0.5);">

                    <div class="container-fluid px-0">

                        <div class="row px-xl-5">
                            <div class="col-lg-12 col-md-12">
{{--                                ?{{  }}--}}
                                @yield('content')
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            @endif
        </div>

    </div>

    <div class="d-flex flex-column">
       @include('inc.layout.f')
    </div>

    <div id="trp-floater-ls" onclick="" data-no-translation="" class="trp-language-switcher-container trp-floater-ls-names trp-bottom-right trp-color-light">
        <div id="trp-floater-ls-current-language" class="trp-with-flags">
            <a href="#" class="trp-floater-ls-disabled-language trp-ls-disabled-language" onclick="event.preventDefault()">

                @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                    <img class="trp-flag-image" src="/storage/img/en_GB.png" width="18" height="12" alt="en_GB"title="English">English
                @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                    <img class="trp-flag-image" src="/storage/img/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian">Русский
                @else
                    <img class="trp-flag-image" src="/storage/img/tn_tx-flag-16x12.gif" width="18" height="12" alt="Tm_tm" title="Turkmen">Türkmen dili
                @endif
            </a>
        </div>
        <div id="trp-floater-ls-language-list" class="trp-with-flags">
            <div class="trp-language-wrap">
                @if(\Illuminate\Support\Facades\App::getLocale() == 'tm')
                        <a href="{{ route('locale','ru') }}" title="Russian">
                            <img class="trp-flag-image" src="/storage/img/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian">Rus dili
                        </a>
                        <a href="{{ route('locale','en') }}" title="English">
                            <img class="trp-flag-image" src="/storage/img/en_GB.png" width="18" height="12" alt="en_GB" title="English">Iňlis dili
                        </a>
                        <a href="#" class="trp-floater-ls-disabled-language trp-ls-disabled-language" onclick="event.preventDefault()">
                            <img class="trp-flag-image" src="/storage/img/tn_tx-flag-16x12.gif" width="18" height="12" alt="Tm_tm" title="Turkmen">Türkmen dili
                        </a>
                @elseif(\Illuminate\Support\Facades\App::getLocale() == 'ru')
                    <a href="{{ route('locale','tm') }}" title="Russian">
                        <img class="trp-flag-image" src="/storage/img/tn_tx-flag-16x12.gif" width="18" height="12" alt="Tm_tm" title="Turkmen">Туркменский
                    </a>
                    <a href="{{ route('locale','en') }}" title="English">
                        <img class="trp-flag-image" src="/storage/img/en_GB.png" width="18" height="12" alt="en_GB" title="English">Английский
                    </a>
                    <a href="#" class="trp-floater-ls-disabled-language trp-ls-disabled-language" onclick="event.preventDefault()">
                        <img class="trp-flag-image" src="/storage/img/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian">Русский
                    </a>
                @else
                    <a href="{{ route('locale','tm') }}" title="Russian">
                        <img class="trp-flag-image" src="/storage/img/tn_tx-flag-16x12.gif" width="18" height="12" alt="Tm_tm" title="Turkmen">Turkmen

                    </a>
                    <a href="{{ route('locale','ru') }}" title="English">
                        <img class="trp-flag-image" src="/storage/img/ru_RU.png" width="18" height="12" alt="ru_RU" title="Russian">Russian
                    </a>
                    <a href="#" class="trp-floater-ls-disabled-language trp-ls-disabled-language" onclick="event.preventDefault()">
                        <img class="trp-flag-image" src="/storage/img/en_GB.png" width="18" height="12" alt="en_GB" title="English">English
                    </a>
                @endif
            </div>
        </div>
    </div>

    <script src="/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 5; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper

            var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append('<div><label for="img_' + x + '" class="bg-success p-2 mb-2 text-white" style="border-bottom-left-radius: 15px;border-top-left-radius: 15px;">Ugratjak suradyňyzy saýlaň</label><a href="" class="remove_button p-2 bg-danger text-white mb-2 mt-1" style="border-bottom-right-radius: 15px;border-top-right-radius: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi d-inline mb-1 bi-eraser" viewBox="0 0 16 16"><path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414l-3.879-3.879zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/></svg></a><input type="file" name="img_' + x + '" id="img_' + x + '" hidden class="form-control"></div>'); //Add field html
                }
                if(x === maxField) $('#pl').fadeOut();
                else $('#pl').show();
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
                if(x === maxField) $('#pl').fadeOut();
                else $('#pl').fadeIn();
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            // $('#lop').removeClass('position-fixed');
            $(window).on('scroll', function () {
                if ($(document).scrollTop()>150) {
                    $('#lop').addClass('position-fixed');
                }
                else {
                    $('#lop').removeClass('position-fixed');
                }
            })
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#search_list_box').hide();
            $('#search').on('keyup',function (){
                var query = $(this).val();
                $.ajax({
                    url:"/search",
                    type:"GET",
                    data:{"search":query},
                    success:function (data){
                        $('#search_list_box').fadeIn();
                        $('#search_list').html(data);
                    }
                });
            });

            $(document).on('click',function (){
                $('#search_list_box').fadeOut();
            });
        });
    </script>

    <script type="text/javascript">
     $(function () {
      $(window).on('scroll', function () {
        var scrollBot = $(document).height() - $(window).height() - $(window).scrollTop();
        if (scrollBot<50) {
          $('#lop').removeClass('position-fixed');
        }
      })
    });
    </script>
    </body>
</html>
