@extends('frontend.layouts.app')

@section('title', __('About'))

@section('content')

<div class="bredadcrumb-section">
    <div class="container">
        <div class="breadcrumb-menu">
            <h3>About</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">/</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </div>
    </div>
</div>
<!--End bredadcrumb-section -->
<div class="about-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="about-thumb responsive_bottom">
                    <img src="{{ asset('frontend') }}/images/about/about-thumb.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about-content">
                    <h3>2007-2021</h3>
                    <h2>We share knowledge with the world</h2>
                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent fermentum quam mauris.
                        Fusce tempor et augue a aliquet. Donec non ipsum non risus egestas tincidunt at vitae nulla.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End about-section -->
<div class="company-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-center">
                <div class="company-content">
                    <h3>We Just keep growing with 6.3k Companies</h3>
                    <p>Nullam egestas tellus at enim ornare tristique. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo8.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End company-section -->
<div class="counter-section section-padding-bottom">
    <div id="etutor-counter"></div>
    <div class="container">
        <div class="counter-wrap">
            <div class="counter-item">
                <div class="counter-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M13.75 25C18.2373 25 21.875 21.3623 21.875 16.875C21.875 12.3877 18.2373 8.75 13.75 8.75C9.26272 8.75 5.62503 12.3877 5.62503 16.875C5.62503 21.3623 9.26272 25 13.75 25Z"
                            fill="#FF6636" />
                        <path
                            d="M13.75 25C18.2373 25 21.875 21.3623 21.875 16.875C21.875 12.3877 18.2373 8.75 13.75 8.75C9.26272 8.75 5.62503 12.3877 5.62503 16.875C5.62503 21.3623 9.26272 25 13.75 25Z"
                            stroke="#FF6636" stroke-width="2" stroke-miterlimit="10" />
                        <path
                            d="M24.2834 9.05256C25.4009 8.7377 26.573 8.66597 27.7206 8.84221C28.8682 9.01845 29.9646 9.43856 30.9362 10.0743C31.9077 10.7099 32.7318 11.5465 33.3528 12.5274C33.9739 13.5084 34.3775 14.6111 34.5365 15.7612C34.6955 16.9113 34.6062 18.0821 34.2746 19.1948C33.943 20.3075 33.3768 21.3362 32.6141 22.2116C31.8515 23.0871 30.9101 23.7889 29.8533 24.2699C28.7966 24.7508 27.6491 24.9998 26.488 24.9999"
                            stroke="#FF6636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2.49951 30.8432C3.76847 29.0382 5.45309 27.565 7.41115 26.548C9.36921 25.531 11.5432 25.0001 13.7496 25C15.9561 24.9999 18.1301 25.5307 20.0882 26.5476C22.0464 27.5644 23.7311 29.0375 25.0002 30.8424"
                            stroke="#FF6636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M26.4877 25C28.6943 24.9984 30.8688 25.5285 32.8271 26.5455C34.7854 27.5625 36.4698 29.0364 37.7378 30.8424"
                            stroke="#FF6636" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="counter-data">
                    <div class="counter-number"><span data-percentage="67.1" class="etutor-counter"></span>k</div>
                    <p>Students</p>
                </div>
            </div>
            <div class="counter-item">
                <div class="counter-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M12.5 33.75H7.5C7.16848 33.75 6.85054 33.6183 6.61612 33.3839C6.3817 33.1495 6.25 32.8315 6.25 32.5V7.5C6.25 7.16848 6.3817 6.85054 6.61612 6.61612C6.85054 6.3817 7.16848 6.25 7.5 6.25H12.5V33.75Z"
                            fill="#564FFD" />
                        <path d="M17.5 17.5H27.5" stroke="#564FFD" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M17.5 22.5H27.5" stroke="#564FFD" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M32.5 6.25H7.5C6.80964 6.25 6.25 6.80964 6.25 7.5V32.5C6.25 33.1904 6.80964 33.75 7.5 33.75H32.5C33.1904 33.75 33.75 33.1904 33.75 32.5V7.5C33.75 6.80964 33.1904 6.25 32.5 6.25Z"
                            stroke="#564FFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.5 6.25V33.75" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="counter-data">
                    <div class="counter-number"><span data-percentage="26" class="etutor-counter"></span>k</div>
                    <p>Certified Instructor</p>
                </div>
            </div>
            <div class="counter-item">
                <div class="counter-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M20.3507 34.9964C23.0932 34.9327 25.7657 34.1183 28.0776 32.6417C30.3895 31.165 32.2522 29.0827 33.4632 26.6213L33.4629 26.6211L24.9807 21.4042C24.832 21.3127 24.6658 21.2534 24.4928 21.2301L20.9274 20.7495C20.6597 20.7134 20.3875 20.765 20.1515 20.8966C19.9156 21.0282 19.7287 21.2327 19.6187 21.4795L17.4782 26.2823C17.3787 26.5057 17.3469 26.7533 17.3867 26.9946C17.4265 27.2359 17.5362 27.4602 17.7022 27.6397L20.6396 30.817C20.7728 30.961 20.8702 31.1344 20.924 31.3231C20.9777 31.5117 20.9863 31.7104 20.9491 31.903L20.3507 34.9962L20.3507 34.9964Z"
                            fill="#E34444" />
                        <path opacity="0.2"
                            d="M10.9782 9.29441L9.67221 12.3826C9.64729 12.4416 9.64591 12.5078 9.66836 12.5677L11.4638 17.3596C11.4785 17.3989 11.5028 17.4338 11.5346 17.4612C11.5663 17.4886 11.6044 17.5075 11.6454 17.5163L11.6827 17.5244L12.6621 15.1991C12.834 14.7911 13.1224 14.4429 13.4913 14.198C13.8601 13.9532 14.293 13.8226 14.7357 13.8226H18.0709C18.1132 13.8226 18.1548 13.8119 18.1918 13.7914L20.1045 12.7351M10.9782 9.29441L20.1045 12.7351M10.9782 9.29441C12.6662 7.87413 14.6663 6.8712 16.8165 6.36845C18.9042 5.88032 21.0741 5.87758 23.1598 6.35801M10.9782 9.29441L23.1598 6.35801M20.1045 12.7351C20.1214 12.7258 20.1371 12.7146 20.1514 12.7017L24.3562 8.89896C24.3981 8.86102 24.426 8.80997 24.4352 8.75416C24.4444 8.69835 24.4344 8.64107 24.4068 8.59167L23.1598 6.35801M20.1045 12.7351L23.1598 6.35801"
                            fill="#E34444" stroke="#E34444" stroke-width="2" />
                        <path
                            d="M20 35C28.2843 35 35 28.2843 35 20C35 11.7157 28.2843 5 20 5C11.7157 5 5 11.7157 5 20C5 28.2843 11.7157 35 20 35Z"
                            stroke="#E34444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M33.4629 26.6211L24.9807 21.4042C24.832 21.3127 24.6658 21.2534 24.4928 21.2301L20.9274 20.7495C20.6597 20.7134 20.3875 20.765 20.1515 20.8966C19.9156 21.0282 19.7287 21.2327 19.6187 21.4795L17.4782 26.2823C17.3787 26.5057 17.3469 26.7533 17.3867 26.9946C17.4265 27.2359 17.5362 27.4602 17.7022 27.6397L20.6396 30.817C20.7728 30.961 20.8702 31.1344 20.924 31.3231C20.9777 31.5117 20.9863 31.7104 20.9491 31.903L20.3507 34.9962"
                            stroke="#E34444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M10.1487 8.6875L8.75118 11.9921C8.62657 12.2868 8.61968 12.618 8.73193 12.9176L10.5274 17.7095C10.6009 17.9057 10.7226 18.0803 10.8812 18.2172C11.0399 18.3542 11.2304 18.449 11.4352 18.493L14.7837 19.2127C14.9695 19.2526 15.1437 19.3344 15.2932 19.4518C15.4426 19.5692 15.5633 19.7191 15.6461 19.8902L16.2408 21.1186C16.3431 21.33 16.5029 21.5083 16.7019 21.6331C16.9009 21.7578 17.131 21.824 17.3659 21.824H19.4647"
                            stroke="#E34444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M23.8213 5.49219L25.2797 8.10444C25.4176 8.35138 25.4676 8.63779 25.4217 8.91685C25.3757 9.19592 25.2365 9.45116 25.0267 9.64087L20.8219 13.4436C20.7505 13.5081 20.6719 13.5642 20.5877 13.6107L18.6749 14.667C18.4899 14.7692 18.282 14.8228 18.0707 14.8228H14.7354C14.4895 14.8228 14.249 14.8954 14.0441 15.0314C13.8392 15.1674 13.679 15.3609 13.5835 15.5876L12.2823 18.6764"
                            stroke="#E34444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="counter-data">
                    <div class="counter-number"><span data-percentage="72" class="etutor-counter"></span></div>
                    <p>Country Language</p>
                </div>
            </div>
            <div class="counter-item">
                <div class="counter-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2"
                            d="M8.50951 31.4905C7.07139 30.0524 8.02524 27.0331 7.29325 25.2639C6.53443 23.43 3.75 21.9539 3.75 19.9999C3.75 18.046 6.53445 16.57 7.29325 14.7361C8.02525 12.9669 7.07139 9.94764 8.50951 8.50951C9.94764 7.07139 12.9669 8.02524 14.7361 7.29325C16.57 6.53443 18.0461 3.75 20.0001 3.75C21.954 3.75 23.43 6.53445 25.2639 7.29325C27.0331 8.02525 30.0524 7.07139 31.4905 8.50951C32.9286 9.94764 31.9748 12.9669 32.7068 14.7361C33.4656 16.57 36.25 18.0461 36.25 20.0001C36.25 21.954 33.4656 23.43 32.7067 25.2639C31.9747 27.0331 32.9286 30.0524 31.4905 31.4905C30.0524 32.9286 27.0331 31.9748 25.2639 32.7068C23.43 33.4656 21.9539 36.25 19.9999 36.25C18.046 36.25 16.57 33.4656 14.7361 32.7067C12.9669 31.9747 9.94764 32.9286 8.50951 31.4905Z"
                            fill="#23BD33" />
                        <path
                            d="M8.50951 31.4905C7.07139 30.0524 8.02524 27.0331 7.29325 25.2639C6.53443 23.43 3.75 21.9539 3.75 19.9999C3.75 18.046 6.53445 16.57 7.29325 14.7361C8.02525 12.9669 7.07139 9.94764 8.50951 8.50951C9.94764 7.07139 12.9669 8.02524 14.7361 7.29325C16.57 6.53443 18.0461 3.75 20.0001 3.75C21.954 3.75 23.43 6.53445 25.2639 7.29325C27.0331 8.02525 30.0524 7.07139 31.4905 8.50951C32.9286 9.94764 31.9748 12.9669 32.7068 14.7361C33.4656 16.57 36.25 18.0461 36.25 20.0001C36.25 21.954 33.4656 23.43 32.7067 25.2639C31.9747 27.0331 32.9286 30.0524 31.4905 31.4905C30.0524 32.9286 27.0331 31.9748 25.2639 32.7068C23.43 33.4656 21.9539 36.25 19.9999 36.25C18.046 36.25 16.57 33.4656 14.7361 32.7067C12.9669 31.9747 9.94764 32.9286 8.50951 31.4905Z"
                            stroke="#23BD33" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M26.875 16.25L17.7083 25L13.125 20.625" stroke="#23BD33" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="counter-data">
                    <div class="counter-number"><span data-percentage="99.9" class="etutor-counter"></span>%</div>
                    <p>Success Rate</p>
                </div>
            </div>
            <div class="counter-item">
                <div class="counter-icon">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M5 12.5L20 21.25L35 12.5L20 3.75L5 12.5Z" fill="#FD8E1F" />
                        <path d="M5 27.5L20 36.25L35 27.5" stroke="#FD8E1F" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 20L20 28.75L35 20" stroke="#FD8E1F" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5 12.5L20 21.25L35 12.5L20 3.75L5 12.5Z" stroke="#FD8E1F" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="counter-data">
                    <div class="counter-number"><span data-percentage="57" class="etutor-counter"></span></div>
                    <p>Trusted Companies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End counter-section -->
<div class="our-mission-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="our-mission-thumb responsive_bottom">
                    <img src="{{ asset('frontend') }}/images/about/mision-thumb.png" alt="">
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center">
                <div class="our-mission-content">
                    <h5>OUR ONE BILLION MISSION</h5>
                    <h2>Our one billion mission sounds bold, We agree.</h2>
                    <p>"We cannot solve our problems with the same thinking we used when we created them."—Albert
                        Einstein. Institutions are slow to change. Committees are where good ideas and innovative
                        thinking go to die. Choose agility over dogma. Embrace and drive change. We need to wipe the
                        slate clean and begin with bold, radical thinking.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End counter-section -->
<div class="gallery-section gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <div class="gallery-thumb responsive_bottom">
                    <img src="{{ asset('frontend') }}/images/about/Gallery.png" alt="">
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center">
                <div class="our-mission-content">
                    <h5>OUR GALLERY</h5>
                    <h2>We’ve been here almost 17 years</h2>
                    <p>Fusce lobortis leo augue, sit amet tristique nisi commodo in. Aliquam ac libero quis tellus
                        venenatis imperdiet. Sed sed nunc libero. Curabitur in urna ligula. torquent per conubia nostra.
                    </p>
                    <a class="button button--md button-i--r mt-4" href="#">
                        Join our team
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 12H20.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End cat-section -->

<div class="testimonial-section section-padding">
    <div class="container">
        <div class="testimonial-slider owl-carousel">
            <div class="testimonial-wrap">
                <div class="testimonial-content">
                    <p>Etutor fit us like a glove. Their team curates fresh, up-to-date courses from their marketplace
                        and makes them available to customers.</p>
                    <div class="quote1">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.746 11.242C25.88 11.242 28 13.426 28 16.662C28 19.574 25.568 22 22.274 22C18.666 22 16 19.088 16 14.64C16 4.53 23.372 0.486 28 0V4.448C24.862 5.014 21.334 8.168 21.176 11.648C21.334 11.568 21.96 11.242 22.746 11.242Z"
                                fill="#FF6636" />
                            <path
                                d="M6.746 11.242C9.882 11.242 12 13.426 12 16.662C12 19.574 9.568 22 6.274 22C2.666 22 0 19.088 0 14.64C0 4.53 7.372 0.486 12 0V4.448C8.862 5.014 5.334 8.168 5.176 11.648C5.334 11.568 5.96 11.242 6.746 11.242Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                    <div class="quote2">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.254 10.758C2.12 10.758 0 8.574 0 5.338C0 2.426 2.432 0 5.726 0C9.334 0 12 2.912 12 7.36C12 17.47 4.628 21.514 0 22V17.552C3.138 16.986 6.666 13.832 6.824 10.352C6.666 10.432 6.04 10.758 5.254 10.758Z"
                                fill="#FF6636" />
                            <path
                                d="M21.254 10.758C18.118 10.758 16 8.574 16 5.338C16 2.426 18.432 0 21.726 0C25.334 0 28 2.912 28 7.36C28 17.47 20.628 21.514 16 22V17.552C19.138 16.986 22.666 13.832 22.824 10.352C22.666 10.432 22.04 10.758 21.254 10.758Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                </div>
                <div class="testimonial-data">
                    <h5>Sundar Pichai</h5>
                    <p>Chief Chairman of<a href="#"> Google</a></p>
                </div>
            </div>
            <div class="testimonial-wrap">
                <div class="testimonial-content">
                    <p>Edugaurd responds to the needs of the business in an agile and global manner. It’s truly the best
                        solution for our employees and their careers.</p>
                    <div class="quote1">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.746 11.242C25.88 11.242 28 13.426 28 16.662C28 19.574 25.568 22 22.274 22C18.666 22 16 19.088 16 14.64C16 4.53 23.372 0.486 28 0V4.448C24.862 5.014 21.334 8.168 21.176 11.648C21.334 11.568 21.96 11.242 22.746 11.242Z"
                                fill="#FF6636" />
                            <path
                                d="M6.746 11.242C9.882 11.242 12 13.426 12 16.662C12 19.574 9.568 22 6.274 22C2.666 22 0 19.088 0 14.64C0 4.53 7.372 0.486 12 0V4.448C8.862 5.014 5.334 8.168 5.176 11.648C5.334 11.568 5.96 11.242 6.746 11.242Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                    <div class="quote2">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.254 10.758C2.12 10.758 0 8.574 0 5.338C0 2.426 2.432 0 5.726 0C9.334 0 12 2.912 12 7.36C12 17.47 4.628 21.514 0 22V17.552C3.138 16.986 6.666 13.832 6.824 10.352C6.666 10.432 6.04 10.758 5.254 10.758Z"
                                fill="#FF6636" />
                            <path
                                d="M21.254 10.758C18.118 10.758 16 8.574 16 5.338C16 2.426 18.432 0 21.726 0C25.334 0 28 2.912 28 7.36C28 17.47 20.628 21.514 16 22V17.552C19.138 16.986 22.666 13.832 22.824 10.352C22.666 10.432 22.04 10.758 21.254 10.758Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                </div>
                <div class="testimonial-data">
                    <h5>Satya Nadella</h5>
                    <p>CEO of <a href="#">Microsoft</a></p>
                </div>
            </div>
            <div class="testimonial-wrap">
                <div class="testimonial-content">
                    <p>In total, it was a big success, I would get emails about what a fantastic resource it was.</p>
                    <div class="quote1">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.746 11.242C25.88 11.242 28 13.426 28 16.662C28 19.574 25.568 22 22.274 22C18.666 22 16 19.088 16 14.64C16 4.53 23.372 0.486 28 0V4.448C24.862 5.014 21.334 8.168 21.176 11.648C21.334 11.568 21.96 11.242 22.746 11.242Z"
                                fill="#FF6636" />
                            <path
                                d="M6.746 11.242C9.882 11.242 12 13.426 12 16.662C12 19.574 9.568 22 6.274 22C2.666 22 0 19.088 0 14.64C0 4.53 7.372 0.486 12 0V4.448C8.862 5.014 5.334 8.168 5.176 11.648C5.334 11.568 5.96 11.242 6.746 11.242Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                    <div class="quote2">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.254 10.758C2.12 10.758 0 8.574 0 5.338C0 2.426 2.432 0 5.726 0C9.334 0 12 2.912 12 7.36C12 17.47 4.628 21.514 0 22V17.552C3.138 16.986 6.666 13.832 6.824 10.352C6.666 10.432 6.04 10.758 5.254 10.758Z"
                                fill="#FF6636" />
                            <path
                                d="M21.254 10.758C18.118 10.758 16 8.574 16 5.338C16 2.426 18.432 0 21.726 0C25.334 0 28 2.912 28 7.36C28 17.47 20.628 21.514 16 22V17.552C19.138 16.986 22.666 13.832 22.824 10.352C22.666 10.432 22.04 10.758 21.254 10.758Z"
                                fill="#FF6636" />
                        </svg>
                    </div>
                </div>
                <div class="testimonial-data">
                    <h5>Ted Sarandos</h5>
                    <p>Chief Executive Officer of <a href="#">Netflix</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End testimonial-section -->

@endsection
