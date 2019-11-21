<!--
{{--Au<!----}}
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <!--css-->
        <link href="{{ asset('/') }}front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('/') }}front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('/') }}front-end/css/font-awesome.css" rel="stylesheet">
        <!--css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src="{{ asset('/') }}front-end/js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--search jQuery-->
        <script src="{{ asset('/') }}front-end/js/main.js"></script>
        <!--search jQuery-->
        <script src="{{ asset('/') }}front-end/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <!--mycart-->
        <script type="text/javascript" src="{{ asset('/') }}front-end/js/bootstrap-3.1.1.min.js"></script>
        <!-- cart -->
        <script src="{{ asset('/') }}front-end/js/simpleCart.min.js"></script>
        <!-- cart -->
        <!--start-rate-->
        <script src="{{ asset('/') }}front-end/js/jstarbox.js"></script>
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
                jQuery('.starbox').each(function() {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                        if(starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' '+val);
                            return val;
                        }
                    })
                });
            });
        </script>

        <link href="{{ asset('/') }}front-end/css/owl.carousel.css" rel="stylesheet">
        <script src="{{ asset('/') }}front-end/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    items : 1,
                    lazyLoad : true,
                    autoPlay : true,
                    navigation : false,
                    navigationText :  false,
                    pagination : true,
                });
            });
        </script>

        <script defer src="{{ asset('/') }}front-end/js/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="{{ asset('/') }}front-end/css/flexslider.css" type="text/css" media="screen" />
        <script src="{{ asset('/') }}front-end/js/imagezoom.js"></script>
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>

        <!--//End-rate-->
    </head>
    <body>
        <!--header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="top-left">
                        <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +0123-456-789</a>
                    </div>
                    <div class="top-right">
                        <ul>
                            <li><a href="checkout.html">Checkout</a></li>
                            @if(Session::get('customerId'))
                                <li><a href="#" onclick="document.getElementById('customerLogoutForm').submit();">Logout</a></li>
                                {{ Form::open(['route'=>'customer-logout', 'method'=>'POST', 'id'=>'customerLogoutForm']) }}
                                {{ Form::close() }}
                            @else
                                <li><a href="{{ route('new-customer-login') }}">Login</a></li>
                            @endif
                            <li><a href="registered.html"> Create Account </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav">
                        <div class="logo-nav-left">
                            <h1><a href="{{ route('/') }}">New Shop <span>Shop anywhere</span></a></h1>
                        </div>
                        <div class="logo-nav-left1">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header nav_2">
                                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                @include('front-end.includes.menu')
                            </nav>
                        </div>
                        <div class="logo-nav-right">
                            <ul class="cd-header-buttons">
                                <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                            </ul> <!-- cd-header-buttons -->
                            <div id="cd-search" class="cd-search">
                                <form action="#" method="post">
                                    <input name="Search" type="search" placeholder="Search...">
                                </form>
                            </div>
                        </div>

                        <div class="header-right2">
                            <div class="cart box_1">
                                <a href="{{ route('show-cart') }}">
                                    <h3> <div class="total">
                                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                        <img src="{{ asset('/') }}front-end/images/bag.png" alt="" />
                                    </h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-->
        @yield('body')
        <!---footer--->
        <div class="footer-w3l">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 footer-grid">
                        <h4>About </h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <div class="social-icon">
                            <a href="#"><i class="icon"></i></a>
                            <a href="#"><i class="icon1"></i></a>
                            <a href="#"><i class="icon2"></i></a>
                            <a href="#"><i class="icon3"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h4>My Account</h4>
                        <ul>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="registered.html"> Create Account </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="codes.html">Short Codes</a></li>
                            <li><a href="mail.html">Mail Us</a></li>
                            <li><a href="products1.html">products1</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-grid foot">
                        <h4>Contacts</h4>
                        <ul>
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">E Comertown Rd, Westby, USA</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>

                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
        </div>
        <!---footer--->
        <!--copy-->
        <div class="copy-section">
            <div class="container">
                <div class="copy-left">
                    <p>&copy; 2019 Rokeya Rahman . All rights reserved | Design by <a href="http://w3layouts.com">Rokeya Rahmans</a></p>
                </div>
                <div class="copy-right">
                    <img src="{{ asset('/') }}front-end/images/card.png" alt=""/>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!--copy-->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="news-gr">
                            <div class="col-md-5 new-grid1">
                                <img src="{{ asset('/') }}front-end/images/p5.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-7 new-grid">
                                <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                                <h6>Quick Overview</h6>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                <div class="color-quality">
                                    <div class="color-quality-left">
                                        <h6>Color : </h6>
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-quality-right">
                                        <h6>Quality :</h6>
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus1">&nbsp;</div>
                                                <div class="entry value1"><span>1</span></div>
                                                <div class="entry value-plus1 active">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!--quantity-->
                                        <script>
                                            $('.value-plus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                                if(newVal>=1) divUpd.text(newVal);
                                            });
                                        </script>
                                        <!--quantity-->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="women">
                                    <span class="size">XL / XXL / S </span>
                                    <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="{{ asset('/') }}front-end/images/of2.png">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="news-gr">
                            <div class="col-md-5 new-grid1">
                                <img src="{{ asset('/') }}front-end/images/p7.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-7 new-grid">
                                <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                                <h6>Quick Overview</h6>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                <div class="color-quality">
                                    <div class="color-quality-left">
                                        <h6>Color : </h6>
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-quality-right">
                                        <h6>Quality :</h6>
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus1">&nbsp;</div>
                                                <div class="entry value1"><span>1</span></div>
                                                <div class="entry value-plus1 active">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!--quantity-->
                                        <script>
                                            $('.value-plus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                                if(newVal>=1) divUpd.text(newVal);
                                            });
                                        </script>
                                        <!--quantity-->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="women">
                                    <span class="size">XL / XXL / S </span>
                                    <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="{{ asset('/') }}front-end/images/of2.png">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="news-gr">
                            <div class="col-md-5 new-grid1">
                                <img src="{{ asset('/') }}front-end/images/p10.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-7 new-grid">
                                <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                                <h6>Quick Overview</h6>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                <div class="color-quality">
                                    <div class="color-quality-left">
                                        <h6>Color : </h6>
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-quality-right">
                                        <h6>Quality :</h6>
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus1">&nbsp;</div>
                                                <div class="entry value1"><span>1</span></div>
                                                <div class="entry value-plus1 active">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!--quantity-->
                                        <script>
                                            $('.value-plus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                                if(newVal>=1) divUpd.text(newVal);
                                            });
                                        </script>
                                        <!--quantity-->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="women">
                                    <span class="size">XL / XXL / S </span>
                                    <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="{{ asset('/') }}front-end/images/of2.png">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="news-gr">
                            <div class="col-md-5 new-grid1">
                                <img src="{{ asset('/') }}front-end/images/p12.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-7 new-grid">
                                <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                                <h6>Quick Overview</h6>
                                <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                <div class="color-quality">
                                    <div class="color-quality-left">
                                        <h6>Color : </h6>
                                        <ul>
                                            <li><a href="#"><span></span>Red</a></li>
                                            <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                            <li><a href="#" class="purple"><span></span>Purple</a></li>
                                            <li><a href="#" class="gray"><span></span>Violet</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-quality-right">
                                        <h6>Quality :</h6>
                                        <div class="quantity">
                                            <div class="quantity-select">
                                                <div class="entry value-minus1">&nbsp;</div>
                                                <div class="entry value1"><span>1</span></div>
                                                <div class="entry value-plus1 active">&nbsp;</div>
                                            </div>
                                        </div>
                                        <!--quantity-->
                                        <script>
                                            $('.value-plus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                                divUpd.text(newVal);
                                            });

                                            $('.value-minus1').on('click', function(){
                                                var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                                if(newVal>=1) divUpd.text(newVal);
                                            });
                                        </script>
                                        <!--quantity-->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="women">
                                    <span class="size">XL / XXL / S </span>
                                    <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                                    <div class="add">
                                        <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="{{ asset('/') }}front-end/images/of2.png">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>