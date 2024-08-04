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
                                 src="assets/images/popup-img.jpg" alt="image" title="image"></figure>
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



    <!-------------------------------------- HEADER INCLUDE ----------------------------->


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
                                            <input name="submit" value="" type="submit" placeholder="Connect With Us"
                                                   required/>

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


    <section class="main-wrkup-sec main-cntc-form sec-padding-60"
             style="background-image:url(public/assets/images/about-us/company-background.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrk-up-wrap">
                        <div class="cntc-form">
                            <h3>Need Help Publishing Your Book?</h3>
                            <p>Our comprehensive services will provide you with everything necessary to publish your
                                manuscript.</p>
                            <div class="bot-form">
                                <form id="popupfrm" action="{{route("package.store")}}" class="cmxform" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input name="name" minlength="2" type="text"
                                                       placeholder="Brand name"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="fldset">
                                                <label>Payment Type</label><br>
                                                <input class="type" value="s" name="type" type="radio"/>&nbsp;Single
                                                <input class="type" value="m" name="type" type="radio"/>&nbsp;Milestone
                                            </div>
                                        </div>
                                        <div class="col-lg-6 price-div">
                                            <div class="fldset">
                                                <input type="number" name="amount" placeholder="Amount">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mile-div d-none">
                                            <div class="fldset">
                                                <select id="milestone" name="milestone" required>
                                                    <option value="0">Milestone</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">
                                            <textarea name="description"
                                                      placeholder="Description..."/></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="fldset">

                                                <input class="btn-theme" type="submit" name="submit" value="Submit"/>

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
<!-------------------------------------- FOOTER INCLUDE ----------------------------->

@section("script")
    <script>
        $(document).ready(function () {
            $(".type").change(function () {
                let val = $(this).val()
                if (val === "m") {
                    $(".mile-div").removeClass("d-none")
                    $("#milestone").attr("required", true)
                } else {
                    $(".mile-div").addClass("d-none")
                    $("#milestone").attr("required", false)
                }
            })
        })
    </script>
@endsection
