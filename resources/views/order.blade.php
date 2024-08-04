@extends('layouts.app')
@section('content')
    <meta name="description"
          content="Get your book published with ease. Order your book publishing package from American Writing Solution and take the first step in becoming a published author.">

    <div class=" ptpx-100 pd-top">
        <div class="container ">
            <div class="row">
                <div class=" col-lg-12 col-xl-12 text-center">
                    <div class="home-banner-content">
                        <div class="col-lg-8 offset-lg-2   inner-content mtpx-100 text-left">
                            <div class="form-box-main clearfix">
                                <h1 style="    color: #091e42;
    font-weight: 700;     font-size: 26px;">Hear From Us In 10 Mins When You Sign Up</h1>
                                <form class="cmxform" method="POST" action="{{route("thank-you.store")}}" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="field-txt">Name <span>*</span></label>
                                            <input name="name" id="name" minlength="2" type="text"
                                                   placeholder="Enter your name" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="field-txt">Email <span>*</span></label>
                                            <input type="email" id="email" name="email" placeholder="Enter email here"
                                                   required>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="field-txt">Phone Number<span>*</span></label>
                                            <input id="phone-country" name="phone" type="number"
                                                   placeholder="Phone Number" required/>
                                        </div>


                                        <div class="col-md-12 checkbox-group option1">
                                            <label class="field-txt">Type of Service <span>*</span> <a
                                                    href="#"></a></label>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" checked name="Services[]" id="Services[]"
                                                       value="Book Writing">
                                                <label for="checkbox1">Book Writing</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Editing and Analysis">
                                                <label for="checkbox2">Editing and Analysis</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Screenwriting">
                                                <label for="checkbox3">Screenwriting</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Review and Analysis (No Editing)">
                                                <label for="checkbox4">Review and Analysis Only (No Editing)</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Rewriting Existing Content">
                                                <label for="checkbox5">Rewriting Existing Content</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Book Proposal">
                                                <label for="checkbox6">Book Proposal</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Services[]" id="Services[]"
                                                       value="Heavy or Developmental Editing">
                                                <label for="checkbox7">Heavy or Developmental Editing</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 option2">
                                            <label class="field-txt">Genre <span>*</span></label>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" checked name="Genre[]" id="Genre[]"
                                                       value="Memoir / Autobiography">
                                                <label for="checkbox1">Memoir / Autobiography</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]"
                                                       value="General Nonfiction">
                                                <label for="checkbox2">General Nonfiction</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" value="Adult Fiction">
                                                <label for="checkbox3">Adult Fiction</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="Biography">
                                                <label for="checkbox4">Biography</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]"
                                                       value="Personal Development">
                                                <label for="checkbox5">Personal Development</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]"
                                                       value="Young Adult Fiction">
                                                <label for="checkbox6">Young Adult Fiction</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="Business">
                                                <label for="checkbox7">Business</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="Religious">
                                                <label for="checkbox7">Religious</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]"
                                                       value="Children's Literature">
                                                <label for="checkbox7">Children's Literature</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="Self-Help">
                                                <label for="checkbox7">Self-Help</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="Spiritual">
                                                <label for="checkbox7">Spiritual</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="Genre[]" id="Genre[]" value="I Don't Know">
                                                <label for="checkbox7">I Don't Know</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 option3">
                                            <label class="field-txt">Publishing Goals <span>*</span></label>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" checked id="PublishingGoals"
                                                       name="PublishingGoals[]" id="PublishingGoals[]"
                                                       value="Traditional Publisher with National Distribution">
                                                <label for="checkbox1">Traditional Publisher with National
                                                    Distribution</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="PublishingGoals[]" id="PublishingGoals[]"
                                                       value="Hybrid Publisher">
                                                <label for="checkbox2">Hybrid Publisher</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="PublishingGoals[]" id="PublishingGoals[]"
                                                       value="Self-Publishing or Print-on-Demand">
                                                <label for="checkbox3">Self-Publishing or Print-on-Demand</label>
                                            </div>
                                            <div class="check-list col-lg-6">
                                                <input type="checkbox" name="PublishingGoals[]" id="PublishingGoals[]"
                                                       value="I Don't Know">
                                                <label for="checkbox4">I Don't Know</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="field-txt">Additional Comments</label>
                                            <textarea name="brief" placeholder="Enter message here"/></textarea>
                                        </div>


                                        <div class="check-list col-lg-12">
                                            <input type="checkbox" name="terms" id="terms" value="Terms Agreed"
                                                   required>
                                            <label for="terms">I agree to the American Writing Solution</label> <a
                                                href="terms-and-conditions/" target="_blank"
                                                style="color:#88c9be; font-weight:700;">Term of Services</a><label
                                                for="terms"></label>
                                        </div>

                                        <div class=" col-lg-12">
                                            <br><br>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="btn-theme" type="submit" name="submit" id="checkBtn"
                                                   value="Submit"/>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection

        @section("script")

            <script type="text/javascript">
                $(document).ready(function () {

                });
            </script>
            <!-- Start of HubSpot Embed Code -->
            <script type="text/javascript" id="hs-script-loader" async defer src="../js.hs-scripts.com/19911322.js">
            </script>
            <script>
                let name = document.getElementById('name')
                let email = document.getElementById('email')
                let phone = document.getElementById('phone-country')

                $(document).ready(function () {
                    $('#checkBtn').click(function () {
                        if (name.value && phone.value && email.value) {
                            checked = $(".option1 input[type=checkbox]:checked").length;
                            if (!checked) {
                                alert("Please select atleast one service");
                                return false;
                            }
                        }
                    });

                    $('#checkBtn').click(function () {
                        if (name.value && phone.value && email.value) {
                            checked = $(".option2 input[type=checkbox]:checked").length;
                            if (!checked) {
                                alert("Please select atleast one genre");
                                return false;
                            }

                        }
                    });
                    $('#checkBtn').click(function () {
                        if (name.value && phone.value && email.value !== "") {
                            checked = $(".option3 input[type=checkbox]:checked").length;
                            if (!checked) {
                                alert("Please select atleast one publishing goals");
                                return false;
                            }

                        }
                    });
                });
            </script>

@endsection

