@extends('layouts.app')
@section('content')
    <meta name="description"
          content="Share your story with the world with our high-quality video book trailer services. We create book trailers that motivates the readers to read your book.">


    <div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box"><a class="ys-popup-close ys-exit" href="#">x</a>

            <div class="ys-popup-content">
                <!-- <p>Are Your Sure?</p>
                     <a href="#" class="ys-exit">Exit</a> -->

                <div class="popupform tabform clearfix  text-left">
                    <!-- <h2 class="text-center">Get a Beautiful, Results-Driven, Custom-Designed Animated Explainer Video That Get Your Prospects To Say  <span class="font-permanentmarker">YES</span></h2> -->
                    <h3>Get Special Discount</h3>
                    <figure><img alt="Excited Female Author - American Writing Solution" title="websiteimg"
                                 src="../public/assets/images/popup-img.jpg" alt="image" title="image"></figure>
                    <P>Don't miss out on special discount offer</P>
                    <form id="popupfr123222" class="cmxform" method="POST" action="/thank-you/">

                        <div class="fldst">
                            <input name="name" minlength="2" type="text" placeholder="Full Name *" required/>
                        </div>
                        <div class="fldst fldstrght">
                            <input type="Email" name="email" placeholder="Email Address *" required>
                        </div>
                        <div class="fldst">
                            <input name="phone" required="" type="number" rangelength="[2,15]" placeholder="Phone No *">
                        </div>
                        <div class="fldst">
                            <textarea name="brief"
                                      placeholder="Enter a brief description of your Book Project"></textarea>
                        </div>
                        <div class="fldst btnattach">
                            <input class="submit btnsb" type="submit" value="Submit"/>
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
            <a href="tel:310-7215151  " class="call_wrap">
                <span class="icoo"><i class="fa fa-phone"></i></span>
                <span> 310-7215151   </span>
            </a>
        </div>


        <div class="clickbutton">
            <div class="crossplus"><i class="fa fa-send"></i></div>
        </div>
        <div class="banner-form">
            <h3>Chat With Us to <br><Strong>Avail 80% Discount</Strong></h3>
            <div class="banform">
                <div class="container">
                    <div class="row">
                        <div class="ban-form">
                            <form id="popupfrm" class="cmxform" method="POST" action="/thank-you/">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input name="name" minlength="2" type="text" placeholder="Enter your name"
                                                   required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input type="email" name="email" placeholder="Enter email here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input name="phone" type="number" placeholder="Phone Number" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <textarea name="brief" id="" rows="7"
                                                      placeholder="Talk About Your Project"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input name="submit" type="submit" placeholder="Connect With Us" required/>

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








    <section class="main-ghst-writng-first-sec sec-padding-60"
             style="background-image: url({{asset("public/assets/images/video-trailer.jpg")}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ghst-writng-content">
                        <h1>Widen Your Scope with Video Book Trailer Services</h1>
                        <p>If you're an author looking to enhance your book's promotion efforts, then our video book
                            trailer services are just what you need. We provide exceptional quality book trailers that
                            come with movie-like production values at a budget-friendly price.</p>
                        <a href="../order/" class="btn-theme ml-0">Let’s Get Started</a>
                        <a href="tel:310-7215151  " class="btn-theme-outline whitebtn">310-7215151 </a>
                        <ul>
                            <li><img alt="American Writing Solution - Quality Seal" title="websiteimg"
                                     src="../public/assets/images/Seal-02.png" width="105px" height="105px"></li>
                            <li><img alt="Number 111" title="websiteimg" src="../public/assets/images/111.png"></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 serForm">

                    <div class=" col-lg-12 col-xl-12 text-center">
                        <div class="home-banner-content hme-bner-cntn">
                            <div class="analyzeform col-lg-12">
                                <h2>Signup with us to avail 80% Discount Now</h2>
                                <form id="popupfrm" class="cmxform" method="POST" action="/thank-you/">

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
                                                <input id="phone" name="phone" required="" type="number"
                                                       rangelength="[2,15]" placeholder="Enter phone here">
                                            </div>
                                            <div class="dtf">
                                                <input name="brief" required="" type="text"
                                                       placeholder="Enter a brief description">
                                            </div>
                                            <div class="dtf text-left">


                                                <input class="submit" type="submit" value="Contact Team">

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
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-one" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#F4F5F7" transform="translate(0-1977)"></path></svg> -->
    </section>


    <!-------------------------------------- Afterm Banner Action INCLUDE ----------------------------->

    <section class="designunigue topnegative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <p> American Writing Solution is your <strong>ultimate resource</strong> to hire
                                professional book writers. </p>
                        </li>
                        <li>
                            <ul class="subimages">

                                <li><img alt="Apple iBookstore logo" title="websiteimg"
                                         src="../public/assets/images/ibookstore.png"></li>
                                <li><img alt="Google Play Store logo" title="websiteimg"
                                         src="../public/assets/images/playstore.png"></li>
                                <li><img alt="Kobo logo" title="websiteimg" src="../public/assets/images/kobo.png"></li>
                                <li><img alt="Scribd logo" title="websiteimg" src="../public/assets/images/scribd.png"></li>
                            </ul>
                        </li>
                        <li><span>Got an idea for a plot?</span> <a href="../order/" class="pur-bg">Let’s get
                                writing!</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="main-counter-sec">
        <div class="container">
            <div class="row packslider">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 1" title="websiteimg"
                                         src="assets/images/services/1.svg" alt="image" title="image"/></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>100% guaranteed customer satisfaction</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 2" title="websiteimg"
                                         src="assets/images/services/2.svg" alt="image" title="image"/></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>More than 250 customers spread around the globe in 100+ countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="American Writing Solution - Service Icon 3" title="websiteimg"
                                         src="assets/images/services/3.svg" alt="image" title="image"/></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>Reasonable pricing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure><img alt="Number 4" title="websiteimg" src="assets/images/services/4.svg"
                                         alt="image" title="image"/></figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>100+ profitability</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------------------- Afterm Banner Action INCLUDE ----------------------------->


    <section class="main-ghst-writng-thierd-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-img">
                        <figure>
                            <img alt="Book video trailer service image" title="websiteimg"
                                 src="../public/assets/images/services/book-video-trailer/book-video-trailer.png" alt="image"
                                 title="image"/>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-content">
                        <h3>Get Your Book Noticed with Custom Book Trailer Template</h3>
                        <p>Struggling to reach your target audience with traditional marketing methods? It's time to try
                            something new and exciting! Our custom book trailer template can help you create an
                            exclusive, concise, and visually captivating video that will grab your audience's
                            attention.</p>


                        <!-- <a href="../order/" class="btn-theme">Let’s Get Started</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Animated Book Trailers: </h3>
                        <p>Eye-Catching and Entertaining Visuals</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Live-Action Book Trailers:</h3>
                        <p> A Cinematic Experience for Your Readers</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Teaser Trailers: </h3>
                        <p>Pique Interest and Create Anticipation for Your Book</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Author Interviews: </h3>
                        <p>Share Your Inspiration and Connect with Your Audience</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Customizable Trailers: </h3>
                        <p>Tailor-Made Videos to Match Your Book's Style</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Graphic Design Trailers: </h3>
                        <p>Visually Stunning Videos to Showcase Your Book Cover</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Audiobook Trailers: </h3>
                        <p>Preview the Sound of Your Story with Voice-Over Samples</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Event Trailers: </h3>
                        <p>Promote Your Book Launch or Speaking Engagements with Event Highlights</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="thierd-sec-content">
                        <h3>• Testimonial Trailers: </h3>
                        <p>Share Reviews and Feedback from Readers to Build Trust and Credibility.</p>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                <div class="thierd-sec-content">
                <h3>•	Event Trailers: </h3>
                    <p>Promote Your Book Launch or Speaking Engagements with Event Highlights</p>
                </div>
                </div> -->
            </div>
            <div class="row" style="justify-conten:center; align-item:center; ">
                <div class="col-md-12 ">
                    <div class="thierd-sec-content text-center">
                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>


    <section class="portfolioSec">
        <div class="container">
            <div class="">
                <h2>Hook Your Readers with Enduring Impact </h2>
                <p>Using the must-have marketing strategy, we engage your readers with captivating book trailer. Scroll
                    to see some of our best work.</p>
                <div class="row portfolio-slider">
                    <!--<div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal9"><img alt="websiteimg" title="websiteimg" src="../public/assets/images/books/1.jpg"></a></div>-->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal"><img
                                alt="Book cover image" title="websiteimg" src="../public/assets/images/books/4.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa2"><img
                                alt="Bestselling Book Cover Design Example 4" title="websiteimg"
                                src="../public/assets/images/books/5.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa3"><img
                                alt="Bestselling Book Cover Design Example 5" title="websiteimg"
                                src="../public/assets/images/books/6.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa4"><img
                                alt="Bestselling Book Cover Design Example 6" title="websiteimg"
                                src="../public/assets/images/books/7.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa5"><img
                                alt="Bestselling Book Cover Design Example 7" title="websiteimg"
                                src="../public/assets/images/books/8.jpg"></a></div>
                    <!-- <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa6"><img alt="websiteimg" title="websiteimg" src="../public/assets/images/books/9.jpg"></a></div> -->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa7"><img
                                alt="Book cover image" title="websiteimg" src="../public/assets/images/books/10.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa8"><img
                                alt="Bestselling Book Cover Design Example 3" title="websiteimg"
                                src="../public/assets/images/books/2.jpg"></a></div>
                </div>
            </div>
        </div>
    </section>




    <section class="recognitionsec">
        <div class="container">
            <div class="row your-class">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mb_logo">
                    <center><img alt="Recognition Award 1 - American Writing Solution" title="websiteimg"
                                 src="../public/assets/images/recognition_1.jpg" class="img-responsive"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 2 - American Writing Solution" title="websiteimg"
                                 src="../public/assets/images/recognition_2.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 3 - American Writing Solution" title="websiteimg"
                                 src="../public/assets/images/recognition_3.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 4 - American Writing Solution" title="websiteimg"
                                 src="../public/assets/images/recognition_4.jpg"></center>
                </div>
            </div>
        </div>
    </section>




    <section class="boxessec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxeswrap">
                        <h2>Maximize Your Book's Potential with a Stunning Book Teaser</h2>
                        <p>Are you looking for a way to give your readers a glimpse of your book's magic, while hoping
                            to increase your book sales? Our enticing visuals and attention-grabbing graphics will
                            surprise and delight your readers, leaving them eager to dive into your book. Try our book
                            teaser service today.</p>
                        <ul class="your-class">
                            <li>
                                <div class="textwrap">
                                    <h3>Long-term Marketing Strategy</h3>
                                    <p>Did you know that book trailers can provide a long-term marketing strategy for
                                        promoting your book? At our video book trailer website, we help you showcase
                                        your book visually compellingly</p>

                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure class="left-mostconsultancy">
                                    <img alt="Girl Reading a Book - American Writing Solution" title="websiteimg"
                                         src="../public/assets/images/girl-a.png">
                                </figure>
                            </li>
                            <li class="centerbox">
                                <div class="textwrap">
                                    <h3>Capitalize on Your Book's Reach </h3>
                                    <p>As a leading book trailer company in the USA, we offer a range of packages to
                                        suit your budget and needs, so that you can amplify your book sales. </p>
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>

                                </div>
                                <figure>
                                    <img alt="Girl reading a book" title="websiteimg" src="../public/assets/images/girl2.png">
                                </figure>
                            </li>
                            <li>
                                <div class="textwrap">
                                    <h3>Superior Customer Support </h3>
                                    <p>Our team of experienced customer representatives help you every step of the way,
                                        until a neat-looking, professionally created video book trailers capture the
                                        attention of your potential readers. </p>

                                    <a href="../order/" class="btn-theme">Let us guide you</a>
                                </div>
                                <figure style="bottom: 55px;" class="right-mostconsultancy">
                                    <img alt="American Writing Solution - Satisfaction Guarantee" title="websiteimg"
                                         src="../public/assets/images/guarantee.png">

                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="wdt-80">American Writing Solution Your Way</h3>
            <p class="wdt-80">Contribute positively towards your business with an authentic Blend of industry knowledge and persuasive content.</p>
            <ul class="book-slider">
              <li>
                <figure>
                  <img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/updated-layouts-collab.png">
                </figure>
                <h3>A beginning, middle, and end</h3>
                <p>Just like a movie trailer, a book trailer needs a story. The beginning sets the stage — perhaps introducing the characters or setting the tone of the book. The middle introduces the twist or complication. The ending tells people where they can buy your book.</p>

              </li>
              <li>
                <figure>
                  <img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/updated-layouts-platform.png">
                </figure>
                <h3>A concise script</h3>
                <p>Since you only have 30 to 60 seconds to grab a potential reader’s attention — that’s the length I recommend — the script is crucial. All the<br/> words and images have to count, moving your trailer’s short story <span>forward.</span></p>

              </li>
              <li>
                <figure>
                  <img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/updated-layouts-sync.png">
                </figure>
                <h3>A tone that reflects your book</h3>
                <p>Combining one of themes with music to create a trailer that reflects your book’s tone. Is it a suspenseful thriller? An uplifting romance? A how-to nonfiction book? Try different blends of themes and music until you capture the feeling you want your book to evoke in the reader.</p>

              </li>
            </ul>
          </div>
        </div>
      </div>
    </section> -->





    <div class="strt-bg">
        <section class="main-strt-cta-sec sec-padding-60"
                 style="background-image:url({{asset("public/assets/images/services/ghost-writing/newhomebanner.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta wdt-80">
                            <h3>Affordable Bundle Packages for Professional Book Teasers</h3>
                            <p>At American Writing Solution Publishers, we believe that making a book trailer should be
                                accessible to everyone, regardless of their budget or resources. Our bundle packages are
                                designed to meet your needs and provide a professional and polished book teaser that
                                will leave everyone amazed.</p>
                            <a href="../order/" class="btn-theme">Become an author to a best seller</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="strugglesec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="paright">
                        <h2>Create Amazing Book Trailers </h2>
                        <p>Overcoming obstacles is a common struggle when pursuing your dreams. However, book videos can
                            be a powerful tool to break through those barriers and enhance your marketing strategy.</p>
                    </div>
                </div>


                <div class="col-lg-8">
                    <p>Here are some reasons you should go for our book trailer services:</p>
                    <ul>

                        <li> Can work with versatile trailer types, including book trailers for kids, black books
                            trailers, and more
                        </li>
                        <li> Book trailer examples for inspiration on creating your own unique trailer</li>
                        <li> Specialized video book trailer editing to enhance the visual appeal</li>
                        <li> A top book trailer company like ours can help you create an engaging and effective
                            trailer
                        </li>
                        <li> Professionally created book video can increase its visibility and credibility</li>
                        <li> Attract potential readers at a fraction of cost with cheap yet high-quality services</li>


                    </ul>
                    <div class="">
                        <a href="../order/" class="btn-theme" style="margin-right: 10px">Let’s Get Started </a>
                        <a href="tel:310-7215151  " class="btn-theme-outline blackbtn">310-7215151 </a>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="introduction-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="wrapper">
                        <h3><span>Premium Book Trailer Service</span>Present Your Story with A Book Trailer</h3>
                        <p>Our agency creates high-quality cinematic trailers that impress the audience. By adding a
                            book trailer to your marketing project, you can enhance your influence and capture the
                            attention of potential readers in the best way possible.</p>
                        <a href="../order/" onclick="setButtonURL();" class="btn-theme">Let's Be Creative!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homwBtmform mob-no-bg" style="background-image: url({{asset("public/assets/images/contimg.jpg")}});">
        <section class="py-5">
            <div class="container ">
                <div class="row">
                    <div class=" col-lg-12 col-xl-12 text-left">
                        <div class="home-banner-content">
                            <div class="col-lg-8 offset-lg-2   inner-content mtpx-100  text-left">
                                <div class="form-box-main clearfix">
                                    <h2>We would love to hear from you</h2>
                                    <form class="cmxform" method="POST" action="/thank-you/">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="field-txt">Name <span>*</span></label>
                                                <input name="name" minlength="2" type="text"
                                                       placeholder="Enter your name" required/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Email <span>*</span></label>
                                                <input type="email" name="email" placeholder="Enter email here"
                                                       required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Phone Number<span>*</span></label>
                                                <input id="phone-country" name="phone" type="number"
                                                       placeholder="Phone Number" required/>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="slct">
                                                    <label class="field-txt">Select Service <span>*</span></label>
                                                    <select required id="packages" name="Package" class="valid"
                                                            aria-invalid="false">
                                                        <option value="-1" pack="0">Interested In</option>
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
                                                <input class="btn-theme" type="submit" value="Submit"/>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </section>

@endsection
