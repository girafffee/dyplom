@extends('layouts.site')

@section('content')

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="section-row">
                        <h3>Контактная информация</h3>
                        <p>Также как постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение экономической целесообразности принимаемых решений. Предварительные выводы неутешительны: внедрение современных методик, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для прогресса профессионального сообщества. А также явные признаки победы институционализации будут призваны к ответу.</p>
                        <ul class="list-style">
                            <li><p><strong>Email:</strong> <a href="mailto:sanko200065@gmail.com"><span class="__cf_email__" data-cfemail="88dfedeae5e9efc8ede5e9e1e4a6ebe7e5">[email&#160;protected]</span></a></p></li>
                            <li><p><strong>Телефон:</strong>564-56-56</p></li>
                            <li><p><strong>Адрес:</strong> ул. Лягина, 4</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="section-row">
                        <h3>Отправить сообщение</h3>
                        <form action="{{ route('contact.send') }}" method="POST" novalidate>
                            @csrf
                            <div class="row">
                                @guest
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Email</span>
                                        <input class="input @error('email')is-invalid @enderror" type="email" name="email" value="{{ old('email', '') }}">
                                        @error('email')<span class="error-message">{{ $errors->first('email') }}</span>@enderror
                                    </div>


                                </div>
                                @endguest
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <span>Тема</span>
                                        <input class="input @error('subject')is-invalid @enderror" type="text" name="subject" value="{{ old('subject', '') }}">
                                        @error('subject')<span class="error-message">{{ $errors->first('subject') }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input @error('message')is-invalid @enderror" name="message" placeholder="Message">{{ old('message', '') }}</textarea>
                                        @error('message')<span class="error-message">{{ $errors->first('message') }}</span>@enderror
                                    </div>
                                    <button class="primary-button">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection


@section('header')
    @include('layouts.header')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('footer')
    @include('layouts.footer')
@endsection
