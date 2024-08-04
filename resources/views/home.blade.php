@extends('layouts.app')
@section('content')

    <meta name="description"
          content="Are you hunting for professional book writing services? American Writing Solution expert book writers manuscript compelling information with a satisfying ending. Get 100% quality service today!">

    <div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box"><a class="ys-popup-close ys-exit" href="#">x</a>
            <div class="ys-popup-content">
                <div class="popupform tabform clearfix  text-left">
                    <h3>Get Special Discount</h3>
                    <P>Don't miss out on special discount offer</P>
                    <form class="cmxform" method="POST" action="{{route("thank-you.store")}}">
@csrf
                        <div class="fldst">
                            <input name="name" minlength="2" type="text" placeholder="Full Name *" required>
                        </div>
                        <div class="fldst fldstrght">
                            <input type="Email" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="fldst">
                            <input name="phone" required="" type="number" placeholder="Phone No *">
                        </div>
                        <div class="fldst">
                            <textarea name="brief"
                                      placeholder="Enter a brief description of your Book Project"></textarea>
                        </div>
                        <div class="fldst btnattach">
                            <input type="submit" value="Submit">
                            <!-- <input name="btn-theme" type="submit" placeholder="Connect With Us" value="Submit">-->
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="floatbutton">
        <div class="btns_wrap">

            <!-- <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
              <span class="icoo"><i class="fa fa-comment"></i></span>
              <span>Chat With Us</span>
            </a> -->
            <a href="tel:310-7215151  " class="call_wrap"> <span class="icoo"><i class="fa fa-phone"></i></span>
                <span> 310-7215151 </span> </a>
        </div>


    </div>
    <div class="slider-wrapper">
        <section class="homeslider">
            <div class="item">
                <div class="home-banner d-flex">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12">
                                <div class="home-banner-content">
                                    <h1>Unveil Your Ideas, We'll Ink the Pages. Welcome to Your Creative Partner</h1>
                                    <p class="subtitle">Having a positive idea but lacking the time to put it into
                                        writing? Grant us the opportunity to accomplish this task on your behalf.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="home-banner d-flex">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12">
                                <div class="home-banner-content">
                                    <h2 class="hhh">We help you bring your imagination to life by putting it into words
                                        for you. </h2>
                                    <p class="subtitle">Got a constructive idea but struggling to find time to put it on
                                        paper? Why not let us take care of that for you?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="home-banner d-flex">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class=" col-lg-12 col-md-12 col-sm-12">
                                <div class="home-banner-content">
                                    <h2 class="hhh">You've found the Way to Outstanding Content!</h2>
                                    <p class="subtitle">We're glad you've chosen American Writing Solution as your go-to
                                        source for top-notch writing assistance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="bannerformnew">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-12 col-xl-12 text-center">
                        <div class="home-banner-content hme-bner-cntn">
                            <div class="analyzeform col-lg-12">
                                <form class="cmxform" method="POST" action="{{route("thank-you.store")}}">
                                    @csrf
                                    <div class="row">
                                        <div class="wrap">
                                            <div class="dtf">
                                                <input name="name" minlength="5" class="round" type="text"
                                                       placeholder="Enter Name" required="">
                                            </div>
                                            <div class="dtf">
                                                <input type="email" name="email" placeholder="Enter email here"
                                                       required="">
                                            </div>
                                            <div class="dtf">
                                                <input name="phone" required="" type="number"
                                                       placeholder="Enter phone here">
                                            </div>
                                            <div class="dtf">
                                                <input name="brief" required="" type="text"
                                                       placeholder="Message">
                                            </div>
                                            <div class="dtf text-left">

                                                <input class="submit" type="submit" name="submit" value="Contact Team">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ratingBr">
                        <p>Rated 9 out of 10 <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </span> based on 2,359 satisfied customers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="designunigue topnegative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <p> Welcome to American Writing Solution: Shape Your Words, Inspire Your Success</p>
                        </li>
                        <li>
                            <ul class="subimages">

                                <li><img alt="Apple iBookstore logo" title="websiteimg"
                                         src="{{asset("public/assets/images/ibookstore.png")}}"></li>
                                <li><img alt="Google Play Store logo" title="websiteimg"
                                         src="{{asset("public/assets/images/playstore.png")}}"></li>
                                <li><img alt="Kobo logo" title="websiteimg" src="{{asset("public/assets/images/kobo.png")}}"></li>
                                <li><img alt="Scribd logo" title="websiteimg" src="{{asset("public/assets/images/scribd.png")}}"></li>
                            </ul>
                        </li>
                        <li><span>Got an idea for a plot?</span> <a href="order/" class="pur-bg">Let’s get writing!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-counter-sec">
        <div class="container">
            <div class="row packslider">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 1" title="Loading animation"
                                         src="public/assets/images/services/1.svg"></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>100% guaranteed customer satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 2" title="Loading animation"
                                         src="public/assets/images/services/2.svg"></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>More than 300+ customers spread around the globe in 100+ countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 3" title="Loading animation"
                                         src="public/assets/images/services/3.svg"></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>Reasonable pricing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="websiteimg" title="Loading animation" src="public/assets/images/services/4.svg">
                            </figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>100+ profitability</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="introduction-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="wrapper">
                        <h3><span>PREMIUM BOOK WRITING SERVICES </span>Everything You Can Image is Real with Our Book
                            Writers for Hire </h3>
                        <p>Do you have an inspiring idea for a book but can’t seem to put it into words? Let our
                            professional book writers for hire add colors to your vision. With our high-quality
                            services, take the literary world by storm. Don’t let your idea fade –trust us to give it
                            the soul it deserves with our book writing company. </p>
                        <a href="order/" class="btn-theme">Let’s start writing a book with us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bookSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Our Book Writers Create Content to Inspire the World</h2>
                </div>
            </div>
            <div class="row ser_slider">
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-1.jpg">
                        <h2><a href="ghost-book-writing/" style="color:#111111">American Writing Solution</a></h2>
                        <p>Like many of our customers, become an author of a best-seller.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Loading animation" title="Ghost book writing icon
" src="public/assets/images/services/ghost-book-writing.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())"> Chat with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-2.jpg">
                        <h2><a style="color:#111111" href="book-editing-service/">Book Editing</a></h2>
                        <p>Get quality and detailed editing services to polish and refine your manuscript. </p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Editing service icon" title="websiteimg"
                                                           src="public/assets/images/services/editing.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())"> Chat with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-4.jpg">
                        <h2><a style="color:#111111" href="/book-publishing-service/">Book Publishing</a></h2>
                        <p>Experience publication navigation that is smooth as a breeze.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Loading animation" title="Book publishing icon"
                                                           src="public/assets/images/services/book-publishing.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-5.jpg">
                        <h2><a style="color:#111111" href="ebook-writing-service/">Book Writing Services </a></h2>
                        <p>Looking for the best book writing services? Become one of the best sellers with us.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Ebook writing icon" title="websiteimg"
                                                           src="public/assets/images/services/ebook-writing.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-6.jpg">
                        <h2><a style="color:#111111" href="book-marketing-service/">EBook Marketing</a></h2>
                        <p>Make your work recognized in the literary sphere with our expert book marketers.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Book marketing service icon" title="websiteimg"
                                                           src="public/assets/images/services/book-marketing.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-8.jpg">
                        <h2><a style="color:#111111" href="book-author-website/">Author Website</a></h2>
                        <p>Nowadays, the author's website is a sign of authenticity and relevancy in the book
                            marketplace. American Writing Solution will give you an online presence.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Author Website Service - American Writing Solution"
                                                           title="websiteimg"
                                                           src="public/assets/images/services/author-website.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-9.jpg">
                        <h2><a style="color:#111111" href="professional-audio-book/">Professional Audio Book</a></h2>
                        <p>Audiobooks with quality narration and in-depth audio edits.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Professional audio book service icon" title="websiteimg"
                                                           src="public/assets/images/services/professional-audio-book.svg">
                            </div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())"> Chat with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-10.jpg">
                        <h2><a style="color:#111111" href="Book-Video-Trailer/">Book Video Trailer</a></h2>
                        <p>Create an enthralling video trailer via our award-winning designers.</p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Book video trailer service icon" title="websiteimg"
                                                           src="public/assets/images/services/book-video-trailer.svg">
                            </div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-11.jpg">
                        <h2><a style="color:#111111" href="book-cover-design/">Book Cover Design</a></h2>
                        <p>Create a gorgeous book cover to spike up your book sales. </p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Book cover design service icon" title="websiteimg"
                                                           src="public/assets/images/services/book-cover-design.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-12.jpg">
                        <h2><a style="color:#111111" href="custom-book-illustration/">Custom Book Illustration</a></h2>
                        <p>Make an illustration that speaks a thousand words. </p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img alt="Custom book illustration service icon"
                                                           title="websiteimg"
                                                           src="public/assets/images/services/custom-book-illustration.svg">
                            </div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())" target="_self"> Chat
                                    with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box"><img alt="Loading animation" title="websiteimg" src="public/assets/images/img-13.jpg">
                        <h2><a style="color:#111111" href="article-writing-publication/">Article Writing &
                                Publication</a></h2>
                        <p>Become a thought leader and provide in-depth, genuine information.
                        </p>
                    </div>
                    <div class="homepage-programs-entry">
                        <div class="program-info">
                            <div class="program-icon"><img
                                    alt="Article Writing & Publication - American Writing Solution" title="websiteimg"
                                    src="assets/images/services/article-writing-%26-publication.svg"></div>
                            <div class="program-title"><a href="javascript:void(Tawk_API.toggle())"> Chat with us to
                                    <span>Get Qoute</span> </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="packages-sec leftinner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h2 class="text-left"><span>Make Your Dream a Best-Seller</span>Delivering What Others THINK AND SEE
                        but cannot Achieve. </h2>
                    <p class="text-left">It’s high time to turn your dream into a reality with the help of the best
                        book-writing company in the USA –American Writing Solution. We offer a comprehensive bundle of
                        book writing and publishing solutions to give your book the professional touch it deserves. Our
                        agency consists of expert book writers who can help you produce a best-seller. Whether you want
                        to create books for writing guidance or want to share your personal experience, you have our
                        incomparable support. </p>
                    <p>Don’t wait any longer; hire our book writers in the USA today and make your literary dreams come
                        true.</p>

                    <ul class="checklist">
                        <li>Comprehensive Writing Services</li>
                        <li>Book Publication Navigation</li>
                        <li>Dedicated Project Managers</li>
                        <li>Designing, Typesetting, Formatting</li>
                        <li>Audio Book Creation</li>
                        <li>Exclusive Book Marketing</li>
                    </ul>
                    <div class="text-left flex-wrap align-items-center">
                        <p class="pbpx-0 fc-black text-left">Need help? <a href="order/" class="btn-theme abtn"
                                                                           style="margin-right: -6px; padding: 12px 20px;">Let's
                                get started.</a></p>
                        <div data-id="TeMc7Jw4gJo" class="livechat_button bbtn"
                             style="margin-left:15px; margin-top:1px;">
                            <a href="javascript:void(Tawk_API.toggle())">Live Chat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--<figure class="hidemob">
          <img alt="websiteimg" title="websiteimg" loading="lazy"  src="assets/images/bookinner.png">
        </figure> -->
                    <div class="mst-img-sec">
                        <div class="banner-form">
                            <h3>Sign up to avail 80% Discount</h3>
                            <p>Avail the Limited Time Offer Today!</p>
                            <div class="banform">
                                <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <div class="ban-form">
                                                <form class="cmxform" id="bannerform" method="POST"
                                                      action="{{route("thank-you.store")}}">
@csrf
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input name="name" minlength="2" type="text"
                                                                       placeholder="Enter your name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input type="email" name="email"
                                                                       placeholder="Enter email here" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input name="phone" type="number"
                                                                       placeholder="Phone Number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset massage-field">
                                                                <textarea placeholder="Message" name="brief"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="fldset">
                                                                <input name="btn-theme" type="submit">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-pfrn-sec">
        <div class="container">
            <div class="row">
                <div class="main-wtn-sec">
                    <ul>
                        <li>
                            <div class="crte-prf">
                                <h3>Searching for an affordable book-writing service USA?</h3>
                                <p>Let’s connect to get the best packages and deal offers!</p>
                            </div>
                        </li>
                        <li class="sec">
                            <div class="dext">
                                <div class="main-percent">
                                    <div class="per-box1">
                                        <figure><img alt="50% off banner" title="websiteimg" loading="lazy"
                                                     class="hme-nmrl-img"
                                                     src="public/assets/images/50percent.png"></figure>
                                    </div>
                                    <div class="per-box2">
                                        <h3><span>CHAT</span></h3>
                                        <h3 style="font-size:14px;">with our dedicated customer representatives
                                            now!</h3>
                                        <!-- <h3> 80% OFF </h3> -->

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="chtnow">
                                <div data-id="VeGh_lF9ui6" class="livechat_button" style="margin-top:10px;"><a
                                        href="javascript:void(Tawk_API.toggle())">Live
                                        Chat</a></div>
                                <a href="order/" class="btn-theme-outline1 btngetstarted">Avail 80%
                                    Discount</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolioSec">
        <div class="container">
            <div class="">
                <h2>The One and Only Book Writing Website You Need </h2>
                <p>With us, your goal to become the next best-selling author is not too far. We have the best editing
                    and publishing solutions at cheap rates.</p>
                <div class="row portfolio-slider">
                    <!--<div class="col-md-2"><img alt="websiteimg" title="websiteimg" loading="lazy"  src="../assets/images/books/1.jpg" loading="lazy" ></div>-->
                    <div class="col-md-2"><img alt="Book cover image" title="websiteimg" src="public/assets/images/books/4.jpg"
                                               loading="lazy"></div>
                    <div class="col-md-2"><img alt="Bestselling Book Cover Design Example 4" title="websiteimg"
                                               src="public/assets/images/books/5.jpg" loading="lazy"></div>
                    <div class="col-md-2"><img alt="Bestselling Book Cover Design Example 6" title="websiteimg"
                                               src="public/assets/images/books/7.jpg" loading="lazy"></div>
                    <!-- <div class="col-md-2"><img alt="websiteimg" title="websiteimg" src="assets/images/books/9.jpg" loading="lazy"></div> -->
                    <div class="col-md-2"><img alt="Book cover image" title="websiteimg"
                                               src="public/assets/images/books/10.jpg" loading="lazy"></div>
                    <div class="col-md-2"><img alt="Bestselling Book Cover Design Example 3" title="websiteimg"
                                               src="public/assets/images/books/2.jpg" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="testimonials">
        <section class="main-sft-sec sec-padding-60">
            <div class="container">

                <div class="row testimonials-slider">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="tls-wrap">
                            <div class="tls-sft">
                                <p class="pp">Hiring book writers from American Writing Solution was the best decision I
                                    made for my writing career. Their website for writing a book was user-friendly and
                                    made the process seamless. The team of writers and books they provided me with
                                    helped me turn my idea into a top-quality novel. I can’t thank them enough for their
                                    exceptional services!</p>
                                <div class="col-md-12">
                                    <div class="img"> KW
                                        <!-- <img alt="websiteimg" title="websiteimg" loading="lazy"  src="assets/images/testi.jpg" > -->
                                    </div>
                                    <h5>Sarah J. <span>After The Rain </span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="tls-wrap">
                            <div class="tls-sft">
                                <p class="pp">As an aspiring author, I struggled to find the best books on novel writing
                                    that could help me improve my craft. However, after hiring the book writers from
                                    American Writing Solution, I didn’t need to look any further. Their team of experts
                                    guided me every step of the way and helped me write a book that exceeded my
                                    expectations. Their professionalism and dedication are truly commendable.</p>
                                <div class="col-md-12">
                                    <div class="img"> DM
                                        <!-- <img alt="websiteimg" title="websiteimg" loading="lazy"  src="assets/images/testi.jpg" > -->
                                    </div>
                                    <h5>Mark Ronald.<span>Vendetta </span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="tls-wrap">
                            <div class="tls-sft">
                                <p class="pp">I came across American Writing Solution while searching for book writing
                                    services online, and I’m glad I did. Their team of experienced writers helped me
                                    bring my story to life in a way I never thought was possible. The review and
                                    feedback process was seamless and efficient, and I couldn’t be happier with the
                                    final product. I would recommend their services to anyone looking to hire book
                                    writers.</p>
                                <div class="col-md-12">
                                    <div class="img"> DE
                                        <!-- <img alt="websiteimg" title="websiteimg" loading="lazy"  src="assets/images/testi.jpg" > -->
                                    </div>
                                    <h5>Amanda Smith.<span>The Sports Gene</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- <section class="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <article>

        </article>
      </div>
    </div>
  </div>
</section>
 -->

    <section class="homwBtmform mob-no-bg" style="background-image: url({{asset("public/assets/images/contimg.jpg")}});">
        <div class="py-5">
            <div class="container ">
                <div class="row">
                    <div class=" col-lg-12 col-xl-12 text-left">
                        <div class="home-banner-content">
                            <div class="col-lg-8 offset-lg-2   inner-content mtpx-100  text-left">
                                <div class="form-box-main clearfix">
                                    <h2>We would love to hear from you</h2>
                                    <form class="cmxform" method="POST" action="{{route("thank-you.store")}}">
@csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="field-txt">Name <span>*</span></label>
                                                <input name="name" minlength="2" type="text"
                                                       placeholder="Enter your name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Email <span>*</span></label>
                                                <input type="email" name="email" placeholder="Enter email here"
                                                       required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Phone Number<span>*</span></label>
                                                <input id="phone-country" name="phone" type="number"
                                                       placeholder="Phone Number" required>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="slct">
                                                    <label class="field-txt">Select Service <span>*</span></label>
                                                    <select required id="packages" name="package" class="valid"
                                                            aria-invalid="false">
                                                        <option value="">Interested In</option>
                                                        <option value="American Writing Solutions">Ghost Writings
                                                        </option>
                                                        <option value="Editing">Editing</option>
                                                        <option value="Book Publishing">Book Publishing</option>
                                                        <option value="Ebook Writing">Ebook Writing</option>
                                                        <option value="Article Writing & Publication">Article Writing &
                                                            Publication
                                                        </option>
                                                        <option value="Book Video Trailer">Book Video Trailer</option>
                                                        <option value="Copyrights Protection">Autobiography & Memoirs
                                                        </option>
                                                        <option value="Author Website">Author Website</option>
                                                        <option value="Book Marketing">Book Marketing</option>
                                                        <option value="Book Cover Design">Book Cover Design</option>
                                                        <option value="Custom Book Illustration">Custom Book
                                                            Illustration
                                                        </option>
                                                        <option value="Professional Audio Book">Professional Audio Book
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="field-txt">Additional Comments <span>*</span></label>
                                                <textarea name="brief" placeholder="Enter message here" required>
                                  </textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="btn-theme" type="submit" value="Submit">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
