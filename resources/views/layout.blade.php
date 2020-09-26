<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Stroyka</title>
    <link rel="icon" type="image/png" href="{{ asset('web-assets/images/favicon.png') }}"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{ asset('web-assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web-assets/css/style.css') }}"><!-- js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('web-assets/vendor/jquery-3.3.1/jquery.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendor/nouislider-12.1.0/nouislider.min.js') }}"></script>
    <script src="{{ asset('web-assets/js/number.js') }}"></script>
    <script src="{{ asset('web-assets/js/main.js') }}"></script>
    <script src="{{ asset('web-assets/vendor/svg4everybody-2.1.9/svg4everybody.min.js') }}"></script>
    <script>
        svg4everybody();
    </script><!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('web-assets/vendor/fontawesome-5.6.1/css/all.min.css') }}"><!-- font - stroyka -->
    <link rel="stylesheet" href="{{ asset('web-assets/fonts/stroyka/stroyka.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
</head>

<body>



@yield('content')

<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contact Us</h5>
                            <div class="footer-contacts__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in feugiat lorem. Pellentque ac placerat tellus.</div>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i> OrangiTown, Karachi, Sindh</li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i> arsalan@test.com</li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> 0341 1126905</li>
                                <li><i class="footer-contacts__icon far fa-clock"></i> Mon-Sat 10:00pm - 7:00pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Information</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">About Us</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Delivery Information</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Privacy Policy</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Brands</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Contact Us</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">My Account</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Store Location</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Order History</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Wish List</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Newsletter</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">Specials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Newsletter</h5>
                            <div class="footer-newsletter__text">Don't want to miss any offer or sale, Subscribe us to connect with us</div>
                            <form action="#" class="footer-newsletter__form"><label class="sr-only" for="footer-newsletter-address">Email Address</label> <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="Email Address..."> <button class="footer-newsletter__form-button btn btn-primary">Subscribe</button></form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">Follow us on social networks</div>
                            <ul class="footer-newsletter__social-links">
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--rss"><a href="https://themeforest.net/user/kos9" target="_blank"><i class="fas fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer__copyright">Design & Developed by <a target="_blank" href="#">Arsalan Ahmed <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button"><svg width="16px" height="16px"><use xlink:href="{{ asset('/storage/images/sprite.svg#compare-16') }}"></use></svg> <span class="fake-svg-icon fake-svg-icon--compare-16"></span></button></a></div>
                <!-- <div class="site-footer__payments"><img src="{{ asset('/storage/images/payments.png') }}" alt=""></div> -->
            </div>
        </div>
    </div>
</footer><!-- site__footer / end -->
</div><!-- site / end -->

</body>
</html>