@extends('layouts.app')
@section('content')
    <meta name="description"
          content="Get in touch with American Writing Solution for all your book publishing needs. Our friendly team is ready to answer all your questions and help you get published.">
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
                            <textarea name="brief" placeholder="Enter a brief description of your Book Project"></textarea>
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
    <section class="main-ourteam-sec sec-padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-team wdt-80">
                        <h1>Discuss How Our Editing Services Can Help You Out & Your Book To Achieve Your Goals As An Author
                            and Writer. <P>We Will Provide You Everything At Our Disposal To Help You Reach Your Goals</P>
                        </h1>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="team-box1">
                        <h3>Frequently Asked Questions</h3>
                        <figure>
                            <img alt="Contact Us - Author Support Team" title="websiteimg"
                                 src="{{asset("public/assets/images/contact/dummy1.png")}}" alt="image" title="image"/>
                        </figure>
                        <p>Learn more about our book writing, editing, and other services </p>
                        <a class="team-lnk" href="javascript:;">Find helpful resources </a>
                        <!-- <a href="/" class="btn-theme-outline">View FAQ's</a> -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="team-box1 brdr">
                        <h3>Help?</h3>
                        <figure>
                            <img alt="Placeholder image" title="websiteimg" src="{{asset("public/assets/images/contact/dummy2.png")}}"
                                 alt="image" title="image"/>
                        </figure>
                        <p>Do you have a dream to write your book? Then you are at the right place. We are your go-to
                            guys.</p>
                        <center>
                            <div data-id="TeMc7Jw4gJo" class="livechat_button"><a href="javascript: void(0);">Chat with us
                                    to get started </a></div>
                        </center>
                        <br><a class="team-lnk" href="mailto:support@americanwritingsolution.com">support@americanwritingsolution.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="team-box1">
                        <h3>Product advice</h3>
                        <figure>
                            <img alt="Contact Us - Publishing Inquiry" title="websiteimg"
                                 src="{{asset("public/assets/images/contact/dummy3.png")}}" alt="image" title="image"/>
                        </figure>
                        <p>Do you still have questions in your head?<br>You and your book deserve the very best, and we have
                            all the resources and experts to do justice to your book.</p>
                        <a href="tel:310-7215151  " class="btn-theme-outline">310-7215151 </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="main-wrkup-sec main-cntc-form sec-padding-60"
             style="background-image:url(assets/images/about-us/company-background.jpg)">
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
                                                <input name="name" minlength="2" type="text" placeholder="Enter your name"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input type="email" name="email" placeholder="Enter email here" required>
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
                                                    <option value="American Writing Solution">American Writing Solution
                                                    </option>
                                                    <option value="Editing">Editing</option>
                                                    <option value="Proofreading">Proofreading</option>
                                                    <option value="Book Publishing">Book Publishing</option>
                                                    <option value="Ebook Writing">Ebook Writing</option>
                                                    <option value="Book Marketing">Book Marketing</option>
                                                    <option value="Copyrights Protection">Copyrights Protection</option>
                                                    <option value="Author Website">Author Website</option>
                                                    <option value="Professional Audio Book">Professional Audio Book</option>
                                                    <option value="Book Video Trailer">Book Video Trailer</option>
                                                    <option value="Book Cover Design">Book Cover Design</option>
                                                    <option value="Custom Book Illustration">Custom Book Illustration
                                                    </option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                                <textarea name="brief" placeholder="Enter message here"/></textarea>
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
