@extends('layouts.site')

@section('content')

    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                            <h3>{{ $post->seo_title != NULL ? $post->seo_title : $post->title }}</h3>
                            {!! $post->body !!}

                        </div>
                        {{-- SHARED LINKS --}}
                    </div>

                    @include('comments.view')

                    @auth
                        @include('comments.index')
                    @else
                        @include('comments.guest')
                    @endauth

                </div>

                <div class="col-md-4">
                    {{--@include('posts.aside.most-readed')
                    @include('posts.aside.featured-posts')
                    @include('posts.aside.categories')
                    @include('posts.aside.tags')
                    @include('posts.aside.archive')--}}
                </div>
            </div>
        </div>
    </div>


@endsection


@section('header')

    @include('layouts.header')

    <div id="post-header" class="page-header">
        <div class="background-img" style="{{ $header_style }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="post-meta">
                        <a class="post-category cat-2" href="category.html">JavaScript</a>
                        <span class="post-date">
                            {{ $post->created_at->format('d.m.Y') }}
                        </span>
                    </div>

                    <h1>{{ $post->title }}</h1>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

    @include('layouts.footer')

@endsection
