<div id="nav">

    <div id="nav-fixed">
        <div class="container">

            <div class="nav-logo">
                <a href="{{ route('home') }}" class="logo"><img src="{{ route('home') }}/img/logo.png" alt=""></a>
            </div>


            <ul class="nav-menu nav navbar-nav">
                <li><a href="{{ route('all-paginate.posts', ['category' => 'all']) }}">Все новости</a></li>
                @foreach($nav_categories as $categories)
                    <li>
                        <a href="{{ route('all-paginate.posts', ['category' => $categories->slug]) }}">{{ $categories->name }}</a>
                    </li>
                @endforeach
                <li class="cat-1"><a href="{{ route('contact.index') }}">Контакты</a></li>

                @guest
                    <li class="cat-3"><a href="{{ route('register') }}">Регистрация</a></li>
                    <li class="cat-4"><a href="{{ route('login') }}">Войти</a></li>

                @else
                    <li class="cat-4"><a href="{{ route('logout') }}"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                @endguest
            </ul>


            <div class="nav-btns">
                {{--<div class="logoMenu"><span class="voyager-person" width=""></span>
                    <div>
                        <ul>
                            <li>Edit profile</li>
                            <li>Watch</li>
                            <li>Quit</li>
                        </ul>
                    </div>
                </div>--}}
                {{--<button class="aside-btn"><i class="fa fa-bars"></i></button>--}}
                {{--<button class="search-btn"><i class="fa fa-search"></i></button>
                <div class="search-form">
                    <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                    <button class="search-close"><i class="fa fa-times"></i></button>
                </div>--}}
            </div>

        </div>
    </div>


    {{--<div id="nav-aside">
        @include('layouts.nav-aside')
    </div>--}}

</div>
