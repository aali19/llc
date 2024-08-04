
@extends('layouts.app')
@section('content')
<meta name="description"
    content="Protect yourself from book publishing scams with American Writing Solution's fraud alert page. Learn how to recognize and avoid fraudulent publishers and literary agents.
">


    <div class="ys-layer"></div>
    <div class="ys-container" id="ys-container">
        <div class="ys-box"> <a class="ys-popup-close ys-exit" href="#">x</a>

            <div class="ys-popup-content">
                <!-- <p>Are Your Sure?</p>
           <a href="#" class="ys-exit">Exit</a> -->

                <div class="popupform tabform clearfix  text-left">
                    <!-- <h2 class="text-center">Get a Beautiful, Results-Driven, Custom-Designed Animated Explainer Video That Get Your Prospects To Say  <span class="font-permanentmarker">YES</span></h2> -->
                    <h3>Get Special Discount</h3>
                    <figure> <img alt="Excited Female Author - American Writing Solution" title="websiteimg" src="../assets/images/popup-img.jpg" alt="image" title="image"> </figure>
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


    <section class="main-ghst-writng-thierd-sec sec-padding-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-img">
                        <figure>
                            <img alt="Ghost writing service image" title="websiteimg" src="../assets/images/services/ghost-writing/ghost-writing.png" alt="image" title="image" />
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="thierd-sec-content">
                        <h1> Fraud Alerts </h1>
                        <p>
                            American Writing Solution has become aware of widespread scams and misrepresentations frequently targeting self-published authors in which bad actors are providing incorrect and misleading information and/or impersonating publishing companies, literary agents, editors, and other professionals in the literary industry, often using real names, trademarks and logos to appear legitimate.
                        </p>
                        <h3>Literary Agent Fraud Alert</h3>
                        <a href="{{route("literary-agent-fraud")}}" class="btn-theme my-4">Learn More</a>
                        <h3>Hollywood Fraud Alert</h3>
                        <a href="{{route("hollywood-fraud")}}" class="btn-theme my-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
