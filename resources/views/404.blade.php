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
                    <figure><img alt="Excited Female Author - American Writing Solution" title="websiteimg"
                                 src="assets/images/popup-img.jpg" alt="image" title="image"></figure>
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
    <section>
        <div class="container p-5 text-center">
            <h1 class="text-center">Error 404 Page Not Found</h1>
            <a href="/" class="btn-theme my-3">Back To Home</a>
        </div>
    </section>
@endsection
