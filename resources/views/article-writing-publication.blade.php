
@extends('layouts.app')
@section('content')

<meta name="description"
    content="Avail article writing services offered by top-notch, niche-oriented article writers. Contact us to create compelling articles that meet your needs.">




    <div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box"> <a class="ys-popup-close ys-exit" href="#">x</a>

            <div class="ys-popup-content">
                <!-- <p>Are Your Sure?</p>
           <a href="#" class="ys-exit">Exit</a> -->

                <div class="popupform tabform clearfix  text-left">
                    <!-- <h2 class="text-center">Get a Beautiful, Results-Driven, Custom-Designed Animated Explainer Video That Get Your Prospects To Say  <span class="font-permanentmarker">YES</span></h2> -->
                    <h3>Get Special Discount</h3>
                    <figure> <img alt="Excited Female Author - American Writing Solution" title="websiteimg" src="../public/assets/images/popup-img.jpg" alt="image" title="image"> </figure>
                    <P>Don't miss out on special discount offer</P>
                    <form class="cmxform" method="POST" action="/thank-you/">

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
                            <textarea name="brief" placeholder="Enter a brief description of your Book Project"></textarea>
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
                <span> 310-7215151  </span>
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
                                            <input name="name" minlength="2" type="text" placeholder="Enter your name" required />
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
                                            <textarea name="brief" id="" rows="7" placeholder="Talk About Your Project"></textarea>
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








    <section class="main-ghst-writng-first-sec sec-padding-60" style="background-image: url({{asset("public/assets/images/article-writing.jpg")}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="ghst-writng-content">
                        <h1>Elevate Your Content with Expert Article Writing Services</h1>
                        <p>Our team of skilled writers is well-versed in various subjects. After conducting in-depth research and exhaustive writing, we deliver original, top-notch content that exceeds your expectations. Let us guide you to elevate your brand with our professional article writing services.</p>
                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                        <a href="tel:310-7215151  " class="btn-theme-outline whitebtn">310-7215151  </a>
                        <ul>
                            <!-- <li><img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/ghost-writing/partner5.png"></li> -->
                            <li><img alt="Ghost writing service partner image" title="websiteimg" src="../public/assets/images/services/ghost-writing/partner1.png"></li>
                            <li><img alt="Ghost writing service rate image" title="websiteimg" src="../public/assets/images/services/ghost-writing/rateimg.png"></li>
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
                                                <input name="name" minlength="5" class="round" type="text" placeholder="Enter Name" required="">
                                            </div>
                                            <div class="dtf">
                                                <input type="email" name="email" placeholder="Enter email here" required="">
                                            </div>
                                            <div class="dtf">
                                                <input id="phone" name="phone" required="" type="number" rangelength="[2,15]" placeholder="Enter phone here">
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
    </section>


    <section class="designunigue topnegative">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul>
                        <li>
                            <p>
                                American Writing Solution is your <strong>ultimate resource</strong>
                                to hire professional book writers.

                            </p>
                        </li>
                        <li>
                            <ul class="subimages">

                                <li>
                                    <img alt="Apple iBookstore logo" title="websiteimg" src="../public/assets/images/ibookstore.png">
                                </li>
                                <li>
                                    <img alt="Google Play Store logo" title="websiteimg" src="../public/assets/images/playstore.png">
                                </li>
                                <li>
                                    <img alt="Kobo logo" title="websiteimg" src="../public/assets/images/kobo.png">
                                </li>
                                <li>
                                    <img alt="Scribd logo" title="websiteimg" src="../public/assets/images/scribd.png">
                                </li>

                            </ul>
                        </li>
                        <li>
                            <span>Got a plot idea?</span>
                            <a href="../order/" class="pur-bg">Let’s Get Started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>




    <section class="clientsLogo">
        <div class="container">
            <div class="row">
                <ul class="clients-slider3">
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 1" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-1.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 2" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-2.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 3" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-3.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client logo" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-4.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 4" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-5.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 5" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-6.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 6" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-7.png">
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <img alt="Client Logo - Association of Writers and Publishers 7" title="websiteimg" src="../public/assets/images/client-logo/awp-logo-8.png">
                        </figure>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <section class="main-our-srvces-sec main-princing-sec-hme sec-padding-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tbs-inner-srvcess">
                        <div class="pricing-hme-content">
                            <ul class="nav nav-pills">
                                <li><a data-toggle="pill" href="#service1" class="active show">Journal Selection</a>
                                </li>
                                <li><a data-toggle="pill" href="#service2" class="">Pre-Submission Peer Review</a></li>
                                <li><a data-toggle="pill" href="#service3" class="">Substantive Editing</a></li>
                                <li><a data-toggle="pill" href="#service4" class="">Manuscript Formatting and Artwork
                                        Editing Services</a></li>
                                <li><a data-toggle="pill" href="#service5" class="">Journal Submission</a></li>
                                <li><a data-toggle="pill" href="#service6" class="">Revised/Rejected Paper Edit</a></li>
                                <li><a data-toggle="pill" href="#service7" class="">Plagiarism Check</a></li>
                            </ul>
                            <div class="tab-content pricingboxes">
                                <div id="service1" class="tab-pane active">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Journal selection</h3>
                                                <p>Based on the context of your paper, we deal with the journal
                                                    recommendations after reviewing your manuscript. It helps you decide
                                                    the suitable journal for your research paper to submit to.</p>
                                                <ul>
                                                    <li><strong>Comparison guide -</strong> We provide you core
                                                        information and details about the top 5 most suitable journals
                                                        for your paper including the database list, impact factor,
                                                        publication chart, and frequency of publication.</li>
                                                    <li><strong>Detailed feedback -</strong> After reviewing your paper
                                                        thoroughly, our experts give detailed feedback on your
                                                        manuscript that includes the quality of the paper, language,
                                                        structure, significance of the result, and many other factors.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="Journal selection service icon" title="websiteimg" src="../public/assets/images/services/tabs/journal-selection.svg" alt="image" title="image" />
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service2" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Peer-Submission Peer Review</h3>
                                                <p>Paper review by qualified and experienced professionals who focus on
                                                    the reporting of the method, the accuracy of study design, the
                                                    sufficiency of data analysis, the importance of the market and
                                                    field, and ethical soundness.</p>
                                                <ul>
                                                    <li><Strong>Detailed Report Of Technical Aspects:</Strong>We provide
                                                        you constructive and detailed feedback on evidence supporting
                                                        the conclusion, organization and structure, clarity of the
                                                        presentation, the competence of literature review, and others
                                                        aspects of your paper.</li>
                                                    <li><strong>Compatibility Check Of The Journals:</Strong>If you have
                                                        any journals selected on a prior basis, we offer a detailed
                                                        analysis and assessment of the compatibility of the manuscript
                                                        to the targeted journal to be submitted.</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/tabs/journal-submission.svg" alt="image" title="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service3" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Substantive Editing</h3>
                                                <p>If you are looking to submit your international journal on
                                                    high-impact peer review, our substantive editing is a specifically
                                                    tailored service for you.</p>
                                                <ul>
                                                    <li>365 days’ rejection shield: Enjoy an exclusive facility with
                                                        substantive editing which guarantees that your paper is ready
                                                        for resubmission</li>
                                                    <li>The substantive editing services we offer at American Writing Solution Publishers
                                                        involve thorough editing that centers around the structure,
                                                        presentation, and logic of your paper to ensure its submission.
                                                    </li>
                                                    <li>• We have a dedicated team of proficient and experienced
                                                        individuals who are specialized in different subjects and ensure
                                                        content improvement and thorough reviewing. </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="Substantive editing service icon" title="websiteimg" src="../public/assets/images/services/tabs/substantive-editing.svg" alt="image" title="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service4" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Manuscript Formatting And Artwork Editing Services</h3>
                                                <p>Offering services of manuscript formatting and artwork editing
                                                    services</p>
                                                <ul>
                                                    <li><Strong>Proof Reading:</Strong> We provide a free of corrections
                                                        document from the grammar and mechanical errors</li>
                                                    <li><Strong>Formatting:</Strong> We cater to the reference, text,
                                                        and table formatting according to the required guidelines of the
                                                        journal</li>
                                                    <li><Strong>Cover letter:</Strong>Providing you a compelling and
                                                        clear cover letter to submit along with your paper, outlining
                                                        the originality of your research paper</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="Manuscript formatting and artwork editing icon" title="websiteimg" src="../public/assets/images/services/tabs/manuscript-formatting-and-artwork-editing-services.svg" alt="image" title="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service5" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Journal Submission</h3>
                                                <p>Taking the help of professionals helps greatly in understanding the
                                                    complexities of the process as well as aids in the submission of the
                                                    paper. It helps in saving time and guarantees a detailed review of
                                                    the key points prior to the submission.</p>
                                                <ul>
                                                    <li>If needed, we prepare a cover letter for you </li>
                                                    <li>On your behalf, our submission experts look after the exhausting
                                                        process of submitting the paper </li>
                                                    <li>We take care of the completion of all the necessary formalities
                                                        from the form details filing to uploading the documentation</li>
                                                    <li>We double-check the paper to make sure of the compliance journal
                                                        guidelines to make your submission successful.</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="websiteimg" title="websiteimg" src="../public/assets/images/services/tabs/journal-submission.svg" alt="image" title="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service6" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Revised Or Rejected Paper Editing </h3>
                                                <p>We have a team designed to cater to the comprehensive reviewing,
                                                    re-editing, formatting of the content of your paper. We guarantee to
                                                    address all the comments in your paper before you submit it again.
                                                </p>
                                                <ul>
                                                    <li><strong>Cover letter:</strong> Providing you a compelling and
                                                        clear cover letter to submit along with your paper, outlining
                                                        the originality of your research paper</li>
                                                    <li><strong>Two rounds of editing:</strong>Undertaken by a
                                                        subject-matter expert to ensure all reviewer feedback is
                                                        addressed. You can check the first draft and share your inputs
                                                        for a final round of editing.</li>
                                                    <li><strong>Reviewer response:</strong>We make sure to address all
                                                        the comments by the reviewer in the manuscript and to respond
                                                        accordingly.</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="Revised and rejected paper editing icon" title="websiteimg" src="../public/assets/images/services/tabs/revised-rejected-paper-editing.svg" alt="image" title="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="service7" class="tab-pane">
                                    <div class="portfolio-box">
                                        <div class="row align-items-center flex-column-reverse flex-md-row">
                                            <div class="col-lg-8 col-md-8 col-sm-12">
                                                <h3>Plagiarism Check</h3>
                                                <p>We provide cent percent original content and ensure the authenticity
                                                    of your paper. We use advanced software to check plagiarism like
                                                    Turnitin. We scan your paper over the software to identify the
                                                    plagiarism error in your manuscript. We provide the report,
                                                    highlighting the texts that are counted as plagiarized by the
                                                    software.</p>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="tb1-img-sec">
                                                    <figure>
                                                        <img alt="Plagiarism check service icon" title="websiteimg" src="../public/assets/images/services/tabs/plagiarism-check.svg" alt="image" title="image">
                                                    </figure>
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
    </section>





    <section class="main-ghst-writng-thierd-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-img">
                        <figure>
                            <img alt="Article Writing & Publication Service - American Writing Solution" title="websiteimg" src="../public/assets/images/services/article-writing-publication/article-writing-publication.png" alt="image" title="image" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm12">
                    <div class="thierd-sec-content">
                        <h3>Maximize Your Reach with Our Competent Article Writers</h3>
                        <p>Our article writing company offers affordable SEO-based article bundles to help you maximize your reach and maintain your competitive edge. With the help of some of our best article writers, we’ll optimize your articles/papers/web blogs for search engines like Bing and Google, driving more traffic to your page and increasing visibility in the community. By adding subheadings and titles with relevant keywords, including keywords in your abstract and title, and placing links to your article on relevant websites, we’ll ensure your article stands out from the rest. Let our best article writers help you get started. </p>
                        <ul class="artcle-lst">
                            <li><strong>Affordable and High-Quality Book Publishing Services</strong> Don’t wait any longer to get your book published! Our agency provides cheap yet best book publishing services to make the hard process of publication easier for you. Our team of editors ensures your book is polished and ready for publication. Additionally, we offer high-quality article writing services and article rewriting services to help promote your book and increase visibility. </li>
                            <!-- <li><strong>Speed: </strong> Review publication time and speed</li>
                            <li><strong>Impact –</strong>The metrics of impact based on citations received by the
                                articles </li> -->
                        </ul>
                        <!-- <p>The average impact of all the manuscripts in a journal is mostly utilized as a proxy for the
                            impact of a particular article. The situation is seen mostly when the paper has not yet had
                            time to gather its own citations. This type of metrics of proxy should be a high preference
                            and should be considered.</p> -->
                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="collaboration-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="wrapper">
                        <h3>SEARCH ENGINE-OPTIMIZED RESEARCH PAPER </h3>
                        <h2>Be Visible with a Professional Article Writing Company</h2>
                        <p>Our team of professional writers can help you showcase your work through well-written and engaging articles. Our content writing agency considers key metrics such as journal usage, geographical location, review publication time, and impact based on citations to help your research paper reach a wider audience. </p>
                        <!-- <h3>Here are a few useful SEO tips:</h3>
                        <ul class="artcle-lst">
                            <li>AAdd subheadings or titles (with keywords) to the different sections of your paper</li>
                            <li>
                            <li>In the abstract and title use keywords</li>
                            <li>Ensure to place links to your article from relevant websites e.g. your institute’s
                                website, Wikipedia, LinkedIn, blogs, and social media</li>
                        </ul> -->
                        <a href="../order/" class="btn-theme">Let’s Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <figure>
                        <img alt="Article Writing & Publication Banner - American Writing Solution" title="websiteimg" src="../public/assets/images/services/article-writing-publication/article-writing-publication-b.png">
                    </figure>
                </div>
            </div>
        </div>
    </section>




    <section class="py-5 main-arcle-sec" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="wdt-80">With The Suitable Support Pack for Our Publication Service, You Can Improve Your
                        Chances of Journal Acceptance.</h3>
                    <p class="wdt-80">For all the research papers published, the American Writing Solution publisher’s editorial and
                        publication services are focused on offering end-to-end support as per the needs of the authors.
                        We have different packages for our customers to choose from. Our team of professional editors
                        makes sure to meet your expectations by providing high quality with error-free paper. We also
                        make sure of the right structure and precise formatting to provide you a ready-to-publish paper
                        along with proper support for publication.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="prce_box">
                        <h3>Silver <span>Package</span></h3>
                        <p>Basic publication support for manuscript submission</p>
                        <ul class="pck-scrl prtf-srl">
                            <li class="pck-heading">Journal Selection</li>
                            <li>Information on 3 to 5 journals where YOUR manuscript would be a good fit.
                                Recommendations are based on journal scope and technical quality of YOUR manuscript.
                            </li>
                            <li class="pck-heading">Premium Editing</li>
                            <li>Publication-focused editing and formatting of your manuscript. We ensure compliance with
                                journal guidelines.</li>
                            <li class="pck-heading">Artwork Preparation</li>
                            <li>Your manuscript figures are formatted and revised by our graphics experts in accordance
                                with journal guidelines.</li>
                            <li class="pck-heading">Journal Submission</li>
                            <li>Navigating complex journal submission systems can be daunting; we help you with a
                                one-click process.</li>
                            <li class="pck-heading">Resubmission support</li>
                            <li>Free resubmission to the same journal & one round of free resubmission to a different
                                journal</li>
                            <li class="pck-heading">Plagiarism Check</li>
                            <li>We’ll identify passages that might be flagged by the journal for accidental plagiarism.
                            </li>
                            <li>TAT: 3 weeks</li>
                        </ul>
                        <h4>$999.00</h4>
                        <a href="order/" class="btn-main">Order Now</a>
                        <p>Confused? <a href="tel:310-7215151  " class="confused"> <i class="icon-phone2"></i>Talk With
                                Us</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="prce_box">
                        <h3>Gold <span>Package</span></h3>
                        <p>End-to-end publication support including resubmission</p>
                        <ul class="pck-scrl prtf-srl">
                            <li class="pck-heading">Journal Selection</li>
                            <li>Information on 3 to 5 journals where YOUR manuscript would be a good fit.
                                Recommendations are based on journal scope and technical quality of YOUR manuscript.
                            </li>
                            <li class="pck-heading">Premium Editing</li>
                            <li>Publication-focused editing and formatting of your manuscript. We ensure compliance with
                                journal guidelines.</li>
                            <li class="pck-heading">Artwork Preparation</li>
                            <li>Your manuscript figures are formatted and revised by our graphics experts in accordance
                                with journal guidelines.</li>
                            <li class="pck-heading">Journal Submission</li>
                            <li>Navigating complex journal submission systems can be daunting; we help you with a
                                one-click process</li>
                            <li class="pck-heading">Reviewers Comments adjustment</li>
                            <li>The manuscripts occasionally return with comments from reviewers. The minor changes and
                                adjustments will be taken care by our editors</li>
                            <li class="pck-heading">Resubmission support</li>
                            <li>Free resubmission to the same journal & one round of free resubmission to a different
                                journal.</li>
                            <li class="pck-heading">Plagiarism Check</li>
                            <li>We’ll identify passages that might be flagged by the journal for accidental plagiarism.
                            </li>
                            <li>TAT: 3 weeks</li>
                        </ul>
                        <h4>$1,699.00</h4>
                        <a href="order/" class="btn-main">Order Now</a>
                        <p>Confused? <a href="tel:310-7215151  " class="confused"> <i class="icon-phone2"></i>Talk With
                                Us</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="prce_box">
                        <h3>Platinum <span>Package</span></h3>
                        <p>High-end publication support + Rapid technical review + 2 Article Publications</p>
                        <ul class="pck-scrl prtf-srl">
                            <li class="pck-heading">Peer-Review by our own editorial board</li>
                            <li>Scientific critique aimed at improving the technical quality of your manuscript. Use it
                                before submission to any peer-reviewed journal.</li>
                            <li class="pck-heading">Journal Selection</li>
                            <li>Information on 3 to 5 journals where YOUR manuscript would be a good fit.
                                Recommendations are based on journal scope and technical quality of YOUR manuscript and
                                you requirement.</li>
                            <li class="pck-heading">High-end Editing</li>
                            <li>Publication-focused editing and formatting of your manuscript based on the author
                                guidelines of the journal chosen. We ensure 100% compliance with journal guidelines.
                            </li>
                            <li class="pck-heading">Artwork Preparation</li>
                            <li>Your manuscript figures are formatted and revised by our graphics experts in accordance
                                with journal guidelines.</li>
                            <li class="pck-heading">Journal Submission</li>
                            <li>Navigating complex journal submission systems can be daunting; we help you with a
                                one-click process and complete support</li>
                            <li class="pck-heading">Reviewers Comments adjustment</li>
                            <li>The manuscripts occasionally return with comments from reviewers. The minor changes and
                                adjustments will be taken care by our editors.</li>
                            <li class="pck-heading">Resubmission support</li>
                            <li>Free resubmission to the same journal & one round of free resubmission to a different
                                journal.</li>
                            <li class="pck-heading">Plagiarism Check</li>
                            <li>We’ll identify passages that might be flagged by the journal for accidental plagiarism.
                            </li>
                            <li class="pck-heading">Author Website</li>
                            <li>We will create and help you maintain a comprehensive webpage including all your
                                publications giving you a boost as an author.</li>
                            <li>TAT: 4 weeks </li>
                        </ul>
                        <h4>$2,499.00</h4>
                        <a href="order/" class="btn-main">Order Now</a>
                        <p>Confused? <a href="tel:310-7215151  " class="confused"> <i class="icon-phone2"></i>Talk With
                                Us</a></p>
                    </div>
                </div>


            </div>
        </div>
    </section>




    <div class="strt-bg">
        <section class="main-strt-cta-sec sec-padding-60" style="background-image:url({{asset("/assets/images/services/ghost-writing/newhomebanner.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                        <div class="strt-cta wdt-80">
                            <h3>What Makes Our Article Writing Services Unique?</h3>
                            <p>Our affordable agency is here to help you achieve your dreams with our top-rated article writing services. Our team of skilled writers will provide high-quality article writing services, article rewriting services, and editing to ensure your work is the best it can be. Let us help to take the first step with our cheap and reliable services.</p>
                            <a href="../order/" onclick="setButtonURL();" class="btn-theme">Become an author</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section class="main-ghst-writng-second-sec sec-padding-60" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1 col-md-5 offset-md-1 col-sm-12">
                    <div class="main-ser">
                        <div class="ser-box1">
                            <img alt="Server illustration for ghost writing service" title="websiteimg" src="../public/assets/images/services/ghost-writing/illo-server.svg" alt="image" title="image">
                        </div>
                        <div class="ser-box2">
                            <h3>Our Comprehensive Publication Services Include</h3>
                            <ul>
                                <li>Thorough editing to guarantee the text is error-free</li>
                                <li>Artwork and Cover letter</li>
                                <li>Review and resubmissions</li>
                                <li>Formatting and typesetting for publication</li>
                                <li>Complete submission support</li>
                                <li>Editing the manuscript as per the journal guidelines</li>
                                <li>Critical review and proofreading</li>
                                <li>Researching and outlining a draft (if required)</li>

                            </ul>
                            <a href="../order/" class="btn-theme">Let's Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="main-ser main-serv-mob">
                        <div class="ser-box1">
                            <img alt="Data center illustration for ghost writing service" title="websiteimg" src="../public/assets/images/services/ghost-writing/illo-data-center.svg" alt="image" title="image">
                        </div>
                        <div class="ser-box2">
                            <h3>More Reasons To Choose Us</h3>
                            <ul>
                                <li>Indexing the article on different platforms</li>
                                <li>Author profile</li>
                                <li>Paper Security – your paper gets published with complete confidentiality</li>
                                <li>Exposure to International Conference Sponsorship Program</li>
                                <li>3500+ Global Reach and Online presence in Cited sources</li>
                                <li>Your profile's online presence increases the credibility, exposure, and rankings of
                                    your paper and you as a researcher</li>
                            </ul>
                            <a href="../order/" class="btn-theme">Let's Get Started</a>
                        </div>
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
                        <h3>Quality Content Writing Services</h3>
                        <p>American Writing Solution offers a variety of packages to suit your needs, including writing articles and editing services. Our team of experienced writers works tirelessly to help you overcome any obstacles in publishing your work. Let us help you reach your writing goals and become a bestseller author.</p>
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
                            <h3>Affordable Pricing </h3>
                            <p>We offer high-quality website article writing at unbeatable rates. Whether you hire our writers for a one-time job or on a retainer basis, you’ll always receive top-rated treatment from our end. </p>
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
                            <h3>Ethical Standards </h3>
                            <p>We uphold the highest ethical standards in scientific research and publishing. We ensure that your work meets all necessary guidelines and requirements to avoid any issues related to scientific misconduct.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Secure ownership icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/secure-ownership.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Ownership Rights </h3>
                            <p>You own all the rights to your website articles, including publishing and copyrights. Our team ensures that you retain complete control over your content, and we never claim any ownership or use it without your permission.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Qualified experts icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/qualified-experts.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Expert Writers </h3>
                            <p>Our team of expert writers is highly qualified, experienced, and professional in the field of website article writing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Authentic research icon" title="websiteimg" src="../public/assets/images/services/author-website/authentic-research.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Original Content </h3>
                            <p>We conduct extensive research based on your specific requirements and follow a defined research framework to deliver authentic and original content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="git-main">
                        <div class="git-box1">
                            <figure>
                                <img alt="Professional excellence icon for author website" title="websiteimg" src="../public/assets/images/services/author-website/professional-excellence.svg" alt="image" title="image" width="42" />
                            </figure>
                        </div>
                        <div class="git-box2">
                            <h3>Engaging Visuals </h3>
                            <p>To enhance the readability and appeal of your article, we also create engaging visuals, such as infographics and images, to complement the text.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>




    <section class="introduction-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8">
                    <div class="wrapper">
                        <h3><span>Premium Article Writing Service</span>For Unique Audience, You Need Unique Content</h3>
                        <p>We help you reach your aspirations by providing all the support you need to develop and publish your articles.</p>
                        <a href="../order/" onclick="setButtonURL();" class="btn-theme-outline">Let’s start</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="homwBtmform mob-no-bg" style="background-image: url({{asset("assets/images/contimg.jpg")}});">
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
    <section class="sec-padding mtpx-90">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
       <br><br><br><br>
       <h2 style="color: #091e42; font-weight: 700; font-size: 26px;">Frequently Asked Questions</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="accordion">
          <div class="quest-section"> <a class="quest-title" href="#accordion-1">What is article writing? </a>
            <div id="accordion-1" class="quest-content">
              <p>Article writing is the process of creating written content for publication on a website, blog, or other digital platforms. This content can take many forms, including news articles, opinion pieces, product reviews, and how-to guides. </p>
              <p>Effective article writing requires a balance of engaging and informative content that is also optimized for search engines through the use of relevant keywords and other SEO considerations, along with a strong understanding of the target audience, the topic at hand, and best practices for online content creation. </p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-2">What are article writing services? </a>
            <div id="accordion-2" class="quest-content">
              <p>Article writing services are companies that specialize in creating written content for businesses. They offer a range of services, from writing blog posts and articles to crafting product descriptions and social media posts. The goal of article writing services is to produce high-quality, engaging content that is tailored to the specific needs of their clients. By outsourcing content creation, you can focus on other important tasks, such as product development and customer service.</p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-3">Why should I hire article writing services? </a>
            <div id="accordion-3" class="quest-content">
              <p>There are several benefits to using article writing services for your business. These include:</p>
              <p>High-quality content: Article writing services employ skilled writers who are experts in creating engaging, informative content that will keep your audience coming back for more.</p>
              <p>Time-saving: Outsourcing your content creation can free up time for you and your team to focus on other important tasks, such as product development and customer service.</p>
              <p>Cost-effective: Hiring a full-time writer can be expensive, but outsourcing your content creation can save you money in the long run.</p>
              <p>SEO-optimized content: Article writing services can help ensure that your content is SEO-optimized, which can improve your website’s visibility on search engines.</p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-4">What other types of articles do you provide? </a>
            <div id="accordion-4" class="quest-content">
              <p>There are several types of article writing services to choose from, depending on your business needs. These include:</p>
              <p>Blog writing: We specialize in creating engaging, informative blog posts that are tailored to your specific niche or industry.</p>
              <p>SEO article writing: SEO article writing services focus on creating content that is optimized for search engines, using targeted keywords and phrases to improve your website’s visibility.</p>
              <p>Product description writing: Product description writing services specialize in creating compelling product descriptions that will entice customers to make a purchase.</p>
              <p>Social media writing: Social media writing services create shareable content that will help you connect with your audience on social media platforms.</p>
              <p>Research Writing: We offer assistance with writing research papers. These services can provide help at all stages of the research paper writing process, from topic selection and research to drafting and finalizing the paper. </p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-5">What should I need to know before engaging an article writer? </a>
            <div id="accordion-5" class="quest-content">
              <p>At American Writing Solution, we value our customers and strive hard to achieve their goals. This is why we focus on establishing clear communications. Here are some of the things that we’d really appreciate receiving from your end because, after all, the better the communications, the better the result. </p>
              <p>Provide clear Information: When filling the content brief, be specific about what you want your writer to focus on, including topics, keywords, and tone. If you don’t have topics, our experienced writers will share the topics for your approval. </p>
              <p>Provide feedback: If you’re not satisfied with the initial draft, provide constructive feedback to help your writer improve.</p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-6">How much does article writing services cost? </a>
            <div id="accordion-6" class="quest-content">
              <p>The cost of article writing services can vary depending on the scope of the project and the time duration required to complete the task. Unlike some providers, we do not charge per word or per hour; we offer you customized package deals or bundle offers for multiple articles. Please share your requirement with our sales so that we can assist you in the best manner possible. </p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-7">How long does it take to get articles written?</a>
            <div id="accordion-7" class="quest-content">
              <p>The turnaround time for article writing services can vary depending on the complexity of the project. However, we do offer rush options for faster delivery. Please discuss your project in detail with us. </p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-8">Can I request revisions to the content?</a>
            <div id="accordion-8" class="quest-content">
              <p>Yes, we will offer revisions to the content based on your feedback and to your full satisfaction. Be sure to communicate clearly with your writer about any changes you would like to see.</p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-9">How do I know if the content is unique and not plagiarized? </a>
            <div id="accordion-9" class="quest-content">
              <p>At American Writing Solution, we take strict measures against plagiarism content and provide 100% original content attached to the plagiarism report. We run our content through various AI tools to check the content similarity index. For some reason, if you are worried that the quality has been compromised, you can also ask for proof of originality before publishing the content. </p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-10">Can I provide my own topics for the articles?</a>
            <div id="accordion-10" class="quest-content">
              <p>Yes, we’d welcome any suggestions, topics and guidelines for the content from your end. </p>
              <!-- <p>As soon as the content of your book is done and you happily approved it, we will aid you to decide the publishing option that will work wonders for you and give your dream of a published book a reality! </p> -->
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-11">Can I request a specific writing style or tone for the articles?</a>
            <div id="accordion-11" class="quest-content">
              <p>Absolutely! we will work with you to create content that reflects your desired writing style and tone. It is important to communicate your preferences clearly with your writer to ensure that the final product meets your expectations.</p>
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-12">What is the process for working with you?</a>
            <div id="accordion-12" class="quest-content">
              <p>Once you approach us for an article writing project, you will be assigned a dedicated project manager. This person will be your point of contact with whom you can discuss your project and goals. During this process, you will be requested to fill out a brief that will help your writer to understand your requirements. Once the initial consultation step is over, you will be assigned a writer to complete the project. Once the content is complete, you will have the opportunity to review and request revisions before finalizing the project.</p>
              <!-- <p>I had a great/bad experience with the writer I selected. Should I tell the network coordinator?</p> -->
              <!-- <p>In both cases, a big yes, because we have prestige, so if any writer who has many legit negative feedback reports will obviously be removed from the network. Note: An editor refusing to work without prepayment or to do free additional work (above and beyond the scope outlined in the agreement) are not legit complaints; however, an editor being far behind a contractual deadline or becoming unavailable is a legit complaint. Since the company has established in 2014, we rarely had a case of negative feedback or complaints, because of the ethical guidelines of this network and our screening and test to choose the best writer in the world who can provide according to your needs and preferences. If you work with us and came across anything that is not up to the mark, then please let the network coordinator know about your experience with your editors.</p> -->
            </div>
          </div>
          <div class="quest-section"> <a class="quest-title" href="#accordion-13">How do I measure the success of my article writing efforts?</a>
            <div id="accordion-13" class="quest-content">
              <p>There are several metrics you can track to measure the success of your article writing efforts, including website traffic, engagement metrics (such as time on page and bounce rate), and conversions (such as lead generation or sales). By monitoring these metrics over time, you can make informed decisions about future content creation and optimization efforts.   </p>
              <!-- <p>I had a great/bad experience with the writer I selected. Should I tell the network coordinator?</p> -->
              <!-- <p>In both cases, a big yes, because we have prestige, so if any writer who has many legit negative feedback reports will obviously be removed from the network. Note: An editor refusing to work without prepayment or to do free additional work (above and beyond the scope outlined in the agreement) are not legit complaints; however, an editor being far behind a contractual deadline or becoming unavailable is a legit complaint. Since the company has established in 2014, we rarely had a case of negative feedback or complaints, because of the ethical guidelines of this network and our screening and test to choose the best writer in the world who can provide according to your needs and preferences. If you work with us and came across anything that is not up to the mark, then please let the network coordinator know about your experience with your editors.</p> -->
            </div>
          </div>
          <a href="fraud-alert/" class="btn-main" style="padding:10px 25px; border-radius:6px;line-height:6;font-size:26px;">Fraud Alerts</a>

        </div>

      </div>
    </div>
  </div>

</section>

@endsection
