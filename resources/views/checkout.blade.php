@extends('layout')
@section('content')
<!-- quickview-modal -->
<div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content"></div>
    </div>
</div><!-- quickview-modal / end -->
<!-- mobilemenu -->
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div><button type="button" class="mobilemenu__close"><svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg></button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="index.html" class="mobile-links__item-link">Home 1</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="index-2.html" class="mobile-links__item-link">Home 2</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Categories</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Power Tools</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg></button></div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Engravers</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Wrenches</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Wall Chaser</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pneumatic Tools</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Machine Tools</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg></button></div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Thread Cutting</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Chip Blowers</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Sharpening Machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pipe Cutters</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Slotting machines</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Lathes</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">Shop Grid</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg></button></div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-3-columns-sidebar.html" class="mobile-links__item-link">3 Columns Sidebar</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-4-columns-full.html" class="mobile-links__item-link">4 Columns Full</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="shop-grid-5-columns-full.html" class="mobile-links__item-link">5 Columns Full</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-list.html" class="mobile-links__item-link">Shop List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="shop-right-sidebar.html" class="mobile-links__item-link">Shop Right Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="product.html" class="mobile-links__item-link">Product</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                            <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                        </svg></button></div>
                                <div class="mobile-links__item-sub-links" data-collapse-content>
                                    <ul class="mobile-links mobile-links--level--2">
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product.html" class="mobile-links__item-link">Product</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product-alt.html" class="mobile-links__item-link">Product Alt</a></div>
                                        </li>
                                        <li class="mobile-links__item" data-collapse-item>
                                            <div class="mobile-links__item-title"><a href="product-sidebar.html" class="mobile-links__item-link">Product Sidebar</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="cart.html" class="mobile-links__item-link">Cart</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="checkout.html" class="mobile-links__item-link">Checkout</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="wishlist.html" class="mobile-links__item-link">Wishlist</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="compare.html" class="mobile-links__item-link">Compare</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="account.html" class="mobile-links__item-link">My Account</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="track-order.html" class="mobile-links__item-link">Track Order</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Blog Classic</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-grid.html" class="mobile-links__item-link">Blog Grid</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-list.html" class="mobile-links__item-link">Blog List</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="blog-left-sidebar.html" class="mobile-links__item-link">Blog Left Sidebar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post.html" class="mobile-links__item-link">Post Page</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="post-without-sidebar.html" class="mobile-links__item-link">Post Without Sidebar</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Pages</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="about-us.html" class="mobile-links__item-link">About Us</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="contact-us.html" class="mobile-links__item-link">Contact Us</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="contact-us-alt.html" class="mobile-links__item-link">Contact Us Alt</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="404.html" class="mobile-links__item-link">404</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="terms-and-conditions.html" class="mobile-links__item-link">Terms And Conditions</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="faq.html" class="mobile-links__item-link">FAQ</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="components.html" class="mobile-links__item-link">Components</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="typography.html" class="mobile-links__item-link">Typography</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">Currency</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">€ Euro</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">£ Pound Sterling</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">$ US Dollar</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">₽ Russian Ruble</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item>
                    <div class="mobile-links__item-title"><a data-collapse-trigger class="mobile-links__item-link">Language</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content>
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">English</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">French</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">German</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Russian</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item>
                                <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link">Italian</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div><!-- mobilemenu / end -->
<!-- site -->
<div class="site">
    <!-- mobile site__header -->
    <header class="site__header d-lg-none">
        <div class="mobile-header mobile-header--sticky mobile-header--stuck">
            <div class="mobile-header__panel">
                <div class="container">
                    <div class="mobile-header__body"><button class="mobile-header__menu-button"><svg width="18px" height="14px">
                                <use xlink:href="images/sprite.svg#menu-18x14"></use>
                            </svg></button> <a class="mobile-header__logo" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="120px" height="20px">
                                <path d="M118.5,20h-1.1c-0.6,0-1.2-0.4-1.4-1l-1.5-4h-6.1l-1.5,4c-0.2,0.6-0.8,1-1.4,1h-1.1c-1,0-1.8-1-1.4-2l1.1-3
                                 l1.5-4l3.6-10c0.2-0.6,0.8-1,1.4-1h1.6c0.6,0,1.2,0.4,1.4,1l3.6,10l1.5,4l1.1,3C120.3,19,119.5,20,118.5,20z M111.5,6.6l-1.6,4.4
                                 h3.2L111.5,6.6z M99.5,20h-1.4c-0.4,0-0.7-0.2-0.9-0.5L94,14l-2,3.5v1c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C88,0.7,88.7,0,89.5,0h1C91.3,0,92,0.7,92,1.5v8L94,6l3.2-5.5C97.4,0.2,97.7,0,98.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3L96.3,10l4.5,7.8
                                 C101.4,18.8,100.7,20,99.5,20z M80.3,11.8L80,12.3v6.2c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-6.2l-0.3-0.5l-5.5-9.5
                                 c-0.6-1,0.2-2.3,1.3-2.3h1.4c0.4,0,0.7,0.2,0.9,0.5L76,4.3l2,3.5l2-3.5l2.2-3.8C82.4,0.2,82.7,0,83.1,0h1.4c1.2,0,1.9,1.3,1.3,2.3
                                 L80.3,11.8z M60,20c-5.5,0-10-4.5-10-10S54.5,0,60,0s10,4.5,10,10S65.5,20,60,20z M60,4c-3.3,0-6,2.7-6,6s2.7,6,6,6s6-2.7,6-6
                                 S63.3,4,60,4z M47.8,17.8c0.6,1-0.2,2.3-1.3,2.3h-2L41,14h-4v4.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5v-17
                                 C33,0.7,33.7,0,34.5,0H41c0.3,0,0.7,0,1,0.1c3.4,0.5,6,3.4,6,6.9c0,2.4-1.2,4.5-3.1,5.8L47.8,17.8z M42,4.2C41.7,4.1,41.3,4,41,4h-3
                                 c-0.6,0-1,0.4-1,1v4c0,0.6,0.4,1,1,1h3c0.3,0,0.7-0.1,1-0.2c0.3-0.1,0.6-0.3,0.9-0.5C43.6,8.8,44,7.9,44,7C44,5.7,43.2,4.6,42,4.2z
                                  M29.5,4H25v14.5c0,0.8-0.7,1.5-1.5,1.5h-1c-0.8,0-1.5-0.7-1.5-1.5V4h-4.5C15.7,4,15,3.3,15,2.5v-1C15,0.7,15.7,0,16.5,0h13
                                 C30.3,0,31,0.7,31,1.5v1C31,3.3,30.3,4,29.5,4z M6.5,20c-2.8,0-5.5-1.7-6.4-4c-0.4-1,0.3-2,1.3-2h1c0.5,0,0.9,0.3,1.2,0.7
                                 c0.2,0.3,0.4,0.6,0.8,0.8C4.9,15.8,5.8,16,6.5,16c1.5,0,2.8-0.9,2.8-2c0-0.7-0.5-1.3-1.2-1.6C7.4,12,7,11,7.4,10.3l0.4-0.9
                                 c0.4-0.7,1.2-1,1.8-0.6c0.6,0.3,1.2,0.7,1.6,1.2c1,1.1,1.7,2.5,1.7,4C13,17.3,10.1,20,6.5,20z M11.6,6h-1c-0.5,0-0.9-0.3-1.2-0.7
                                 C9.2,4.9,8.9,4.7,8.6,4.5C8.1,4.2,7.2,4,6.5,4C5,4,3.7,4.9,3.7,6c0,0.7,0.5,1.3,1.2,1.6C5.6,8,6,9,5.6,9.7l-0.4,0.9
                                 c-0.4,0.7-1.2,1-1.8,0.6c-0.6-0.3-1.2-0.7-1.6-1.2C0.6,8.9,0,7.5,0,6c0-3.3,2.9-6,6.5-6c2.8,0,5.5,1.7,6.4,4C13.3,4.9,12.6,6,11.6,6
                                 z"></path>
                            </svg></a>
                        <div class="mobile-header__search">
                            <form class="mobile-header__search-form" action="#"><input class="mobile-header__search-input" name="search" placeholder="Search over 10,000 products" aria-label="Site search" type="text" autocomplete="off"> <button class="mobile-header__search-button mobile-header__search-button--submit" type="submit"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#search-20"></use>
                                    </svg></button> <button class="mobile-header__search-button mobile-header__search-button--close" type="button"><svg width="20px" height="20px">
                                        <use xlink:href="images/sprite.svg#cross-20"></use>
                                    </svg></button>
                                <div class="mobile-header__search-body"></div>
                            </form>
                        </div>
                        <div class="mobile-header__indicators">
                            <div class="indicator indicator--mobile-search indicator--mobile d-sm-none"><button class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#search-20"></use>
                                        </svg></span></button></div>
                            <div class="indicator indicator--mobile d-sm-flex d-none"><a href="wishlist.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#heart-20"></use>
                                        </svg> <span class="indicator__value">0</span></span></a></div>
                            <div class="indicator indicator--mobile"><a href="cart.html" class="indicator__button"><span class="indicator__area"><svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#cart-20"></use>
                                        </svg> <span class="indicator__value">3</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- mobile site__header / end -->
    <!-- desktop site__header -->
    <header class="site__header d-lg-block d-none">
        <div class="site-header">

            @include('top-bar')
            @include('logo-search')
            @include('page-menu')

        </div>
    </header><!-- desktop site__header / end -->
    <!-- site__body -->
    <div class="site__body">
        <div class="page-header">
            <div class="page-header__container container">
                <div class="page-header__breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg></li>
                            <li class="breadcrumb-item"><a href="#">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                </svg></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="page-header__title">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <div class="alert alert-lg alert-primary">Returning customer? <a href="#">Click here to login</a></div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body">
                                <h3 class="card-title">Billing details</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-first-name">First Name</label> <input type="text" class="form-control" id="checkout-first-name" placeholder="First Name"></div>
                                    <div class="form-group col-md-6"><label for="checkout-last-name">Last Name</label> <input type="text" class="form-control" id="checkout-last-name" placeholder="Last Name"></div>
                                </div>
                                <div class="form-group"><label for="checkout-company-name">Company Name <span class="text-muted">(Optional)</span></label> <input type="text" class="form-control" id="checkout-company-name" placeholder="Company Name"></div>
                                <div class="form-group"><label for="checkout-country">Country</label> <select id="checkout-country" class="form-control">
                                        <option>Select a country...</option>
                                        <option>United States</option>
                                        <option>Russia</option>
                                        <option>Italy</option>
                                        <option>France</option>
                                        <option>Ukraine</option>
                                        <option>Germany</option>
                                        <option>Australia</option>
                                    </select></div>
                                <div class="form-group"><label for="checkout-street-address">Street Address</label> <input type="text" class="form-control" id="checkout-street-address" placeholder="Street Address"></div>
                                <div class="form-group"><label for="checkout-address">Apartment, suite, unit etc. <span class="text-muted">(Optional)</span></label> <input type="text" class="form-control" id="checkout-address"></div>
                                <div class="form-group"><label for="checkout-city">Town / City</label> <input type="text" class="form-control" id="checkout-city"></div>
                                <div class="form-group"><label for="checkout-state">State / County</label> <input type="text" class="form-control" id="checkout-state"></div>
                                <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input type="text" class="form-control" id="checkout-postcode"></div>
                                <div class="form-row">
                                    <div class="form-group col-md-6"><label for="checkout-email">Email address</label> <input type="email" class="form-control" id="checkout-email" placeholder="Email address"></div>
                                    <div class="form-group col-md-6"><label for="checkout-phone">Phone</label> <input type="text" class="form-control" id="checkout-phone" placeholder="Phone"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-create-account"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg> </span></span><label class="form-check-label" for="checkout-create-account">Create an account?</label></div>
                                </div>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-body">
                                <h3 class="card-title">Shipping Details</h3>
                                <div class="form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-different-address"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg> </span></span><label class="form-check-label" for="checkout-different-address">Ship to a different address?</label></div>
                                </div>
                                <div class="form-group"><label for="checkout-comment">Order notes <span class="text-muted">(Optional)</span></label> <textarea id="checkout-comment" class="form-control" rows="4"></textarea></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                            <div class="card-body">
                                <h3 class="card-title">Your Order</h3>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="checkout__totals-products">
                                        <tr>
                                            <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                                            <td>$1,398.00</td>
                                        </tr>
                                        <tr>
                                            <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                                            <td>$849.00</td>
                                        </tr>
                                        <tr>
                                            <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                                            <td>$3,630.00</td>
                                        </tr>
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                        <tr>
                                            <th>Subtotal</th>
                                            <td>$5,877.00</td>
                                        </tr>
                                        <tr>
                                            <th>Store Credit</th>
                                            <td>$-20.00</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td>$25.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                        <tr>
                                            <th>Total</th>
                                            <td>$5,882.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">Direct bank transfer</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">Check payments</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">Cash on delivery</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">Pay with cash upon delivery.</div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item"><label class="payment-methods__item-header"><span class="payment-methods__item-radio input-radio"><span class="input-radio__body"><input class="input-radio__input" name="checkout_payment_method" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="payment-methods__item-title">PayPal</span></label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkout__agree form-group">
                                    <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-terms"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg> </span></span><label class="form-check-label" for="checkout-terms">I have read and agree to the website <a target="_blank" href="terms-and-conditions.html">terms and conditions</a>*</label></div>
                                </div><button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- site__body / end -->
    <!-- site__footer -->
    @endsection