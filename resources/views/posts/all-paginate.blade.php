@extends('layouts.site')

@section('header')

    @include('layouts.header')

    @if(isset($category))
    <div class="page-header {{ $category->href_classes }}">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <ul class="page-header-breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>{{ $category->name }}</li>
                    </ul>
                    <h1>{{ $category->name }}</h1>

                </div>
            </div>
        </div>
    </div>
    @endif

@endsection

@section('content')

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                    @forelse($posts as $post)
                        @if($loop->first)
                                <div class="col-md-12">
                                    <div class="post post-thumb">
                                        <a class="post-img" href="{{ route('single.post', ['slug' => $post->slug]) }}"><img src="{{ Voyager::image($post->image) }}" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category {{ $post->category->href_classes }}"
                                                   href="{{ route('all-paginate.posts', ['category' => $post->category->slug ]) }}">
                                                    {{ $post->category->name }}
                                                </a>
                                                <span class="post-date">{{ $post->created_at->format('d.m.Y') }}</span>
                                            </div>
                                            <h3 class="post-title"><a href="{{ route('single.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                        @elseif($loop->iteration == 2 || $loop->iteration == 3)
                                <div class="col-md-6">
                                    <div class="post">
                                        <a class="post-img" href="{{ route('single.post', ['slug' => $post->slug]) }}"><img src="{{ Voyager::image($post->image) }}" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category {{ $post->category->href_classes }}"
                                                   href="{{ route('all-paginate.posts', ['category' => $post->category->slug ]) }}">
                                                    {{ $post->category->name }}
                                                </a>
                                                <span class="post-date">{{ $post->created_at->format('d.m.Y') }}</span>
                                            </div>
                                            <h3 class="post-title">
                                                <a href="{{ route('single.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                        @elseif($loop->iteration == 4)
                                <div class="clearfix visible-md visible-lg"></div>
                        @else
                                <div class="col-md-12">
                                    <div class="post post-row">
                                        <a class="post-img" href="{{ route('single.post', ['slug' => $post->slug]) }}"><img src="{{ Voyager::image($post->image) }}" alt=""></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category {{ $post->category->href_classes }}"
                                                   href="{{ route('all-paginate.posts', ['category' => $post->category->slug ]) }}">
                                                    {{ $post->category->name }}
                                                </a>
                                                <span class="post-date">{{ $post->created_at->format('d.m.Y') }}</span>
                                            </div>
                                            <h3 class="post-title"><a href="{{ route('single.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h3>
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                    </div>
                                </div>
                        @endif
                    @empty

                            <div class="col-md-8">
                                <h3>Нет записей по категории {{ $category['name'] }}</h3>
                            </div>
                    @endforelse
                    </div>
                    {{ $posts->links() }}
                </div>

                <div class="col-md-4">
                   {{-- @include('posts.aside.most-readed')
                    @include('posts.aside.featured-posts')
                    @include('posts.aside.categories')
                    @include('posts.aside.tags')
                    @include('posts.aside.archive')--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

