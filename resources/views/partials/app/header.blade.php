<!-- header-area -->
<header>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{asset('app/img/logo/logo.png')}}" alt="Logo">
                                </a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children"><a href="{{ route('movie.movie') }}">Movie</a>
                                    </li>
                                    <li><a href="{{ route('pricing.pricing') }}">Pricing</a></li>

                                    @php
                                        $category = App\Models\Category::where('is_active', 1)->where('is_delete', 0)->orderBy('id', 'DESC')->with(['subCategory'])->limit(2)->get();
                                    @endphp
                                    @if(!is_null($category))
                                        @foreach($category as $ck => $cv)
                                            <li class="menu-item-has-children">
                                                <a href="Javascript:void(0);">
                                                    {{ $cv->name }}
                                                </a>
                                                <ul class="submenu">
                                                    @if(!is_null($cv->subCategory))
                                                        @foreach($cv->subCategory as $sck => $scv)
                                                            <li>
                                                                <a href="{{ route('details.details', $scv->id) }}">
                                                                    {{ $scv->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </li>
                                        @endforeach
                                    @endif
                                    
                                    <li><a href="{{ route('contact.contact') }}">contacts</a></li>
                                </ul>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>

                                    @guest
                                        @if (Route::has('login'))
                                            <li>
                                                <a class="active menu-item-has-children" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li>
                                                <a class="active menu-item-has-children" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                        @else
                                            <li class="active menu-item-has-children">
                                                <a>
                                                    @php
                                                        $name = explode(' ',Auth::user()->name);
                                                    @endphp
                                                    Welcome: {{ $name[0] }}
                                                </a>

                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                           onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Search-end -->

                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end