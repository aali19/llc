@extends('layouts.app')
@section('content')

    <meta name="description"
          content="Experience the best autobiography writing services by experienced autobiography writers. We’ll ensure a speedy delivery. Contact us to place your order today.">



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
                    <form id="popupfr123222" class="cmxform" method="POST" action="{{asset("thank-you")}}">

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
                <span> 310-7215151 </span>
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





    <section class="main-ghst-writng-first-sec sec-padding-60 "
             style="background-image: url({{asset("public/assets/images/autobiography-memoir-writing-banner.jpg")}});">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="ghst-writng-content">
                        <h2 class="auto_b_h2">Turn a Life Well-Lived into Story of Your Life!</h2>
                        <h1 class="auto_b_h1">Professional Autobiography Writer at </h1>
                        <h3 class="auto_b_h3">Your Command</h3>
                        <!-- <h3 class="auto_b_h3" style="margin-top: 14px;"> WRITERS</h3> -->

                        <p style="font-size: 17px;">Our professional and qualified autobiography writers with years of
                            experience have the ability to craft compelling life stories.</p>

                        <a href="../order/" class="btn-theme ml-0">Let’s Get Started</a>
                        <a href="tel:310-7215151  " class="btn-theme-outline whitebtn">310-7215151 </a>
                        <ul>
                            <li><img alt="American Writing Solution - Quality Seal" title="websiteimg"
                                     src="/public/assets/images/Seal-02.png" width="105px" height="105px"></li>
                            <li style="min-width: 67%;">
                                <img alt="Number 111" title="websiteimg" src="./public/assets/images/111.png">
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 serForm">

                    <div class=" col-lg-12 col-xl-12 text-center">
                        <div class="home-banner-content hme-bner-cntn">
                            <div class="analyzeform col-lg-12">
                                <h2>Signup with us to avail 80% Discount Now</h2>
                                <form id="popupfrm" class="cmxform" method="POST" action="{{route("thank-you.store")}}">

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
                                professional
                                book writers. </p>
                        </li>
                        <li>
                            <ul class="subimages">

                                <li><img alt="Apple iBookstore logo" title="websiteimg"
                                         src="./public/assets/images/ibookstore.png"></li>
                                <li><img alt="Google Play Store logo" title="websiteimg"
                                         src="../assets/images/playstore.png"></li>
                                <li><img alt="Kobo logo" title="websiteimg" src="../assets/images/kobo.png"></li>
                                <li><img alt="Scribd logo" title="websiteimg" src="../assets/images/scribd.png"></li>
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
                <div class="col-lg-5 col-md-5col-sm-12">
                    <div class="thierd-sec-img">
                        <figure>
                            <img alt="Ghost writing service image" title="websiteimg"
                                 src="../public/assets/images/services/ghost-writing/ghost-writing.png" alt="image"
                                 title="image"/>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 your_book2">
                    <div class="thierd-sec-content">
                        <h3 class="section_1_h3"> Autobiography writing services that Understand, Care, and Influence.
                        </h3>
                        <p class="section_1_p">Every person has a unique story, a tale worth sharing. But only some are
                            natural storytellers or wordsmiths. That’s where our autobiography writing services come in.
                            Our team of expert bio writers takes pride in crafting masterpieces that capture your life’s
                            essence, making your journey unforgettable for your readers.</p>
                        <p class="section_1_p">We don’t just write biographies; we create a legacy. Our affordable
                            packages and rigorous editing services ensure that your final product is exceptional.
                        </p>
                        <p class="section_1_p"> With our bio writer service, you can expect the following:</p>

                        <ul>
                            <li> A professional writing style that captures your unique voice and story</li>
                            <li> Fast and reliable turnaround time</li>
                            <li> Competitive and affordable packages</li>
                            <li> Unmatched editing services to polish your manuscript</li>
                            <li> A timeless masterpiece that leaves a lasting impression on your readers.</li>

                        </ul>


                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="portfolioSec">
        <div class="container">
            <div class="">
                <h2>Exquisite and Affordable Bio Writer Services </h2>
                <p>Choose our service, get started, and see results for yourself.</p>
                <div class="row portfolio-slider">
                    <!--<div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal9"><img alt="websiteimg" title="websiteimg" src="../assets/images/books/1.jpg"></a></div>-->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal"><img
                                alt="Book cover image" title="websiteimg"
                                src="./public/assets/images/books/4.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa2"><img
                                alt="Bestselling Book Cover Design Example 4" title="websiteimg"
                                src="./public/assets/images/books/5.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa3"><img
                                alt="Bestselling Book Cover Design Example 5" title="websiteimg"
                                src="./public/assets/images/books/6.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" type="button" data-toggle="modal"
                                             data-target="#myModa4"><img alt="Bestselling Book Cover Design Example 6"
                                                                         title="websiteimg"
                                                                         src="./public/assets/images/books/7.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa5"><img
                                alt="Bestselling Book Cover Design Example 7" title="websiteimg"
                                src="./public/assets/images/books/8.jpg"></a></div>
                    <!-- <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa6"><img alt="websiteimg" title="websiteimg"
                                src="../assets/images/books/9.jpg"></a></div> -->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa7"><img
                                alt="Book cover image" title="websiteimg"
                                src="./public/assets/images/books/10.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa8"><img
                                alt="Bestselling Book Cover Design Example 3" title="websiteimg"
                                src="./public/assets/images/books/2.jpg"></a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="recognitionsec">
        <div class="container">
            <div class="row your-class">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mb_logo">
                    <center><img alt="Recognition Award 1 - American Writing Solution" title="websiteimg"
                                 src="./public/assets/images/recognition_1.jpg" class="img-responsive"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 2 - American Writing Solution" title="websiteimg"
                                 src="./public/assets/images/recognition_2.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 3 - American Writing Solution" title="websiteimg"
                                 src="./public/assets/images/recognition_3.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 4 - American Writing Solution" title="websiteimg"
                                 src="./public/assets/images/recognition_4.jpg"></center>
                </div>
            </div>
        </div>
    </section>





    <section class="boxessec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxeswrap">
                        <h2>Why Should You Hire Our Autobiography Writing Services?</h2>
                        <p>Here are some compelling reasons to consider our services. </p>
                        <ul class="your-class">
                            <li>
                                <div class="textwrap">
                                    <h3>Top-Notch Autobiography Writing Services </h3>
                                    <p>Let our expert writers create a captivating autobiography of your life’s journey
                                        that stands out from the rest.</p>
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure class="left-mostconsultancy">
                                    <img alt="Girl Reading a Book - American Writing Solution" title="websiteimg"
                                         src="../public/assets/images/girl-a.png">
                                </figure>
                            </li>
                            <li class="centerbox">
                                <div class="textwrap">
                                    <h3>Affordable All-In-One Autobiography Services</h3>
                                    <p> From drafting an outline of an autobiography to publishing, we offer cheap and
                                        comprehensive autobiography writing services without compromising quality. </p>
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                    <!--<a href="javascript:;" onclick="setButtonURL();" class="btn-theme">Let's Get Started </a>-->
                                </div>
                                <figure>
                                    <img alt="Girl reading a book" title="websiteimg" src="../public/assets/images/girl2.png">
                                </figure>
                            </li>
                            <li>
                                <div class="textwrap">
                                    <h3>Partner with Our Expert Autobiography Writers </h3>
                                    <p>Our specialist autobiography writers and editors structure your story for maximum
                                        impact. With us, you can create a true masterpiece.</p>
                                    <!-- <p>Let Us Be Your Companion In Making Your Autobiography & Memoir a masterclass.</p> -->
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure style="bottom: 55px;" class="right-mostconsultancy">
                                    <img alt="American Writing Solution - Satisfaction Guarantee" title="websiteimg"
                                         src="./public/assets/images/guarantee.png">

                                </figure>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="wdt-80">Ghost Writing Your Way</h3>
        <p class="wdt-80">Our excellence in Ghost Writing stems from our unique and client-centric approach.</p>
        <ul class="book-slider">
          <li>
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/updated-layouts-collab.png">
            </figure>
            <h3>Various Specialized Genres</h3>
            <p>Our expert and experienced Ghost Writing have mastered the art of Ghost Writing and specialize in multiple genres. Whether it is a piece of fiction, an autobiography or a business publication – we promise exceptional quality and unparalleled service.</p>

          </li>
          <li>
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/updated-layouts-platform.png">
            </figure>
            <h3>Personalized Service</h3>
            <p>Based on your requirements and the category/genre of writing, we assign an experienced writer to your project. We take care of all of your instructions, formulate a scheme of work, and complete it within the estimated<span> time.</span></p>

          </li>
          <li>
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/updated-layouts-sync.png">
            </figure>
            <h3>Client Communication</h3>
            <p>For us, each client is special, and each project is unique. We keep a special emphasis on client communication and keep you in the loop throughout the process – this way, we deliver what you expect and achieve 100% client satisfaction.</p>

          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
 -->




    <div class="strt-bg">
        <section class="main-strt-cta-sec sec-padding-60"
                 style="background-image:url("./public/assets/images/services/ghost-writing/newhomebanner.jpg");">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta wdt-80">
                            <h3>Get Your Ghost-Written Autobiography Published</h3>
                            <p>Don’t let your manuscript go to waste; let American Writing Solution help you. Our
                                professional book writers can assist you in outlining and writing an autobiography or
                                any other book you desire. We offer affordable packages and bundle deals so you can
                                easily share your story with the world.</p>
                            <!-- <p>We are at your service. Hire a professional book writer from American Writing Solution to
                                give life to your dream.</p> -->

                            <a href="../order/" onclick="setButtonURL();" class="btn-theme">Become An Author To A Best
                                Seller</a>
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
                        <h2>Your Autobiography & Memoirs to Words</h2>
                        <p>Convert your autobiography & memoirs to words that weigh more. </p>
                    </div>
                </div>


                <div class="col-lg-8">
                    <h5 class="h5tile">The American Writing Solution Services Package Consists Of: </h5>
                    <ul>

                        <li>Creating/updating the outline</li>
                        <li>Completing the entire book 300 pages as per the requirements / outline</li>
                        <li>Adjusting the layout and presentation with international publishing standards</li>
                        <li>Unlimited revisions</li>
                        <li>Dedicated team of professional autobiography and memoir writers</li>
                        <li>Access to online portal</li>
                        <li>Cover design</li>
                        <li>Editing, Proofreading and formatting</li>
                        <li>Publishing on Amazon, kindle, and Barnes & Noble, Apple Book Store & Google Book Store</li>
                        <li>100% satisfaction guaranteed.</li>
                        <li>Professional Autobiography writers for your biography</li>
                        <li>Manuscript conversion to Hardcopy & eBook</li>
                        <li>Intriguing Custom Book Cover Design</li>
                        <li>Competitive Marketing Plans</li>
                        <li>Custom biography written in just 30 days by professional autobiography writers</li>


                    </ul>
                    <div class="">
                        <a href="../order/" class="btn-theme" style="margin-right: 10px">Let’s Get Started </a>
                        <a href="tel:310-7215151  " class="btn-theme-outline blackbtn">310-7215151 </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <section class="main-ghst-writng-sixth-sec sec-padding-60">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="git wdt-80">
          <h3> Why Us? </h3>
          <p>Because we value your dream of sharing your story with future generation and we will bring your idea to fruition in the form of assiduously written and published books. Our team consists of individuals, who have worked at some of the most acclaimed and highly regarded publishing houses such as Pearson, Bloomsbury, Penguin Random House, and HarperCollins.</p>
        </div>
      </div>
    </div>
    <div class="row ultimate-slider">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="git-main">
          <div class="git-box1">
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/author-website/affordable.svg" alt="image" title="image"  width="42"/>
            </figure>
          </div>
          <div class="git-box2">
            <h3>Fiction</h3>
            <p>We grab the essence of your whimsical imagination, extract it, and then with light and twisted turn we give words to it. Whether it is Poetry, novel, screenplay, flash fiction, or Novellas, we fabricate your story into a chef-d'œuvre.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="git-main">
          <div class="git-box1">
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/author-website/profitable.svg" alt="image" title="image"  width="42"/>
            </figure>
          </div>
          <div class="git-box2">
            <h3>Non Fiction </h3>
            <p>Give your idea a new perspective, redefine, recreate and reorganize your ideas into well-versed and expressive text, we will coordinate with you at every single step of your book. The sole focus of our service is to emboss your idea in the reader’s mind.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="git-main">
          <div class="git-box1">
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/author-website/secure-ownership.svg" alt="image" title="image"  width="42"/>
            </figure>
          </div>
          <div class="git-box2">
            <h3>Children’s:</h3>
            <p>Pictures have their way of expressing words, where characters and phrasings stick in our minds. Our writing and illustrating extraordinaire team put their efforts to create a verbal and visual piece of art for children as well as adults.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="git-main">
          <div class="git-box1">
            <figure>
              <img alt="websiteimg" title="websiteimg" src="../assets/images/services/author-website/qualified-experts.svg" alt="image" title="image"  width="42"/>
            </figure>
          </div>
          <div class="git-box2">
            <h3>Memoirs/autobiographies </h3>
            <p>We take your memoirs/autobiographies very seriously, as they are a manifestation of your life’s journey and the events that occurred in it, we craft the phenomenal moments in your life in a beautiful work of literature. Our writers carefully forge and craft the words of your memoir, by interviews and research to obtain all your life’s details, to create a text full of emotions and feelings, to make the reader feel they are a part of your life’s journey.</p>
          </div>
        </div>
      </div>


    </div>

  </div>
</section> -->

    <section class="main-ghst-writng-sixth-sec sec-padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="git wdt-80">
                        <h3>Why Work With Us?</h3>
                        <p>Looking for an agency to write autobiographies for you? At American Writing Solution, we
                            pride ourselves on having some of the most experienced autobiography ghostwriters in the
                            industry who have written numerous autobiographies and memorials for our clients. With a
                            100% client satisfaction rate, you can trust us to turn your life story into something that
                            will inspire and motivate others.</p>
                    </div>
                </div>
            </div>
            <div class="row ultimate-slider">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Affordable Author Website - American Writing Solution" title="websiteimg"
                                     src="./public/assets/images/services/author-website/affordable.svg" alt="image"
                                     title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Accuracy </h3>
                            <p>To capture the essence of your story, we take detailed meetings with you to gather all
                                the necessary information. Our writers aim to reflect your emotions, feelings, and
                                imaginations in the book, ensuring an authentic and engaging read for your audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Profitable author website icon" title="websiteimg"
                                     src="../public/assets/images/services/author-website/profitable.svg" alt="image"
                                     title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Impeccable Cover Design</h3>
                            <p>We also know the importance of a great cover design to attract potential readers. Our
                                designers create eye-catching covers that sell, whether your book is on a bookstore
                                shelf or online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Secure ownership icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/secure-ownership.svg" alt="image"
                                     title="image"
                                     width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Unlimited Revisions</h3>
                            <p>But we don’t stop once your story is written. We offer unlimited revisions until you are
                                satisfied with the final product. Our dedication to your satisfaction is unparalleled in
                                the industry.</p>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 offset-md-2 col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Qualified experts icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/qualified-experts.svg" alt="image"
                                     title="image"
                                     width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Convert Your Manuscript</h3>
                            <p>We can convert your book into an eBook or hard copy according to your preference. Our
                                team ensures that your hard copy is printed with the best quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Professional excellence icon for author website" title="websiteimg"
                                     src="{{asset("./public/assets/images/services/author-website/professional-excellence.svg")}}"
                                     alt="image" title="image"
                                     width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>30-Day Delivery</h3>
                            <p>We believe in swift service, unlike other providers who may leave you waiting for months.
                                With a 100% customer satisfaction rate, we provide the first draft within 30 days.</p>
                        </div>
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


                        <h3><span>Ghost Written Autobiography Services </span>Hire an Autobiographer Today</h3>
                        <p>You have a book idea just waiting to be written, but you don’t have the time or skill to put
                            it on paper. Ghost Writing can help you get your idea out there.</p>
                        <a href="../order/" onclick="setButtonURL();" class="btn-theme">Let’s start writing a book with
                            us</a>
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
                                    <form class="cmxform" method="POST" action="{{route("thank-you.store")}}">

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
