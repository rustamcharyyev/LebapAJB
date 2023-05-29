@extends('inc.layout.head')

@section('title-block')<title>Habarlaşmak üçin</title>@endsection

@section('content')



    <form action="{{ route('contact-form') }}" method="POST" class="p-3 bg-white">
        @csrf
        <h1 style="font-size: 32px">@lang('main.contact')</h1>

        <div class="mb-3">
            <label for="name" class="form-label">@lang('main.name'):</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Taýirow Şohrat Toýmuradowiç">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">@lang('main.phone'):</label>
            <input type="text" placeholder="9936xxxxxxx" id="phone" class="form-control" minlength="11" name="phone" onkeypress="return (event.charCode >= 48 && event.charCode <=57 && /^\d{0,10}$/.test(this.value))">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">@lang('main.email'):</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="mysal@gmail.com">
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">@lang('main.subject'):</label>
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Temasy...">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">@lang('main.msg'):</label>
            <textarea name="message" id="message" class="form-control" placeholder="Hatyňyz..."></textarea>
        </div>

        <button type="submit" class="btn btn-success" style="margin-left: 44%;">@lang('main.cbtn')</button>
    </form>
@endsection
