
@extends('layouts.front')
@section('content')

<body class="lagom page-login page-login-default lagom-not-portal lagom-layout-top lagom-futuristic page-login page-type-full" data-phone-cc-input="1">
<div class="app-main ">
<div class="main-body main-body-has-sidebar main-body-has-sidebar-left">
<div class="main-body-sidebar main-body-sidebar-secondary">
<div class="sidebar-logo logo-container">
<a class="logo" href="index-2.html"><img src="templates/lagom2/assets/img/logo/logo_big_inverse.1222276713.png" title="Cloudinos Hosting" alt="Cloudinos Hosting" /></a>
</div>
<div class="sidebar-content">
<h2 class="sidebar-title">What's new</h2>
<div class="sidebar-swiper swiper-container">
<div class="swiper-wrapper">
<div class="sidebar-news swiper-slide">
<span class="sidebar-news-date">Apr 6, 2022</span>
<a class="sidebar-news-title h3" href="index0f48.html?rp=/announcements/5/Weve-release-User-Management-Module.html">We've release User Management Module</a>
<div class="sidebar-news-desc">
<p>Hello dear,
I hope you're doing great today?
We want to appreciate you for staying with us even when it seems like we're out of business.
It's been more than a month since we had the drive crash incident and we've been working tirelessly to reposition ourselves better than h...
</div>
</div>
<div class="sidebar-news swiper-slide">
<span class="sidebar-news-date">Jan 3, 2020</span>
<a class="sidebar-news-title h3" href="index8605.html?rp=/announcements/4/New-Year-New-Look.-We-are-growing.html">New Year, New Look. We are growing</a>
<div class="sidebar-news-desc">
<p>I hope the new year is going well with you?
We are happy to let you know that we've added a couple of products to our platform and you can purchase them any moment from now. Find them below:
Site Security(SiteLock)
SSL Certificates
Website Builder
Site Backup
Code Guard...
</div>
</div>
<div class="sidebar-news swiper-slide">
<span class="sidebar-news-date">Dec 28, 2018</span>
<a class="sidebar-news-title h3" href="index6a40.html?rp=/announcements/1/Thank-you-for-choosing-CLOUDINOS.html">Thank you for choosing CLOUDINOS!</a>
<div class="sidebar-news-desc">
<p>Welcome to CLOUDINOS! You have made a great choice and we want to help you get up and running as quickly as possible.
If at any point you get stuck, our support team is available 24x7 to assist you. Simply visit email us via <a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="462e232a2a2906252a2933222f2829356825292b">[email&#160;protected]</a> to request assistance....
</div>
</div>
</div>
<div class="swiper-pagination"></div>
</div>
</div>
</div>
<div class="main-body-content">
<div class="login">
<div class="login-header">
<a class="logo" href="index-2.html"><img src="templates/lagom2/assets/img/logo/logo_big_inverse.1222276713.png" title="Cloudinos Hosting" alt="Cloudinos Hosting" /></a>
</div>
<div class="login-wrapper">
<div class="login-body">
<h1 class="login-title">Secure Client Login</h1>
<div class="providerLinkingFeedback"></div>
<form class="login-form" method="post" action="https://host.cloudinos.com/index.php?rp=/login" role="form">
<input type="hidden" name="token" value="9cd30ddcb7c9685ecc91d735aad3568bab65438a" />
<div class="form-group">
<label for="inputEmail">Email Address</label>
<input type="email" name="username" class="form-control input-lg" id="inputEmail" placeholder="Enter email" autofocus>
</div>
<div class="form-group">
<div class="d-flex space-between">
<label for="inputPassword">Password</label>
<a href="index0839.html?rp=/password/reset">Forgot?</a>
</div>
<input type="password" name="password" class="form-control input-lg" id="inputPassword" placeholder="Password" autocomplete="off">
</div>
<div class="form-group">
<label class="checkbox m-b-2x">
<input class="icheck-control" type="checkbox" name="rememberme" /> Remember Me
</label>
</div>
<div class="login-captcha">
</div>
<input class="btn btn-lg btn-primary btn-block " id="login" type="submit" value="Login" />
</form>
<div class="login-divider">
<span></span>
<span>or</span>
<span></span>
</div>
<div id="providerLinkingMessages" class="hidden">
<p class="providerLinkingMsg-preLink-init_failed">
<span class="provider-name"></span> is unavailable at this time. Please try again later.
</p>
<p class="providerLinkingMsg-preLink-connect_error">
<strong>Error</strong> We were unable to connect your account. Please contact your system administrator.
</p>
<p class="providerLinkingMsg-preLink-complete_sign_in">
Please complete sign in with your chosen service provider.
</p>
<p class="providerLinkingMsg-preLink-2fa_needed">
Automatic sign-in successful! Redirecting...
</p>
<p class="providerLinkingMsg-preLink-linking_complete">
<strong>Success!</strong> Your account is now linked with your :displayName account.
</p>
<p class="providerLinkingMsg-preLink-login_to_link-signin-required">
<strong>Link Initiated!</strong> Please complete sign in to associate this service with your existing account. You will only have to do this once.
</p>
<p class="providerLinkingMsg-preLink-login_to_link-registration-required">
<strong>Link Initiated!</strong> Please complete the registration form below.
</p>
<p class="providerLinkingMsg-preLink-checkout-new">
<strong>Link Initiated!</strong> Please complete your new account information.
</p>
<p class="providerLinkingMsg-preLink-other_user_exists">
<strong>Error</strong> This account is already connected to an existing account with us. Please choose a different account at the third party authentication provider.
</p>
<p class="providerLinkingMsg-preLink-already_linked">
<strong>Error</strong> This account is already connected to your account with us. Please choose a different account at the third party authentication provider.
</p>
<p class="providerLinkingMsg-preLink-default">
<strong>Error</strong> We were unable to connect your account. Please contact your system administrator.
</p>
</div>
<div class="providerPreLinking" data-link-context="" data-hide-on-prelink=1 data-disable-on-prelink=0>
<div class="social-signin-btns">
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    window.onerror = function(e){
        WHMCS.authn.provider.displayError();
    };

    var googleUser = {};
    var startGoogleApp = function() {
        gapi.load('auth2', function() {
            gapi.auth2.init({
                client_id: '420543700384-4p0p7ansdkd4g0g0k64deeq9vaagrbdr.apps.googleusercontent.com',
                cookiepolicy: 'https://host.cloudinos.com'
            }).then(function(response) {
                jQuery('.btn-google').each(function (i, el) {
                    response.attachClickHandler(el, {},
                        function (googleUser) {
                            onSignIn(googleUser);
                        }
                    );
                });
            }, function(reason) {
                if (reason.error == 'idpiframe_initialization_failed') {
                    jQuery('.btn-google').click(function(e) {
                        WHMCS.authn.provider.displayError('Google Sign-In', 'init_failed', reason.details);
                    });
                } else {
                    jQuery('.btn-google').click(function(e) {
                        WHMCS.authn.provider.displayError('Google Sign-In');
                    });
                }
            });
        });
    };

    function onSignIn(googleUser) {
        WHMCS.authn.provider.preLinkInit();

        var failIfExists = 0;
        if ("login" === "register"
           || "login" === "connect"
        ) {
            failIfExists = 1;
        }

        var context = {
            htmlTarget: "login",
            targetLogin: "login",
            targetRegister: "register",
            redirectUrl: "cart.php%3Fa%3Dlogin"
        };
        var config = {
            url: "/index.php?rp=/auth/provider/google_signin/finalize",
            method: "POST",
            dataType: "json",
            data: {
                id_token: googleUser.getAuthResponse().id_token,
                fail_if_exists: failIfExists,
                token: "9cd30ddcb7c9685ecc91d735aad3568bab65438a",
                cartCheckout: 0
            }
        };
        var provider = {
            "name": "Google",
            "icon":  "<img src=\"/assets/img/auth/google_icon.png\" width=\"17px\" height=\"17px\" alt=\"googleIcon\" /> "
        };

        var providerDone = function () { gapi.auth2.getAuthInstance().signOut(); };
        var providerError = function () { gapi.auth2.getAuthInstance().signOut(); };

        WHMCS.authn.provider.signIn(config, context, provider, providerDone, providerError);
    }

</script>
<script src="../apis.google.com/js/platform40e4.js?onload=startGoogleApp" async defer></script>
<button id="btnGoogleSignin1" class="btn btn-social btn-google" type="button">
<img src="assets/img/auth/google_icon.png" width="17px" height="17px" alt="googleIcon" />
Sign in with Google
</button>
</div>
</div>
</div>
<div class="login-footer">
<div class="text-light">Not a member yet? <a href="register.html">Create a New Account</a></div>
</div>
</div>
<div class="login-language dropdown dropup language" data-language-select>
<span>Language:&nbsp;</span>
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
English
<b class="ls ls-caret"></b>
</a>
<div class="dropdown-menu dropdown-language-search  dropdown-menu-right">
<input type="hidden" data-language-select-value value="English">
<input type="hidden" data-language-select-backlink value="/index.php?rp=%2Flogin&amp;">
<input type="hidden" data-language-select-lang value="Select">
<div class="dropdown-header input-group align-center">
<i class="input-group-icon lm lm-search"></i>
<input class="form-control" placeholder="Search..." type="text" data-language-select-search>
</div>
<div class="nav-divider"></div>
<div class="dropdown-menu-items has-scroll" data-language-select-list>
<div class="dropdown-menu-item " data-value="arabic" data-language="العربية">
<a href="index2357.html?rp=%2Flogin&amp;language=arabic">
<span class="language-flag arabic"></span>
<span class="language-text">العربية</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="azerbaijani" data-language="Azerbaijani">
<a href="index0fdb.html?rp=%2Flogin&amp;language=azerbaijani">
<span class="language-flag azerbaijani"></span>
<span class="language-text">Azerbaijani</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="catalan" data-language="Català">
<a href="indexd4b4.html?rp=%2Flogin&amp;language=catalan">
<span class="language-flag catalan"></span>
<span class="language-text">Català</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="chinese" data-language="中文">
<a href="index6047.html?rp=%2Flogin&amp;language=chinese">
<span class="language-flag chinese"></span>
<span class="language-text">中文</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="croatian" data-language="Hrvatski">
<a href="index030d.html?rp=%2Flogin&amp;language=croatian">
<span class="language-flag croatian"></span>
<span class="language-text">Hrvatski</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="czech" data-language="Čeština">
<a href="indexec7d.html?rp=%2Flogin&amp;language=czech">
<span class="language-flag czech"></span>
<span class="language-text">Čeština</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="danish" data-language="Dansk">
<a href="indexf21c.html?rp=%2Flogin&amp;language=danish">
<span class="language-flag danish"></span>
<span class="language-text">Dansk</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="dutch" data-language="Nederlands">
<a href="index7ec8.html?rp=%2Flogin&amp;language=dutch">
<span class="language-flag dutch"></span>
<span class="language-text">Nederlands</span>
</a>
</div>
<div class="dropdown-menu-item active" data-value="english" data-language="English">
<a href="indexb6c7.html?rp=%2Flogin&amp;language=english">
<span class="language-flag english"></span>
<span class="language-text">English</span>
</a>
 </div>
<div class="dropdown-menu-item " data-value="estonian" data-language="Estonian">
<a href="index87a9.html?rp=%2Flogin&amp;language=estonian">
<span class="language-flag estonian"></span>
<span class="language-text">Estonian</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="farsi" data-language="Persian">
<a href="index2d04.html?rp=%2Flogin&amp;language=farsi">
<span class="language-flag farsi"></span>
<span class="language-text">Persian</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="french" data-language="Français">
<a href="indexba25.html?rp=%2Flogin&amp;language=french">
<span class="language-flag french"></span>
<span class="language-text">Français</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="german" data-language="Deutsch">
<a href="indexe5d6.html?rp=%2Flogin&amp;language=german">
<span class="language-flag german"></span>
<span class="language-text">Deutsch</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="hebrew" data-language="עברית">
<a href="index4f13.html?rp=%2Flogin&amp;language=hebrew">
<span class="language-flag hebrew"></span>
<span class="language-text">עברית</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="hungarian" data-language="Magyar">
<a href="indexac04.html?rp=%2Flogin&amp;language=hungarian">
<span class="language-flag hungarian"></span>
<span class="language-text">Magyar</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="italian" data-language="Italiano">
<a href="indexd54b.html?rp=%2Flogin&amp;language=italian">
<span class="language-flag italian"></span>
<span class="language-text">Italiano</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="macedonian" data-language="Macedonian">
<a href="index2116.html?rp=%2Flogin&amp;language=macedonian">
<span class="language-flag macedonian"></span>
<span class="language-text">Macedonian</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="norwegian" data-language="Norwegian">
<a href="indexd241.html?rp=%2Flogin&amp;language=norwegian">
<span class="language-flag norwegian"></span>
<span class="language-text">Norwegian</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="portuguese-br" data-language="Português">
<a href="indexeada.html?rp=%2Flogin&amp;language=portuguese-br">
<span class="language-flag portuguese-br"></span>
<span class="language-text">Português</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="portuguese-pt" data-language="Português">
<a href="index86cc.html?rp=%2Flogin&amp;language=portuguese-pt">
<span class="language-flag portuguese-pt"></span>
<span class="language-text">Português</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="romanian" data-language="Română">
<a href="indexe3bb.html?rp=%2Flogin&amp;language=romanian">
<span class="language-flag romanian"></span>
<span class="language-text">Română</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="russian" data-language="Русский">
<a href="indexe0a0.html?rp=%2Flogin&amp;language=russian">
<span class="language-flag russian"></span>
<span class="language-text">Русский</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="spanish" data-language="Español">
<a href="indexd398.html?rp=%2Flogin&amp;language=spanish">
<span class="language-flag spanish"></span>
<span class="language-text">Español</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="swedish" data-language="Svenska">
<a href="index2fc6.html?rp=%2Flogin&amp;language=swedish">
<span class="language-flag swedish"></span>
<span class="language-text">Svenska</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="turkish" data-language="Türkçe">
<a href="index1422.html?rp=%2Flogin&amp;language=turkish">
<span class="language-flag turkish"></span>
<span class="language-text">Türkçe</span>
</a>
</div>
<div class="dropdown-menu-item " data-value="ukranian" data-language="Українська">
<a href="index1e12.html?rp=%2Flogin&amp;language=ukranian">
<span class="language-flag ukranian"></span>
<span class="language-text">Українська</span>
</a>
</div>
</div>
<div class="dropdown-menu-item dropdown-menu-no-data">
<span class="text-info text-large">
No Records Found
</span>
</div>
</div> </div>
</div>
</div>
</div>
<div id="fullpage-overlay" class="hidden">
<div class="outer-wrapper">
<div class="inner-wrapper">
<img src="assets/img/overlay-spinner.svg">
<br>
<span class="msg"></span>
</div>
</div>
</div>
<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true" style="display: none">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
<h5 class="modal-title"></h5>
</div>
<div class="modal-body">
<div class="loader">
<div class="spinner ">
<div class="rect1"></div>
<div class="rect2"></div>
<div class="rect3"></div>
<div class="rect4"></div>
<div class="rect5"></div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary modal-submit">
Submit
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
</button>
</div>
</div>
</div>
</div>
<form action="#" id="frmGeneratePassword" class="form-horizontal">
<div class="modal fade" id="modalGeneratePassword" style="display: none">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="lm lm-close"></i></button>
<h5 class="modal-title">
Generate Password
</h5>
</div>
<div class="modal-body">
<div class="alert alert-danger hidden" id="generatePwLengthError">
Please enter a number between 8 and 64 for the password length
</div>
<div class="form-group">
<label for="generatePwLength" class="col-md-4 control-label">Password Length</label>
 <div class="col-md-8">
<input type="number" min="8" max="64" value="12" step="1" class="form-control input-inline input-inline-100" id="inputGeneratePasswordLength">
</div>
</div>
<div class="form-group">
<label for="generatePwOutput" class="col-md-4 control-label">Generated Password</label>
<div class="col-md-8">
<input type="text" class="form-control" id="inputGeneratePasswordOutput">
</div>
</div>
<div class="row">
<div class="col-md-8 col-md-offset-4">
<button type="submit" class="btn btn-default btn-sm">
<i class="fa fa-plus fa-fw"></i>
Generate new password
</button>
<button type="button" class="btn btn-default btn-sm copy-to-clipboard" data-clipboard-target="#inputGeneratePasswordOutput">
<img src="assets/img/clippy.svg" alt="Copy to clipboard" width="15">
Copy
</button>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
</button>
<button type="button" class="btn btn-primary" id="btnGeneratePasswordInsert" data-clipboard-target="#inputGeneratePasswordOutput">
Copy to clipboard and Insert
</button>
</div>
</div>
</div>
</div>
</form>
<div class="overlay"></div>
@endsection
