@extends('layouts.front')
@section('content')
    <body class="lagom lagom-not-portal lagom-layout-top lagom-futuristic page-homepage" data-phone-cc-input="1">
    <div class="app-nav">
        <div class="app-nav-header" id="header">
            <div class="container">
                <button class="app-nav-toggle navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
{{--                logo gooes in here--}}
                <a class="logo hidden-sm hidden-xs hidden-md" href="index-2.html"><img src="{{asset('templates/lagom2/assets/img/logo/logo_big_inverse.1222276713.png')}}" title="Cee-Tradar Hosting" alt="Cee-Tradar Hosting" /></a>
                <a class="logo visible-xs visible-sm visible-md" href="index-2.html"><img src="{{asset('templates/lagom2/assets/img/logo/logo_big_inverse.1222276713.png')}}" title="Cee-Tradar Hosting" alt="Cee-Tradar Hosting" /></a>
                <ul class="top-nav">
                    <li menuItemName="View Cart" class=" nav-item-cart" id="Secondary_Navbar-View_Cart">
                        <a href="cart17cb.html?a=view">
                            <i class="fas fa-test lm lm-basket"></i>
                            <span class="item-text">Cart</span>
                            <span class="nav-badge badge badge-primary-faded hidden"><span></span></span> </a>
                    </li>
                    <li menuItemName="Currencies-147" class="dropdown nav-item-currency" id="Secondary_Navbar-Currencies-147">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <span class="item-text">NGN</span>
                            <b class="ls ls-caret"></b> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-items has-scroll">
                                <div class="dropdown-menu-item active">
                                    <a href="indexd897.html?currency=1">
                                        <span>NGN</span>
                                    </a>
                                </div>
                                <div class="dropdown-menu-item ">
                                    <a href="indexf23d.html?currency=2">
                                        <span>USD</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-nav-menu" id="main-menu">
            <div class="container">
                <ul class="menu menu-primary" data-nav>
                    <li menuItemName="Home" class="" id="Primary_Navbar-Home">
                        <a href="https://cloudinos.com/">
                            <span class="item-text">Home</span>
                        </a>
                    </li>
                    <li menuItemName="footer_extended.products" class="dropdown nav-item-text-only" id="Primary_Navbar-footer_extended.products">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
<polygon class="svg-icon-prime svg-icon-stroke" points="59,47.4 59,36.2 32,48 5,36.2 5,47.4 32,63 " />
                                <polygon class="svg-icon-prime-l svg-icon-stroke" points="32,44.3 11.2,32.3 5,35.9 32,51.5 59,35.9 52.8,32.3 " />
                                <line class="svg-icon-outline-s" x1="32" y1="32.7" x2="32" y2="43.2" />
                                <polyline class="svg-icon-outline-s" points="5.5,16.9 32,32.2 58.5,16.9 " />
                                <polygon class="svg-icon-outline-s" points="5,16.6 5,28.1 32,43.7 59,28.1 59,16.6 32,1 " />
                                <line class="svg-icon-outline-s" x1="37" y1="34.8" x2="44" y2="30.7" />
</svg>
                            <span class="item-text">Products</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">
                            <li menuItemName="Managed Cloud Turbo" class=" " id="Primary_Navbar-footer_extended.products-Managed_Cloud_Turbo">
                                <a href="index66af.html?rp=/store/shared-cloud-turbo">
                                    <i class="fas fa-ticket ls ls-box"></i>
                                    Managed Cloud Turbo
                                </a>
                            </li>
                            <li menuItemName="Shared hosting" class=" " id="Primary_Navbar-footer_extended.products-Shared_hosting">
                                <a href="index9e39.html?rp=/store/shared-hosting">
                                    <i class="fas fa-ticket ls ls-box"></i>
                                    Shared hosting
                                </a>
                            </li>
                            <li menuItemName="CMS Hosting" class=" " id="Primary_Navbar-footer_extended.products-CMS_Hosting">
                                <a href="index92ed.html?rp=/store/cms-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    CMS Hosting
                                </a>
                            </li>
                            <li menuItemName="JavaScript Hosting" class=" " id="Primary_Navbar-footer_extended.products-JavaScript_Hosting">
                                <a href="index9d79.html?rp=/store/javascript-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    JavaScript Hosting
                                </a>
                            </li>
                            <li menuItemName="Python Hosting" class=" " id="Primary_Navbar-footer_extended.products-Python_Hosting">
                                <a href="index35b4.html?rp=/store/python-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    Python Hosting
                                </a>
                            </li>
                            <li menuItemName="Laravel Hosting" class=" " id="Primary_Navbar-footer_extended.products-Laravel_Hosting">
                                <a href="indexa99b.html?rp=/store/laravel-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    Laravel Hosting
                                </a>
                            </li>
                            <li menuItemName="Students Hosting" class=" " id="Primary_Navbar-footer_extended.products-Students_Hosting">
                                <a href="index2587.html?rp=/store/student-hosting">
                                    <i class="fas fa-ticket ls ls-hosting"></i>
                                    Students Hosting
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Domains" class="dropdown nav-item-text-only" id="Primary_Navbar-Domains">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" x="0px" y="0px" width="64px" height="64px">
                                <ellipse class="svg-icon-prime svg-icon-stroke" cx="31.45" cy="32.38" rx="7.48" ry="7.48" />
                                <path class="svg-icon-outline-s" d="M54.14,54.29A30.57,30.57,0,0,1,32.2,63a30.34,30.34,0,0,1-21.85-8.71A31.18,31.18,0,0,1,1,32.38a31.18,31.18,0,0,1,9.35-21.91A31.18,31.18,0,0,1,32.2,1a31.37,31.37,0,0,1,21.94,9.47A30.67,30.67,0,0,1,63,32.38,30.67,30.67,0,0,1,54.14,54.29Z" />
                                <path class="svg-icon-outline-s" d="M1,32.89a15.35,15.35,0,0,1,.09-2" />
                                <path class="svg-icon-outline-s dashed-21" d="M5.79,23.9a24.23,24.23,0,0,1,4.57-3.36C16,17.3,23.7,15.3,32.24,15.3s16.28,2,21.88,5.24a21.48,21.48,0,0,1,6.51,5.51" />
                                <path class="svg-icon-outline-s" d="M62.7,29.74a8,8,0,0,1,.2,2" />
                                <path class="svg-icon-outline-s" d="M63,31.08C63,36,59.72,41,54.12,44.23a45,45,0,0,1-22,5.65,44.17,44.17,0,0,1-21.78-5.65C4.76,41,1,36.52,1,31.59" />
                                <path class="svg-icon-outline-s" d="M32.87,63a16.42,16.42,0,0,1-2-.11" />
                                <path class="svg-icon-outline-s dashed-22" d="M24.38,59.6a23.31,23.31,0,0,1-4.11-5.32C17,48.67,15,40.93,15,32.38s2-16.29,5.23-21.89a20.92,20.92,0,0,1,6.23-7l1-.65" />
                                <path class="svg-icon-outline-s" d="M30.89,1.3a7.81,7.81,0,0,1,2-.27" />
                                <path class="svg-icon-outline-s" d="M31.41,1c4.93,0,9.44,3.86,12.67,9.46a44.62,44.62,0,0,1,5.81,21.89,44.69,44.69,0,0,1-5.81,21.9C40.85,59.88,36.34,63,31.41,63" />
                            </svg>
                            <span class="item-text">Domains</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">
                            <li menuItemName="Register a New Domain" class=" " id="Primary_Navbar-Domains-Register_a_New_Domain">
                                <a href="cart2029.html?a=add&amp;domain=register">
                                    <i class="fas fa-test lm lm-globe"></i>
                                    Register a New Domain
                                </a>
                            </li>
                            <li menuItemName="Transfer Domains to Us" class=" " id="Primary_Navbar-Domains-Transfer_Domains_to_Us">
                                <a href="cart7c76.html?a=add&amp;domain=transfer">
                                    <i class="fas fa-test ls ls-transfer"></i>
                                    Transfer Domains to Us
                                </a>
                            </li>
                            <li menuItemName="Divider-178" class="nav-divider " id="Primary_Navbar-Domains-Divider-178">
                                -----
                            </li>
                            <li menuItemName="Domain Pricing" class=" " id="Primary_Navbar-Domains-Domain_Pricing">
                                <a href="indexdc6f.html?rp=/domain/pricing">
                                    <i class="fas fa-test ls ls-document-info"></i>
                                    Domain Pricing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Website & Security" class="dropdown nav-item-text-only" id="Primary_Navbar-Website_&_Security">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
<polygon class="svg-icon-prime-l svg-icon-stroke" points="31,27.5 59,3.8 54,1 26,17.2 26,24.7" />
                                <polygon class="svg-icon-prime svg-icon-stroke" points="31,19.9 31,27.5 38.5,31.9 38.5,48 45,48 59,31.8 59,3.8" />
                                <polygon class="svg-icon-outline-s" points="33,63 19,63 5,46.8 5,18.8 10,16 38,32.2 38,60.3" />
                                <polyline class="svg-icon-outline-s" points="5.5,19.1 33,34.9 33,62.5" />
                                <line class="svg-icon-outline-s" x1="33.5" y1="34.6" x2="37.5" y2="32.5" />
</svg>
                            <span class="item-text">Website & Security</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">
                            <li menuItemName="sitelock" class=" " id="Primary_Navbar-Website_&_Security-sitelock">
                                <a href="index7c78.html?rp=/store/sitelock">
                                    <i class="fas fa-ticket ls ls-shield"></i>
                                    Website Security
                                </a>
                            </li>
                            <li menuItemName="symantec" class=" " id="Primary_Navbar-Website_&_Security-symantec">
                                <a href="index25af.html?rp=/store/ssl-certificates">
                                    <i class="fas fa-ticket ls ls-padlock"></i>
                                    SSL Certificates
                                </a>
                            </li>
                            <li menuItemName="weebly" class=" " id="Primary_Navbar-Website_&_Security-weebly">
                                <a href="indexddcf.html?rp=/store/weebly-website-builder">
                                    <i class="fas fa-ticket ls ls-dashboard"></i>
                                    Website Builder
                                </a>
                            </li>
                            <li menuItemName="spamexperts" class=" " id="Primary_Navbar-Website_&_Security-spamexperts">
                                <a href="indexda14.html?rp=/store/email-spam-filtering">
                                    <i class="fas fa-ticket ls ls-envelope"></i>
                                    E-mail Services
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Affiliates" class=" nav-item-text-only" id="Primary_Navbar-Affiliates">
                        <a href="index804a.html">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
<line class="svg-icon-outline-s" x1="14" y1="45.8" x2="20" y2="49.2"></line>
                                <polygon class="svg-icon-outline-s" points="5,20 5,51 26,63 59,44 59,13 38,1"></polygon>
                                <polyline class="svg-icon-outline-p" points="30.6,12.6 25.1,15.7 29.3,18.1 34.7,14.9 38.9,17.3 33.4,20.4"></polyline>
                                <line class="svg-icon-outline-p" x1="25.8" y1="13" x2="27.7" y2="14"></line>
                                <line class="svg-icon-outline-p" x1="36.3" y1="19" x2="38.2" y2="20"></line>
                                <polyline class="svg-icon-outline-s" points="13.3,15.5 34,27.4 34,58"></polyline>
                                <polyline class="svg-icon-outline-s" points="30.2,5.7 51,17.6 51,48"></polyline>
                                <line class="svg-icon-outline-s" x1="5.2" y1="30.4" x2="11" y2="33.8"></line>
                                <polyline class="svg-icon-outline-s" points="5.3,20.2 26,32 58.8,13.1"></polyline>
                                <line class="svg-icon-outline-s" x1="26" y1="32.3" x2="26" y2="62"></line>
</svg>
                            <span class="item-text">Affiliates</span>
                        </a>
                    </li>
                    <li menuItemName="Support" class="dropdown nav-item-text-only" id="Primary_Navbar-Support">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <svg class="svg-icon {if $onDark}svg-icon-on-dark{/if}" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="svg-icon-outline-s" d="M13.1148 27.5496C13.1148 25.922 13.702 24.0903 14.7472 22.4575C15.7924 20.8247 17.21 19.5247 18.6881 18.8432L38.2908 9.80629C39.7688 9.12487 41.1864 9.11793 42.2316 9.787C43.2769 10.4561 43.8641 11.7464 43.8641 13.374V26.4946C43.8641 28.1222 43.2769 29.9538 42.2316 31.5866C41.1864 33.2193 39.7688 34.5195 38.2908 35.2009L30.3321 38.8698L21.9913 49.1974C20.8459 50.616 19.2646 50.4425 19.2646 48.8986V43.972L18.6881 44.2378C17.21 44.9192 15.7924 44.9262 14.7472 44.2571C13.702 43.5881 13.1148 42.2977 13.1148 40.6701V27.5496Z" />
                                <path class="svg-icon-outline-s dashed-40" d="M32.1611 12.5133V6.64023C32.1611 5.01259 31.5739 3.72231 30.5286 3.05323C29.4834 2.38416 28.0658 2.3911 26.5878 3.07253L6.98511 12.1095C5.50697 12.7909 4.08938 14.091 3.04419 15.7237C1.99899 17.3565 1.4118 19.1882 1.4118 20.8158V33.9363C1.4118 35.5639 1.99899 36.8543 3.04419 37.5233C4.08938 38.1924 5.50697 38.1854 6.98511 37.504L7.56165 37.2382V42.1648C7.56165 43.7088 9.14292 43.8822 10.2883 42.4636L12.8925 39.6738" />
                                <path class="svg-icon-prime-l svg-icon-stroke" d="M26.3246 31.1608C25.2825 32.7888 24.697 34.6151 24.697 36.238V49.3202C24.697 50.9431 25.2825 52.2296 26.3246 52.8967C27.3668 53.5638 29.1827 54.5099 30.254 55.701C30.5095 55.985 30.5633 56.1603 30.8064 56.4592C31.1581 56.8916 31.0031 56.8673 32.4671 57.7974C33.9311 58.7275 38.6214 61.7522 38.6214 61.7522L40.8473 47.8096L56.5439 39.8214C58.0177 39.142 59.4312 37.8457 60.4733 36.2177C61.5155 34.5897 62.5113 32.7798 62.5113 31.1569L62.3705 23.5844C61.8264 21.464 56.8214 18.0753 54.5267 17.6004C53.6723 17.4235 51.911 17.6004 49.7994 18.5466L30.254 27.5571C28.7802 28.2365 27.3668 29.5328 26.3246 31.1608Z" />
                                <path class="svg-icon-prime svg-icon-stroke" d="M31.9288 39.321C31.9288 37.6981 32.5142 35.8718 33.5564 34.2438C34.5985 32.6158 36.012 31.3195 37.4858 30.6401L57.0311 21.6296C58.5049 20.9501 59.9184 20.9432 60.9605 21.6103C62.0027 22.2774 62.5881 23.564 62.5881 25.1868V38.269C62.5881 39.8919 62.0027 41.7182 60.9605 43.3462C59.9184 44.9742 58.5049 46.2705 57.0311 46.9499L49.0957 50.6082L40.7794 60.9055C39.6373 62.3199 38.0606 62.1471 38.0606 60.6076V55.6954L37.4858 55.9605C36.012 56.6399 34.5985 56.6468 33.5564 55.9797C32.5142 55.3126 31.9288 54.0261 31.9288 52.4032V39.321Z" />
                                <path class="svg-icon-outline-i" d="M37.7524 37.3866L56.6174 28.6221" />
                                <path class="svg-icon-outline-i" d="M37.7524 43.6824L47.7968 39.0159" />
                                <path class="svg-icon-outline-i" d="M37.7524 50.1659L52.8171 43.167" />
                            </svg>
                            <span class="item-text">Support</span>
                            <b class="ls ls-caret"></b> </a>
                        <ul class="dropdown-menu has-scroll  ">
                            <li menuItemName="Contact Us" class=" " id="Primary_Navbar-Support-Contact_Us">
                                <a href="index804a.html">
                                    <i class="fas fa-test ls ls-chat-clouds"></i>
                                    Contact Us
                                </a>
                            </li>
                            <li menuItemName="Divider-185" class="nav-divider " id="Primary_Navbar-Support-Divider-185">
                                -----
                            </li>
                            <li menuItemName="Network Status" class=" " id="Primary_Navbar-Support-Network_Status">
                                <a href="index804a.html">
                                    <i class="fas fa-test ls ls-spark"></i>
                                    Network Status
                                </a>
                            </li>
                            <li menuItemName="Knowledgebase" class=" " id="Primary_Navbar-Support-Knowledgebase">
                                <a href="indexded0.html?rp=/knowledgebase">
                                    <i class="fas fa-test ls ls-document-info"></i>
                                    Knowledgebase
                                </a>
                            </li>
                            <li menuItemName="News" class=" " id="Primary_Navbar-Support-News">
                                <a href="index992c.html?rp=/announcements">
                                    <i class="fas fa-test ls ls-document"></i>
                                    News
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li menuItemName="Register" class=" nav-item-btn is-right d-md-none d-lg-flex" id="Primary_Navbar-Register">
                        <a class="btn btn-outline btn-default" href="register.html">
                            <span>Register</span>
                        </a>
                    </li>
                    <li menuItemName="Login" class=" nav-item-btn is-right d-md-none d-lg-flex" id="Primary_Navbar-Login">
                        <a class="btn btn-primary" href="index804a.html">
                            <span>Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="app-main ">
        <div class="site site-index">
            <div data-promo-slider>
                <div class="site-banner site-slider banner banner-sides banner-secondary">
                    <div class="container">
                        <div class="slider-wrapper">
                            <div class="slider-slides" data-promo-slider-wrapper>
                                <div class="slider-slide">
                                    <div class="banner-content" data-animation-content>
                                        <h1 class="banner-title">SiteLock Website Security</h1>
                                        <div class="banner-desc">
                                            <p>Protects your website and your reputation</p>
                                        </div>
                                        <div class="banner-actions">
                                            <a href="index99d7.html?a=add&amp;pid=25" class="btn btn-lg btn-primary">Get Started Now</a>
                                            <a href="index7c78.html?rp=/store/sitelock" class="btn btn-lg btn-light-outline">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-slide">
                                    <div class="banner-content" data-animation-content>
                                        <h1 class="banner-title">SSL Certificates</h1>
                                        <div class="banner-desc">
                                            <p>Secure your site and add trust & confidence for your visitors</p>
                                        </div>
                                        <div class="banner-actions">
                                            <a href="index4bd6.html?a=add&amp;pid=30" class="btn btn-lg btn-primary">Get Started Now</a>
                                            <a href="index25af.html?rp=/store/ssl-certificates" class="btn btn-lg btn-light-outline">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-slide">
                                    <div class="banner-content" data-animation-content>
                                        <h1 class="banner-title">Building a Website Has Never Been Easier</h1>
                                        <div class="banner-desc">
                                            <p>Create the perfect site with powerful drag and drop tools</p>
                                        </div>
                                        <div class="banner-actions">
                                            <a href="index2ced.html?a=add&amp;pid=42" class="btn btn-lg btn-primary">Get Started Now</a>
                                            <a href="indexddcf.html?rp=/store/weebly-website-builder" class="btn btn-lg btn-light-outline">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-slide">
                                    <div class="banner-content" data-animation-content>
                                        <h1 class="banner-title">Email Anti-Spam, Built for You</h1>
                                        <div class="banner-desc">
                                            <p>Take back control of your inbox</p>
                                        </div>
                                        <div class="banner-actions">
                                            <a href="indexbaca.html?a=add&amp;pid=45" class="btn btn-lg btn-primary">Get Started Now</a>
                                            <a href="indexda14.html?rp=/store/email-spam-filtering" class="btn btn-lg btn-light-outline">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-background">
                            <div class="banner-shape">
                                <svg viewBox="0 0 1967 662" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="st1 promo-shape-right" d="M916 531.5V0H1765L918 533L916 531.5Z" />
                                    <path class="st1 promo-shape-left" d="M916 0V533L0 0H918Z" />
                                    <path d="M1154 662L918 533L1765 0L1967 94L1154 662Z" fill="url(#promo-shape-gradient-shadow)" fill-opacity="0.1" />
                                    <defs>
                                        <linearGradient id="promo-shape-gradient-shadow" x1="923" y1="534.001" x2="1020" y2="665.001" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#2B2D2F" />
                                            <stop offset="1" stop-color="#1B1D1F" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="banner-graphics" data-promo-slider-homepage>
                                <div>
                                    <div class="banner-graphic" data-animation-icons>
                                        <svg class="promo-slider-icon svg-sitelock svg-sitelock-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<defs>
    <linearGradient id="svg-sitelock-gradient-1" x1="183.334" y1="278.953" x2="227.94" y2="356.186" gradientUnits="userSpaceOnUse">
        <stop />
        <stop offset="0.894792" stop-opacity="0" />
    </linearGradient>
    <clipPath id="clip006">
        <rect fill="white" />
    </clipPath>
</defs>
                                            <g>
                                                <polygon class="svg-left-elements-body" points="143.91,190 1.88,108 1.88,0 143.91,82" />
                                                <path class="svg-left-elements" d="M52.97,43.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L52.97,43.5z" />
                                                <path class="svg-left-elements" d="M39.12,41.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L39.12,41.5z" />
                                                <path class="svg-left-elements-1" d="M77.22,63.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L77.22,63.5z" />
                                                <path class="svg-left-elements-1" d="M21.8,25.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L21.8,25.5z" />
                                                <path class="svg-left-elements" d="M132.65,89.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-74.48-43c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L132.65,89.5z" />
                                                <path class="svg-left-elements-1" d="M13.14,32.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l8.66,5c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L13.14,32.5z" />
                                                <path class="svg-left-elements" d="M82.42,66.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l8.66,5c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L82.42,66.5z" />
                                                <path class="svg-left-elements-1" d="M120.52,94.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L120.52,94.5z" />
                                                <path class="svg-left-elements-1" d="M120.52,146.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L120.52,146.5z" />
                                                <path class="svg-left-elements" d="M110.13,140.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L110.13,140.5z" />
                                                <path class="svg-left-elements" d="M96.27,80.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l19.05,11c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L96.27,80.5z" />
                                                <path class="svg-left-elements" d="M23.53,56.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l15.59,9c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L23.53,56.5z" />
                                                <path class="svg-left-elements" d="M120.52,152.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L120.52,152.5z" />
                                                <path class="svg-left-elements-1" d="M33.92,90.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L33.92,90.5z" />
                                                <path class="svg-left-elements" d="M26.99,40.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l64.09,37c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L26.99,40.5z" />
                                                <path class="svg-left-elements" d="M44.31,108.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l71.01,41c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L44.31,108.5z" />
                                                <path class="svg-left-elements" d="M39.12,53.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L39.12,53.5z" />
                                                <path class="svg-left-elements" d="M77.22,75.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L77.22,75.5z" />
                                                <path class="svg-left-elements" d="M52.97,67.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L52.97,67.5z" />
                                                <path class="svg-left-elements" d="M52.97,119.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L52.97,119.5z" />
                                                <path class="svg-left-elements-1" d="M52.97,73.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L52.97,73.5z" />
                                                <path class="svg-left-elements" d="M33.92,78.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l19.05,11c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L33.92,78.5z" />
                                                <path class="svg-left-elements-1" d="M13.14,96.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l5.2,3c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L13.14,96.5z" />
                                                <path class="svg-left-elements" d="M23.53,96.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l15.59,9c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L23.53,96.5z" />
                                                <path class="svg-left-elements" d="M77.22,109.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L77.22,109.5z" />
                                                <path class="svg-left-elements" d="M104.93,137.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-22.52-13c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L104.93,137.5z" />
                                                <path class="svg-left-elements" d="M77.22,121.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L77.22,121.5z" />
                                                <path class="svg-left-elements" d="M52.97,101.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L52.97,101.5z" />
                                                <path class="svg-left-elements-1" d="M77.22,139.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L77.22,139.5z" />
                                                <path class="svg-left-elements" d="M39.12,117.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L39.12,117.5z" />
                                            </g>
                                            <g class="svg-code">
                                                <polygon class="svg-code-bg" points="116.19,206 83.28,187 83.28,161 116.19,180" />
                                                <path class="svg-code-text" d="M104.93,191.5c-0.22-0.13-0.44-0.35-0.61-0.65c-0.34-0.59-0.34-1.22,0-1.41l2.85-1.65l-2.85-4.94c-0.34-0.59-0.34-1.22,0-1.41c0.34-0.2,0.89,0.12,1.22,0.71l3.46,6c0.34,0.59,0.34,1.22,0,1.41l-3.46,2C105.38,191.66,105.16,191.63,104.93,191.5z" />
                                                <path class="svg-code-text" d="M98.01,187.5c-0.13-0.07-0.26-0.19-0.39-0.33c-0.43-0.49-0.6-1.19-0.39-1.57l3.46-6c0.21-0.37,0.73-0.27,1.16,0.22s0.6,1.19,0.39,1.57l-3.46,6C98.63,187.66,98.32,187.68,98.01,187.5z" />
                                                <path class="svg-code-text" d="M94.54,185.5c-0.22-0.13-0.44-0.35-0.61-0.65l-3.46-6c-0.34-0.59-0.34-1.22,0-1.41l3.46-2c0.34-0.2,0.89,0.12,1.22,0.71c0.34,0.59,0.34,1.22,0,1.41l-2.85,1.65l2.85,4.94c0.34,0.59,0.34,1.22,0,1.41C94.99,185.66,94.76,185.63,94.54,185.5z" />
                                            </g>
</svg>
                                        <svg class="promo-slider-icon svg-sitelock svg-sitelock-center" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<path class="svg-tablet-back" d="M14.9189 268.398L151.719 277.598C151.719 277.598 151.719 280.298 151.719 280.898C151.719 281.598 151.319 282.198 150.819 282.498L94.2189 315.198C92.8189 315.998 90.3189 315.898 88.7189 314.998L16.4189 273.298C15.6189 272.998 15.1189 272.198 15.0189 271.298C14.9189 270.798 14.9189 268.398 14.9189 268.398Z" />
                                            <path class="svg-tablet-front" d="M15.8189 267.498L72.4189 234.798C73.8189 233.998 76.3189 234.098 77.9189 234.998L150.219 276.698C151.819 277.598 152.019 279.098 150.619 279.898L94.0189 312.598C92.6189 313.398 90.1189 313.298 88.5189 312.398L16.2189 270.698C14.6189 269.698 14.4189 268.298 15.8189 267.498Z" />
                                            <path class="svg-tablet-screen" d="M23.0189 268.398L74.5189 238.698C75.8189 237.998 78.1189 237.998 79.5189 238.898L143.219 275.398C144.719 276.298 144.919 277.598 143.619 278.298L91.5189 307.998C90.2189 308.698 87.9189 308.698 86.5189 307.798L23.5189 271.298C21.8189 270.398 21.7189 269.098 23.0189 268.398Z" />
                                            <path class="svg-search-bottom-element" d="M84.6518 262.995C79.7664 262.317 74.8945 264.35 73.8104 267.474C72.7263 270.597 75.7415 273.728 80.6269 274.405C85.5123 275.083 90.3842 273.05 91.4683 269.927C92.5525 266.803 89.5575 263.672 84.6518 262.995ZM86.2848 269.208C86.156 269.581 86.5152 269.947 87.0911 270.021L89.1239 270.299C88.0126 272.108 85.2007 273.267 82.1922 273.159L82.6461 271.871C82.7749 271.499 82.4158 271.133 81.8466 271.051C81.6047 270.995 81.3512 271.016 81.1217 271.111C80.8921 271.205 80.6978 271.369 80.566 271.58L80.0713 272.867C77.2661 272.19 75.4976 270.38 75.7077 268.443L77.7404 268.72C77.9816 268.777 78.2346 268.758 78.4641 268.664C78.6936 268.571 78.8883 268.408 79.0211 268.199C79.1498 267.826 78.7907 267.46 78.2147 267.379L76.2158 267.101C77.3271 265.292 80.1391 264.133 83.1476 264.248L82.6936 265.536C82.5581 265.902 82.924 266.268 83.4931 266.349C83.7351 266.407 83.9892 266.387 84.2193 266.293C84.4493 266.198 84.6434 266.032 84.7738 265.82L85.2278 264.533C88.0262 265.21 89.8015 267.026 89.5914 268.958L87.5925 268.68C87.3467 268.617 87.0873 268.635 86.8521 268.73C86.617 268.825 86.4182 268.993 86.2848 269.208Z" />
                                            <path class="svg-search-bottom-element-1" opacity="0.2" d="M62.5189 258.698C73.4189 252.398 91.1189 252.398 102.019 258.698C112.919 264.998 112.919 275.198 102.019 281.498C91.1189 287.798 73.4189 287.798 62.5189 281.498C51.6189 275.198 51.6189 264.998 62.5189 258.698Z" />
                                            <path class="svg-search-bottom-element-1" opacity="0.2" d="M110.319 248.093C110.319 248.093 110.119 265.698 110.219 269.698C110.319 273.898 107.619 278.198 102.019 281.398C91.1189 287.698 73.4189 287.698 62.5189 281.398C59.5189 279.698 54.3189 275.698 54.3189 269.998C54.3189 266.098 54.3189 248.628 54.3189 248.628C54.3189 248.628 70.3714 254.32 81.4644 254.423C93.2568 254.533 110.319 248.093 110.319 248.093Z" />
                                            <path class="svg-search-bottom-element-1" opacity="0.2" d="M91.7763 238.035C91.7763 238.035 91.7109 267.856 91.7436 269.164C91.7763 270.537 90.8934 271.944 89.0621 272.99C85.4977 275.05 79.7096 275.05 76.1451 272.99C75.1641 272.434 73.4636 271.126 73.4636 269.262C73.4636 267.987 73.4636 238.21 73.4636 238.21C73.4636 238.21 78.713 240.071 82.3406 240.105C86.1968 240.141 91.7763 238.035 91.7763 238.035Z" />
                                            <path d="M205.199 257.471L289.656 306.762L260.351 323.875L175.748 274.482L205.199 257.471Z" fill="url(#svg-sitelock-gradient-1)" fill-opacity="0.1" />
                                            <g class="svg-shield">
                                                <path class="svg-shield-back" d="M202.63,255.25c0.54,0.73,1.2,1.34,1.9,1.75c0.7,0.4,1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.39-0.1,0.55-0.2c0.63-0.36,1.01-1.14,1.01-2.24V147c0-1.1-0.39-2.33-1.01-3.42c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84L202.63,255.25z" />
                                                <path class="svg-shield-back-1" d="M252.01,143.59c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-22.07,12.74-22.52,13c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84l45.03,60c0.54,0.73,1.2,1.34,1.9,1.75c0.7,0.4,1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.39-0.1,0.55-0.2c0.63-0.36,22.35-12.9,22.52-13c0.63-0.36,1.01-1.14,1.01-2.24V147C253.02,145.9,252.64,144.67,252.01,143.59z" />
                                                <path class="svg-shield-right-side" d="M229.49,156.59c0.63,1.09,1.01,2.31,1.01,3.42v100c0,1.1-0.39,1.88-1.01,2.24l-6.93,4V160.59l-1.67-2.03l6.93-4L229.49,156.59z" />
                                                <path class="svg-shield-top" d="M222.56,160.59l6.93-4c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-6.93,4-6.93,4L222.56,160.59z" />
                                                <path class="svg-shield-front" d="M173.19,272.25c0.54,0.73,1.2,1.34,1.9,1.75s1.35,0.54,1.9,0.44l45.03-8c0.2-0.04,0.38-0.1,0.55-0.2c0.63-0.36,1.01-1.14,1.01-2.24V164c0-1.1-0.39-2.33-1.01-3.42c-0.45-0.78-1.03-1.49-1.67-2.03l-45.03-38c-0.25-0.21-0.51-0.4-0.78-0.55c-0.27-0.16-0.53-0.27-0.78-0.35l-45.03-14c-0.64-0.2-1.22-0.16-1.67,0.11c-0.63,0.36-1.01,1.14-1.01,2.24v100c0,1.1,0.39,2.33,1.01,3.41c0.17,0.29,0.35,0.57,0.55,0.84L173.19,272.25z" />
                                                <path class="svg-shield-logo" d="M192.4,183l-2.6-1.5v-1c0-9.37-6.6-20.81-14.72-25.5s-14.72-0.87-14.72,8.5v1l-2.6-1.5c-1.44-0.83-2.6-0.16-2.6,1.5v38c0,1.66,1.16,3.67,2.6,4.5l34.64,20c1.44,0.83,2.6,0.16,2.6-1.5v-38C195,185.84,193.84,183.83,192.4,183z M165.56,166.5c0-6.07,4.27-8.53,9.53-5.5s9.53,10.43,9.53,16.5v1l-19.05-11L165.56,166.5L165.56,166.5z M160.36,202.5v-32l28.22,16.29l-13.5,7.79l-5.58-9.66c-0.17-0.29-0.44-0.45-0.61-0.35l-3.21,1.85c-0.17,0.1-0.17,0.41,0,0.71l8.91,15.44c0.08,0.14,0.19,0.26,0.31,0.32l0.36,0.21c0.12,0.07,0.22,0.08,0.31,0.03l14.24-8.22v24.59L160.36,202.5z" />
                                                <path class="svg-search-borders" d="M140.387 264.853H140.287V261.953L115.187 250.653C116.124 249.95 117.012 249.185 117.847 248.363C121.847 244.473 123.707 240.053 123.467 235.663C123.157 229.923 119.207 224.233 111.597 219.853C107.743 217.659 103.603 216.01 99.2968 214.953C95.0935 213.906 90.7949 213.286 86.4668 213.103C84.0419 212.973 81.6118 212.973 79.1868 213.103H79.0368C74.0625 213.359 69.1353 214.198 64.3568 215.603C60.8088 216.625 57.3949 218.065 54.1868 219.893C47.5168 223.733 43.6468 228.613 42.5868 233.653C41.1468 240.543 44.9968 247.733 54.1868 253.103C68.4868 261.303 90.8868 262.103 106.787 255.403C111.287 258.203 125.487 266.903 130.887 270.103C131.516 270.458 132.229 270.636 132.951 270.619C133.672 270.601 134.376 270.388 134.987 270.003C136.187 269.203 137.387 268.403 138.787 267.603C139.31 267.373 139.747 266.983 140.035 266.489C140.322 265.995 140.446 265.422 140.387 264.853ZM50.0868 232.153C50.4868 227.653 53.6868 223.253 59.5868 219.853C72.2868 212.553 92.9868 212.553 105.687 219.853C111.587 223.253 114.787 227.653 115.187 232.153C115.187 232.103 115.187 232.053 115.187 231.993C115.277 236.873 112.097 241.763 105.677 245.453C92.9768 252.853 72.2768 252.853 59.5768 245.453C53.0268 241.633 49.8468 236.603 50.0468 231.633C50.0568 231.803 50.0668 231.973 50.0868 232.153Z" />
                                                <path class="svg-search-top" d="M138.785 260.554C133.975 257.724 123.635 251.714 117.785 248.364L115.335 246.954C119.855 243.584 122.535 239.674 123.405 235.664C124.875 228.824 121.035 221.664 111.835 216.454C96.035 207.354 70.335 207.354 54.435 216.454C46.195 221.194 42.225 227.464 42.585 233.654C42.915 239.334 46.875 244.944 54.485 249.254C68.785 257.354 91.185 258.154 107.085 251.554C111.785 254.454 126.385 263.554 131.885 266.754C132.76 267.054 133.71 267.054 134.585 266.754C135.985 265.754 138.085 264.354 139.585 263.254C139.868 263.08 140.107 262.844 140.285 262.564C140.575 262.044 140.285 261.434 138.785 260.554ZM106.585 245.954C93.485 253.454 72.285 253.554 59.185 245.954C49.365 240.254 46.905 231.954 51.815 224.954C53.7772 222.314 56.2882 220.13 59.175 218.554C65.305 215.277 72.0911 213.415 79.035 213.104H79.185C81.609 212.944 84.0409 212.944 86.465 213.104C93.845 213.494 100.945 215.324 106.585 218.554C107.552 219.109 108.484 219.723 109.375 220.394C119.605 228.014 118.675 239.034 106.585 245.954Z" />
                                                <path class="svg-search-bg" opacity="0.6" d="M115.198 231.994C115.288 236.874 112.108 241.764 105.688 245.454C92.9879 252.854 72.2879 252.854 59.5879 245.454C53.0279 241.634 49.8479 236.604 50.0479 231.634C50.0479 231.804 50.0479 231.974 50.0479 232.154C50.4479 227.654 53.6479 223.254 59.5479 219.854C72.2479 212.554 92.9479 212.554 105.648 219.854C111.548 223.254 114.748 227.654 115.148 232.154C115.188 232.104 115.198 232.104 115.198 231.994Z" />
                                                <path class="svg-search-borders" d="M115.198 231.993C115.198 232.053 115.198 232.103 115.198 232.153C114.798 227.653 111.598 223.253 105.698 219.853C92.9977 212.553 72.2977 212.553 59.5977 219.853C53.6977 223.253 50.4977 227.653 50.0977 232.153C50.0977 231.973 50.0977 231.803 50.0977 231.633C50.2777 226.983 53.4477 222.383 59.6377 218.853C72.3377 211.453 93.0377 211.453 105.738 218.853C111.968 222.463 115.138 227.223 115.198 231.993Z" />
                                                <path class="svg-search-borders-inside" opacity="0.1" d="M115.196 231.993C115.196 232.053 115.196 232.103 115.196 232.153C114.796 227.653 111.596 223.253 105.696 219.853C92.9965 212.553 72.2965 212.553 59.5965 219.853C53.6965 223.253 50.4965 227.653 50.0965 232.153C50.0965 231.973 50.0965 231.803 50.0965 231.633C49.9967 229.287 50.6066 226.966 51.8465 224.973C53.7934 221.99 56.4627 219.548 59.6065 217.873C61.1354 216.988 62.7301 216.223 64.3765 215.583C74.8465 211.433 88.5165 211.233 99.2865 214.953C101.509 215.71 103.652 216.681 105.686 217.853C106.988 218.59 108.223 219.44 109.376 220.393C113.576 223.843 115.536 227.973 115.196 231.993Z" />
                                                <path class="svg-search-icon" d="M85.6086 224.263C78.3986 223.263 71.2086 226.263 69.6086 230.873C68.0086 235.483 72.4586 240.103 79.6686 241.103C86.8786 242.103 94.0686 239.103 95.6686 234.493C97.2686 229.883 92.8486 225.263 85.6086 224.263ZM88.0186 233.433C87.8286 233.983 88.3586 234.523 89.2086 234.633L92.2086 235.043C90.5686 237.713 86.4186 239.423 81.9786 239.263L82.6486 237.363C82.8386 236.813 82.3086 236.273 81.4686 236.153C81.1116 236.071 80.7375 236.101 80.3987 236.241C80.0599 236.381 79.7732 236.623 79.5786 236.933L78.8486 238.833C74.7086 237.833 72.0986 235.163 72.4086 232.303L75.4086 232.713C75.7646 232.797 76.1379 232.768 76.4766 232.63C76.8153 232.492 77.1026 232.252 77.2986 231.943C77.4886 231.393 76.9586 230.853 76.1086 230.733L73.1586 230.323C74.7986 227.653 78.9486 225.943 83.3886 226.113L82.7186 228.013C82.5186 228.553 83.0586 229.093 83.8986 229.213C84.2556 229.3 84.6308 229.27 84.9703 229.13C85.3098 228.99 85.5962 228.746 85.7886 228.433L86.4586 226.533C90.5886 227.533 93.2086 230.213 92.8986 233.063L89.9486 232.653C89.5858 232.561 89.203 232.587 88.8559 232.728C88.5088 232.868 88.2155 233.115 88.0186 233.433Z" />
                                                <path class="svg-smartphone-border" d="M182.958 295.924C182.958 295.924 182.958 298.024 182.958 298.624C182.958 299.424 182.358 300.324 181.158 300.924L148.358 319.724C146.258 320.924 142.958 321.124 141.158 320.024L124.358 310.424C123.658 310.124 123.158 309.324 123.158 308.524C123.158 307.724 123.158 305.924 123.158 305.924L182.958 295.924Z" />
                                                <path class="svg-smartphone-front" d="M164.958 285.124L181.758 294.724C183.658 295.824 183.358 297.624 181.258 298.824L148.458 317.624C146.358 318.824 143.058 319.024 141.258 317.924L124.458 308.324C122.658 307.224 122.858 305.424 124.958 304.224L157.758 285.424C159.858 284.224 163.058 284.124 164.958 285.124Z" />
                                                <path class="svg-smartphone-screen" d="M162.358 287.824L177.158 296.324C178.758 297.224 178.558 298.924 176.658 300.024L150.358 315.324C148.458 316.424 145.558 316.524 143.958 315.624L129.158 307.124C127.558 306.224 127.758 304.524 129.658 303.424L155.958 288.124C157.858 287.024 160.658 286.924 162.358 287.824Z" />
                                                <path class="svg-smartphone-icon-bg" d="M152.058 295.224C152.058 295.224 150.358 296.024 148.058 297.224C146.658 297.924 146.758 299.924 146.758 301.924C146.758 303.024 147.058 304.224 147.458 305.324C149.258 305.724 151.058 305.924 152.858 306.024C154.958 305.924 156.458 306.024 157.558 305.324C159.358 304.224 162.958 301.924 162.958 301.924L159.558 296.524L152.058 295.224Z" />
                                                <path class="svg-smartphone-icon" d="M156.758 301.924H151.358C150.958 301.924 150.658 301.624 150.658 301.224V299.224C150.658 298.824 150.958 298.524 151.358 298.524C151.758 298.524 152.058 298.824 152.058 299.224V300.524H156.758C157.158 300.524 157.458 300.824 157.458 301.224C157.458 301.624 157.158 301.924 156.758 301.924Z" />
                                            </g>
</svg>
                                        <svg class="promo-slider-icon svg-sitelock svg-sitelock-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<g class="svg-browser">
    <path class="svg-browser-body" d="M261.68,161v97L376,324v-97L261.68,161z" />
    <polygon class="svg-browser-top" points="376,228 261.68,162 261.68,150 376,216" />
    <path class="svg-browser-top-1" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C267.84,157.55,268.61,158.9,268.61,160z" />
    <path class="svg-browser-top-1" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C274.77,161.55,275.54,162.9,275.54,164z" />
    <path class="svg-browser-top-1" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z" />
</g>
                                            <g>
                                                <path class="svg-browser-elements" d="M337.89,246c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L337.89,246z" />
                                                <path class="svg-browser-elements" d="M329.23,241c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L329.23,241z" />
                                                <path class="svg-browser-elements" d="M320.57,236c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L320.57,236z" />
                                                <path class="svg-browser-elements" d="M311.91,231c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L311.91,231z" />
                                                <path class="svg-browser-elements" d="M303.25,226c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L303.25,226z" />
                                                <path class="svg-browser-elements" d="M364.74,267.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v36c0,0.55,0.39,1.22,0.87,1.5l25.98,15c0.48,0.28,0.87,0.05,0.87-0.5v-36C365.61,268.45,365.22,267.78,364.74,267.5z" />
                                                <path class="svg-browser-elements" d="M331.83,248.5l-58.89-34c-0.48-0.28-0.87-0.05-0.87,0.5v36c0,0.55,0.39,1.22,0.87,1.5l58.89,34c0.48,0.28,0.87,0.05,0.87-0.5v-36C332.7,249.45,332.31,248.78,331.83,248.5z" />
                                                <path class="svg-browser-avatar-bg" d="M326.64,221.5c0,4.97-3.49,6.99-7.79,4.5c-4.3-2.49-7.79-8.53-7.79-13.5s3.49-6.99,7.79-4.5C323.15,210.49,326.64,216.53,326.64,221.5z" />
                                                <path class="svg-browser-avatar" d="M321.44,216.5c0,1.66-1.16,2.33-2.6,1.5c-1.43-0.83-2.6-2.84-2.6-4.5s1.16-2.33,2.6-1.5S321.44,214.84,321.44,216.5z" />
                                                <path class="svg-browser-avatar" d="M323.17,225.5c0-1.66-1.16-3.67-2.6-4.5l-3.46-2c-1.43-0.83-2.6-0.16-2.6,1.5v3l8.66,5V225.5z" />
                                                <path class="svg-browser-avatar-bg" d="M318.84,207c-4.78-2.76-8.66-0.52-8.66,5s3.88,12.24,8.66,15s8.66,0.52,8.66-5S323.63,209.76,318.84,207zM318.84,225c-3.83-2.21-6.93-7.58-6.93-12s3.1-6.21,6.93-4s6.93,7.58,6.93,12S322.67,227.21,318.84,225z" />
                                            </g>
                                            <g class="svg-code">
                                                <polygon class="svg-code-bg" points="275.54,298 233.97,274 233.97,240 275.54,264" />
                                                <polygon class="svg-code-text" points="241.77,263.5 241.77,259.5 239.17,258 239.17,262" />
                                                <path class="svg-code-text" d="M241.77,258.5v-2l-1.73-1c-0.48-0.28-0.87-0.05-0.87,0.5v1L241.77,258.5z" />
                                                <path class="svg-code-text" d="M239.17,263v1c0,0.55,0.39,1.22,0.87,1.5l1.73,1v-2L239.17,263z" />
                                                <path class="svg-code-text" d="M246.1,266l3.46,2v-6c0-0.55-0.39-1.22-0.87-1.5l-6.06-3.5v10l3.46,2L246.1,266L246.1,266z" />
                                                <path class="svg-code-text" d="M246.96,267.5v2l1.73,1c0.48,0.28,0.87,0.05,0.87-0.5v-1L246.96,267.5z" />
                                                <path class="svg-code-text" d="M257.35,271.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L257.35,271.5z" />
                                                <path class="svg-code-text" d="M263.42,275c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L263.42,275z" />
                                                <path class="svg-code-text" d="M269.48,278.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L269.48,278.5z" />
                                                <path class="svg-code-text" d="M269.48,268.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-5.2-3c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L269.48,268.5z" />
                                                <path class="svg-code-text" d="M269.48,288.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-5.2-3c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L269.48,288.5z" />
                                            </g>
</svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="banner-graphic" data-animation-icons>
                                        <svg class="svg-symantec svg-symantec-left promo-slider-icon" viewBox="0 0 376 324">
                                            <defs xmlns="http://www.w3.org/2000/svg">
                                                <linearGradient id="svg-symantec-gradient-1" x1="211.086" y1="261.075" x2="273.267" y2="361.217" gradientUnits="userSpaceOnUse">
                                                    <stop />
                                                    <stop offset="0.821171" stop-opacity="0" />
                                                </linearGradient>
                                                <linearGradient id="svg-symantec-gradient-2" x1="122.702" y1="287.421" x2="164.805" y2="361.749" gradientUnits="userSpaceOnUse">
                                                    <stop />
                                                    <stop offset="0.578125" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                            <polygon class="svg-left-body" points="1.88,0 143.91,82 143.91,190 1.88,108" />
                                            <path class="svg-left-elements" d="M110.13,138.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L110.13,138.5z" />
                                            <path class="svg-left-elements" d="M132.65,109.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L132.65,109.5z" />
                                            <path class="svg-left-elements" d="M132.65,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-34.64-20c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L132.65,127.5z" />
                                            <path class="svg-left-elements" d="M122.25,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L122.25,127.5z" />
                                            <path class="svg-left-elements" d="M101.47,127.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L101.47,127.5z" />
                                            <path class="svg-left-elements" d="M127.45,142.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L127.45,142.5z" />
                                            <path class="svg-left-elements" d="M101.47,97.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L101.47,97.5z" />
                                            <path class="svg-left-elements" d="M127.45,112.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L127.45,112.5z" />
                                            <path class="svg-left-elements" d="M113.59,110.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-24.25-14c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L113.59,110.5z" />
                                            <path class="svg-left-elements" d="M122.25,115.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L122.25,115.5z" />
                                            <path class="svg-left-elements" d="M115.33,129.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L115.33,129.5z" />
                                            <path class="svg-left-elements" d="M89.35,102.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L89.35,102.5z" />
                                            <path class="svg-left-elements" d="M89.35,114.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L89.35,114.5z" />
                                            <path class="svg-left-elements" d="M132.65,168.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L132.65,168.5z" />
                                            <path class="svg-left-elements" d="M101.47,74.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L101.47,74.5z" />
                                            <path class="svg-left-elements" d="M33.92,94.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L33.92,94.5z" />
                                            <path class="svg-left-elements" d="M56.44,65.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-43.3-25c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L56.44,65.5z" />
                                            <path class="svg-left-elements" d="M56.44,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-34.64-20c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L56.44,83.5z" />
                                            <path class="svg-left-elements" d="M46.04,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L46.04,83.5z" />
                                            <path class="svg-left-elements" d="M25.26,83.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L25.26,83.5z" />
                                            <path class="svg-left-elements" d="M51.24,98.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L51.24,98.5z" />
                                            <path class="svg-left-elements" d="M25.26,53.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L25.26,53.5z" />
                                            <path class="svg-left-elements" d="M51.24,68.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L51.24,68.5z" />
                                            <path class="svg-left-elements" d="M37.38,66.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-24.25-14c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L37.38,66.5z" />
                                            <path class="svg-left-elements" d="M46.04,71.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L46.04,71.5z" />
                                            <path class="svg-left-elements" d="M39.12,85.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l12.12,7c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L39.12,85.5z" />
                                            <path class="svg-left-elements" d="M13.14,58.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L13.14,58.5z" />
                                            <path class="svg-left-elements" d="M13.14,70.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L13.14,70.5z" />
                                            <path class="svg-left-elements" d="M56.44,124.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L56.44,124.5z" />
                                            <path class="svg-left-elements" d="M25.26,106.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L25.26,106.5z" />
                                            <path class="svg-left-elements" d="M25.26,30.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L25.26,30.5z" />
                                            <g class="svg-medal">
                                                <path class="svg-medal-ribbon" d="M97.14,156c-1.86-1.07-3.72-2.92-5.2-5.31V172l5.2-3l5.2,9v-21.31C100.86,157.37,99,157.07,97.14,156z" />
                                                <path class="svg-medal-round-inside" d="M100.58,156.96c0.58-0.34,1.04-0.83,1.38-1.44c-1.34,0.73-3.08,0.49-4.82-0.52c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83c0-2.01,0.66-3.64,1.96-4.44c-0.7-0.01-1.36,0.14-1.94,0.48c-1.43,0.82-2.14,2.57-2.14,4.74c0,2.16,0.71,4.74,2.14,7.21s3.3,4.38,5.17,5.46C97.28,157.53,99.15,157.78,100.58,156.96z" />
                                                <path class="svg-medal-round-inside-1" d="M100.58,156.96c0.58-0.34,1.04-0.83,1.38-1.44c-1.34,0.73-3.08,0.49-4.82-0.52c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83c0-2.01,0.66-3.64,1.96-4.44c-0.7-0.01-1.36,0.14-1.94,0.48c-1.43,0.82-2.14,2.57-2.14,4.74c0,2.16,0.71,4.74,2.14,7.21s3.3,4.38,5.17,5.46C97.28,157.53,99.15,157.78,100.58,156.96z" />
                                                <path class="svg-medal-inside" d="M101.17,155.99c-1.35,0.78-3.13,0.54-4.9-0.49c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83s0.68-3.7,2.03-4.49c1.35-0.78,3.13-0.54,4.9,0.49c1.77,1.02,3.55,2.83,4.9,5.17s2.03,4.78,2.03,6.83S102.53,155.2,101.17,155.99z" />
                                                <path class="svg-medal-inside-element" d="M95.41,150c0,0.55,0.39,1.22,0.87,1.5s0.87,0.05,0.87-0.5v-6c0-0.55-0.39-1.22-0.87-1.5s-0.87-0.05-0.87,0.5V150z" />
                                                <path class="svg-medal-round-back" d="M103.26,143.46c-1.69-2.93-3.91-5.18-6.12-6.46c-2.22-1.28-4.43-1.58-6.12-0.61l-1.73,1l0.28,2.16c0.2-0.19,0.42-0.37,0.67-0.51c1.43-0.82,3.3-0.57,5.17,0.51c1.87,1.08,3.74,2.99,5.17,5.46s2.14,5.05,2.14,7.21s-0.71,3.91-2.14,4.74c-0.68,0.39-1.45,0.53-2.28,0.46l3.23,1.18l1.73-1c1.69-0.98,2.54-3.05,2.54-5.61C105.8,149.44,104.95,146.39,103.26,143.46z" />
                                                <path class="svg-medal-round-front" d="M101.53,144.46c-1.69-2.93-3.91-5.18-6.12-6.46c-2.22-1.28-4.43-1.58-6.12-0.61c-1.69,0.98-2.54,3.05-2.54,5.61s0.85,5.61,2.54,8.54s3.91,5.19,6.12,6.46c2.22,1.28,4.43,1.58,6.12,0.61c1.69-0.98,2.54-3.05,2.54-5.61S103.22,147.39,101.53,144.46z M100.31,156.49c-1.35,0.78-3.13,0.54-4.9-0.49c-1.77-1.02-3.55-2.83-4.9-5.17s-2.03-4.78-2.03-6.83s0.68-3.7,2.03-4.49c1.35-0.78,3.13-0.54,4.9,0.49c1.77,1.02,3.55,2.83,4.9,5.17s2.03,4.78,2.03,6.83S101.66,155.7,100.31,156.49z" />
                                            </g>
                                        </svg>
                                        <svg class="promo-slider-icon svg-symantec svg-symantec-center" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<path d="M233.994 237.134L335.238 296.394L303.492 314.923L202.137 255.776L233.994 237.134Z" fill="url(#svg-symantec-gradient-1)" fill-opacity="0.1" />
                                            <path d="M178.106 262.689L217.854 285.889L168.627 314.694L128.915 291.42L127.421 265.682L144.529 255.674L178.106 262.689Z" fill="url(#svg-symantec-gradient-2)" fill-opacity="0.1" />
                                            <g class="svg-padlock">
                                                <path class="svg-padlock-right-side" d="M249.56,141l-29.45,17l2.45,2.59v105.66c0,0,28.77-16.61,29.45-17s1.01-1.22,1.01-2.24v-14l-5.2-7.19l5.2-12.81v-6l-5.2-7.19l5.2-12.81v-6l-5.2-7.19l5.2-12.81v-14c0-1.02-0.34-2.24-1.01-3.41L249.56,141z" />
                                                <path class="svg-padlock-top-round-element" d="M159.49,113.51c-3.59,0-6.84-0.84-9.19-2.2s-3.81-3.23-3.81-5.31c0-2.07,1.46-3.95,3.81-5.31c2.35-1.36,5.6-2.2,9.19-2.2s6.84,0.84,9.19,2.2s3.81,3.23,3.81,5.31c0,2.07-1.46,3.95-3.81,5.31C166.33,112.67,163.08,113.51,159.49,113.51z" />
                                                <path class="svg-padlock-top-round-element" d="M220.12,148.51c-3.59,0-6.84-0.84-9.19-2.2s-3.81-3.23-3.81-5.31c0-2.07,1.46-3.95,3.81-5.31c2.35-1.36,5.6-2.2,9.19-2.2s6.84,0.84,9.19,2.2s3.81,3.23,3.81,5.31c0,2.07-1.46,3.95-3.81,5.31S223.71,148.51,220.12,148.51z" />
                                                <path class="svg-padlock-top-element" d="M159.49,111.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67c1.63-0.94,3.88-1.52,6.36-1.52s4.73,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67C164.23,110.62,161.98,111.2,159.49,111.2z" />
                                                <path class="svg-padlock-top-element" d="M159.49,123.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-12,0-12h18c0,0,0,10.56,0,12c0,1.43-1.01,2.73-2.64,3.67C164.23,122.62,161.98,123.2,159.49,123.2z" />
                                                <path class="svg-padlock-top-element" d="M220.12,146.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67s3.88-1.52,6.36-1.52c2.49,0,4.74,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67C224.85,145.62,222.6,146.2,220.12,146.2z" />
                                                <path class="svg-padlock-top-element" d="M220.12,158.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-12,0-12h18c0,0,0,10.56,0,12c0,1.43-1.01,2.73-2.64,3.67C224.85,157.62,222.6,158.2,220.12,158.2z" />
                                                <path class="svg-padlock-top" d="M249.56,141l-90.07-52c-0.89-0.51-1.77-0.63-2.45-0.24s-29.44,17-29.44,17l94.96,54.83l29.45-17C251.33,142.41,250.45,141.51,249.56,141z M167.98,110.9c-2.17,1.25-5.17,2.03-8.48,2.03s-6.31-0.78-8.49-2.03c-2.17-1.25-3.51-2.99-3.51-4.9s1.34-3.65,3.51-4.9s5.17-2.03,8.49-2.03c3.31,0,6.31,0.78,8.48,2.03s3.52,2.99,3.52,4.9C171.49,107.91,170.15,109.65,167.98,110.9z M228.6,145.9c-2.17,1.25-5.17,2.03-8.49,2.03c-3.31,0-6.31-0.78-8.49-2.03c-2.17-1.25-3.51-2.99-3.51-4.9c0-1.91,1.34-3.65,3.51-4.9s5.17-2.03,8.49-2.03c3.31,0,6.31,0.78,8.49,2.03c2.17,1.25,3.51,2.99,3.51,4.9C232.12,142.91,230.77,144.65,228.6,145.9z" />
                                                <path class="svg-padlock-top-element" d="M159.49,111.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-32,0-32h18c0,0,0,30.56,0,32c0,1.43-1.01,2.73-2.64,3.67C164.23,110.62,161.98,111.2,159.49,111.2z" />
                                                <path class="svg-padlock-top-element" d="M159.49,79.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67c1.63-0.94,3.88-1.52,6.36-1.52s4.73,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67C164.23,78.62,161.98,79.2,159.49,79.2z" />
                                                <path class="svg-padlock-top-element" d="M220.12,146.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,0-32,0-32h18c0,0,0,30.56,0,32c0,1.43-1.01,2.73-2.64,3.67C224.85,145.62,222.6,146.2,220.12,146.2z" />
                                                <path class="svg-padlock-top-element" d="M220.12,114.2c-2.49,0-4.74-0.58-6.36-1.52c-1.63-0.94-2.64-2.24-2.64-3.67c0-1.44,1.01-2.73,2.64-3.67c1.63-0.94,3.88-1.52,6.36-1.52c2.49,0,4.74,0.58,6.36,1.52c1.63,0.94,2.64,2.24,2.64,3.67s-1.01,2.73-2.64,3.67C224.85,113.62,222.6,114.2,220.12,114.2z" />
                                                <path class="svg-padlock-top-element-1" d="M220.12,109c0-19.33-13.57-42.83-30.31-52.5S159.5,54.67,159.5,74" />
                                                <path class="svg-padlock-lock-inside" d="M176.63,206.47c-0.84,0-1.7-0.25-2.55-0.74c-2.54-1.47-4.46-4.79-4.46-7.73v-12.08c-0.89-1.04-1.69-2.17-2.39-3.38c-1.81-3.13-2.8-6.52-2.8-9.54c0-3.42,1.26-6.02,3.54-7.34c0.97-0.56,2.07-0.84,3.25-0.84c1.57,0,3.21,0.49,4.87,1.45c2.61,1.51,5.05,4.06,6.86,7.2c1.81,3.13,2.8,6.52,2.8,9.54c0,3.42-1.26,6.02-3.54,7.34c-0.52,0.3-1.07,0.52-1.66,0.66v11C180.55,204.63,178.94,206.47,176.63,206.47z" />
                                                <path class="svg-padlock-front" d="M223.58,164c0-1.02-0.34-2.24-1.01-3.41c-0.68-1.17-1.56-2.07-2.45-2.59l-90.07-52c-0.89-0.51-1.77-0.63-2.45-0.24c-0.68,0.39-1.01,1.22-1.01,2.24v100c0,1.02,0.34,2.24,1.01,3.41c0.68,1.17,1.56,2.07,2.45,2.59l90.07,52c0.89,0.51,1.77,0.63,2.45,0.24s1.01-1.22,1.01-2.24L223.58,164z M181.21,188.61c-0.79,0.46-1.7,0.62-2.66,0.55V202c0,2.21-1.55,3.1-3.46,2s-3.46-3.79-3.46-6v-12.84c-0.96-1.04-1.87-2.26-2.66-3.62c-1.69-2.93-2.54-5.98-2.54-8.54s0.85-4.63,2.54-5.61c1.69-0.98,3.91-0.67,6.12,0.61c2.22,1.28,4.43,3.54,6.12,6.46c1.69,2.93,2.54,5.98,2.54,8.54C183.74,185.56,182.9,187.63,181.21,188.61z" />
                                                <path class="svg-padlock-lock" d="M175.08,168c2.22,1.28,4.43,3.54,6.12,6.46c1.69,2.93,2.54,5.98,2.54,8.54s-0.85,4.63-2.54,5.61c-0.79,0.46-1.7,0.62-2.66,0.55V202c0,2.21-1.55,3.1-3.46,2s-3.46-3.79-3.46-6v-12.84c-0.96-1.04-1.87-2.26-2.66-3.62c-1.69-2.93-2.54-5.98-2.54-8.54s0.85-4.63,2.54-5.61C170.65,166.42,172.87,166.72,175.08,168 M175.08,162c-3.7-2.14-7.18-2.48-9.8-0.97c-2.62,1.51-4.06,4.7-4.06,8.97s1.44,9.12,4.06,13.66c0.36,0.63,0.74,1.24,1.14,1.83V195c0,5.51,3.89,12.24,8.66,15c4.78,2.76,8.66,0.51,8.66-5v-9.51c0.4-0.14,0.78-0.31,1.14-0.52c2.62-1.51,4.06-4.7,4.06-8.97s-1.44-9.12-4.06-13.66C182.26,167.81,178.78,164.14,175.08,162L175.08,162z" />
                                                <path class="svg-padlock-right-side-element" d="M242.63,238c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V238z" />
                                                <path class="svg-padlock-right-side-element" d="M242.63,212c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V212z" />
                                                <path class="svg-padlock-right-side-element" d="M242.63,186c0,0.26,0.08,0.46,0.25,0.56c0.17,0.1,0.39,0.07,0.61-0.06l9.53-5.5v-20l-9.53,5.5c-0.22,0.13-0.44,0.35-0.61,0.65c-0.17,0.29-0.25,0.6-0.25,0.85V186z" />
                                            </g>
                                            <g class="svg-key">
                                                <path class="svg-key-bottom" d="M192.05,280c0-2.73,0-6,0-6s-6.94-6.21-10.04-8c-6.21-3.58-14.78-5.8-24.25-5.8c-6.81,0-13.15,1.15-18.49,3.13L55.15,219c0,0,0,4.83,0,6s0.82,2.23,2.15,3l71.58,41.33c-1.06,0.96-5.41,4.67-5.41,4.67s0,3.29,0,6c0,5.47,3.84,10.42,10.04,14c6.21,3.58,14.78,5.8,24.25,5.8s18.04-2.22,24.25-5.8C188.22,290.42,192.05,285.47,192.05,280z M157.76,291.31c-5.41,0-10.31-1.27-13.86-3.31c-3.55-2.05-5.74-4.88-5.74-8s2.19-5.95,5.74-8s8.45-3.31,13.86-3.31s10.31,1.27,13.86,3.31c3.55,2.05,5.74,4.88,5.74,8s-2.19,5.95-5.74,8C168.07,290.05,163.17,291.31,157.76,291.31z" />
                                                <path class="svg-key-top" d="M192.05,274c0-5.47-3.84-10.42-10.04-14c-6.21-3.58-14.78-5.8-24.25-5.8c-6.81,0-13.15,1.15-18.49,3.13L67.7,216c-1.33-0.77-3.17-1.24-5.2-1.24c-2.03,0-3.87,0.47-5.2,1.24s-2.15,1.83-2.15,3s0.82,2.23,2.15,3l71.58,41.33c-3.42,3.08-5.41,6.74-5.41,10.67c0,5.47,3.84,10.42,10.04,14c6.21,3.58,14.78,5.8,24.25,5.8s18.04-2.22,24.25-5.8C188.22,284.42,192.05,279.47,192.05,274z M157.76,285.31c-5.41,0-10.31-1.27-13.86-3.31c-3.55-2.05-5.74-4.88-5.74-8s2.19-5.95,5.74-8s8.45-3.31,13.86-3.31s10.31,1.27,13.86,3.31c3.55,2.05,5.74,4.88,5.74,8s-2.19,5.95-5.74,8C168.07,284.05,163.17,285.31,157.76,285.31z" />
                                                <path class="svg-key-bottom" d="M76.36,237h-26.7c0,0,0,1.61,0,2s0.27,0.74,0.72,1l10.39,6c0.44,0.26,1.06,0.41,1.73,0.41c0.68,0,1.29-0.16,1.73-0.41l12.12-7L76.36,237L76.36,237z" />
                                                <polygon class="svg-key-top-1" points="62.5,229 57.3,232 68.41,241.59 76.36,237" />
                                                <path class="svg-key-bottom" d="M68.41,242.5V239l-18.75-4v2l11.11,7.5c0.44,0.26,1.06,0.41,1.73,0.41c0.68,0,1.29-0.16,1.73-0.41L68.41,242.5z" />
                                                <path class="svg-key-top" d="M68.41,239c0-0.39-0.27-0.74-0.72-1l-10.39-6c-0.44-0.26-1.06-0.41-1.73-0.41c-0.68,0-1.29,0.16-1.73,0.41l-3.46,2c-0.44,0.26-0.72,0.61-0.72,1s0.27,0.74,0.72,1l10.39,6c0.44,0.26,1.06,0.41,1.73,0.41c0.68,0,1.29-0.16,1.73-0.41l3.46-2C68.14,239.74,68.41,239.39,68.41,239z" />
                                            </g>
</svg>
                                        <svg class="svg-symantec svg-symantec-right promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<g class="svg-browser">
    <path class="svg-browser-body" d="M261.68,161v97L376,324v-97L261.68,161z" />
    <polygon class="svg-browser-top" points="376,228 261.68,162 261.68,150 376,216" />
    <path class="svg-browser-top-1" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C267.84,157.55,268.61,158.9,268.61,160z" />
    <path class="svg-browser-top-1" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C274.77,161.55,275.54,162.9,275.54,164z" />
    <path class="svg-browser-top-1" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z" />
    <path class="svg-browser-text" d="M280.74,199c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L280.74,199z" />
    <path class="svg-browser-text" d="M280.74,229c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L280.74,229z" />
    <path class="svg-browser-text" d="M280.74,257c0.48,0.28,0.87,0.05,0.87-0.5c0-0.55-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L280.74,257z" />
    <path class="svg-browser-text" d="M285.07,207.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-12.12-7c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L285.07,207.5z" />
    <path class="svg-browser-text" d="M293.73,218.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L293.73,218.5z" />
    <path class="svg-browser-text" d="M289.4,222c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L289.4,222z" />
    <path class="svg-browser-text" d="M289.4,228c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L289.4,228z" />
    <path class="svg-browser-text" d="M280.74,193c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-7.79-4.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L280.74,193z" />
    <path class="svg-browser-text" d="M289.4,192c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-16.45-9.5c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L289.4,192z" />
    <path class="svg-browser-banner" d="M364.74,233.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15c0.48,0.28,0.87,0.05,0.87-0.5v-31C365.61,234.45,365.22,233.78,364.74,233.5z" />
    <path class="svg-browser-banner" d="M331.83,214.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15c0.48,0.28,0.87,0.05,0.87-0.5v-31C332.7,215.45,332.31,214.78,331.83,214.5z" />
    <path class="svg-browser-banner" d="M364.74,272.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15c0.48,0.28,0.87,0.05,0.87-0.5v-31C365.61,273.45,365.22,272.78,364.74,272.5z" />
    <path class="svg-browser-banner" d="M331.83,253.5l-25.98-15c-0.48-0.28-0.87-0.05-0.87,0.5v31c0,0.55,0.39,1.22,0.87,1.5l25.98,15c0.48,0.28,0.87,0.05,0.87-0.5v-31C332.7,254.45,332.31,253.78,331.83,253.5z" />
</g>
</svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="banner-graphic" data-animation-icons>
                                        <svg class="svg-weebly svg-weebly-left promo-slider-icon" x="0px" y="0px" viewBox="0 0 376 324">
                                            <defs>
                                                <linearGradient id="svg-weebly-gradient-1" x1="7.3848" y1="242.076" x2="62.8167" y2="311.656" gradientUnits="userSpaceOnUse">
                                                    <stop />
                                                    <stop offset="0.739583" stop-opacity="0" />
                                                </linearGradient>
                                                <linearGradient id="svg-weebly-gradient-2" x1="195.741" y1="273.499" x2="207.781" y2="352.507" gradientUnits="userSpaceOnUse">
                                                    <stop />
                                                    <stop offset="0.671875" stop-opacity="0" />
                                                </linearGradient>
                                                <linearGradient id="svg-weebly-gradient-3" x1="172.507" y1="316.821" x2="181.726" y2="331.601" gradientUnits="userSpaceOnUse">
                                                    <stop />
                                                    <stop offset="0.739583" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                            <path d="M24.0001 229.135L119.094 283.723L96.0002 296.5L3.50006 239L24.0001 229.135Z" fill="url(#svg-weebly-gradient-1)" fill-opacity="0.1" />
                                            <path class="svg-left-elements-bottom" d="M70.29,161.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L70.29,161.5z" />
                                            <path class="svg-left-elements-bottom" d="M78.95,166.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l31.18,18c0.48,0.28,0.87,0.95,0.87,1.5s-0.39,0.78-0.87,0.5L78.95,166.5z" />
                                            <path class="svg-left-elements-bottom" d="M94.54,181.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L94.54,181.5z" />
                                            <path class="svg-left-elements-bottom" d="M85.88,176.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-15.59-9c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L85.88,176.5z" />
                                            <polygon class="svg-left-elements svg-left-body" points="116.19,174 64.23,144 64.23,96 116.19,126" />
                                            <path class="svg-left-elements" d="M64.23,144v-10.41l11.51-6.65c0.17-0.1,0.39-0.07,0.61,0.06s0.44,0.35,0.61,0.65l20.53,35.56L64.23,144z" />
                                            <polygon class="svg-left-elements" points="84.15,140.09 72.53,148.79 87.99,142.57" />
                                            <path class="svg-left-elements" d="M116.19,174v-22.41l-11.51-19.94c-0.17-0.29-0.39-0.52-0.61-0.65c-0.22-0.13-0.44-0.16-0.61-0.06l-30.92,17.85L116.19,174z" />
                                            <polygon class="svg-left-body" points="116.19,114 64.23,84 64.23,36 116.19,66" />
                                            <path class="svg-left-elements" d="M110.13,102.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-29.44-17c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L110.13,102.5z" />
                                            <path class="svg-left-elements" d="M73.76,81.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5s0.39,1.22,0.87,1.5L73.76,81.5z" />
                                            <path class="svg-left-elements" d="M92.81,91.5c0,1.66-1.16,2.33-2.6,1.5c-1.44-0.83-2.6-2.84-2.6-4.5s1.16-2.33,2.6-1.5C91.65,87.83,92.81,89.84,92.81,91.5z" />
                                            <path class="svg-left-elements" d="M86.75,75c0,0.55,0.39,1.22,0.87,1.5c0.17,0.1,0.33,0.13,0.46,0.11l6.93-1c0.24-0.04,0.41-0.26,0.41-0.61c0-0.36-0.16-0.77-0.41-1.08l-6.93-9c-0.13-0.17-0.29-0.32-0.46-0.42c-0.48-0.28-0.87-0.05-0.87,0.5V75z" />
                                            <polygon class="svg-left-body" points="53.84,78 1.88,48 1.88,0 53.84,30" />
                                            <path class="svg-left-elements" d="M42.58,39.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-15.59-9c-0.48-0.28-0.87-0.05-0.87,0.5 s0.39,1.22,0.87,1.5L42.58,39.5z" />
                                            <path class="svg-left-elements" d="M32.19,39.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-19.05-11c-0.48-0.28-0.87-0.05-0.87,0.5 s0.39,1.22,0.87,1.5L32.19,39.5z" />
                                            <path class="svg-left-elements" d="M21.8,27.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5 s0.39,1.22,0.87,1.5L21.8,27.5z" />
                                            <path class="svg-left-elements" d="M13.14,34.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l3.46,2c0.48,0.28,0.87,0.95,0.87,1.5 s-0.39,0.78-0.87,0.5L13.14,34.5z" />
                                            <path class="svg-left-elements" d="M21.8,39.5c-0.48-0.28-0.87-0.95-0.87-1.5s0.39-0.78,0.87-0.5l20.78,12c0.48,0.28,0.87,0.95,0.87,1.5 s-0.39,0.78-0.87,0.5L21.8,39.5z" />
                                            <path class="svg-left-elements" d="M42.58,57.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5 s0.39,1.22,0.87,1.5L42.58,57.5z" />
                                            <path class="svg-left-elements" d="M33.92,52.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-20.78-12c-0.48-0.28-0.87-0.05-0.87,0.5 s0.39,1.22,0.87,1.5L33.92,52.5z" />
                                            <g class="svg-cup">
                                                <path class="svg-cup-body" d="M32.9,233.2L32.9,233.2c-0.3,2.2-1.9,4.3-4.8,6c-6.4,3.7-16.9,3.7-23.3,0c-3-1.7-4.5-3.8-4.8-6h0v-0.5c0-0.1,0-0.1,0-0.2v-23.1c0-0.1,0-0.1,0-0.2v-0.5h0c0.2-2.2,1.8-4.3,4.8-6c6.4-3.7,16.9-3.7,23.3,0c3,1.7,4.5,3.8,4.8,6h0.1V233.2z" />
                                                <path class="svg-cup-top" d="M4.7,202.8c6.5-3.7,17-3.7,23.4,0c6.5,3.7,6.5,9.8,0,13.5c-6.5,3.7-17,3.7-23.4,0C-1.8,212.6-1.8,206.5,4.7,202.8z" />
                                                <path class="svg-cup-inside" d="M7,204.3c5.3-2.9,13.8-2.9,19.1,0c5.3,2.9,5.3,7.6,0,10.6c-5.3,2.9-13.8,2.9-19.1,0C1.7,211.9,1.7,207.2,7,204.3z" />
                                            </g>
                                        </svg>
                                        <svg class="svg-weebly svg-weebly-center promo-slider-icon" x="0px" y="0px" viewBox="0 0 376 324">
                                            <g class="svg-shadows">
                                                <path d="M218.879 250.282L313.013 305.221L281.575 323.544L187.2 268.783L218.879 250.282Z" fill="url(#svg-weebly-gradient-2)" fill-opacity="0.1" />
                                                <path d="M199.419 291.889L219.874 303.88L184.528 324.022L164.122 312.45L199.419 291.889Z" fill="url(#svg-weebly-gradient-3)" fill-opacity="0.1" />
                                            </g>
                                            <g class="svg-screen">
                                                <g class="svg-screen-leg">
                                                    <path class="svg-screen-leg-back" d="M227.6,249.5c0-0.8-0.6-1.5-1.4-2l-29.4-17c-0.9-0.5-2.1-0.8-3.5-0.8c-1.1,0-2.2,0.2-3,0.6l-21.8,9.9l-1.3,5.2c0,0-11.7,1.3-11.7,2.1c0,0.4,0,1.6,0,2c0,0.8,0.6,1.5,1.4,2l36.4,21c0.9,0.5,2.1,0.8,3.5,0.8s2.6-0.3,3.5-0.8c0.1-0.1,0.3-0.2,0.4-0.3l26-19c0.7-0.5,1.1-1.1,1.1-1.8C227.6,251.1,227.6,249.9,227.6,249.5z" />
                                                    <path class="svg-screen-leg-front" d="M200.6,270.3l8.8-6.4l-40.9-23.6l-11.2,5.1c-0.1,0.1-0.3,0.1-0.4,0.2c-0.9,0.5-1.4,1.2-1.4,2s0.6,1.5,1.4,2l36.4,21c0.9,0.5,2.1,0.8,3.5,0.8s2.6-0.3,3.5-0.8C200.3,270.4,200.5,270.3,200.6,270.3z" />
                                                </g>
                                                <g class="svg-screen-bottom">
                                                    <path class="svg-screen-bottom-back" d="M234.1,246.3l16.6,28.8c0,0,1.5-0.8,2.1-1.2c0.7-0.4,1-1.2,1-2.2v-23.3L234.1,246.3z" />
                                                    <path class="svg-screen-bottom-front" d="M128.6,205.2l121.1,69.9c0.7,0.4,1.6-0.1,1.6-0.9V251l-124.7-72v22.7C126.6,203.1,127.4,204.4,128.6,205.2z" />
                                                    <path class="svg-screen-bottom-button svg-illustration-opacity-48" d="M192.4,230c0,2.2-1.6,3.1-3.5,2s-3.5-3.8-3.5-6s1.6-3.1,3.5-2C190.9,225.1,192.4,227.8,192.4,230z" />
                                                </g>
                                                <g class="svg-screen-top">
                                                    <path class="svg-screen-top-back" d="M252.9,143.1c-0.7-1.2-1.6-2.1-2.4-2.6l-117.8-68c-0.9-0.5-1.8-0.6-2.5-0.2s-2.7,1.4-2.7,1.4L251.3,252l2.5-1.5V146.5C253.9,145.5,253.6,144.3,252.9,143.1z" />
                                                    <path class="svg-screen-top-front" d="M129.6,73.7l119.2,68.8c1.4,0.8,2.5,2.8,2.5,4.4v104.9c0,0.1-0.1,0.1-0.1,0.1L126.7,180c0,0-0.1-0.1-0.1-0.1V75.4C126.6,73.9,128.3,73,129.6,73.7z" />
                                                    <polygon class="svg-screen-top-bg" points="246.1,243 131.8,177 131.8,81 246.1,147" />
                                                    <path class="svg-screen-top-logo" d="M171.6,133c1.4,0.8,2.8,2.7,3.3,4.6l5.4,21.7l5.4-15.5c0.5-1.4,1.8-1.7,3.3-0.8c1.5,0.9,2.8,2.7,3.3,4.6l5.4,21.7l5.4-15.5c0.5-1.4,1.8-1.7,3.3-0.8c0.4,0.2,0.7,0.5,1.1,0.8c1.8,1.8,2.8,4.6,2.2,6.3l-8.7,25c-0.5,1.4-1.8,1.7-3.3,0.8c-1.5-0.9-2.8-2.7-3.3-4.6l-5.4-21.7l-5.4,15.5c-0.5,1.4-1.8,1.7-3.3,0.8c-1.5-0.9-2.8-2.7-3.3-4.6l-8.7-35c-0.6-2.4,0.4-4.1,2.2-3.8C170.9,132.6,171.3,132.8,171.6,133 M171.6,127c-0.9-0.5-1.9-0.9-2.7-1.1c-4.5-0.9-7,3.4-5.5,9.5l8.7,35c1.2,4.8,4.5,9.4,8.2,11.6c3.7,2.1,7,1.3,8.2-2.1l0.4-1.3l0.4,1.8c1.2,4.8,4.5,9.4,8.2,11.6c3.7,2.1,7,1.3,8.2-2.1l8.7-25c1.5-4.4-0.9-11.4-5.5-15.8c-0.9-0.9-1.8-1.6-2.7-2.1c-3.7-2.2-7-1.3-8.2,2.1l-0.4,1.3l-0.4-1.8c-1.2-4.8-4.5-9.4-8.2-11.6c-3.7-2.1-7-1.3-8.2,2.1l-0.4,1.3l-0.4-1.8C178.6,133.8,175.4,129.2,171.6,127L171.6,127z" />
                                                    <path class="svg-screen-top-logo svg-screen-top-logo-wp" d="M108.341 232.705C108.369 232.51 108.34 232.312 108.257 232.134C108.174 231.956 108.041 231.807 107.874 231.705L96.1602 222.707C95.6874 222.379 95.1336 222.189 94.56 222.157C93.9435 222.106 93.3238 222.204 92.7525 222.443L53.8828 239.355C53.657 239.422 53.4497 239.54 53.2773 239.701C53.1048 239.862 52.9719 240.062 52.8889 240.283C52.8527 240.498 52.8876 240.719 52.9881 240.913C53.0886 241.106 53.2492 241.261 53.4455 241.354L65.1692 250.352C65.6388 250.687 66.1945 250.877 66.7693 250.901C67.3846 250.963 68.0057 250.871 68.5768 250.632L107.439 233.642C107.649 233.562 107.839 233.437 107.995 233.275C108.151 233.113 108.269 232.918 108.341 232.705Z" />
                                                </g>
                                            </g>
                                            <g class="svg-keyboard">
                                                <path class="svg-keyboard-body-top" d="M208.7,296c0-0.4,0-2,0-2L80.8,261c0,0,0,1.6,0,2s0.3,0.7,0.7,1l2.9,1.7l87.2,50.3c0.4,0.3,1.1,0.4,1.7,0.4c0.7,0,1.3-0.2,1.7-0.4l32.9-19C208.4,296.7,208.7,296.4,208.7,296z" />
                                                <path class="svg-keyboard-body-bottom" d="M208.7,294c0-0.4-0.3-0.7-0.7-1l-90.1-52c-0.4-0.3-1.1-0.4-1.7-0.4c-0.7,0-1.3,0.2-1.7,0.4l-32.9,19c-0.4,0.3-0.7,0.6-0.7,1s0.3,0.7,0.7,1l90.1,52c0.4,0.3,1.1,0.4,1.7,0.4c0.7,0,1.3-0.2,1.7-0.4l32.9-19C208.4,294.7,208.7,294.4,208.7,294z" />
                                                <g>
                                                    <path class="svg-keyboard-keys-bottom" d="M113.2,273c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l38.1,22c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1L113.2,273z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M99.4,265c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H99.4z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M106.3,261c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H106.3z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M116.7,259c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H116.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M120.2,253c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H120.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M127.1,257c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H127.1z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M134,261c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H134z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M140.9,265c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H140.9z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M137.5,271c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H137.5z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M144.4,275c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H144.4z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M147.9,269c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H147.9z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M154.8,273c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H154.8z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M140.9,281c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H140.9z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M151.3,279c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H151.3z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M147.9,285c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H147.9z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M154.8,289c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H154.8z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M158.3,283c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H158.3z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M161.7,277c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H161.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M168.7,281c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H168.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M165.2,287c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H165.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M175.6,285c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H175.6z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M172.1,291c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H172.1z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M182.5,289c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H182.5z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M189.4,293c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H189.4z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M168.7,297c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H168.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M161.7,301c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H161.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M168.7,305c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H168.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M161.7,293c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H161.7z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M154.8,297c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H154.8z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M134,277c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H134z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M130.6,267c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H130.6z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M127.1,273c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H127.1z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M123.6,263c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H123.6z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M120.2,269c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H120.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M113.2,265c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1H113.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M106.3,269c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1H106.3z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M90.7,260c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5s0-1,0-1L90.7,260z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M97.7,256c0,0,0,0.8,0,1s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L97.7,256z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M191.9,298c0-0.2,0-1,0-1l-12.8-2c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l2.6,1.5l-6.4,3c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l10.4-6C191.8,298.4,191.9,298.2,191.9,298z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M104.6,252c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l8.7,5c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L104.6,252z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M111.5,248c0,0,0,0.8,0,1c0,0.2,0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2,0-1,0-1L111.5,248z" />
                                                    <path class="svg-keyboard-keys-top" d="M177.7,304.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5S177.9,304.6,177.7,304.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M171.1,301c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C171,301.4,171.1,301.2,171.1,301z" />
                                                    <path class="svg-keyboard-keys-top" d="M164.2,297c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C164,297.4,164.2,297.2,164.2,297z" />
                                                    <path class="svg-keyboard-keys-top" d="M157.3,293c0-0.2-0.1-0.4-0.4-0.5l-38.1-22c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l38.1,22c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C157.1,293.4,157.3,293.2,157.3,293z" />
                                                    <path class="svg-keyboard-keys-top" d="M115.7,269c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2C115.5,269.4,115.7,269.2,115.7,269z" />
                                                    <path class="svg-keyboard-keys-top" d="M108.8,265c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C108.6,265.4,108.8,265.2,108.8,265z" />
                                                    <path class="svg-keyboard-keys-top" d="M101.8,261c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C101.7,261.4,101.8,261.2,101.8,261z" />
                                                    <path class="svg-keyboard-keys-top" d="M169,297.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S168.8,297.4,169,297.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M162.1,293.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S161.9,293.4,162.1,293.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M155.2,289.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S154.9,289.4,155.2,289.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M148.2,285.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S148,285.4,148.2,285.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M141.3,281.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S141.1,281.4,141.3,281.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M134.4,277.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S134.2,277.4,134.4,277.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M127.5,273.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S127.2,273.4,127.5,273.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M120.5,269.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S120.3,269.4,120.5,269.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M113.6,265.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S113.4,265.4,113.6,265.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M115.7,261c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l3.5-2C115.5,261.4,115.7,261.2,115.7,261z" />
                                                    <path class="svg-keyboard-keys-top" d="M98,256.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5S97.8,256.4,98,256.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M181.5,291c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2C181.4,291.4,181.5,291.2,181.5,291z" />
                                                    <path class="svg-keyboard-keys-top" d="M191.5,296.5l-6.9-4c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l2.6,1.5l-6.1,3.5c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l10.4-6c0.2-0.1,0.4-0.3,0.4-0.5S191.8,296.6,191.5,296.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M165.2,287c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C165.3,286.6,165.2,286.8,165.2,287z" />
                                                    <path class="svg-keyboard-keys-top" d="M167.3,282.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C167.7,282.8,167.5,282.6,167.3,282.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M160.4,278.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C160.7,278.8,160.6,278.6,160.4,278.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M153.4,274.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C153.8,274.8,153.7,274.6,153.4,274.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M146.5,270.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C146.9,270.8,146.7,270.6,146.5,270.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M139.6,266.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C139.9,266.8,139.8,266.6,139.6,266.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M132.7,262.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C133,262.8,132.9,262.6,132.7,262.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M125.7,258.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C126.1,258.8,125.9,258.6,125.7,258.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M104.9,252.5l8.7,5c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-8.7-5c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5C104.6,252.2,104.7,252.4,104.9,252.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M198.5,292.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5C198.8,292.8,198.7,292.6,198.5,292.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M182.5,289c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C182.7,288.6,182.5,288.8,182.5,289z" />
                                                    <path class="svg-keyboard-keys-top" d="M175.6,285c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C175.7,284.6,175.6,284.8,175.6,285z" />
                                                    <path class="svg-keyboard-keys-top" d="M168.7,281c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C168.8,280.6,168.7,280.8,168.7,281z" />
                                                    <path class="svg-keyboard-keys-top" d="M161.7,277c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C161.9,276.6,161.7,276.8,161.7,277z" />
                                                    <path class="svg-keyboard-keys-top" d="M154.8,273c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C154.9,272.6,154.8,272.8,154.8,273z" />
                                                    <path class="svg-keyboard-keys-top" d="M147.9,269c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C148,268.6,147.9,268.8,147.9,269z" />
                                                    <path class="svg-keyboard-keys-top" d="M141,265c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C141.1,264.6,141,264.8,141,265z" />
                                                    <path class="svg-keyboard-keys-top" d="M134,261c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C134.2,260.6,134,260.8,134,261z" />
                                                    <path class="svg-keyboard-keys-top" d="M127.1,257c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C127.2,256.6,127.1,256.8,127.1,257z" />
                                                    <path class="svg-keyboard-keys-top" d="M120.2,253c0,0.2,0.1,0.4,0.4,0.5l3.5,2c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-3.5-2c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2C120.3,252.6,120.2,252.8,120.2,253z" />
                                                    <path class="svg-keyboard-keys-top" d="M111.9,248.5l5.2,3c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l3.5-2c0.2-0.1,0.4-0.3,0.4-0.5c0-0.2-0.1-0.4-0.4-0.5l-5.2-3c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2l-3.5,2c-0.2,0.1-0.4,0.3-0.4,0.5C111.5,248.2,111.6,248.4,111.9,248.5z" />
                                                </g>
                                            </g>
                                            <g class="svg-colors">
                                                <path class="svg-colors-bottom" d="M106.3,232.4c0.1-0.4-0.1-0.8-0.5-1.1l-11.8-9c-0.4-0.3-0.9-0.5-1.6-0.6c-0.7-0.1-1.3,0.1-1.8,0.3l-39.1,17c-0.5,0.2-0.9,0.6-1,0.9c-0.1,0.4,0.1,0.8,0.5,1.1l11.8,9c0.4,0.3,1,0.5,1.6,0.6s1.3-0.1,1.8-0.3l39.1-17C105.8,233.1,106.2,232.7,106.3,232.4z" />
                                                <path class="svg-colors-top" d="M43.5,242c-0.4-0.3-0.7-0.6-0.7-1s0.3-0.7,0.7-1l34.6-20c0.4-0.3,1.1-0.4,1.7-0.4c0.7,0,1.3,0.2,1.7,0.4l13.9,8c0.4,0.3,0.7,0.6,0.7,1s-0.3,0.7-0.7,1l-34.6,20c-0.4,0.3-1.1,0.4-1.7,0.4c-0.7,0-1.3-0.2-1.7-0.4L43.5,242z" />
                                                <path class="svg-colors-top-1" d="M70.3,226.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l8.7-5c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L70.3,226.5z" />
                                                <path class="svg-colors-top-2" d="M58.2,233.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2c0.3,0,0.6-0.1,0.9-0.2l8.7-5c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2c-0.3,0-0.6,0.1-0.9,0.2L58.2,233.5z" />
                                                <path class="svg-colors-top-3" d="M46,240.5c-0.2,0.1-0.4,0.3-0.4,0.5s0.1,0.4,0.4,0.5l12.1,7c0.2,0.1,0.5,0.2,0.9,0.2s0.6-0.1,0.9-0.2l8.7-5c0.2-0.1,0.4-0.3,0.4-0.5s-0.1-0.4-0.4-0.5l-12.1-7c-0.2-0.1-0.5-0.2-0.9-0.2s-0.6,0.1-0.9,0.2L46,240.5z" />
                                            </g>
                                        </svg>
                                        <svg class="svg-weebly svg-weebly-right promo-slider-icon" x="0px" y="0px" viewBox="0 0 376 324">
                                            <path class="svg-browser-body" d="M261.68,161v97L376,324v-97L261.68,161z" />
                                            <polygon class="svg-browser-top" points="376,228 261.68,162 261.68,150 376,216" />
                                            <path class="svg-browser-top-1" d="M268.61,160c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C267.84,157.55,268.61,158.9,268.61,160z" />
                                            <path class="svg-browser-top-1" d="M275.54,164c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1C274.77,161.55,275.54,162.9,275.54,164z" />
                                            <path class="svg-browser-top-1" d="M282.47,168c0,1.1-0.78,1.55-1.73,1c-0.96-0.55-1.73-1.9-1.73-3s0.78-1.55,1.73-1S282.47,166.9,282.47,168z" />
                                            <path class="svg-browser-text" d="M341.36,270c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-32.91-19c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L341.36,270z" />
                                            <path class="svg-browser-text" d="M336.16,273c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-36.37-21c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L336.16,273z" />
                                            <path class="svg-browser-text" d="M303.25,248c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-8.66-5c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L303.25,248z" />
                                            <path class="svg-browser-banner" d="M364.74,241.5l-91.8-53c-0.48-0.28-0.87-0.05-0.87,0.5v32c0,0.55,0.39,1.22,0.87,1.5l91.8,53	c0.48,0.28,0.87,0.05,0.87-0.5v-32C365.61,242.45,365.22,241.78,364.74,241.5z" />
                                            <path class="svg-browser-text" d="M330.1,275.5l-22.52-13c-0.48-0.28-0.87-0.05-0.87,0.5v8c0,0.55,0.39,1.22,0.87,1.5l22.52,13c0.48,0.28,0.87,0.05,0.87-0.5v-8C330.97,276.45,330.58,275.78,330.1,275.5z" />
                                            <path class="svg-browser-text" d="M364.74,235.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L364.74,235.5z" />
                                            <path class="svg-browser-text" d="M356.08,230.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L356.08,230.5z" />
                                            <path class="svg-browser-text" d="M347.42,225.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L347.42,225.5z" />
                                            <path class="svg-browser-text" d="M338.76,220.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L338.76,220.5z" />
                                            <path class="svg-browser-text" d="M330.1,215.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L330.1,215.5z" />
                                            <path class="svg-browser-text" d="M276.41,184.5c0.48,0.28,0.87,0.05,0.87-0.5s-0.39-1.22-0.87-1.5l-3.46-2c-0.48-0.28-0.87-0.05-0.87,0.5	s0.39,1.22,0.87,1.5L276.41,184.5z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <div class="banner-graphic" data-animation-icons>
                                        <svg class="svg-spamexperts svg-spamexperts-left promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<defs>
    <linearGradient id="svg-spamexperts-gradient-1" x1="11.1181" y1="195.673" x2="26.8102" y2="238.772" gradientUnits="userSpaceOnUse">
        <stop stop-opacity="0.04" />
        <stop offset="0.671875" stop-opacity="0" />
    </linearGradient>
    <linearGradient id="svg-spamexperts-gradient-2" x1="142.976" y1="298.668" x2="179.358" y2="361.816" gradientUnits="userSpaceOnUse">
        <stop offset="0.107575" />
        <stop offset="0.568412" stop-opacity="0" />
    </linearGradient>
</defs>
                                            <path d="M24.6497 182.153L69.7536 204.024L50.7612 215.57L7.01657 193.646L24.6497 182.153Z" fill="url(#svg-spamexperts-gradient-1)" />
                                            <g>
                                                <path class="st0 svg-browser-body" d="M1.9,11v97l114.3,66V77L1.9,11z" />
                                                <polygon class="svg-browser-top" points="116.2,78 1.9,12 1.9,0 116.2,66" />
                                                <path class="svg-browser-top-1" d="M8.8,10c0,1.1-0.8,1.6-1.7,1c-1-0.6-1.7-1.9-1.7-3s0.8-1.6,1.7-1C8,7.6,8.8,8.9,8.8,10z" />
                                                <path class="svg-browser-top-1" d="M15.7,14c0,1.1-0.8,1.6-1.7,1c-1-0.6-1.7-1.9-1.7-3s0.8-1.6,1.7-1C15,11.6,15.7,12.9,15.7,14z" />
                                                <path class="svg-browser-top-1" d="M22.7,18c0,1.1-0.8,1.5-1.7,1c-1-0.5-1.7-1.9-1.7-3s0.8-1.6,1.7-1C21.9,15.6,22.7,16.9,22.7,18z" />
                                            </g>
                                            <g>
                                                <path class="svg-browser-user-bg" d="M55.6,66c0,0.6-0.4,0.8-0.9,0.5l-8.7-5c-0.5-0.3-0.9-1-0.9-1.5V50c0-0.5,0.4-0.8,0.9-0.5l8.7,5c0.5,0.3,0.9,1,0.9,1.5V66z" />
                                                <path class="svg-browser-banner" d="M105.8,155c0,0.6-0.4,0.8-0.9,0.5l-58.9-34c-0.5-0.3-0.9-0.9-0.9-1.5v-18c0-0.6,0.4-0.8,0.9-0.5l58.9,34c0.5,0.3,0.9,0.9,0.9,1.5V155z" />
                                                <path class="svg-browser-banner" d="M40,57c0,0.5-0.4,0.8-0.9,0.5l-26-15c-0.5-0.3-0.9-1-0.9-1.5V31c0-0.5,0.4-0.8,0.9-0.5l26,15c0.5,0.3,0.9,1,0.9,1.5V57z" />
                                                <path class="svg-browser-text-left" d="M72,88.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-26-15c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L72,88.5z" />
                                                <path class="svg-browser-text-left" d="M72,112.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-26-15c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L72,112.5z" />
                                                <path class="svg-browser-text-left" d="M104.9,101.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5L46,65.5c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L104.9,101.5z" />
                                                <path class="svg-browser-text-right" d="M20.9,65c0.5,0.3,0.9,0.1,0.9-0.5c0-0.5-0.4-1.2-0.9-1.5l-7.8-4.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5L20.9,65z" />
                                                <path class="svg-browser-text-right" d="M25.3,73.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-12.1-7c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L25.3,73.5z" />
                                                <path class="svg-browser-text-right" d="M33.9,84.5c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-20.8-12c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L33.9,84.5z" />
                                                <path class="svg-browser-text-right" d="M29.6,88c0.5,0.3,0.9,0.1,0.9-0.5s-0.4-1.2-0.9-1.5l-16.5-9.5c-0.5-0.3-0.9-0.1-0.9,0.5s0.4,1.2,0.9,1.5L29.6,88z" />
                                                <path class="svg-browser-text-right" d="M20.9,59c0.5,0.3,0.9,0,0.9-0.5s-0.4-1.2-0.9-1.5l-7.8-4.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5L20.9,59z" />
                                                <path class="svg-browser-text-right" d="M29.6,58c0.5,0.3,0.9,0,0.9-0.5s-0.4-1.2-0.9-1.5l-16.5-9.5c-0.5-0.3-0.9,0-0.9,0.5s0.4,1.2,0.9,1.5L29.6,58z" />
                                                <path class="st0 svg-browser-user" d="M52.1,57c0,1.1-0.8,1.5-1.7,1c-1-0.5-1.7-1.9-1.7-3s0.8-1.5,1.7-1S52.1,55.9,52.1,57z" />
                                                <path class="st0 svg-browser-user" d="M47.8,60.5c0-1.1,0.8-1.5,1.7-1c0.3,0.2,1.4,0.8,1.7,1c1,0.5,1.7,1.9,1.7,3v3l-5.2-3L47.8,60.5L47.8,60.5z" />
                                            </g>
                                            <g class="svg-cup-flower">
                                                <path class="svg-cup-body" d="M35,186.6c0,1-1.8,5-4.8,6.7c-6.6,3.8-17.2,3.8-23.8,0c-3-1.7-5-4-5.3-5.3v-26c0.3-2.2,1.9-4.4,4.9-6.1c6.6-3.7,17.4-3.7,24.1,0c3,1.7,4.7,4,4.9,5.8C35,161.6,35,186,35,186.6z" />
                                                <path class="svg-cup-top" d="M6.1,155.2c6.6-3.8,17.4-3.8,24.1,0s6.6,10,0,13.8s-17.4,3.8-24,0C-0.6,165.2-0.6,159,6.1,155.2z" />
                                                <path class="svg-cup-inside" d="M8.2,156.6c5.5-3,14.3-3,19.8,0s5.5,7.9,0,10.9s-14.3,3-19.8,0C2.8,164.6,2.8,159.7,8.2,156.6z" />
                                                <path class="svg-flower-leaf" d="M10.9,159.8c0,0-12.1-7.2-8.7-13.5c4.1-7.7,4.3-6.1,0-15.5c-2.9-6.4,0.8-13,5.4-15.5c8.2-4.5,3.8,2.1,2.3,8c-1.5,6.1,3.5,5.6,3.8,13.5c0.3,8.2,4.4,8,3.9,13C17.3,154.2,14.7,157.9,10.9,159.8z" />
                                                <path class="svg-flower-leaf-1" d="M18.8,161.2c0,0-5.1-13.1,1.3-16c8-3.6,2.2-5.1,8.5-13.3c4.8-6.1,10.4-4.4,12.4-9.1c2.5-5.9,6.5,9,0.7,11.4c-7,3-4.9,4.6-9.1,11.3s0.9,8.2-2.6,12C27.3,160.7,23,162.1,18.8,161.2z" />
                                                <path class="svg-flower-leaf-2" d="M17.6,165.8c-6.9,0-9.5-9.9-7.4-19.5c2-9,9-8.9,9.4-16.8c0.5-10.6,16.6,9.6,9.3,14.7c-7.1,5,2.5,8.8-1.2,13.5C25.9,159.9,27.2,165.8,17.6,165.8z" />
                                            </g>
</svg>
                                        <svg class="svg-spamexperts svg-spamexperts-center promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<defs>
    <linearGradient id="svg-spamexperts-shadow" x1="154.531" y1="306.102" x2="181.495" y2="346.713" gradientUnits="userSpaceOnUse">
        <stop />
        <stop offset="0.671875" stop-opacity="0" />
    </linearGradient>
</defs>
                                            <path d="M231 241L277 267.5L181 324L135.5 297.5L231 241Z" fill="url(#svg-spamexperts-shadow)" fill-opacity="0.1" />
                                            <g class="svg-laptop-bottom">
                                                <g>
                                                    <path class="svg-laptop-bottom-back" d="M34.1 234V238C34.2 238.9 34.7 239.6 35.5 240L153.3 308C155.5 309.1 158.1 309.1 160.2 308L250.3 256V252L34.1 234Z" />
                                                    <path class="svg-laptop-bottom-top" d="M35.5 232C34.4 232.4 33.8 233.6 34.2 234.7C34.4 235.3 34.9 235.8 35.5 236L153.3 304C155.5 305.1 158.1 305.1 160.2 304L250.3 252L245.1 243L130.8 177L125.6 180L35.5 232Z" />
                                                </g>
                                                <g>
                                                    <path class="svg-laptop-touchpad-outside" d="M83.28,251c-0.44-0.26-0.72-0.61-0.72-1s0.27-0.74,0.72-1l31.18-18c0.44-0.26,1.06-0.41,1.73-0.41c0.68,0,1.29,0.16,1.73,0.41l46.77,27c0.44,0.26,0.72,0.61,0.72,1s-0.27,0.74-0.72,1l-31.18,18c-0.44,0.26-1.06,0.41-1.73,0.41c-0.68,0-1.29-0.16-1.73-0.41L83.28,251z" />
                                                    <path class="svg-laptop-touchpad-inside" d="M83.28,252c-0.44-0.26-0.72-0.61-0.72-1s0.27-0.74,0.72-1l31.18-18c0.44-0.26,1.06-0.41,1.73-0.41c0.68,0,1.29,0.16,1.73,0.41l46.77,27c0.44,0.26,0.72,0.61,0.72,1s-0.27,0.74-0.72,1l-31.18,18c-0.44,0.26-1.06,0.41-1.73,0.41c-0.68,0-1.29-0.16-1.73-0.41L83.28,252z" />
                                                </g>
                                                <g class="svg-keyboard">
                                                    <path class="svg-keyboard-keys-bottom" d="M121.9,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l48.5,28c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L121.9,226z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M104.58,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H104.58z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M113.24,211c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H113.24z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M121.9,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H121.9z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M130.56,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H130.56z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M142.68,218c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H142.68z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M139.22,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H139.22z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M147.88,231c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H147.88z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M151.34,223c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H151.34z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M160,228c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H160z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M168.66,233c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H168.66z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M173.86,226c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M156.54,236c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H156.54z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M165.2,241c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H165.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M177.32,238c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H177.32z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M182.52,231c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M191.18,236c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M185.98,243c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H185.98z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M182.52,251c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M194.64,248c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H194.64z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M199.84,241c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H199.84z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M208.5,246c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H208.5z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M217.16,251c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H217.16z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M191.18,256c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M191.18,266c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H191.18z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M173.86,256c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M182.52,261c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H182.52z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M173.86,246c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H173.86z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M156.54,216c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H156.54z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M165.2,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H165.2z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M147.88,211c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H147.88z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M113.24,221c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H113.24z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M125.36,208c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H125.36z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M130.56,201c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H130.56z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M139.22,206c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H139.22z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M134.02,213c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1H134.02z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M94.18,210c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L94.18,210z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M102.84,205c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L102.84,205z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M221.34,257c0-0.2,0-1,0-1l-18.04-3c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l4.33,2.5l-8.15,4c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l13.86-8C221.2,257.37,221.34,257.2,221.34,257z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M111.5,200c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l10.39,6c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L111.5,200z" />
                                                    <path class="svg-keyboard-keys-bottom" d="M120.16,195c0,0,0,0.8,0,1s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s0-1,0-1L120.16,195z" />
                                                </g>
                                                <g>
                                                    <path class="svg-keyboard-keys-top" d="M191.54,265.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L191.54,265.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M182.88,260.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L182.88,260.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M174.22,255.5c-0.22,0.13-0.36,0.3-0.36,0.5c0,0.2,0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5c0-0.2-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L174.22,255.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M122.25,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l48.5,28c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-48.5-28c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L122.25,225.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M113.59,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L113.59,220.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M104.93,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L104.93,215.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M94.54,209.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L94.54,209.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M191.54,255.5c-0.22,0.13-0.36,0.3-0.36,0.5c0,0.2,0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5c0-0.2-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L191.54,255.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M182.88,250.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L182.88,250.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M174.22,245.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L174.22,245.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M165.56,240.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L165.56,240.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M156.9,235.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L156.9,235.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M148.24,230.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L148.24,230.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M139.58,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L139.58,225.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M130.91,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L130.91,220.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M122.25,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L122.25,215.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M113.59,210.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L113.59,210.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M103.2,204.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L103.2,204.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M195,247.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L195,247.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M221.34,256c0-0.2-0.14-0.37-0.36-0.5l-10.39-6c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21l-5.2,3c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l4.33,2.5l-7.79,4.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l13.86-8C221.2,256.37,221.34,256.2,221.34,256z" />
                                                    <path class="svg-keyboard-keys-top" d="M186.34,242.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L186.34,242.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M177.68,237.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L177.68,237.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M169.02,232.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L169.02,232.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M160.36,227.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L160.36,227.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M151.7,222.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L151.7,222.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M143.04,217.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L143.04,217.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M134.38,212.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L134.38,212.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M125.72,207.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L125.72,207.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M111.86,199.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l10.39,6c0.22,0.13,0.53,0.21,0.87,0.21c0.34,0,0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-10.39-6c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L111.86,199.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M217.52,250.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L217.52,250.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M208.86,245.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L208.86,245.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M200.2,240.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L200.2,240.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M191.54,235.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L191.54,235.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M182.88,230.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L182.88,230.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M174.22,225.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L174.22,225.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M165.56,220.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L165.56,220.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M156.9,215.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L156.9,215.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M148.24,210.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L148.24,210.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M139.58,205.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L139.58,205.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M130.91,200.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l5.2,3c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-5.2-3c-0.22-0.13-0.53-0.21-0.87-0.21s-0.64,0.08-0.87,0.21L130.91,200.5z" />
                                                    <path class="svg-keyboard-keys-top" d="M120.52,194.5c-0.22,0.13-0.36,0.3-0.36,0.5s0.14,0.37,0.36,0.5l6.93,4c0.22,0.13,0.53,0.21,0.87,0.21s0.64-0.08,0.87-0.21l5.2-3c0.22-0.13,0.36-0.3,0.36-0.5s-0.14-0.37-0.36-0.5l-6.93-4c-0.22-0.13-0.53-0.21-0.87-0.21c-0.34,0-0.64,0.08-0.87,0.21L120.52,194.5z" />
                                                </g>
                                            </g>
                                            <g class="svg-laptop-top">
                                                <path class="svg-laptop-screen-back" d="M127.6,73.76c0,0,1.06-0.61,1.73-1c0.68-0.39,1.56-0.27,2.45,0.24l117.78,68c0.89,0.51,1.77,1.41,2.45,2.59c0.68,1.17,1.01,2.39,1.01,3.41v104l-1.73,1L127.6,73.76z" />
                                                <path class="svg-laptop-screen-front" d="M126.58,76c0-1.02,0.34-1.85,1.01-2.24c0.68-0.39,1.56-0.27,2.45,0.24l117.78,68c0.89,0.51,1.77,1.41,2.45,2.59c0.68,1.17,1.01,2.39,1.01,3.41v104l-124.71-72V76H126.58z" />
                                                <polygon class="svg-laptop-screen" points="246.1,243 131.78,177 131.78,81 246.1,147" />
                                                <path class="svg-laptop-screen-logo" d="M188.94,133c-13.85-8-25.11-1.49-25.11,14.5S175.1,183,188.94,191s25.11,1.49,25.11-14.5S202.79,141,188.94,133z M206.58,182.85l-7.8-15.76l7.46-6.46c1.66,4.32,2.61,8.75,2.61,12.88C208.86,177.35,208.03,180.5,206.58,182.85z M202.99,153.83L188.94,166l-14.05-28.4c3.6-2.07,8.57-1.77,14.05,1.4S199.39,147.6,202.99,153.83z M171.63,140.64l7.46,15.08l-7.8,6.76c-1.45-4.03-2.28-8.13-2.28-11.98C169.02,146.37,169.97,143.04,171.63,140.64z M188.94,185c-5.71-3.3-10.87-9.07-14.5-15.64l7.99-6.92l2.46,4.96c0.99,2,2.47,3.68,4.06,4.59s3.06,0.95,4.06,0.09l2.46-2.13l7.99,16.15C199.81,188.48,194.65,188.3,188.94,185z" />
                                            </g>
</svg>
                                        <svg class="svg-spamexperts svg-spamexperts-right promo-slider-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 376 324" style="enable-background:new 0 0 376 324;" xml:space="preserve">
<g class="svg-envelope svg-envelope-open">
    <path class="svg-envelope-top-open" d="M375.35,272.06c0.4,0.59,0.65,1.31,0.65,1.94c0,1.11,0,50,0,50l-51.96-30c0,0,0-48.89,0-50c0-0.63,0.25-1.05,0.65-1.19l24.25-8.4c0.3-0.1,0.67-0.05,1.08,0.19c0.41,0.24,0.79,0.62,1.08,1.06L375.35,272.06z" />
    <path class="svg-envelope-inside" d="M372.28,274.15c-0.17-0.29-0.39-0.52-0.61-0.65l-43.3-25c-0.22-0.13-0.44-0.16-0.61-0.06c-0.17,0.1-0.25,0.3-0.25,0.56v42c0,0.26,0.08,0.56,0.25,0.85s0.39,0.52,0.61,0.65l43.3,25c0.22,0.13,0.44,0.16,0.61,0.06
		c0.17-0.1,0.25-0.3,0.25-0.56v-42C372.54,274.74,372.45,274.44,372.28,274.15z" />
    <polygon class="svg-envelope-right-side-open" points="324.04,294 376,324 376,276" />
    <polygon class="svg-envelope-split-open" points="351.95,284.33 376,324 346.24,286.31" />
    <polygon class="svg-envelope-left-side-open" points="376,324 324.04,294 324.04,246" />
</g>
                                            <g class="svg-envelope">
                                                <polygon class="svg-envelope-right-side" points="313.65,288 261.68,258 261.68,210 313.65,240" />
                                                <polygon class="svg-envelope-split" points="289.6,248.33 313.65,288 283.89,250.31" />
                                                <polygon class="svg-envelope-left-side" points="313.65,288 261.68,258 261.68,210" />
                                                <path class="svg-envelope-top" d="M313,243.19c0.4-0.14,0.65-0.55,0.65-1.19c0-1.1,0-2,0-2l-51.96-30c0,0,0,0.9,0,2c0,0.63,0.25,1.34,0.65,1.94l24.25,36.4c0.3,0.45,0.67,0.83,1.08,1.06c0.41,0.24,0.79,0.29,1.08,0.19L313,243.19z" />
                                            </g>
                                            <g class="svg-envelope">
                                                <polygon class="svg-envelope-right-side" points="313.65,228 261.68,198 261.68,150 313.65,180" />
                                                <polygon class="svg-envelope-split" points="289.6,188.33 313.65,228 283.89,190.31 	" />
                                                <polygon class="svg-envelope-left-side" points="313.65,228 261.68,198 261.68,150" />
                                                <path class="svg-envelope-top" d="M313,183.19c0.4-0.14,0.65-0.55,0.65-1.19c0-1.1,0-2,0-2l-51.96-30c0,0,0,0.9,0,2c0,0.63,0.25,1.34,0.65,1.94l24.25,36.4c0.3,0.45,0.67,0.83,1.08,1.06c0.41,0.24,0.79,0.29,1.08,0.19L313,183.19z" />
                                            </g>
                                            <g class="svg-smartphone">
                                                <path class="svg-smartphone-border" d="M302.1,299.2c0,0,0,2.1,0,2.7c0,0.8-0.6,1.7-1.8,2.3L267.5,323c-2.1,1.2-5.4,1.4-7.2,0.3l-16.8-9.6c-0.7-0.3-1.2-1.1-1.2-1.9s0-2.6,0-2.6L302.1,299.2z" />
                                                <path class="svg-smartphone-front" d="M284.1,288.4l16.8,9.6c1.9,1.1,1.6,2.9-0.5,4.1l-32.8,18.8c-2.1,1.2-5.4,1.4-7.2,0.3l-16.8-9.6c-1.8-1.1-1.6-2.9,0.5-4.1l32.8-18.8C279,287.5,282.2,287.4,284.1,288.4z" />
                                                <path class="svg-smartphone-screen" d="M281.5,291.1l14.8,8.5c1.6,0.9,1.4,2.6-0.5,3.7l-26.3,15.3c-1.9,1.1-4.8,1.2-6.4,0.3l-14.8-8.5c-1.6-0.9-1.4-2.6,0.5-3.7l26.3-15.3C277,290.3,279.8,290.2,281.5,291.1z" />
                                                <path class="svg-smartphone-icon-bg" d="M271.2,298.5c0,0-1.7,0.8-4,2c-1.4,0.7-1.3,2.7-1.3,4.7c0,1.1,0.3,2.3,0.7,3.4c1.8,0.4,3.6,0.6,5.4,0.7c2.1-0.1,3.6,0,4.7-0.7c1.8-1.1,5.4-3.4,5.4-3.4l-3.4-5.4L271.2,298.5z" />
                                                <path class="svg-smartphone-icon" d="M275.9,305.2h-5.4c-0.4,0-0.7-0.3-0.7-0.7v-2c0-0.4,0.3-0.7,0.7-0.7s0.7,0.3,0.7,0.7v1.3h4.7c0.4,0,0.7,0.3,0.7,0.7S276.3,305.2,275.9,305.2z" />
                                            </g>
</svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-section section-slider-btn">
                    <div class="container">
                        <div class="section-content">
                            <div class="slider-navigation row" data-promo-slider-pagination>
                                <div class="col-lg">
                                    <div class="tile" data-promo-slider-pagination-item>
                                        <svg class="svg-icon " id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<g>
    <g id="Products">
        <path class="svg-icon-outline-s dashed" d="M8.7,18c7.8-5,20.1-7.2,31.8-5.3C57,15.5,66.6,25.5,61.8,35.3c-0.9,1.6-2.1,3.1-3.5,4.4" />
        <line class="svg-icon-outline-s" x1="7.4" y1="18.5" x2="15.7" y2="18.4" />
        <line class="svg-icon-outline-s" x1="7.4" y1="18.5" x2="8.5" y2="13.7" />
        <path class="svg-icon-prime-l svg-icon-stroke" d="M50.4,7.7L45,5.4c-0.2-0.1-0.4-0.2-0.7-0.1L29.2,9.5c-0.1,0-0.3,0.1-0.4,0.2L13.3,23.6
			C13.1,23.7,13,24,13,24.3c0,0,0,18.8,0,24.3c0,6.3,16.4,9.5,18.2,9.9h0.2c0.3,0,0.6-0.2,0.8-0.4c0.6-0.8,13.8-21.6,13.9-27.7
			l4.8-21.8C50.9,8.2,50.7,7.8,50.4,7.7z" />
        <path class="svg-icon-prime svg-icon-stroke" d="M50.6,7.7c-0.2-0.2-0.9,0-1.2,0l-15.5,4c-0.1,0-0.3,0.1-0.4,0.2L17.2,25.6C17,25.8,17,26.1,17,26.4
			c0,0,0,19,0,24.4c0,6.4,15.3,7.8,17,7.9h0.1c0.3,0,0.5-0.1,0.7-0.3c1.6-2,16.1-19.7,16.1-25.6V8.5C51,8.2,50.9,7.9,50.6,7.7z" />
        <path class="svg-icon-outline-s" d="M54.9,41.9c-7.8,5-19.9,7.3-31.6,5.4C6.7,44.6-2.5,34.5,2.3,24.7c0.8-1.7,1.8-3.2,3.1-4.5" />
        <line class="svg-icon-outline-s" x1="56.1" y1="41.6" x2="54.3" y2="46.3" />
        <line class="svg-icon-outline-s" x1="56.1" y1="41.6" x2="47.7" y2="41.3" />
        <path class="svg-icon-i" d="M40.9,23.1L40.9,23.1c-0.7-0.3-1.6,0.4-2.2,1.5l-6,11.6l-2.5-2.1c-0.5-0.5-1.5,0-2.2,1l0,0.1
			c-0.6,1-0.7,2.2-0.2,2.6l3.6,3l0,0c0.1,0.1,0.2,0.1,0.2,0.2l0,0c0.7,0.3,1.6-0.4,2.2-1.5L41,25.5C41.6,24.5,41.5,23.4,40.9,23.1z" />
    </g>
</g>
</svg>
                                        <span class="title">SiteLock</span>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="tile" data-promo-slider-pagination-item>
                                        <svg class="svg-icon " id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<polygon class="svg-icon-prime-l svg-icon-stroke-1" points="36.4,0.8 1.5,21 1.5,55.4 6,57.8 6,23.6 40.9,3.3 		" />
                                            <line class="svg-icon-outline-s" x1="42.2" y1="3.9" x2="49.8" y2="8.3" />
                                            <line class="svg-icon-outline-s" x1="7.9" y1="24.1" x2="15.5" y2="28.5" />
                                            <line class="svg-icon-outline-s" x1="7.6" y1="58.8" x2="15.2" y2="63.2" />
                                            <polygon class="svg-icon-outline-s" points="49.4,8.5 15.4,28.2 15.4,62.6 49.4,43" />
                                            <polyline class="svg-icon-outline-s" points="41.9,3.9 7.5,23.8 7.5,58.2" />
                                            <path class="svg-icon-prime" d="M21.7,35.6l0.7,2.8c0.1,0.6,0.3,1.2,0.4,1.8l0,0c0.1-0.7,0.3-1.5,0.5-2.2l0.9-3.7l0.8-0.5
			l0.8,2.7c0.2,0.6,0.3,1.2,0.5,1.8l0,0c0.1-0.7,0.2-1.4,0.4-2.3l0.8-3.6l1-0.5L26.6,39l-0.9,0.5L24.9,37c-0.2-0.6-0.3-1.2-0.4-1.8
			l0,0c-0.1,0.8-0.3,1.6-0.5,2.3L23.2,41l-0.9,0.5l-1.6-5.3L21.7,35.6z M29.8,30.9l0.7,2.8c0.1,0.6,0.3,1.2,0.4,1.8l0,0
			c0.1-0.7,0.3-1.5,0.5-2.2l0.9-3.7l0.8-0.5l0.8,2.6c0.2,0.6,0.3,1.2,0.5,1.8l0,0c0.1-0.7,0.2-1.4,0.4-2.3l0.8-3.6l1-0.5l-1.7,7.2
			l-0.9,0.5l-0.8-2.5c-0.2-0.6-0.3-1.2-0.5-1.8l0,0c-0.1,0.8-0.3,1.6-0.5,2.3l-0.9,3.5l-0.9,0.5l-1.6-5.3L29.8,30.9z M38,26.2
			l0.7,2.8c0.2,0.6,0.3,1.2,0.4,1.8l0,0c0.1-0.7,0.3-1.5,0.5-2.2l0.9-3.7l0.8-0.5l0.8,2.6c0.2,0.6,0.3,1.2,0.5,1.8l0,0
			c0.1-0.7,0.2-1.4,0.4-2.3l0.8-3.6l1-0.5L43,29.6l-0.9,0.5l-0.8-2.5c-0.2-0.6-0.4-1.2-0.5-1.8l0,0c-0.1,0.8-0.3,1.6-0.5,2.3
			l-0.9,3.4l-0.9,0.5L37,26.8L38,26.2z" />
                                            <path class="svg-icon-outline-p" d="M50.7,27c-4.2,2.4-7.7,8.8-7.7,14.2" />
                                            <path class="svg-icon-outline-p" d="M58.4,32.3c-0.1-5.4-3.5-7.8-7.7-5.3" />
                                            <polygon class="svg-icon-prime svg-icon-stroke" points="40.5,43 40.5,60.7 62.5,48.2 62.5,30.4" />
                                            <path class="svg-icon-i" d="M55.8,39.7L55.8,39.7c-0.4-0.2-0.9,0.2-1.2,0.8l-3.3,6.4l-1.4-1.2c-0.3-0.2-0.8,0-1.2,0.6
			l0,0c-0.4,0.6-0.4,1.2-0.1,1.5l2,1.7l0,0l0.1,0.1l0,0c0.4,0.2,0.9-0.2,1.2-0.8l3.9-7.7C56.2,40.4,56.1,39.8,55.8,39.7z" />
</svg>
                                        <span class="title">SSL Certificates</span>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="tile" data-promo-slider-pagination-item>
                                        <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<polyline class="svg-icon-outline-s" points="35,42.9 35,38.7 38.6,36.6" />
                                            <line class="svg-icon-outline-s dashed-20" x1="46" y1="32.3" x2="55.6" y2="26.7" />
                                            <polyline class="svg-icon-outline-s" points="59.3,24.6 63,22.5 63,26.7" />
                                            <polyline class="svg-icon-outline-s" points="63,40.7 63,44.9 59.3,47" />
                                            <line class="svg-icon-outline-s dashed-20" x1="51.9" y1="51.3" x2="42.3" y2="56.8" />
                                            <polyline class="svg-icon-outline-s" points="38.6,59 35,61.1 35,56.9" />
                                            <polygon class="svg-icon-prime svg-icon-stroke" points="29,61.1 1,44.9 1,22.5 29,38.7" />
                                            <polygon class="svg-icon-outline-s" points="59.7,18.7 32,2.9 4.4,18.8 32,34.7 59.7,18.8" />
                                            <polyline class="svg-icon-outline-l" points="44.3,22.3 50.7,18.6 50.7,18.5 44.4,14.9" />
                                            <polyline class="svg-icon-outline-l" points="18.9,22.3 12.5,18.6 12.5,18.5 18.9,14.9" />
</svg>
                                        <span class="title">Weebly Website Builder</span>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="tile" data-promo-slider-pagination-item>
                                        <svg class="svg-icon " id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<g>
    <g id="Products">
        <polyline class="svg-icon-outline-s" points="63,19 63,18.9 31.9,1.2 1,19 		" />
        <polyline class="svg-icon-outline-s" points="1,19.8 1,44.8 31,62.1 		" />
        <polyline class="svg-icon-outline-s" points="31,62 31,36.9 1.5,19.9 		" />
        <polyline class="svg-icon-outline-s" points="1.1,21.3 15.6,47.5 30.9,37.8 		" />
        <line class="svg-icon-outline-s" x1="21.3" y1="43.9" x2="30" y2="59.7" />
        <line class="svg-icon-outline-s" x1="1.1" y1="43" x2="10" y2="37.3" />
        <line class="svg-icon-outline-s" x1="62.4" y1="19.1" x2="31.4" y2="36.8" />
        <polyline class="svg-icon-prime-l svg-icon-stroke" points="48.2,24.8 20.9,9.5 15.6,12.5 42.8,27.9 42.8,27.9 48.2,24.9 		" />
        <polyline class="svg-icon-outline-s dashed-27" points="31.9,62.8 62.9,45 62.9,19.1 		" />
        <polygon class="svg-icon-prime svg-icon-stroke" points="50,50 45.1,53 45,31.4 50,28.5 		" />
    </g>
</g>
</svg>
                                        <span class="title">Email Spam Filtering</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section">
                <div class="container">
                    <h2 class="section-title">Find Your New Domain Name</h2>
                    <div class="section-content">
                        <form method="post" action="https://host.cloudinos.com/domainchecker.php" id="frmDomainHomepage">
                            <input type="hidden" name="token" value="9cd30ddcb7c9685ecc91d735aad3568bab65438a" />
                            <div class="search-group search-group-combined">
                                <div class="search-field search-field-lg">
                                    <div class="search-field-icon"><i class="lm lm-search"></i></div>
                                    <input class="form-control form-control-lg" type="text" name="domain" placeholder="eg. ovye.com" autocapitalize="none" />
                                </div>
                                <div class="search-group-btn">
                                    <input type="submit" class="btn btn-primary btn-lg search " value="Search" />
                                </div>
                            </div>
                        </form>
                        <div class="domain-tlds row">
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>com
                                    </div>
                                    <div class="tld-price">
                                        <span>N12,000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>net
                                    </div>
                                    <div class="tld-price">
                                        <span>N12,000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>online
                                    </div>
                                    <div class="tld-price">
                                        <span>N17,500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>org
                                    </div>
                                    <div class="tld-price">
                                        <span>N7,800.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>co
                                    </div>
                                    <div class="tld-price">
                                        <span>N10,000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>app
                                    </div>
                                    <div class="tld-price">
                                        <span>N14,000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>dev
                                    </div>
                                    <div class="tld-price">
                                        <span>N9,000.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="domain-tld">
                                    <div class="tld-name">
                                        <span>.</span>io
                                    </div>
                                    <div class="tld-price">
                                        <span>N30,300.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section">
                <div class="container">
                    <h2 class="section-title">Products For All Businesses</h2>
                    <div class="section-content">
                        <div class="row row-lg row-eq-height row-eq-height-sm">
                            <div class="col">
                                <div class="package package-lg">
                                    <div class="package-icon">
                                        <svg class="svg-icon " id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<style type="text/css">
    .shared-hosting-st-2{clip-path:url(#SVGID_2_);}
</style>
                                            <polygon class="svg-icon-prime-l svg-icon-stroke" points="31.9,27.1 1,44.9 63,44.9 " />
                                            <polygon class="svg-icon-prime-l svg-icon-stroke" points="31.9,62.8 62.8,44.9 1,44.9 " />
                                            <polyline class="svg-icon-outline-s dashed-39" points="63,41.4 63,19 32.2,1.2 1.3,19 1.4,45.9 " />
                                            <g>
                                                <defs>
                                                    <path id="SVGID_1_" d="M45.2,44.1c-7,7-18.4,7-25.5,0s-7-18.4,0-25.5s18.4-7,25.5,0c3.4,3.4,5.3,8,5.3,12.7
			C50.5,36.1,48.6,40.7,45.2,44.1z" />
                                                </defs>
                                                <clipPath id="SVGID_2_">
                                                    <use xlink:href="#SVGID_1_" style="overflow:visible;" />
                                                </clipPath>
                                                <g class="shared-hosting-st-2">
                                                    <path class="svg-icon-prime svg-icon-stroke" d="M45.2,44.1c-7,7-18.4,7-25.5,0s-7-18.4,0-25.5s18.4-7,25.5,0c3.4,3.4,5.3,8,5.3,12.7
			C50.5,36.1,48.6,40.7,45.2,44.1z" />
                                                    <path class="svg-icon-outline-i" d="M32.5,20.2c-1.9,0-3.8-0.4-5.5-1.3c-1.3-0.6-2.1-1.8-2.3-3.2c0.1-1.4,1-2.6,2.3-3.2c1.7-0.9,3.6-1.3,5.5-1.3
			c1.9,0,3.8,0.4,5.5,1.3c1.3,0.6,2.1,1.8,2.3,3.2c-0.1,1.4-1,2.6-2.3,3.2C36.2,19.8,34.4,20.2,32.5,20.2z" />
                                                    <path class="svg-icon-outline-i" d="M53,29.6c0,3.2-2.5,6.2-6.2,8.3c-4.4,2.4-9.4,3.5-14.4,3.4c-5,0.1-9.9-1.1-14.4-3.4c-3.7-2.1-6.2-5.2-6.2-8.4
			" />
                                                    <path class="svg-icon-outline-i" d="M51.2,38.3c0,3-2.3,5.7-5.7,7.6c-4.1,2.2-8.6,3.3-13.2,3.2c-4.6,0.1-9.1-1-13.2-3.2c-3.4-2-5.7-4.7-5.7-7.7" />
                                                    <path class="svg-icon-outline-i" d="M50.2,20.6c0,2.8-2,5.4-5.2,7.3c-3.9,2.1-8.2,3.1-12.6,3c-4.4,0.1-8.7-0.9-12.6-3c-3.2-1.9-5.2-4.4-5.2-7.3" />
                                                    <path class="svg-icon-outline-i stroke " d="M39.8,18.4c0.1,0,0.9,0.7,1,0.7c5.2,4.6,9.9,22.2-3.8,30.1c-1.1,0.7-2.2,1.3-3.4,1.9" />
                                                    <path class="svg-icon-outline-i stroke " d="M25.7,18.6l-1.3,1.2c-5.1,4.8-9.5,22,3.8,29.8c0.9,0.5,1.8,1,2.8,1.5" />
                                                    <line class="svg-icon-outline-i" x1="33" y1="20.6" x2="33" y2="51.1" />
                                                </g>
                                            </g>
</svg> </div>
                                    <h3 class="package-title">Students Hosting</h3>
                                    <p class="package-desc">Student Developer Hosting</p>
                                    <div class="package-price">
                                        <div class="package-starting-from ">Starting at</div>
                                        <div class="price">
                                            N600.00
                                            <span class="price-cycle">
/mo
</span>
                                        </div>
                                    </div>
                                    <div class="package-actions">
                                        <a href="index2587.html?gid=1" class="btn btn-lg btn-primary" data-target="incoming">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="package package-lg">
                                    <div class="package-icon">
                                        <svg class="svg-icon " id="Warstwa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<g>
    <g id="Products">
        <polyline class="svg-icon-outline-s dashed-39" points="62,41.2 62,18.8 31.4,1 2,18.8 2,45.7 		" />
        <polyline class="svg-icon-outline-s" points="1.8,46 31.4,63 62.2,45.2 		" />
        <polygon class="svg-icon-prime svg-icon-stroke" points="21.8,21.5 21.8,30 31.8,35.7 41.8,30 41.8,21.5 		" />
        <polygon class="svg-icon-prime-l svg-icon-stroke" points="31.9,27.1 21.9,21.4 31.9,15.6 41.9,21.4 		" />
        <polygon class="svg-icon-prime svg-icon-stroke" points="5.8,31 5.8,40 15.8,45.7 25.8,40 25.8,31 		" />
        <polygon class="svg-icon-prime-l svg-icon-stroke" points="15.8,36.7 5.8,30.9 15.8,25.2 25.8,30.9 		" />
        <polygon class="svg-icon-prime svg-icon-stroke" points="37.8,31 37.8,40 47.8,45.7 57.8,40 57.8,31 		" />
        <polygon class="svg-icon-prime-l svg-icon-stroke" points="47.9,36.7 37.9,30.9 47.9,25.2 57.9,30.9 		" />
        <polygon class="svg-icon-prime svg-icon-stroke" points="21.8,40 21.8,49.4 32.3,55.5 42.8,49.4 42.8,40 		" />
        <polygon class="svg-icon-prime-l svg-icon-stroke" points="32,46.4 21.5,40.3 32,34.3 42.5,40.3 		" />
    </g>
</g>
</svg>
                                    </div>
                                    <h3 class="package-title">Cloud Hosting</h3>
                                    <p class="package-desc">Select a cloud hosting plan</p>
                                    <div class="package-price">
                                        <div class="package-starting-from ">Starting at</div>
                                        <div class="price">
                                            N2,600.00
                                            <span class="price-cycle">
/mo
</span>
                                        </div>
                                    </div>
                                    <div class="package-actions">
                                        <a href="indexd7f6.html?gid=2" class="btn btn-lg btn-primary" data-target="incoming">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="package package-lg">
                                    <div class="package-icon">
                                        <svg class="svg-icon " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve" width="64px" height="64px">
<polyline class="svg-icon-outline-s dashed-13" points="63,23 63,19 32,1.1 1,19 1,28.1 " />
                                            <polyline class="svg-icon-prime svg-icon-stroke" points="1,32.6 1,45 32,62.9 63,45 63,32.6 " />
                                            <polygon class="svg-icon-prime-l svg-icon-stroke" points="31.9,14.6 1,32.5 63,32.4 " />
                                            <polygon class="svg-icon-prime-l svg-icon-stroke" points="31.9,50.3 62.8,32.5 1,32.5 " />
                                            <line class="svg-icon-outline-i" x1="51.7" y1="46.7" x2="59.8" y2="42.1" />
                                            <path class="svg-icon-i" d="M23.8,31.1c2.7,1.4,5.8,1.4,8.5,0c2.3-1.4,2.3-3.6,0-4.9c-2.7-1.4-5.8-1.4-8.5,0C21.4,27.5,21.4,29.7,23.8,31.1z M37,30.1c0.3,1-0.2,2.1-1.5,2.9c-1.5,0.8-3.3,1.1-5,0.9c-2.2,2-3.8,4.6-1.5,5.9l2.7,1.5L50,30.7l-2.7-1.5C45.1,27.9,40.5,28.8,37,30.1L37,30.1z" />
</svg>
                                    </div>
                                    <h3 class="package-title">Shared hosting</h3>
                                    <p class="package-desc">The most affordable package with lightning speed for businesses</p>
                                    <div class="package-price">
                                        <div class="package-starting-from ">Starting at</div>
                                        <div class="price">
                                            N8,000.00
                                            <span class="price-cycle">
/yr
</span>
                                        </div>
                                    </div>
                                    <div class="package-actions">
                                        <a href="index9e39.html?gid=3" class="btn btn-lg btn-primary" data-target="incoming">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section section-secondary">
                <div class="container">
                    <h2 class="section-title">Our Guarantees</h2>
                    <p class="section-subtitle">Learn why we are trusted by thousands of clients worldwide</p>
                    <div class="section-content">
                        <div class="row row-eq-height row-eq-height-xs features">
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
<polygon class="svg-icon-prime svg-icon-stroke" points="21,40.7 12,35.5 12,36.6 21,41.8" />
                                            <polygon class="svg-icon-prime svg-icon-stroke" points="20,44.7 20,36.7 20.5,37 24,43 20.5,45" />
                                            <line class="svg-icon-outline-s" x1="32" y1="32.7" x2="32" y2="62.5" />
                                            <polyline class="svg-icon-outline-s" points="58.5,16.9 32,32.2 5.5,16.9" />
                                            <polyline class="svg-icon-outline-s" points="26,4.8 26,20 52.6,20" />
                                            <line class="svg-icon-outline-s" x1="25.5" y1="13" x2="11.7" y2="13" />
                                            <line class="svg-icon-outline-s" x1="38" y1="20.5" x2="38" y2="28.2" />
                                            <polygon class="svg-icon-outline-s" points="32,63 5,47.4 5,16.6 32,1 59,16.6 59,47.4" />
</svg> </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">24/7 Expert Support</h4>
                                        <p class="feature-desc">Our friendly and knowledgeable support team is available 24/7/365 to help! We are rated as the most supportive Web Hosting company in Africa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.87 63.99" x="0px" y="0px" width="64px" height="64px">
                                            <polyline class="svg-icon-outline-s dashed-1" points="10.7 48.01 1 52.43 1 18.72 38.76 1 38.76 10.13" />
                                            <polygon class="svg-icon-outline-s" points="49.77 5.48 49.77 39.04 11.63 57.24 11.67 22.71 49.77 5.48" />
                                            <polygon class="svg-icon-prime-l" points="59.06 9.33 62.85 11.32 25.99 62.95 21.87 60.83 21.87 26.5 59.06 9.33" />
                                            <polygon class="svg-icon-prime" points="62.87 11.39 62.87 44.86 25.87 62.99 25.87 28.41 62.87 11.39" />
                                            <polyline class="svg-icon-outline-i" points="28.01 54.81 36.67 39.8 46.74 41.94 60.72 15.3" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">Fast & Reliable</h4>
                                        <p class="feature-desc">Choose a web hosting company that understands starting small and scaling up. We have designed our Web Hosting Plans and Services to help you do the same.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.42 64" x="0px" y="0px" width="64px" height="64px">
                                            <path class="svg-icon-outline-s" d="M18.38,59.58A31.17,31.17,0,0,1,1,31.8C1,14.65,15.11,1,32.46,1a32,32,0,0,1,8.19.84" />
                                            <path class="svg-icon-outline-s dashed-1" d="M45.23,4A31.17,31.17,0,0,1,31.12,63,32.5,32.5,0,0,1,23,61.71" />
                                            <line class="svg-icon-outline-s" x1="44.02" y1="2.97" x2="46.46" y2="10.9" />
                                            <line class="svg-icon-outline-s" x1="44.02" y1="2.97" x2="52.26" y2="1.72" />
                                            <line class="svg-icon-outline-s" x1="19.21" y1="60.57" x2="11" y2="61.06" />
                                            <line class="svg-icon-outline-s" x1="19.21" y1="60.57" x2="17.48" y2="52.35" />
                                            <path class="svg-icon-prime-l" d="M49.72,51s-3.1,1.63-3.11,1.63c-1.77-1-5-2.76-5-2.76V29.62C31.83,24,18.71,16,18.71,16l-.53-4.24.23-.16c.67-.42,2.5-1.48,2.5-1.53,9.34,5.39,19.48,10.85,28.81,16.24Z" />
                                            <path class="svg-icon-prime" d="M46.68,52.66c-1.39-.79-4.58-2.37-4.58-2.37s.13-18.8-.09-20.35c-4.77-3.26-23.78-13.83-23.78-14.33V11.75c9.34,5.39,19.1,10.78,28.45,16.18Z" />
                                            <polygon class="svg-icon-outline-s" points="40.71 53.92 13.71 38.51 13.71 14.06 40.71 29.63 40.71 53.92" />
                                            <line class="svg-icon-outline-s" x1="13.71" y1="22" x2="40.02" y2="37.05" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">99.9% Uptime Guaranteed</h4>
                                        <p class="feature-desc">We are the host you can depend on with ultra-reliable servers. Understand the importance of site availability and reliability your business and we promise to give you nothing less.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 63.82" x="0px" y="0px" width="64px" height="64px">
                                            <polyline class="svg-icon-outline-s" points="42 6.01 42 1 1 24.4 1 60.28 6.44 57.14" />
                                            <polygon class="svg-icon-outline-s" points="7.95 62.82 48 39.52 48 3.64 7.95 26.95 7.95 62.82" />
                                            <path class="svg-icon-outline-s" d="M10.43,49.93l8.44-13.82,11.41,2.36,13-25.37" />
                                            <path class="svg-icon-prime-l" d="M59.84,39.57c0,4.37-10.5,20.76-10.5,20.76S36,57.84,36,53.47c0-4.18,0-18.54,0-18.54L47.85,24.39l11.53-3.24L63,23.05,59.84,39.57Z" />
                                            <path class="svg-icon-prime" d="M63,41.6C63,46,50.81,60.51,50.81,60.51s-11.7-1-11.71-5.39c0-4.18,0-18.55,0-18.55L50.8,26.05l12.2-3V41.6Z" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">Content Delivery Network</h4>
                                        <p class="feature-desc">Speed up your website by distributing it globally and serving it to your visitors from the closest location for faster page load speeds wherever they are.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.73 62.6" x="0px" y="0px" width="64px" height="64px">
                                            <path class="svg-icon-prime-l" d="M50.36,5.31,46.94,3.36a.89.89,0,0,0-.68-.08L32.06,7a.78.78,0,0,0-.35.18L17.22,19.58a.81.81,0,0,0-.3.62s0,17.09,0,22.06c0,5.72,15.3,8.82,17.1,9.14l.17,0a.92.92,0,0,0,.75-.39c.54-.8,13.34-19.57,13.47-25.06l2.38-19.8A.83.83,0,0,0,50.36,5.31Z" />
                                            <path class="svg-icon-prime" d="M50.53,5.38a1,1,0,0,0-.77-.15L36.27,9a.8.8,0,0,0-.37.18L21,21.5c-.2.16-.19.46-.19.7,0,0,0,17.17,0,22.14,0,5.78,13.94,7.15,15.58,7.29h.08a.9.9,0,0,0,.69-.31c1.56-1.79,13.68-17.88,13.68-23.22V6A.83.83,0,0,0,50.53,5.38Z" />
                                            <path class="svg-icon-i" d="M44.65,18.78l-.06,0c-.73-.28-1.83.42-2.45,1.56L35.4,32.74l-2.9-2.25c-.62-.47-1.71,0-2.45,1.08l-.05.08c-.74,1.07-.84,2.33-.23,2.81l4.14,3.21.05,0a.65.65,0,0,0,.26.17l.06,0c.73.28,1.83-.41,2.45-1.55l8.12-15C45.47,20.21,45.38,19.06,44.65,18.78Z" />
                                            <path class="svg-icon-outline-s dashed-13" d="M12.55,54.75a33.54,33.54,0,0,1-7.22-8.33A30,30,0,0,1,1.94,23.29,31,31,0,0,1,15.61,3.84a31.69,31.69,0,0,1,6-2.84" />
                                            <path class="svg-icon-outline-s" d="M62,23.65A31,31,0,0,1,47.91,56.7a31,31,0,0,1-23.39,4.12,30,30,0,0,1-12-6.07" />
                                            <line class="svg-icon-outline-s" x1="18.34" y1="1.77" x2="16.67" y2="9.32" />
                                            <line class="svg-icon-outline-s" x1="18.34" y1="1.77" x2="10.85" y2="1.84" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">Super Easy to Use</h4>
                                        <p class="feature-desc">With our astonishing interface, you can easily navigate your dashboard and locate other services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.42 64" x="0px" y="0px" width="64px" height="64px">
                                            <path class="svg-icon-outline-s" d="M18.38,59.58A31.17,31.17,0,0,1,1,31.8C1,14.65,15.11,1,32.46,1a32,32,0,0,1,8.19.84" />
                                            <path class="svg-icon-outline-s dashed-1" d="M45.23,4A31.17,31.17,0,0,1,31.12,63,32.5,32.5,0,0,1,23,61.71" />
                                            <line class="svg-icon-outline-s" x1="44.02" y1="2.97" x2="46.46" y2="10.9" />
                                            <line class="svg-icon-outline-s" x1="44.02" y1="2.97" x2="52.26" y2="1.72" />
                                            <line class="svg-icon-outline-s" x1="19.21" y1="60.57" x2="11" y2="61.06" />
                                            <line class="svg-icon-outline-s" x1="19.21" y1="60.57" x2="17.48" y2="52.35" />
                                            <path class="svg-icon-prime-l" d="M49.72,51s-3.1,1.63-3.11,1.63c-1.77-1-5-2.76-5-2.76V29.62C31.83,24,18.71,16,18.71,16l-.53-4.24.23-.16c.67-.42,2.5-1.48,2.5-1.53,9.34,5.39,19.48,10.85,28.81,16.24Z" />
                                            <path class="svg-icon-prime" d="M46.68,52.66c-1.39-.79-4.58-2.37-4.58-2.37s.13-18.8-.09-20.35c-4.77-3.26-23.78-13.83-23.78-14.33V11.75c9.34,5.39,19.1,10.78,28.45,16.18Z" />
                                            <polygon class="svg-icon-outline-s" points="40.71 53.92 13.71 38.51 13.71 14.06 40.71 29.63 40.71 53.92" />
                                            <line class="svg-icon-outline-s" x1="13.71" y1="22" x2="40.02" y2="37.05" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">Secure Servers</h4>
                                        <p class="feature-desc">Our TrueShield™ Web Application Firewall protects your website against hackers and attacks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" x="0px" y="0px" width="64px" height="64px">
                                            <polyline class="svg-icon-outline-s" points="63 43.41 63 47.41 59.43 49.21" />
                                            <line class="svg-icon-outline-s dashed-8" x1="50.91" y1="53.49" x2="39.83" y2="59.06" />
                                            <polyline class="svg-icon-outline-s" points="35.57 61.2 32 63 28.43 61.2" />
                                            <line class="svg-icon-outline-s dashed-8" x1="19.91" y1="56.92" x2="8.83" y2="51.35" />
                                            <polyline class="svg-icon-outline-s" points="4.57 49.21 1 47.41 1 43.41" />
                                            <line class="svg-icon-outline-s dashed-9" x1="1" y1="35.26" x2="1" y2="24.66" />
                                            <polyline class="svg-icon-outline-s" points="1 20.59 1 16.59 4.57 14.79" />
                                            <line class="svg-icon-outline-s dashed-8" x1="13.09" y1="10.51" x2="24.17" y2="4.94" />
                                            <polyline class="svg-icon-outline-s" points="28.43 2.8 32 1 35.57 2.8" />
                                            <line class="svg-icon-outline-s dashed-8" x1="44.09" y1="7.08" x2="55.17" y2="12.65" />
                                            <polyline class="svg-icon-outline-s" points="59.43 14.79 63 16.59 63 20.59" />
                                            <line class="svg-icon-outline-s dashed-9" x1="63" y1="28.74" x2="63" y2="39.34" />
                                            <polygon class="svg-icon-prime" points="52 34.41 52 42.69 32 52.51 12 42.69 12 34.42 52 34.41" />
                                            <polygon class="svg-icon-prime-l" points="32 44.23 12 34.42 32 24.6 52 34.42 32 44.23" />
                                            <polygon class="svg-icon-prime" points="52 22.31 52 30.59 32 40.4 12 30.59 12 22.31 52 22.31" />
                                            <polygon class="svg-icon-prime-l" points="32 32.13 12 22.31 32 12.49 52 22.31 32 32.13" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">Money-back Guarantee</h4>
                                        <p class="feature-desc">With our 30 Days Money Back Guarantee, You Can't Go Wrong!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="feature feature-xs-left">
                                    <div class="feature-icon">
                                        <svg class="svg-icon svg-icon-on-dark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" x="0px" y="0px" width="64px" height="64px">
                                            <ellipse class="svg-icon-prime svg-icon-stroke" cx="31.45" cy="32.38" rx="7.48" ry="7.48" />
                                            <path class="svg-icon-outline-s" d="M54.14,54.29A30.57,30.57,0,0,1,32.2,63a30.34,30.34,0,0,1-21.85-8.71A31.18,31.18,0,0,1,1,32.38a31.18,31.18,0,0,1,9.35-21.91A31.18,31.18,0,0,1,32.2,1a31.37,31.37,0,0,1,21.94,9.47A30.67,30.67,0,0,1,63,32.38,30.67,30.67,0,0,1,54.14,54.29Z" />
                                            <path class="svg-icon-outline-s" d="M1,32.89a15.35,15.35,0,0,1,.09-2" />
                                            <path class="svg-icon-outline-s dashed-21" d="M5.79,23.9a24.23,24.23,0,0,1,4.57-3.36C16,17.3,23.7,15.3,32.24,15.3s16.28,2,21.88,5.24a21.48,21.48,0,0,1,6.51,5.51" />
                                            <path class="svg-icon-outline-s" d="M62.7,29.74a8,8,0,0,1,.2,2" />
                                            <path class="svg-icon-outline-s" d="M63,31.08C63,36,59.72,41,54.12,44.23a45,45,0,0,1-22,5.65,44.17,44.17,0,0,1-21.78-5.65C4.76,41,1,36.52,1,31.59" />
                                            <path class="svg-icon-outline-s" d="M32.87,63a16.42,16.42,0,0,1-2-.11" />
                                            <path class="svg-icon-outline-s dashed-22" d="M24.38,59.6a23.31,23.31,0,0,1-4.11-5.32C17,48.67,15,40.93,15,32.38s2-16.29,5.23-21.89a20.92,20.92,0,0,1,6.23-7l1-.65" />
                                            <path class="svg-icon-outline-s" d="M30.89,1.3a7.81,7.81,0,0,1,2-.27" />
                                            <path class="svg-icon-outline-s" d="M31.41,1c4.93,0,9.44,3.86,12.67,9.46a44.62,44.62,0,0,1,5.81,21.89,44.69,44.69,0,0,1-5.81,21.9C40.85,59.88,36.34,63,31.41,63" />
                                        </svg>
                                    </div>
                                    <div class="feature-content">
                                        <h4 class="feature-title">High Performance</h4>
                                        <p class="feature-desc">With 20X faster turbo, it means better SEO rankings, lower bounce rates & higher conversion rates on all your sites and applications .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section">
                <div class="container">
                    <h2 class="section-title">Latest News</h2>
                    <p class="section-subtitle">Check our latest news and offers!</p>
                    <div class="section-content">
                        <div class="row row-eq-height row-eq-height-xs news">
                            <div class=" col-xl-4 col-md-6">
                                <a href="index0f48.html?rp=/announcements/5/Weve-release-User-Management-Module.html" class="news-box">
                                    <div class="news-body">
                                        <div class="news-date">
                                            <i class="lm lm-calendar"></i>
                                            <span>Apr 6th</span>
                                        </div>
                                        <div class="news-desc">
                                            <p>We've release User Management Module</p>
                                        </div>
                                    </div>
                                    <div class="news-actions">
                                        <span>Read More</span>
                                    </div>
                                </a>
                            </div>
                            <div class=" col-xl-4 col-md-6">
                                <a href="index8605.html?rp=/announcements/4/New-Year-New-Look.-We-are-growing.html" class="news-box">
                                    <div class="news-body">
                                        <div class="news-date">
                                            <i class="lm lm-calendar"></i>
                                            <span>Jan 3rd</span>
                                        </div>
                                        <div class="news-desc">
                                            <p>New Year, New Look. We are growing</p>
                                        </div>
                                    </div>
                                    <div class="news-actions">
                                        <span>Read More</span>
                                    </div>
                                </a>
                            </div>
                            <div class=" col-xl-4 col-md-6">
                                <a href="index6a40.html?rp=/announcements/1/Thank-you-for-choosing-CLOUDINOS.html" class="news-box">
                                    <div class="news-body">
                                        <div class="news-date">
                                            <i class="lm lm-calendar"></i>
                                            <span>Dec 28th</span>
                                        </div>
                                        <div class="news-desc">
                                            <p>Thank you for choosing CLOUDINOS!</p>
                                        </div>
                                    </div>
                                    <div class="news-actions">
                                        <span>Read More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section section-secondary text-center">
                <div class="container">
                    <h2 class="section-title">Let’s Get Started!</h2>
                    <p class="section-subtitle">Your website hosting provider has a huge impact on your page load speed and ultimately your bottom line. Faster sites have better SEO rankings, lower bounce rates, and higher conversion rates. Whether you have a brand new blog or a high-traffic business site; if you've never run a website before or are a professional developer, we've got you covered with a high-performance solution you can depend on!</p>
                    <a href="index804a.html" class="btn btn-lg btn-primary">Talk To Us</a>
                </div>
            </div>
        </div>
        <div class="main-footer main-footer-extended">
            <div class="footer-top">
                <div class="container">
                    <div class="footer-company">
                        <div class="footer-company-intro">
                            <a class="footer-company-logo logo" href="index-2.html"><img src="templates/lagom2/assets/img/logo/logo_big_inverse.1222276713.png" title="Cee-Tradar Hosting" alt="Cee-Tradar Hosting" /></a>
                            <p class="footer-company-desc">Get in touch with us!</p>
                        </div>
                        <ul class="footer-company-socials footer-nav footer-nav-h">
                            <li class="">
                                <a class="social-fb" href="https://facebook.com/cloudinos" target="_blank">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24V15.333H7V12H10V9.333C10 6.333 11.933 4.667 14.667 4.667C15.533 4.667 16.467 4.8 17.333 4.933V8H15.8C14.333 8 14 8.733 14 9.667V12H17.2L16.667 15.333H14V24C19.667 22.994 24 18.034 24 12.067C24 5.43 18.6 0 12 0C5.4 0 0 5.43 0 12.067Z" fill="#B9BDC5" />
                                    </svg>
                                </a>
                            </li>
                            <li class="">
                                <a class="social-tw" href="https://twitter.com/cloudinos" target="_blank">
                                    <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.643 2.93659C22.808 3.30659 21.911 3.55659 20.968 3.66959C21.941 3.08738 22.669 2.17105 23.016 1.09159C22.1019 1.63458 21.1014 2.01678 20.058 2.22159C19.3564 1.47245 18.4271 0.975915 17.4143 0.809063C16.4016 0.642211 15.3621 0.81438 14.4572 1.29884C13.5524 1.7833 12.8328 2.55295 12.4102 3.48829C11.9875 4.42363 11.8855 5.47234 12.12 6.47159C10.2677 6.37858 8.45564 5.89714 6.80144 5.05849C5.14723 4.21985 3.68785 3.04275 2.51801 1.60359C2.11801 2.29359 1.88801 3.09359 1.88801 3.94559C1.88757 4.71258 2.07644 5.46783 2.43789 6.14432C2.79934 6.82081 3.32217 7.39763 3.96001 7.82359C3.22029 7.80005 2.49688 7.60017 1.85001 7.24059V7.30059C1.84994 8.37633 2.22204 9.41897 2.90319 10.2516C3.58434 11.0842 4.53258 11.6555 5.58701 11.8686C4.9008 12.0543 4.18135 12.0817 3.48301 11.9486C3.78051 12.8742 4.36001 13.6836 5.14038 14.2635C5.92075 14.8434 6.86293 15.1648 7.83501 15.1826C6.18484 16.478 4.1469 17.1807 2.04901 17.1776C1.67739 17.1777 1.30609 17.156 0.937012 17.1126C3.06649 18.4818 5.54535 19.2084 8.07701 19.2056C16.647 19.2056 21.332 12.1076 21.332 5.95159C21.332 5.75159 21.327 5.54959 21.318 5.34959C22.2293 4.69056 23.0159 3.87448 23.641 2.93959L23.643 2.93659Z" fill="#B9BDC5" />
                                    </svg>
                                </a>
                            </li>
                            <li class="">
                                <a class="social-in" href="https://instagram.com/cloudinoshq" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <div style="width: 100%; display: inline-block; margin-top: 10px">
                            <a id="profile-link" target="_blank" href="https://www.trustpilot.com/review/cloudinos.com">

                                <div id="tp-widget-rating" class="tp-widget-rating">
                                    <span id="translations-main"><span class="text">See our reviews on</span></span>
                                </div>

                                <div id="tp-widget-logo" class="tp-widget-logo"><div class="">
                                        <div style="position: relative; height: 0; width: 100%; padding: 0; padding-bottom: 24.6031746031746%;">
                                            <svg role="img" aria-labelledby="trustpilotLogo" viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" style="position: absolute; height: 50%; width: 50%; left: 0; top: 0;">
                                                <title id="trustpilotLogo">Trustpilot</title>
                                                <path class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z" fill="#eaf1ffeb"></path>
                                                <path class="tp-logo__star" fill="#00B67A" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                                                <path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
                                            </svg>
                                        </div>
                                    </div></div>
                            </a> </div>
                    </div>
                    <div class="footer-site-map">
                        <div class="row">
                            <div class="footer-col  col-md-4">
                                <h3 class="footer-title collapsed" data-toggle="collapse" data-target="#footer-nav-0" aria-expanded="false" aria-controls="footer-nav-0">
                                    Products <i class="footer-icon">
                                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.21 10.01H8.79C8.66 10.01 8.53 9.96 8.44 9.86L0.14 1.57C0.04 1.48 0 1.34 0 1.22C0 1.1 0.05 0.97 0.15 0.87L0.86 0.16C1.06 -0.0400002 1.37 -0.0400002 1.57 0.16L9 7.6L16.43 0.15C16.63 -0.05 16.94 -0.05 17.14 0.15L17.85 0.86C18.05 1.06 18.05 1.37 17.85 1.57L9.56 9.86C9.47 9.95 9.34 10.01 9.21 10.01Z" fill="#B9BDC5" />
                                        </svg>
                                    </i>
                                </h3>
                                <ul class="footer-nav collapse" id="footer-nav-0">
                                    <li>
                                        <a href="index66af.html?rp=/store/shared-cloud-turbo" class="nav-link ">
                                            <span>Managed Cloud Turbo</span> </a>
                                    </li>
                                    <li>
                                        <a href="index9e39.html?rp=/store/shared-hosting" class="nav-link ">
                                            <span>Shared hosting</span>  </a>
                                    </li>
                                    <li>
                                        <a href="index92ed.html?rp=/store/cms-hosting" class="nav-link ">
                                            <span>CMS Hosting</span> </a>
                                    </li>
                                    <li>
                                        <a href="index9d79.html?rp=/store/javascript-hosting" class="nav-link ">
                                            <span>JavaScript Hosting</span> </a>
                                    </li>
                                    <li>
                                        <a href="index35b4.html?rp=/store/python-hosting" class="nav-link ">
                                            <span>Python Hosting</span> </a>
                                    </li>
                                    <li>
                                        <a href="indexa99b.html?rp=/store/laravel-hosting" class="nav-link ">
                                            <span>Laravel Hosting</span> </a>
                                    </li>
                                    <li>
                                        <a href="index2587.html?rp=/store/student-hosting" class="nav-link ">
                                            <span>Students Hosting</span> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col  col-md-4">
                                <h3 class="footer-title collapsed" data-toggle="collapse" data-target="#footer-nav-1" aria-expanded="false" aria-controls="footer-nav-1">
                                    Services <i class="footer-icon">
                                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.21 10.01H8.79C8.66 10.01 8.53 9.96 8.44 9.86L0.14 1.57C0.04 1.48 0 1.34 0 1.22C0 1.1 0.05 0.97 0.15 0.87L0.86 0.16C1.06 -0.0400002 1.37 -0.0400002 1.57 0.16L9 7.6L16.43 0.15C16.63 -0.05 16.94 -0.05 17.14 0.15L17.85 0.86C18.05 1.06 18.05 1.37 17.85 1.57L9.56 9.86C9.47 9.95 9.34 10.01 9.21 10.01Z" fill="#B9BDC5" />
                                        </svg>
                                    </i>
                                </h3>
                                <ul class="footer-nav collapse" id="footer-nav-1">
                                    <li>
                                        <a href="index7c78.html?rp=/store/sitelock" class="nav-link ">
                                            <span>Website Security</span> </a>
                                    </li>
                                    <li>
                                        <a href="index25af.html?rp=/store/ssl-certificates" class="nav-link ">
                                            <span>SSL Certificates</span> </a>
                                    </li>
                                    <li>
                                        <a href="indexddcf.html?rp=/store/weebly-website-builder" class="nav-link ">
                                            <span>Website Builder</span> </a>
                                    </li>
                                    <li>
                                        <a href="indexda14.html?rp=/store/email-spam-filtering" class="nav-link ">
                                            <span>E-mail Services</span> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col  col-md-4">
                                <h3 class="footer-title collapsed" data-toggle="collapse" data-target="#footer-nav-2" aria-expanded="false" aria-controls="footer-nav-2">
                                    Support <i class="footer-icon">
                                        <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.21 10.01H8.79C8.66 10.01 8.53 9.96 8.44 9.86L0.14 1.57C0.04 1.48 0 1.34 0 1.22C0 1.1 0.05 0.97 0.15 0.87L0.86 0.16C1.06 -0.0400002 1.37 -0.0400002 1.57 0.16L9 7.6L16.43 0.15C16.63 -0.05 16.94 -0.05 17.14 0.15L17.85 0.86C18.05 1.06 18.05 1.37 17.85 1.57L9.56 9.86C9.47 9.95 9.34 10.01 9.21 10.01Z" fill="#B9BDC5" />
                                        </svg>
                                    </i>
                                </h3>
                                <ul class="footer-nav collapse" id="footer-nav-2">
                                    <li>
                                        <a href="index804a.html" class="nav-link ">
                                            <span>Affiliates</span> </a>
                                    </li>
                                    <li>
                                        <a href="indexded0.html?rp=/knowledgebase" class="nav-link ">
                                            <span>Knowledgebase</span> </a>
                                    </li>
                                    <li>
                                        <a href="index992c.html?rp=/announcements" class="nav-link ">
                                            <span>News</span> </a>
                                    </li>
                                    <li>
                                        <a href="index804a.html" class="nav-link ">
                                            <span>Contact Us</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-copyright">Copyright &copy; 2022 Cee-Tradar Hosting. All Rights Reserved.</div>
                    <ul class="footer-nav footer-nav-h">
                        <li class="dropdown dropup" data-language-select>
                            <a data-toggle="dropdown" href="#">
                                <span class="language-flag english"></span><spam>English</span>
                                    <b class="ls ls-caret"></b>
                            </a>
                            <div class="dropdown-menu dropdown-language-search  dropdown-menu-right">
                                <input type="hidden" data-language-select-value value="English">
                                <input type="hidden" data-language-select-backlink value="/?">
                                <input type="hidden" data-language-select-lang value="Select">
                                <div class="dropdown-header input-group align-center">
                                    <i class="input-group-icon lm lm-search"></i>
                                    <input class="form-control" placeholder="Search..." type="text" data-language-select-search>
                                </div>
                                <div class="nav-divider"></div>
                                <div class="dropdown-menu-items has-scroll" data-language-select-list>
                                    <div class="dropdown-menu-item " data-value="arabic" data-language="العربية">
                                        <a href="indexed62.html?language=arabic">
                                            <span class="language-flag arabic"></span>
                                            <span class="language-text">العربية</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="azerbaijani" data-language="Azerbaijani">
                                        <a href="index2a07.html?language=azerbaijani">
                                            <span class="language-flag azerbaijani"></span>
                                            <span class="language-text">Azerbaijani</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="catalan" data-language="Català">
                                        <a href="indexac7b.html?language=catalan">
                                            <span class="language-flag catalan"></span>
                                            <span class="language-text">Català</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="chinese" data-language="中文">
                                        <a href="indexb719.html?language=chinese">
                                            <span class="language-flag chinese"></span>
                                            <span class="language-text">中文</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="croatian" data-language="Hrvatski">
                                        <a href="index3e07.html?language=croatian">
                                            <span class="language-flag croatian"></span>
                                            <span class="language-text">Hrvatski</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="czech" data-language="Čeština">
                                        <a href="index1ff1.html?language=czech">
                                            <span class="language-flag czech"></span>
                                            <span class="language-text">Čeština</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="danish" data-language="Dansk">
                                        <a href="index6c6e.html?language=danish">
                                            <span class="language-flag danish"></span>
                                            <span class="language-text">Dansk</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="dutch" data-language="Nederlands">
                                        <a href="indexfb36.html?language=dutch">
                                            <span class="language-flag dutch"></span>
                                            <span class="language-text">Nederlands</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item active" data-value="english" data-language="English">
                                        <a href="index59a8.html?language=english">
                                            <span class="language-flag english"></span>
                                            <span class="language-text">English</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="estonian" data-language="Estonian">
                                        <a href="indexa384.html?language=estonian">
                                            <span class="language-flag estonian"></span>
                                            <span class="language-text">Estonian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="farsi" data-language="Persian">
                                        <a href="index1bad.html?language=farsi">
                                            <span class="language-flag farsi"></span>
                                            <span class="language-text">Persian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="french" data-language="Français">
                                        <a href="index983d.html?language=french">
                                            <span class="language-flag french"></span>
                                            <span class="language-text">Français</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="german" data-language="Deutsch">
                                        <a href="index28d4.html?language=german">
                                            <span class="language-flag german"></span>
                                            <span class="language-text">Deutsch</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="hebrew" data-language="עברית">
                                        <a href="indexd9af.html?language=hebrew">
                                            <span class="language-flag hebrew"></span>
                                            <span class="language-text">עברית</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="hungarian" data-language="Magyar">
                                        <a href="index0494.html?language=hungarian">
                                            <span class="language-flag hungarian"></span>
                                            <span class="language-text">Magyar</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="italian" data-language="Italiano">
                                        <a href="index6e5a.html?language=italian">
                                            <span class="language-flag italian"></span>
                                            <span class="language-text">Italiano</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="macedonian" data-language="Macedonian">
                                        <a href="indexb2fa.html?language=macedonian">
                                            <span class="language-flag macedonian"></span>
                                            <span class="language-text">Macedonian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="norwegian" data-language="Norwegian">
                                        <a href="indexfcce.html?language=norwegian">
                                            <span class="language-flag norwegian"></span>
                                            <span class="language-text">Norwegian</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="portuguese-br" data-language="Português">
                                        <a href="index26ea.html?language=portuguese-br">
                                            <span class="language-flag portuguese-br"></span>
                                            <span class="language-text">Português</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="portuguese-pt" data-language="Português">
                                        <a href="index6a35.html?language=portuguese-pt">
                                            <span class="language-flag portuguese-pt"></span>
                                            <span class="language-text">Português</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="romanian" data-language="Română">
                                        <a href="indexa582.html?language=romanian">
                                            <span class="language-flag romanian"></span>
                                            <span class="language-text">Română</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="russian" data-language="Русский">
                                        <a href="indexb57d.html?language=russian">
                                            <span class="language-flag russian"></span>
                                            <span class="language-text">Русский</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="spanish" data-language="Español">
                                        <a href="indexad1d.html?language=spanish">
                                            <span class="language-flag spanish"></span>
                                            <span class="language-text">Español</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="swedish" data-language="Svenska">
                                        <a href="index7fac.html?language=swedish">
                                            <span class="language-flag swedish"></span>
                                            <span class="language-text">Svenska</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="turkish" data-language="Türkçe">
                                        <a href="indexac68.html?language=turkish">
                                            <span class="language-flag turkish"></span>
                                            <span class="language-text">Türkçe</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-item " data-value="ukranian" data-language="Українська">
                                        <a href="indexc941.html?language=ukranian">
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
                            </div> </li>
                        <li>
                            <a href="#">
                                <i class="lm lm-go-top"></i>
                            </a>
                        </li>
                    </ul>
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
