@extends('layouts.app')
@section('content')

    <meta name="description"
          content="American Writing Solution is a leading book publishing company committed to helping authors achieve their publishing dreams. Learn more about us and our services.
">
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
                                 src="{{asset("public/assets/images/popup-img.jpg")}}" alt="image" title="image"></figure>
                    <P>Don't miss out on special discount offer</P>
                    <form class="cmxform" method="POST" action="/thank-you/">

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
    <!-------------------------------------- HEADER INCLUDE ----------------------------->
    <div class="floatbutton">
        <div class="btns_wrap">

            <!-- <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
                    <span class="icoo"><i class="fa fa-comment"></i></span>
                    <span>Chat With Us</span>
                  </a> -->
            <a href="tel:310-7215151  " class="call_wrap"> <span class="icoo"><i class="fa fa-phone"></i></span> <span>310-7215151  </span>
            </a>
        </div>
        <div class="clickbutton">
            <div class="crossplus"><i class="fa fa-send"></i></div>
        </div>
        <div class="banner-form">
            <h3>Chat With Us to <br>
                <Strong>Avail 80% Discount</Strong>
            </h3>
            <div class="banform">
                <div class="container">
                    <div class="row">
                        <div class="ban-form">
                            <form class="cmxform" id="bannerform" method="POST" action="/thank-you/">

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
    <section class="main-team_work-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="team-content"><span>Know Who We Are</span>
                        <h1 style="    color: #091e42;
    font-weight: 700;     font-size: 26px;
">We Would Proudly Like To Introduce American Writing Solution Team Of Champions</h1>
                        <p>We started out in 2014 to aid tens and thousands of authors make their mark in the writing
                            industry. Our focus is to give authors a launching pad to convert them into successful and
                            established writers; whether new or already established.</p>
                        <p>We are proud of our highly skilled, talented, and dedicated team of writers who are true to
                            their word, as they deliver according to their proficient skills, which are no doubt
                            unparalleled and well-versed in this competitive industry. </p>
                        <p>Our writers put their expertise to test by providing innovative and professional-grade
                            content that satisfies our customers every single time. Our journey to be the best was not
                            an easy one, but we still pulled through and our resilience allowed us to reach the highest
                            possible level of excellence. </p>
                        <p>We prioritize our clients, working with them to the end, as they are our first and foremost
                            asset. The list of our clients varies from novelists, publishing houses, bestselling
                            authors, celebrities to business executives, and many more; this indicates our unparalleled
                            and unrivaled services in the writing service industry. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="teamwork-img">
                        <figure><img alt="Proud American Writing Solution Team Members" title="websiteimg"
                                     src="{{asset("public/assets/images/about-us/we-are-proud-to.png")}}" alt="image"
                                     title="image"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-atlns sec-padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="info-content wdt-80">
                        <h3>Professional book writer, Editing & Publishing Solutions</h3>
                        <p>You can give your idea to the professional writers and they will form your ideas into a
                            marvelous book!</p>
                    </div>
                </div>
            </div>
            <div class="row services-slider">
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-writing/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Ghost book writing icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/ghost-book-writing.svg")}}"
                                             alt="image" title="image"/> <img
                                        alt="Ghost book writing service hover icon" title="websiteimg" class="hver-img"
                                        src="{{asset("public/assets/images/services/ghost-book-writing-hover.svg")}}"
                                        alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Book Writing</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-editing-service/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Editing service icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/editing.svg")}}" alt="image"
                                             title="image"/> <img alt="Editing service hover icon" title="websiteimg"
                                                                  class="hver-img"
                                                                  src="{{asset("public/assets/images/services/editing-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Editing</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="proofreading/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Proofreading service icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/proofreading.svg")}}" alt="image"
                                             title="image"/> <img alt="Proofreading service hover icon"
                                                                  title="websiteimg" class="hver-img"
                                                                  src="{{asset("public/assets/images/services/proofreading-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Proofreading</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-publishing-service/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Book publishing icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/book-publishing.svg")}}" alt="image"
                                             title="image"/> <img alt="Book publishing service hover icon"
                                                                  title="websiteimg" class="hver-img"
                                                                  src="{{asset("public/assets/images/services/book-publishing-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Book <br/>
                                    Publishing</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="ebook-writing-service/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Ebook writing icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/ebook-writing.svg")}}" alt="image"
                                             title="image"/> <img alt="Ebook writing icon" title="websiteimg"
                                                                  class="hver-img"
                                                                  src="{{asset("public/assets/images/services/ebook-writing-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Ebook <br/>
                                    Writing</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-marketing-service/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Book marketing service icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/book-marketing.svg")}}" alt="image"
                                             title="image"/> <img alt="Book marketing service hover icon"
                                                                  title="websiteimg" class="hver-img"
                                                                  src="{{asset("public/assets/images/services/book-marketing-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Book <br/>
                                    Marketing</p>
                            </div>
                        </div>
                    </a></div>

                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-author-website/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Author Website Service - American Writing Solution" title="websiteimg"
                                             class="nmrl-img"
                                             src="{{asset("public/assets/images/services/author-website.svg")}}" alt="image"
                                             title="image"/> <img alt="Author website services hover icon"
                                                                  title="websiteimg" class="hver-img"
                                                                  src="{{asset("public/assets/images/services/author-website-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Author <br/>
                                    Website</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="professional-audio-book/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Professional audio book service icon" title="websiteimg"
                                             class="nmrl-img"
                                             src="{{asset("public/assets/images/services/professional-audio-book.svg")}}"
                                             alt="image" title="image"/> <img alt="Professional audio book icon"
                                                                              title="websiteimg" class="hver-img"
                                                                              src="{{asset("public/assets/images/services/professional-audio-book-hover.svg")}}"
                                                                              alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Professional <br/>
                                    Audio Book</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="Book-Video-Trailer/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Book video trailer service icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/book-video-trailer.svg")}}"
                                             alt="image" title="image"/> <img
                                        alt="Book video trailer service hover icon" title="websiteimg" class="hver-img"
                                        src="{{asset("public/assets/images/services/book-video-trailer-hover.svg")}}"
                                        alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Book Video <br/>
                                    Trailer</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="book-cover-design/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Book cover design service icon" title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/book-cover-design.svg")}}" alt="image"
                                             title="image"/> <img alt="Book cover design service hover icon"
                                                                  title="websiteimg" class="hver-img"
                                                                  src="{{asset("public/assets/images/services/book-cover-design-hover.svg")}}"
                                                                  alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Book Cover <br/>
                                    Design</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="custom-book-illustration/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Custom book illustration service icon" title="websiteimg"
                                             class="nmrl-img"
                                             src="{{asset("public/assets/images/services/custom-book-illustration.svg")}}"
                                             alt="image" title="image"/> <img alt="Custom book illustration icon"
                                                                              title="websiteimg" class="hver-img"
                                                                              src="{{asset("public/assets/images/services/custom-book-illustration-hover.svg")}}"
                                                                              alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Custom Book <br/>
                                    Illustration</p>
                            </div>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-3 col-sm-12"><a href="article-writing-publication/">
                        <div class="main-atls">
                            <div class="alts-box1">
                                <figure><img alt="Article Writing & Publication - American Writing Solution"
                                             title="websiteimg" class="nmrl-img"
                                             src="{{asset("public/assets/images/services/article-writing-%26-publication.svg")}}"
                                             alt="image" title="image"/> <img
                                        alt="Article Writing & Publication Hover - American Writing Solution"
                                        title="websiteimg" class="hver-img"
                                        src="{{asset("public/assets/images/services/article-writing-%26-publication-hover.svg")}}"
                                        alt="image" title="image"/></figure>
                            </div>
                            <div class="alts-box2">
                                <p>Article Writing & <br/>
                                    Publication</p>
                            </div>
                        </div>
                    </a></div>
            </div>
        </div>
    </section>
    <section class="main-belve-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="team-content"><span>Meet the team</span>
                        <h3>Effectively Collaborating to Produce the Best Possible Outcome</h3>
                        <p>American Writing Solution stand fast to its work ethic; quality is our top priority which
                            sets us apart from others. We believe authenticity and quality should be followed as the
                            ethical norm.</p>
                        <p>We have an array of over 2,000 American writing experts, who are the best of the best, all of
                            whom are driven with the same passion for providing refined and top-notch content. Our
                            writers collaborate with the clients to trade ideas, creating entertaining and engaging
                            content for the readers.</p>
                        <p>The American Writing Solution service writers help our clients with everything from writing
                            to the publishing process – from design, editorial, marketing, and sales. Simultaneously, we
                            take strict measures to safeguard our authors’ intellectual property and freedom of
                            expression to make sure that their content doesn’t lose the essence of originality.</p>
                        <a href="order/" class="btn-theme">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div>
                        <figure><img alt="Collaborative and Effective Publishing Team" title="websiteimg"
                                     src="{{asset("public/assets/images/about-us/collaboratively-and-effectively.png")}}">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="hart-bg">
        <section class="main-strt-cta-sec main-hart-sec sec-padding-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta">
                            <h3>Your one-stop shop offering all American Writing Solution, editing, <b
                                    class="small-a">a</b>nd publishing solutions</h3>
                            <p>Want to write your own book? American Writing Solution is the way to go!</p>
                            <p>We believe that anyone with a compelling story, innovative concept, or empowering message
                                deserves the opportunity to share it in the form of a well-written book.</p>
                            <a href="order/" class="btn-theme">Let’s start writing a book with us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="main-wkng-opn-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="team-content"><span>Why Choose US? </span>
                        <h3>Because we don’t want to just confine our clients’ to pages; rather, we want our clients to
                            be heard of around the world.</h3>
                        <p><b>You Deserve The Very Best, And American Writing Solution Will Make It Happen</b></p>
                        <p>There are over 450+ first-time authors that have written books with us, their books have been
                            published and gone to produce business out of book sales and are generating royalty. Our
                            in-house writing team consists of industry insiders with former positions at Big-Five
                            publishing houses that includes, Simon & Schuster, HarperCollins, Random House, Wiley, and
                            Literary Reviews. </p>
                        <p>We are proud to say that our success rate is commendable and it speaks for itself, as over
                            1.3 million lives have been touched by us. We will do justice to your book and if you chose
                            to join hands with us, then we promise you will end up with a finished book that can touch
                            and change thousands of lives. While on paper, we may be a writing and publishing agency,
                            but we are all about establishing trust in business; because we know that people who reach
                            out to us are putting their life’s work and the stories of their lives in our hands. This
                            reflects that credentials hence we prioritize chemistry between us and our clients.</p>
                        <p>You will find this as soon as you contact us; we promise you great customer service,
                            dedication, and professionalism. We are proud of the quality of the work we provide and our
                            lasting professional relationships. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="teamwork-img">
                        <figure><img alt="You Deserve the Very Best in Publishing Services" title="websiteimg"
                                     src="{{asset("public/assets/images/about-us/you-deserve-the-very.png")}}" alt="image"
                                     title="image"/></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-wrkup-sec main-cntc-form sec-padding-60"
             style="background-image:url({{asset("public/assets/images/about-us/company-background.jpg")}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrk-up-wrap">
                        <div class="cntc-form">
                            <h3>Need Help Publishing Your Book?</h3>
                            <p>Our comprehensive services will provide you with everything necessary to publish your
                                manuscript.</p>
                            <div class="bot-form">
                                <form id="popupfrm" class="cmxform" method="POST" action="/thank-you/">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input name="name" minlength="2" type="text"
                                                       placeholder="Enter your name" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input type="email" name="email" placeholder="Enter email here"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input name="phone" type="number" placeholder="Phone Number" required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <select name="Services" required>
                                                    <option value="-1">Interested In</option>
                                                    <!-- <option value="Website Design and Development">Website Design and Development</option> -->
                                                    <option value="American Writing Solution"> Book Writing</option>
                                                    <option value="Editing">Editing</option>
                                                    <option value="Proofreading">Proofreading</option>
                                                    <option value="Book Publishing">Book Publishing</option>
                                                    <option value="Ebook Writing">Ebook Writing</option>
                                                    <option value="Book Marketing">Book Marketing</option>
                                                    <option value="Copyrights Protection">Copyrights Protection</option>
                                                    <option value="Author Website">Author Website</option>
                                                    <option value="Professional Audio Book">Professional Audio Book
                                                    </option>
                                                    <option value="Book Video Trailer">Book Video Trailer</option>
                                                    <option value="Book Cover Design">Book Cover Design</option>
                                                    <option value="Custom Book Illustration">Custom Book Illustration
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <textarea name="brief" placeholder="Enter message here"/>
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">

                                                <input class="btn-theme" type="submit" value="Submit"/>

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
    </section>
@endsection
