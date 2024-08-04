
@extends('layouts.app')
@section('content')
<meta name="description"
      content="American Writing Solution is the hub of professional ghostwriters. Turn your idea into a best-selling book with quality ghostwriting and publishing services.">


<div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box"> <a class="ys-popup-close ys-exit" href="#">x</a>

            <div class="ys-popup-content">
                <!-- <p>Are Your Sure?</p>
           <a href="#" class="ys-exit">Exit</a> -->

                <div class="popupform tabform clearfix  text-left">
                    <!-- <h2 class="text-center">Get a Beautiful, Results-Driven, Custom-Designed Animated Explainer Video That Get Your Prospects To Say  <span class="font-permanentmarker">YES</span></h2> -->
                    <h3>Get Special Discount</h3>
                    <figure> <img alt="Excited Female Author - American Writing Solution" title="websiteimg" src="{{asset("public/assets/images/popup-img.jpg")}}" alt="image" title="image"> </figure>
                    <P>Don't miss out on special discount offer</P>
                    <form id="popupfr123222" class="cmxform" method="POST" action="/thank-you/">

                        <div class="fldst">
                            <input name="name" minlength="2" type="text" placeholder="Full Name *" required />
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
                            <input class="submit btnsb" type="submit" value="Submit" />
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
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input type="email" name="email" placeholder="Enter email here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="fldset">
                                            <input name="phone" type="number" placeholder="Phone Number" required />
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
                                            <input name="submit" type="submit" placeholder="Connect With Us" required />

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
        style="background-image: url({{asset("public/assets/images/ghost-writing.jpg")}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ghst-writng-content">
                        <h1>Meet All Your Checklist Goals with Premium Ghostwriting Services </h1>
                        <p>From keeping complete discretion and confidentiality of your work to delivering expert ghostwritten content, our ghostwriting services can help you achieve it all.</p>
                        <ul class="home-ul">
                            <li class="home-li">Zero compromises on quality </li>
                            <li class="home-li">Full identity protection </li>
                            <li class="home-li">100% of copyrights transferred </li>
                        </ul>
                        <a href="../order/" class="btn-theme ml-0">Let’s Get Started</a>
                        <a href="tel:310-7215151  " class="btn-theme-outline whitebtn">310-7215151 </a>
                        <ul>
                            <li><img alt="American Writing Solution - Quality Seal" title="websiteimg" src="{{asset("public/assets/images/Seal-02.png")}}" width="105px" height="105px"></li>
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
                                                <input  name="brief" required="" type="text"  placeholder="Enter a brief description">
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
                            <p> American Writing Solution is your <strong>ultimate resource</strong> to hire professional
                                book writers. </p>
                        </li>
                        <li>
                            <ul class="subimages">

                                <li> <img alt="Apple iBookstore logo" title="websiteimg" src="../public/public/assets/images/ibookstore.png"> </li>
                                <li> <img alt="Google Play Store logo" title="websiteimg" src="../public/assets/images/playstore.png"> </li>
                                <li> <img alt="Kobo logo" title="websiteimg" src="../public/assets/images/kobo.png"> </li>
                                <li> <img alt="Scribd logo" title="websiteimg" src="../public/assets/images/scribd.png"> </li>
                            </ul>
                        </li>
                        <li> <span>Got an idea for a plot?</span> <a href="../order/" class="pur-bg">Let’s get
                                writing!</a> </li>
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
                            <figure> <img alt="American Writing Solution - Service Icon 1" title="websiteimg" src="public/assets/images/services/1.svg" alt="image" title="image" /> </figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>100% guaranteed customer satisfaction</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure> <img alt="American Writing Solution - Service Icon 2" title="websiteimg" src="public/assets/images/services/2.svg" alt="image" title="image" /> </figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>More than 250 customers spread around the globe in 100+ countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure> <img alt="American Writing Solution - Service Icon 3" title="websiteimg" src="public/assets/images/services/3.svg" alt="image" title="image" /> </figure>
                        </div>
                        <div class="conter-cont-box">
                            <p>Reasonable pricing</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="counter-box1">
                        <div class="conter-img-box">
                            <figure> <img alt="Number 4" title="websiteimg" src="./public/assets/images/services/4.svg" alt="image" title="image" /> </figure>
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
                            <img alt="Ghost writing service image" title="websiteimg" src="../public/assets/images/services/ghost-writing/ghost-writing.png" alt="image" title="image" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-content">
                        <h3>Ghostwriters for Hire –Breathing Soul into Your Work </h3>
                        <p>We believe that every idea has the potential for greatness, and our professional ghostwriters for hire will help you take that next step. With years of experience in the industry, we have handpicked the best of the best to ensure that your story is told with the creativity and innovation it deserves. </p>
                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="portfolioSec">
        <div class="container">
            <div class="">
                <h2>Our Professional Ghostwriters’ Great Minds at Work </h2>
                <p>Scroll through some of our best-selling work to see how we can help you get more in a short period. </p>
                <div class="row portfolio-slider">
                    <!--<div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal9"><img alt="websiteimg" title="websiteimg" src="../assets/images/books/1.jpg"></a></div>-->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModal"><img alt="Book cover image" title="websiteimg"
                                src="../public/assets/images/books/4.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa2"><img alt="Bestselling Book Cover Design Example 4" title="websiteimg"
                                src="../public/assets/images/books/5.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa3"><img alt="Bestselling Book Cover Design Example 5" title="websiteimg"
                                src="../public/assets/images/books/6.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa4"><img alt="Bestselling Book Cover Design Example 6" title="websiteimg"
                                src="../public/assets/images/books/7.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa5"><img alt="Bestselling Book Cover Design Example 7" title="websiteimg"
                                src="../public/assets/images/books/8.jpg"></a></div>
                    <!-- <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa6"><img alt="websiteimg" title="websiteimg"
                                src="../assets/images/books/9.jpg"></a></div> -->
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa7"><img alt="Book cover image" title="websiteimg"
                                src="../public/assets/images/books/10.jpg"></a></div>
                    <div class="col-md-2"><a href="javascript:;" data-toggle="modal" data-target="#myModa8"><img alt="Bestselling Book Cover Design Example 3" title="websiteimg"
                                src="../public/assets/images/books/2.jpg"></a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="recognitionsec">
        <div class="container">
            <div class="row your-class">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mb_logo">
                    <center><img alt="Recognition Award 1 - American Writing Solution" title="websiteimg" src="../public/assets/images/recognition_1.jpg" class="img-responsive"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 2 - American Writing Solution" title="websiteimg" src="../public/assets/images/recognition_2.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 3 - American Writing Solution" title="websiteimg" src="../public/assets/images/recognition_3.jpg"></center>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 mb_logo">
                    <center><img alt="Recognition Award 4 - American Writing Solution" title="websiteimg" src="../public/assets/images/recognition_4.jpg"></center>
                </div>
            </div>
        </div>
    </section>





    <section class="boxessec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxeswrap">
                        <h2>Affordable Ghostwriter Services that Make You the Next Big Author
                        </h2>
                        <p>We can take your manuscript from “um, err, oh, I don’t know” to the next step to becoming a published author!</p>
                        <ul class="your-class">
                            <li>
                                <div class="textwrap">
                                    <h3>Customized Writing</h3>
                                    <p>We offer customized ghostwriting services and will work with you to ensure your vision is brought to fruition. Our team of book ghostwriters comprises the most exuberant and creative minds from around the globe.</p>
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure class="left-mostconsultancy">
                                    <img alt="Girl Reading a Book - American Writing Solution" title="websiteimg" src="../public/assets/images/girl-a.png">
                                </figure>
                            </li>
                            <li class="centerbox">
                                <div class="textwrap">
                                    <h3>All-in-one Solution</h3>
                                    <p>You’ll get professional ghost book writing, drafting, proofreading, formatting, and publishing bundled into one deal. Plus, you can rest assured that your project is in good hands with our expert ghostwriter online.</p>
                                    <a href="../order/" onclick="setButtonURL();" class="btn-theme">Let's Get Started
                                    </a>
                                </div>
                                <figure>
                                    <img alt="Girl reading a book" title="websiteimg" src="../public/assets/images/girl2.png">
                                </figure>
                            </li>
                            <li>
                                <div class="textwrap">
                                    <h3>Affordable Ghost Book Writers</h3>
                                    <p>Trust us to bring your book to the public eye with convenience. With our affordable ghostwriters and comprehensive packages, you couldn’t ask for more!  </p>
                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure style="bottom: 55px;" class="right-mostconsultancy">
                                    <img alt="American Writing Solution - Satisfaction Guarantee" title="websiteimg" src="../public/assets/images/guarantee.png">

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
            style="background-image:url(../public/assets/images/services/ghost-writing/newhomebanner.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta wdt-80">
                            <h3>Laser-Focused On Quality, Creativity, and Meticulousness </h3>
                            <p>Our team of top ghostwriters for hire is dedicated to helping you realize your publishing dreams. As one of the leading ghostwriting companies in the USA, we take pride in our ability to deliver exceptional results for our clients.</p>
                            <p style="font-weight:bold;">Don’t wait any longer - let American Writing Solution help you get started!</p>
                            <!-- <p>Become the Best-Seller Author </p> -->

                            <a href="../order/" onclick="setButtonURL();" class="btn-theme">Become the Best-Seller Author</a>
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
                        <h2>Hire A Ghostwriter to Create True Works of Art</h2>
                        <p>Our ghostwriters for hire can help you transform your ideas into a bestseller book that you can be proud to publish worldwide.
                        </p>
                    </div>
                </div>


                <div class="col-lg-8">
                    <h5 class="h5tile">Our ghostwriting services package includes the following: </h5>
                    <ul>

                   <li> Thorough research and analysis of your idea.</li>
                   <li> Writing in accordance with that research.</li>
                   <li> Refined formatting and typesetting to prepare your text for publication.</li>
                   <li> Book cover design and illustration services are available</li>
                   <li> Video book trailers to promote your work</li>
                   <li> Assistance in finding the best literary agency for your needs</li>
                   <li> Consultancy services for both traditional and self-publishing</li>
                   <li> Help with planning and drafting your book</li>
                   <li> Self-publishing services, including cover design and proofreading</li>
                   <li> Marketing and branding services to promote your book globally</li>
                   <li> Top ghostwriting company with online ghostwriter services</li>


                    </ul>
                    <div class="">
                        <a href="../order/" class="btn-theme" style="margin-right: 10px">Let’s Get Started </a>
                        <a href="tel:310-7215151  " class="btn-theme-outline blackbtn">310-7215151 </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="main-ghst-writng-sixth-sec sec-padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="git wdt-80">
                        <h3> Looking for A Cheap And Reliable Ghostwriting Company?</h3>
                        <p>We understand the value of your goal and are committed to bringing your book idea to fruition with assiduously written and expertly published books.</p>
                    </div>
                </div>
            </div>
            <div class="row ultimate-slider">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Affordable Author Website - American Writing Solution" title="websiteimg" src="../public/assets/images/services/author-website/affordable.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Fiction</h3>
                            <p>We capture the essence of your imagination and give it light and beauty. From poetry to novellas, we can make your story into something truly special.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Profitable author website icon" title="websiteimg" src="../public/assets/images/services/author-website/profitable.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Non Fiction </h3>
                            <p>When ghostwriting books, we redefine, recreate, and reorganize our ideas into expressive text. Our focus is on inscribing your story in the reader’s mind.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Secure ownership icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/secure-ownership.svg" alt="image" title="image"
                                    width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Children’s:</h3>
                            <p>And for children’s books, our writing and illustrating team is dedicated to creating verbal and visual pieces of art that will captivate both children and adults. We understand the power of pictures to express words and create memorable characters and phrasings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Qualified experts icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/qualified-experts.svg" alt="image" title="image"
                                    width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Memoirs/autobiographies </h3>
                            <p>We expertly craft your life story into a beautifully written memoir, capturing the essence of your journey through emotion and detail.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Authentic research icon" title="websiteimg" src="../public/assets/images/services/author-website/authentic-research.svg" alt="image" title="image"
                                    width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Academic & Professional books</h3>
                            <p>Our expert authors utilize their experience and skill to write informative and accurate books backed by extensive research.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Professional excellence icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/professional-excellence.svg" alt="image" title="image"
                                    width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Comics/graphic books</h3>
                            <p>Through team collaboration, we are able to create scripts with enhanced scenes and captions. Be more confident and in control that your comic will be of superior quality. </p>
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


                        <h3><span>Premium Ghostwriting Services</span>Get Your Ideas Properly on the Paper </h3>
                        <p>Our premium ghostwriting service will give your idea the power it needs to shine. Whether it’s a novel, memoir, or any other form of writing, our skilled ghostwriters have the expertise to produce what you desire. So why wait? Hire a ghostwriter today!</p>
                        <a href="../order/" onclick="setButtonURL();" class="btn-theme">Let’s start writing a book with
                            us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homwBtmform mob-no-bg" style="background-image: url(assets/images/contimg.jpg);">
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
                                                    placeholder="Enter your name" required />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Email <span>*</span></label>
                                                <input type="email" name="email" placeholder="Enter email here"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="field-txt">Phone Number<span>*</span></label>
                                                <input id="phone-country" name="phone" type="number"
                                                    placeholder="Phone Number" required />
                                            </div>
                                            <div class="col-md-6">
                                                <div class="slct">
                                                    <label class="field-txt">Select Service <span>*</span></label>
                                                    <select required id="packages" name="Package" class="valid"
                                                        aria-invalid="false">
                                                        <option value="-1" pack="0">Interested In</option>
                                                        <option value="American Writing Solutions">Ghost Writings</option>
                                                        <option value="Editing">Editing</option>
                                                        <option value="Book Publishing">Book Publishing</option>
                                                        <option value="Ebook Writing">Ebook Writing</option>
                                                        <option value="Article Writing & Publication">Article Writing &
                                                            Publication</option>
                                                        <option value="Book Video Trailer">Book Video Trailer</option>
                                                        <option value="Copyrights Protection">Autobiography & Memoirs
                                                        </option>
                                                        <option value="Author Website">Author Website</option>
                                                        <option value="Book Marketing">Book Marketing</option>
                                                        <option value="Book Cover Design">Book Cover Design</option>
                                                        <option value="Custom Book Illustration">Custom Book
                                                            Illustration</option>
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
                                                <input class="btn-theme" type="submit" value="Submit" />

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
