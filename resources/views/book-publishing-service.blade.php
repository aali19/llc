@extends('layouts.app')
@section('content')
    <meta name="description"
          content="We’re a premier Amazon publisher services site for new and experienced authors. Contact us for more info about our amazon book publishing services. ">



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
             style="background-image: url({{asset("public/assets/images/book-publishing.jpg")}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ghst-writng-content">
                        <h1>Reach 1+ Million Readers with Amazon Book Publishing Services </h1>
                        <p>Take your book to new lands with Amazon book publishing services. Our team of experts will
                            guide you every step of the way, from the initial manuscript review to the final stages of
                            publication. With our extensive knowledge and experience, we reach a far and wide audience
                            in the US and beyond. </p>
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
                            <figure><img alt="Number 4" title="websiteimg" src="public/assets/images/services/4.svg"
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
                            <img alt="Book publishing service image" title="websiteimg"
                                 src="../public/assets/images/services/book-publishing/book-publishing.png" alt="image"
                                 title="image"/>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-content">
                        <h3>Amazon Publisher Services –– Publish Your Book with Confidence</h3>
                        <p>If you have completed your book and are looking to publish it on Amazon, then you need our
                            Amazon publisher services to ensure that your book reaches its maximum potential. With our
                            expertise, experience, and knowledge, we create ideal strategies and targeted campaigns for
                            publishing a book with Amazon. </p>
                        <p>We are the bridge to accomplishment and the finest results. As an Amazon book publisher, we
                            understand that editorial reviews are crucial to your success on Amazon. This is why we
                            ensure your book is perfectly edited before publication.</p>
                        <p>It’s high time you choose the best amazon self-publishing services in the USA.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="portfolioSec">
        <div class="container">
            <div class="">
                <h2>Experience A Smooth Book Publishing Process</h2>
                <p>We help you reach more people than ever before possible! Contact us to learn more about our
                    publication services.</p>
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


    <!--<section class="recognitionsec">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <figure>-->
    <!--        <img alt="websiteimg" title="websiteimg" src="../public/assets//images/recognition.png">-->
    <!--      </figure>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <section class="recognitionsec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="badges">
                        <li>
                            <img alt="Customer logo" title="websiteimg" src="../public/assets/images/customer_logo1.png">
                        </li>
                        <li>
                            <img alt="American Writing Solution - Customer Logo 2" title="websiteimg"
                                 src="../public/assets/images/customer_logo2.png">
                        </li>
                        <li>
                            <img alt="American Writing Solution - Customer Logo 3" title="websiteimg"
                                 src="../public/assets/images/customer_logo3.png">
                        </li>
                        <li>
                            <img alt="American Writing Solution - Customer Logo 4" title="websiteimg"
                                 src="../public/assets/images/customer_logo4.png">
                        </li>
                        <li>
                            <img alt="American Writing Solution - Customer Logo 5" title="websiteimg"
                                 src="../public/assets/images/customer_logo5.png">
                        </li>
                        <li>
                            <img alt="American Writing Solution - Customer Logo 6" title="websiteimg"
                                 src="../public/assets/images/customer_logo6.png">
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="boxessec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="boxeswrap">
                        <h2>Here’s What You Can Expect with Our Amazon Book Publisher Services</h2>
                        <p>When it comes to publishing your book, you want to be sure that you have the best services to
                            guide you through the process. And that’s what you get with us! We do not leave any stones
                            unturned and cover all aspects of the publishing process, including production, promotion,
                            and distribution.</p>
                        <ul class="your-class">
                            <li>
                                <div class="textwrap">
                                    <h3>Production</h3>
                                    <p>With our amazon self-publishing services, you can rest assured that your book is
                                        in good hands. We offer editorial, writing, editing, and design services,
                                        including page design and cover artwork. Our production department is where your
                                        book starts to take shape. </p>

                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
                                </div>
                                <figure class="left-mostconsultancy">
                                    <img alt="Girl Reading a Book - American Writing Solution" title="websiteimg"
                                         src="../public/assets/images/girl-a.png">
                                </figure>
                            </li>
                            <li class="centerbox">
                                <div class="textwrap">
                                    <h3>Effective Promotion</h3>
                                    <p>Once your book is ready, our promotion specialists will research and develop a
                                        promotional campaign. Our defined book promotion plan will help you get your
                                        book to readers through social media, email marketing, and advertising.</p>
                                    <a href="../order/" onclick="setButtonURL();" class="btn-theme">Let us guide you</a>
                                </div>
                                <figure>
                                    <img alt="Girl reading a book" title="websiteimg" src="../public/assets/images/girl2.png">
                                </figure>
                            </li>
                            <li>
                                <div class="textwrap">
                                    <h3>Wide Distribution</h3>
                                    <p>Our distribution team will ensure that your book is listed on leading book
                                        retailers who ship your book copy to the consumer. We will also introduce your
                                        work to bookstores and online retailers, ensuring that your book reaches the
                                        widest possible audience. </p>

                                    <a href="../order/" class="btn-theme">Let's Get Started </a>
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


    <div class="strt-bg">
        <section class="main-strt-cta-sec sec-padding-60"
                 style="background-image:url({{asset("public/assets/images/services/ghost-writing/newhomebanner.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta wdt-80">
                            <h3>Self-Publish Your Book Today with Our Affordable Packages</h3>
                            <p>We understand that self-publishing a book on Amazon can be daunting, which is why we will
                                help you every step of the way. Our Amazon book publishing company offers affordable
                                packages to mitigate the cost to publish a book on amazon. </p>
                            <a href="../order/" class="btn-theme">Become An Author To A Best Seller</a>
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
                        <h2>‘’Publishing My Book On Amazon? Oh, It’s Become Easy Now!’’ Roar Our Clients. </h2>
                        <p>Our clients are more than happy to partner with a professional company that offers brilliant
                            services to meet their demands. As a top Amazon book publisher services company, we offer a
                            complete and personalized program to help our clients achieve their publishing dreams.
                            Here’s what our clients get when working with our agency</p>
                    </div>
                </div>


                <div class="col-lg-8">
                    <ul>

                        <li> Affordable ebook creation and distribution services</li>
                        <li> Cost-effective paperback distribution services</li>
                        <li> Marketing consultation to promote the book effectively.</li>
                        <li> Professional interior layout services at cheap rates.</li>
                        <li> Optional hardcover printing and management services</li>
                        <li> Graphic inclusion service to enhances the visual appeal of the book.</li>
                        <li> Author marketing materials to appeal to a wider audience.</li>
                        <li> Our full evaluation edit service ensures your book is polished to perfection.</li>
                        <li> We create a publishing imprint and set up distribution and royalty at affordable rates.
                        </li>
                        <li> Our book cover design and proofreading services ensure your book stands out on Amazon.</li>
                        <li> Bundle our services to save more on the cost to self-publish on Amazon.</li>

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
                        <h3>Hire the Best Literary Agents at an Affordable Cost to Publish On Amazon</h3>
                        <p>Your success is a reflection of your hard work. That’s why we invest our time and energy in
                            ensuring that your manuscript is worthy and lands in the hands of the industry’s trustworthy
                            leaders.</p>
                        <p>Our team of literary agents conducts extensive research and establishes necessary contact
                            links to ensure your publishing requirements are up to the mark.</p>
                    </div>
                </div>
            </div>
            <div class="row ultimate-slider">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Affordable Author Website - American Writing Solution" title="websiteimg"
                                     src="../public/assets/images/services/author-website/affordable.svg" alt="image"
                                     title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Enhance Your Book’s Appeal </h3>
                            <p>Let our experts create an engaging author book description and bio that will make your
                                book interesting and captivating to your target readers. Our author profiling services
                                also include creating an author website and Wikipedia page, which can help establish you
                                as a public figure in the literary world.</p>
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
                            <h3>Marketing Strategy Consultation</h3>
                            <p>Our Author Marketing Team will work with you to develop a marketing plan to help ensure
                                your book launch’s success. Through extensive discussions and research, we will help you
                                identify your target audience and develop strategies to reach them. With our expertise
                                and guidance, you can achieve the heights you have dreamt of for your book.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Secure ownership icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/secure-ownership.svg" alt="image"
                                     title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Interactive Cover Design</h3>
                            <p>Our talented designers will create an interactive book cover that will grab readers’
                                attention. Our book designs are top-notch, unique, and speak for themselves. With our
                                interactive cover design services, your book will stand out in a sea of other titles and
                                grab the attention of potential readers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Qualified experts icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/qualified-experts.svg" alt="image"
                                     title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Paperback Distribution Services</h3>
                            <p>The American Writing Solution offers top-notch paperback distribution services to ensure
                                your book is available in print-on-demand format through multiple channels. We ensure
                                our distribution is reliable and efficient, and your book is easily accessible for
                                purchase at physical retailers.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Professional excellence icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/professional-excellence.svg"
                                     alt="image" title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Copyrighting & Cataloging Services</h3>
                            <p>We keep ourselves armoured and on our feet to protect your intellectual property. Our
                                comprehensive copyrighting and cataloging services ensure your book is registered in the
                                Print database and assigned all BISAC, ISBN, and Bar codes required for retail
                                distribution. </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Professional excellence icon for author website" title="websiteimg"
                                     src="../public/assets/images/services/author-website/professional-excellence.svg"
                                     alt="image" title="image" width="42"/>
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Affordability and Convenience </h3>
                            <p>With us, you don’t have to worry about the cost to self-publish on amazon. Our services
                                are designed to make the publishing process as smooth and hassle-free as possible. With
                                us, you’ll have the peace of mind that comes with knowing you’re in good hands.</p>
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
                        <h3><span>Premium Book Writing Service</span>Get Your Manuscript Published with Our Reliable
                            Amazon Publishing Company</h3>
                        <p>If you’ve been waiting to see your manuscript come to life, wait no more! Our premium book
                            writing service is here to help you bring your idea to fruition. With our team of expert
                            writers, we can help you create a book that is well-written but also engaging and
                            captivating.
                        </p>
                        <a href="../order/" onclick="setButtonURL();" class="btn-theme">Become An Author To A Best
                            Seller</a>
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

    </main>

@endsection
