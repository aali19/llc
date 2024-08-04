<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{$title}}</title>
    <link rel="icon" href="{{asset('public/assets/images/favicon.png') }}" type="image/png"/>
    <meta name="our_ip" content="{{ request()->server('SERVER_ADDR') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset("public/assets/css/m-style.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("public/assets/css/style.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet"/>
    <link rel="shortcut icon" href="../favicon.png" type="image/png">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
          as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <link href="https://cdn.jsdelivr.net/npm/icomoon@1.0.0/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" as="font"
          href="https://fonts.googleapis.com/css?family=Khula:300,400,600,700,800&amp;display=swap">
    <link rel="stylesheet" as="font"
          href="https://fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NQJWCB9H');</script>
    <!-- End Google Tag Manager -->
    <style>
        .float {
            position: fixed;
            width: 55px;
            height: 55px;
            bottom: 29px;
            left: 19px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            animation: .7s shakeIt infinite alternate;
        }

        @keyframes shakeIt {
            0% {
                bottom: 10px;
            }
            100% {
                bottom: 29px;
            }
        }

        .my-float {
            margin-top: 9px;
            color: #fff;
            font-size: 37px !important;

        }

        .my-float:focus, .my-float:hover {
            color: #fff;
            box-shadow: none;
        }
    </style>
    @yield('head')
</head>

<body class="hompg">

<!--start wrapper-->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NQJWCB9H"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="mobile-nav"><a href="/" class="logo-main"> <img alt="American Writing Solution Logo" title="websiteimg"
                                                            src="{{asset("public/assets/images/logo.png")}}"></a>
    <nav>
        <ul class="unstyled mainnav pbpx-15">
            <li><a href="javascript:;">Services <i class="xicon icon-angle-down"></i></a>
                <ul class="firstlevel unstyled">
                    <li><a class="inner-pad" href="{{route("/")}}"> Book Writing</a></li>
                    <li><a class="inner-pad" href="{{route("ghost-book-writing")}}"> Ghost Writing</a></li>


                    <li><a class="inner-pad" href="{{route("autobiography-memoir-writing")}}">Autobiography & Memoir</a>
                    </li>


                    <li><a class="inner-pad" href="{{route("ebook-writing-service")}}">Ebook Writing</a></li>
                    <li><a class="inner-pad" href="{{route("article-writing-publication")}}">Article
                            Writing/Publication</a></li>
                    <li><a class="inner-pad" href="{{route("book-editing-service")}}">Book Editing</a></li>
                    <li><a class="inner-pad" href="{{route("book-publishing-service")}}">Book Publishing</a></li>
                    <li><a class="inner-pad" href="{{route("book-video-trailer")}}">Book Video Trailer</a></li>
                    <li><a class="inner-pad" href="{{route("book-author-website")}}">Author Website</a></li>
                    <li><a class="inner-pad" href="{{route("book-marketing-service")}}">Book Marketing</a></li>
                    <li><a class="inner-pad" href=""{{route("custom-book-illustration")}}">Custom Book Illustration</a>
                    </li>
                    <li><a class="inner-pad" href="{{route("book-cover-design")}}">Book Cover Design</a></li>
                    <li><a class="inner-pad" href="{{route("professional-audio-book")}}">Professional Audio Book</a>
                    </li>

                </ul>
            </li>
            <li><a href="{{route("about-us")}}">About</a></li>
            <li><a href="{{route("pricing")}}">Pricing</a></li>
            <li><a href="{{route("contact")}}">Contact</a></li>
        </ul>
    </nav>
</div>
<main class="app-container">
    <!-- Mobile Navigation Button Start-->
    <div class="mobile-nav-btn"><span class="lines"></span></div>
    <!-- Mobile Navigation Button End-->

    <header class="header-main">
        <!--<div class="top-bar-line">-->
        <!--  <div class="container">-->
        <!--    <div class="row">-->
        <!--      <div class="col-md-12">-->
        <!--        <div class="sldrwrp">-->
        <!--          <p><span>American Writing Solution: </span>The Final Revival of Opal & Nev</p>-->
        <!--          <p><span>American Writing Solution: </span>Philip Roth: The Biography</p>-->
        <!--          <p><span>American Writing Solution: </span>The Hill We Climb: An Inaugural Poem for the Country</p>-->
        <!--          <p><span>American Writing Solution: </span>The Midnight Library: A Novel</p>-->
        <!--          <p><span>American Writing Solution: </span>Win</p>-->
        <!--          <p><span>American Writing Solution: </span>The Hate U Give</p>-->
        <!--          <p><span>American Writing Solution: </span>The Lost Apothecary: A Novel</p>-->
        <!--          <p><span>American Writing Solution: </span>Good Company: A Novel </p>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="col-md-0">-->
        <!--        <div class="cntct" style="background: transparent;">-->
        <!--          <ul>-->
        <!--            <li></li>-->
        <!--            <li></li>-->
        <!--          </ul>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="top-bar d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 lg-wdt1">
                        <div class="secondlogo"><a href="/"> <img alt="websiteimg" title="websiteimg" class="img-fluid"
                                                                  src="{{asset("public/assets/images/logo.png")}}"> </a></div>
                        <ul class="othermenu forpgactive">
                            <li class=""><a href="{{route("about-us")}}" class="menuside">About</a></li>
                            <li class=""><a href="{{route("pricing")}}">Pricing</a></li>
                            <li class=""><a href="{{route("contact")}}">Contact </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 lg-wdt2">
                        <div class="uk-live">
                            <ul class="top-info-list">

                                <li><a href="tel:310-7215151   "><img alt="American flag" title="websiteimg"
                                                                      src="{{asset("public/assets/images/us-flag.png")}}">(510)
                                        255-6554 </a></li>

                                <li class="mt-2">
                                    <div data-id="TeMc7Jw4gJo" class="livechat_button"><a
                                            href="javascript:void(Tawk_API.toggle())" style="width:140px;">Live Chat</a>
                                    </div>
                                </li>


                                <li><a href="order/" class="btn-main" style="margin-left:-62px;">Let's Get Started</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="nav-area-full">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 d-flex ">
                        <div class="main-menu align-self-center d-none d-lg-block">
                            <ul class="forpgactive">
                                <li class=""><a href="{{route("/")}}"> Book Writing</a></li>
                                <li class=""><a href="{{route("ghost-book-writing")}}"> Ghost Writing</a></li>
                                <li class=""><a href="{{route("autobiography-memoir-writing")}}">Autobiography &
                                        Memoir</a></li>
                                <li class=""><a href="{{route("ebook-writing-service")}}">Ebook Writing</a></li>
                                <li class=""><a href="{{route("article-writing-publication")}}">Article
                                        Writing/Publication</a></li>
                                <li class=""><a href="{{route("book-editing-service")}}">Book Editing</a></li>
                                <li class=""><a href="{{route("book-publishing-service")}}">Book Publishing</a></li>
                            </ul>

                            <div class="has-submenu"><a href="javascript:;" class="menuside menuside2">More Services <i
                                        class="fa fa-plus "></i></a>
                                <div class="dropdown">
                                    <ul>
                                        <li class=""><a href="{{route("book-video-trailer")}}">Book Video Trailer</a>
                                        </li>
                                        <li class=""><a href="{{route("book-author-website")}}">Author Website</a></li>
                                        <li class=""><a href="{{route("book-marketing-service")}}">Book Marketing</a>
                                        </li>
                                        <li class=""><a href="{{route("book-cover-design")}}">Book Cover Design</a></li>
                                        <li class=""><a href="{{route("custom-book-illustration")}}">Custom Book
                                                Illustration</a>
                                        </li>
                                        <li class=""><a href="{{route("professional-audio-book")}}">Professional Audio
                                                Book</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @if(Session::has('success'))
    <div class="alert alert-success text-success ml-5 mt-1">{{Session("success")}}</div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger text-danger ml-5 mt-1">{{Session("error")}}</div>
    @endif
    @yield('content')
    <footer class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 address-main">
                        <div class="fologo">
                            <figure><a href="/"><img alt="Loading animation" title="websiteimg"
                                                     src="{{asset("public/assets/images/footer-logo.png")}}"
                                                     style="    filter: brightness(0) invert(1);"></a></figure>
                        </div>
                        <ul class="addressnav">
                            <li><span class="icon-phone2"></span><a href="tel:310-7215151">(510) 255-6554 </a></li>
                            <li><span class="icon-map-marker3"></span>40 N Clinton St Chicago, Illinois</li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="wrapper">
                            <ul class="footer-nav">
                                <li><a href="{{route("/")}}">Home</a></li>
                                <li><a href="{{route("about-us")}}">About</a></li>
                                <li><a href="{{route("faq")}}">FAQ,s</a></li>
                                <li><a href="{{route("pricing")}}">Pricing</a></li>
                                <li><a href="{{route("contact")}}">Contact</a></li>
                                <li><a href="{{route("american-writing-solutions")}}">Customer Reviews</a></li>
                                <li><a href="{{route("order")}}" style="color:#00463a;font-weight:700;">Let's Get
                                        Started</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="wrapper">
                            <ul class="footer-nav footer-srvd-nav">
                                <li><a class="inner-pad" href="{{route("ghost-book-writing")}}"> Book Writing</a></li>
                                <li><a class="inner-pad" href="{{route("book-editing-service")}}">Editing</a></li>
                                <li><a class="inner-pad" href="{{route("book-publishing-service")}}">Book Publishing</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("ebook-writing-service")}}">Ebook Writing</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("book-marketing-service")}}">Book Marketing</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("autobiography-memoir-writing")}}">Autobiography
                                        & Memoir</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="wrapper">
                            <ul class="footer-nav footer-srvd-nav">
                                <li><a class="inner-pad" href="{{route("book-author-website")}}">Author Website</a></li>
                                <li><a class="inner-pad" href="{{route("professional-audio-book")}}">Professional Audio
                                        Book</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("book-video-trailer")}}">Book Video Trailer</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("book-cover-design")}}">Book Cover Design</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("custom-book-illustration")}}">Custom Book
                                        Illustration</a>
                                </li>
                                <li><a class="inner-pad" href="{{route("article-writing-publication")}}">Article Writing
                                        &
                                        Publication</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12"><br>
                        <h4 style="color:#fff; margin-top:20px;"> Social Media</h4>
                        <ul class="ftr-social">
                            <li><a target="_blank" href="https://www.facebook.com/americanwritingsolution/"><span
                                        class="icon-facebook"></span></a></li>
                            <li><a target="_blank"
                                   href="https://www.linkedin.com/company/american-writing-solution"><span
                                        class="fa fa-linkedin"></span></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/americanwritingsolution/"><span
                                        class="fa fa-instagram" aria-hidden="true"></span></a></li>
                        </ul>
                        <br>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <p class="copyright"><strong style="color:#fff;">© 2023 - All Rights Reserved, American
                                    Writing Solution.</strong> <br>
                                <a href="{{route("terms-and-conditions")}}" rel="nofollow" title="" style="color:#fff;">
                                    Terms of
                                    Services</a>&nbsp; &nbsp; | &nbsp; &nbsp;
                                <a href="{{route("privacy-policy")}}" rel="nofollow" title="" style="color:#fff;">Privacy
                                    Policy</a>
                            </p>
                        </div>
                        <div class="col-sm-5">
                            <div class="crds-img" style="margin-top:17px;"><img alt="Loading animation"
                                                                                title="websiteimg"
                                                                                src="{{asset("public/assets/images/card-brands.svg")}}"
                                                                                style="filter: brightness(5);"></div>
                        </div>
                    </div>
                </div>
            </div>

    </footer>
</main>
<div class="mobile-cta hidden-sm-up"><a href="tel:(510) 255-6554  " class="xicon phone"> <i class="icon-phone"></i> </a>
</div>
<div class="mypopup-wrap active" style="display: none;">
    <div class="mypopup">
        <div class="left">
            <figure><img alt="Loading animation" title="websiteimg" class="myLazy"
                         srcset="{{asset("public/assets/images/popup.png")}}"></figure>
        </div>
        <div class="right">
            <div class="closebutton">x</div>
            <div class="mypopup-innerwrap">
                <h3 class="text-center">BLACK FRIDAY! <br>
                    SIGN UP NOW TO GET <span> 50% DISCOUNT</span></h3>
                <div class="form_wrap">
                    <div class="analyzeform ">
                        <form class="" method="POST" action="/thank-you/">

                            <div class="row">
                                <div class="wrap">
                                    <div class="dtf">
                                        <input name="name" minlength="5" class="round" type="text"
                                               placeholder="Enter Name" required="">
                                    </div>
                                    <div class="dtf">
                                        <input type="email" name="email" placeholder="Enter email here" required="">
                                    </div>
                                    <div class="dtf">
                                        <input name="phone" type="number" autocomplete="off"
                                               onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )"
                                               class="number required" placeholder="Phone Number">
                                    </div>
                                    <div class="dtf text-left">
                                        <input class="submit" type="submit" value="RESERVE THIS OFFER">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mypopup-wrap active" style="display: none;">
    <div class="mypopup">
        <div class="left">
        </div>
        <div class="right">
            <div class="closebutton">x</div>
            <div class="mypopup-innerwrap">
                <h3 class="text-center">NEW YEAR SALE! <br>
                    SIGN UP NOW TO GET <span> 50% DISCOUNT</span></h3>
                <div class="form_wrap">
                    <div class="analyzeform ">

                        <form class="" method="POST" action="/thank-you/">

                            <div class="row">
                                <div class="wrap">
                                    <div class="dtf">
                                        <input name="name" minlength="5" class="round" type="text"
                                               placeholder="Enter Name" required="">
                                    </div>
                                    <div class="dtf">
                                        <input type="email" name="email" placeholder="Enter email here" required="">
                                    </div>
                                    <div class="dtf">
                                        <input name="phone" type="number" placeholder="Phone Number" required=""
                                               autocomplete="off">
                                    </div>
                                    <div class="dtf text-left">
                                        <input class="submit" type="submit" value="RESERVE THIS OFFER">

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay" style="display: none;"></div>

<a href="https://api.whatsapp.com/send?phone=13107215151" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<style>
    img.iicon {
        width: 76%;
        display: flex;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


@yield('script')
<!--app-->
<!-- <script>
    $j('table.dataTable thead .sorting').css('background-image', 'none')
</script> -->

<script src="{{asset("public/assets/js/mlib.js")}}"></script>
<script rel="modulepreload" src="{{asset("public/assets/js/functions.js")}}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/652538a6eb150b3fb99ffb44/1hccmaj5i';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script>
    zE(function () {
        $zopim.livechat.setOnUnreadMsgs(function (numUnread) {
            if (numUnread > 0 && !$zopim.livechat.window.getDisplay()) {
                $zopim.livechat.window.show();
            }
        })
    });
</script>
</body>

</html>
