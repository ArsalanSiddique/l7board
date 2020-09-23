<!-- .topbar -->
<div class="site-header__topbar topbar">
    <div class="topbar__container container">
        <div class="topbar__row">
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="/about">About Us</a></div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="/contact">Contacts</a></div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Store Location</a></div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Track Order</a></div>
            <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Blog</a></div>
            <div class="topbar__spring"></div>
            <div class="topbar__item">
                <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">My Account <svg width="7px" height="5px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                        </svg></button>
                    <div class="topbar-dropdown__body">
                        <!-- .menu -->
                        <ul class="menu menu--layout--topbar">
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul><!-- .menu / end -->
                    </div>
                </div>
            </div>
            <div class="topbar__item">
                <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">Currency: <span class="topbar__item-value">USD</span> <svg width="7px" height="5px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                        </svg></button>
                    <div class="topbar-dropdown__body">
                        <!-- .menu -->
                        <ul class="menu menu--layout--topbar">
                            <li><a href="#">$ US Dollar</a></li>
                        </ul><!-- .menu / end -->
                    </div>
                </div>
            </div>
            <div class="topbar__item">
                <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">Language: <span class="topbar__item-value">EN</span> <svg width="7px" height="5px">
                            <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                        </svg></button>
                    <div class="topbar-dropdown__body">
                        <!-- .menu -->
                        <ul class="menu menu--layout--topbar menu--with-icons">
                            <li><a href="#">
                                    <div class="menu__icon"><img srcset="{{ asset('web-assets/images/languages/language-1.png') }}, {{ asset('web-assets/images/languages/language-1@2x.png 2x') }}" src="{{ asset('web-assets/images/languages/language-1.png') }}" alt=""></div>English
                                </a></li>
                            <li><a href="#">
                                    <div class="menu__icon"><img srcset="{{ asset('web-assets/images/languages/language-2.png') }}, {{ asset('web-assets/images/languages/language-2@2x.png 2x') }}" src="{{ asset('web-assets/images/languages/language-2.png') }}" alt=""></div>French
                                </a></li>
                            <li><a href="#">
                                    <div class="menu__icon"><img srcset="{{ asset('web-assets/images/languages/language-3.png') }}, {{ asset('web-assets/images/languages/language-3@2x.png 2x') }}" src="{{ asset('web-assets/images/languages/language-4.png') }}" alt=""></div>German
                                </a></li>
                            <li><a href="#">
                                    <div class="menu__icon"><img srcset="{{ asset('web-assets/images/languages/language-4.png') }}, {{ asset('web-assets/images/languages/language-1@2x.png 4x') }}" src="{{ asset('web-assets/images/languages/language-4.png') }}" alt=""></div>Russian
                                </a></li>
                            <li><a href="#">
                                    <div class="menu__icon"><img srcset="{{ asset('web-assets/images/languages/language-5.png') }}, {{ asset('web-assets/images/languages/language-5@2x.png 2x') }}" src="{{ asset('web-assets/images/languages/language-5.png') }}" alt=""></div>Italian
                                </a></li>
                        </ul><!-- .menu / end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- .topbar / end -->