@extends('layouts.site')

@section('content')
    <div class="section">

        <div class="container">
            <div class="col-md-12">
                <h3>Спасибо за ваш ответ.</h3>
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
                        <li><a href="{{ route('home') }}">Home</a></li>
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
