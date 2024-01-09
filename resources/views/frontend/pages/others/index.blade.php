@extends('frontend.layouts.app')

@section('title', __('Home'))

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row st_screenfix">
            <div class="col-xl-5 col-lg-6 d-flex align-items-center">
                <div class="hero-content">
                    <h1>Learn with expert anytime anywhere</h1>
                    <p>Our mision is to help people to find the best course online and learn with expert anytime,
                        anywhere.</p>
                    <a class="button button--lg" href="{{ route('website.register') }}">Create Account</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="hero-thumb">
                    <img src="{{ asset('frontend') }}/images/hero-thumb.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!--Category Section -->
<div class="category-section section-padding">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('Browse with top category') }}</h2>
        </div>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <a class="d-block" href="category.html">
                        <div class="category-content badge-color-1">
                            <div class="category-content-left">
                                <img src="{{ asset($category->image) }}" alt="category_image">
                            </div>
                            <div class="category-content-right">
                                <h4>{{ $category->name }}</h4>
                                <span>{{ $category->courses_count }} {{ __('Courses') }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="icon-bottom-btn mt-4">
            <p>{{ __('We have more category & subcategory') }} <a href="{{ route('website.course') }}">{{ __('Browse All') }}
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a></p>
        </div>
    </div>
</div>

<!--Course Section -->
<div class="course-section grid5">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('Explore top-rated courses') }}</h2>
        </div>
        <div class="course-item-5-grid">
            @foreach ($topRatedCourses as $course)
                <x-frontend.course.simple-card :course="$course" card-class="course-item-5" />
            @endforeach
        </div>
    </div>
</div>

<!--Feature Course Section -->
<div class="feature-course-section">
    <div class="container">
        <div class="feature-course-wrap">
            <div class="section-title section-title2">
                <h2>{{ __('Featured courses') }}</h2>
                <p>Vestibulum sed dolor sed diam mollis maximus vel nec dolor.<br /> Donec varius purus et eleifend
                    porta.</p>
            </div>
            <div class="row">
                @foreach ($featuredCourses as $course)
                    <div class="col-xl-6">
                        <x-frontend.course.width-card :course="$course" />
                    </div>
                @endforeach
            </div>
            <div class="footer-button text-center mt-3">
                <a href="#" class="button button--lg button-p-s button-i--r" href="http://127.0.0.1:8000/courses">
                    {{ __('View all featured courses') }}
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>


<!--Course Section -->
<div class="course-section section-padding">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('Recently added courses') }}</h2>
        </div>
        <div class="row">
            @foreach ($latestCourses as $course)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <x-frontend.course.simple-card :course="$course" />
                </div>
            @endforeach
        </div>
        <div class="footer-button text-center mt-3">
            <a class="button button--lg button-p-s button-i--r" href="{{ route('website.course') }}">
                {{ __('Browse all course') }}
                <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>

<!--Featured Instructor Section -->
<div class="feature-course-section mt-2">
    <div class="container">
        <div class="feature-course-wrap">
            <div class="section-title section-title2">
                <h2>{{ __('Featured instructor') }}</h2>
            </div>
            <div class="mb-5">
                <div class="tw-max-w-3xl md:tw-flex md:tw-items-center md:tw-justify-between md:tw-space-x-5 lg:tw-max-w-7xl">
                    <div class="tw-flex tw-items-center tw-space-x-5">
                      <div class="tw-flex-shrink-0">
                        <div class="tw-relative">
                          <img class="tw-h-20 tw-w-20 tw-rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80" alt="">
                          <span class="tw-absolute tw-inset-0 tw-rounded-full tw-shadow-inner" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div>
                        <h1 class="tw-text-2xl tw-font-bold tw-text-gray-900">Ricardo Cooper</h1>
                        <p class="tw-text-sm tw-font-medium tw-text-gray-500">Learning since <time datetime="2020-08-25">August 25, 2020</time></p>
                        <div class="tw-flex tw-justify-start profile-review mt-3">
                            <ul class="tw-flex tw-gap-3">
                              <li>
                                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M10.4135 15.8812L15.1419 18.8769C15.7463 19.2598 16.4967 18.6903 16.3173 17.9847L14.9512 12.6108C14.9127 12.4611 14.9173 12.3036 14.9643 12.1564C15.0114 12.0092 15.0991 11.8783 15.2172 11.7787L19.4573 8.24959C20.0144 7.78588 19.7269 6.86126 19.0111 6.81481L13.4738 6.45544C13.3247 6.44479 13.1816 6.39198 13.0613 6.30317C12.941 6.21437 12.8484 6.09321 12.7943 5.95382L10.7292 0.753229C10.673 0.605277 10.5732 0.477903 10.443 0.38802C10.3127 0.298137 10.1582 0.25 10 0.25C9.84176 0.25 9.68726 0.298137 9.55702 0.38802C9.42678 0.477903 9.32697 0.605277 9.27083 0.753229L7.20568 5.95382C7.15157 6.09321 7.05897 6.21437 6.93868 6.30317C6.81838 6.39198 6.67533 6.44479 6.52618 6.45544L0.98894 6.81481C0.273153 6.86126 -0.0144031 7.78588 0.542723 8.24959L4.78278 11.7787C4.90095 11.8783 4.9886 12.0092 5.03566 12.1564C5.08272 12.3036 5.08727 12.4611 5.0488 12.6108L3.78188 17.5945C3.56667 18.4412 4.46715 19.1246 5.19243 18.6651L9.58647 15.8812C9.71005 15.8025 9.85351 15.7607 10 15.7607C10.1465 15.7607 10.29 15.8025 10.4135 15.8812Z" fill="#FD8E1F"></path>
                                </svg>
                                <span>4.8</span>
                                (134,633 review)
                              </li>
                              <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.25 15C10.9424 15 13.125 12.8174 13.125 10.125C13.125 7.43261 10.9424 5.25 8.25 5.25C5.55761 5.25 3.375 7.43261 3.375 10.125C3.375 12.8174 5.55761 15 8.25 15Z" stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                                  <path d="M14.5698 5.43158C15.2403 5.24266 15.9436 5.19962 16.6321 5.30537C17.3207 5.41111 17.9786 5.66318 18.5615 6.04459C19.1444 6.42601 19.6389 6.92791 20.0115 7.5165C20.3841 8.10509 20.6263 8.7667 20.7217 9.45676C20.8171 10.1468 20.7635 10.8493 20.5645 11.5169C20.3655 12.1845 20.0258 12.8018 19.5682 13.327C19.1107 13.8523 18.5458 14.2734 17.9118 14.562C17.2777 14.8505 16.5892 14.9999 15.8926 15" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M1.49951 18.5059C2.26089 17.4229 3.27166 16.539 4.4465 15.9288C5.62133 15.3186 6.92574 15.0001 8.24959 15C9.57344 14.9999 10.8779 15.3184 12.0528 15.9285C13.2276 16.5386 14.2385 17.4225 14.9999 18.5054" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                  <path d="M15.8926 15C17.2166 14.999 18.5213 15.3171 19.6962 15.9273C20.8712 16.5375 21.8819 17.4218 22.6426 18.5054" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>430,117</span>
                                students
                              </li>
                              <li>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" fill="#FF6636" stroke="#FF6636" stroke-width="1.5" stroke-miterlimit="10"></path>
                                  <path d="M15 12L10.5 9V15L15 12Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>7</span>
                                courses
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                    <a class="button button--lg button-p-s button-i--r" href="{{ route('website.course') }}">View Profile
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </a>

                  </div>
            </div>
            <div class="row">
                {{-- @foreach ($featuredCourses as $course)
                    <div class="col-xl-6">
                        <x-frontend.course.width-card :course="$course" />
                    </div>
                @endforeach --}}
            </div>
            <div class="footer-button text-center mt-3">
                <a class="button button--lg button-p-s button-i--r" href="http://127.0.0.1:8000/courses">View all featured instructor
                    <span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>

<!--Category Section -->
<div class="cat-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="cta-left">
                    <h4>Become an instructor</h4>
                    <p>Instructors from around the world teach millions of students on Udemy. We provide the tools
                        and skills to teach what you love.</p>
                    <a class="default-btn btn-large bg-white icon-btn" href="#">Browse all Course
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <div class="cat-thumb">
                        <img src="{{ asset('frontend') }}/images/cta.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="cta-right">
                    <h3>Your teaching & earning steps</h3>
                    <ul>
                        <li><span class="color-1">1</span> Apply to become instructor</li>
                        <li><span class="color-2">2</span> Build & edit your profile</li>
                        <li><span class="color-3">3</span> Create your new course</li>
                        <li><span class="color-4">4</span> Start teaching & earning</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-6">
                <div class="cta-right">
                    <h3>Your teaching & earning steps</h3>
                    <ul>
                        <li><span class="color-1">1</span> Apply to become instructor</li>
                        <li><span class="color-2">2</span> Build & edit your profile</li>
                        <li><span class="color-3">3</span> Create your new course</li>
                        <li><span class="color-4">4</span> Start teaching & earning</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="cta-left">
                    <h4>Become an student</h4>
                    <p>Instructors from around the world teach millions of students on Udemy. We provide the tools
                        and skills to teach what you love.</p>
                    <a class="default-btn btn-large bg-white icon-btn" href="#">Browse all Course
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <div class="cat-thumb">
                        <img src="{{ asset('frontend') }}/images/cta.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Feature Course Section -->
<div class="feature-course-section">
    <div class="container">
        <div class="feature-course-wrap">
            <div class="section-title">
                <h2>Top instructor</h2>
            </div>
            <div class="course-item-5-grid">
                <div class="course-item-5">

                    <div class="course-item-5-card">
                        <a href="instructor-profile.html" class="course-item-5-card-img team-thumb"><img
                                src="{{ asset('frontend') }}/images/team1.png" alt=""></a>
                        <div class="course-item-data">
                            <h5>Devon Lane</h5>
                            <p>Senior Developer</p>
                        </div>
                        <div class="course-item-5-card-footer">
                            <p class="course-item-5-card-footer-review align-self-center">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                        fill="#FD8E1F" />
                                </svg>
                                5.0
                            </p>
                            <p class="course-item-5-card-footer-student">
                                265.7K <span>students</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="course-item-5">
                    <div class="course-item-5-card">
                        <a href="instructor-profile.html" class="course-item-5-card-img team-thumb"><img
                                src="{{ asset('frontend') }}/images/team2.png" alt=""></a>
                        <div class="course-item-data">
                            <h5>Darrell Steward</h5>
                            <p>Digital Product Designer</p>
                        </div>
                        <div class="course-item-5-card-footer">
                            <p class="course-item-5-card-footer-review align-self-center">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                        fill="#FD8E1F" />
                                </svg>
                                5.0
                            </p>
                            <p class="course-item-5-card-footer-student">
                                265.7K <span>students</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="course-item-5">
                    <div class="course-item-5-card">
                        <a href="instructor-profile.html" class="course-item-5-card-img team-thumb"><img
                                src="{{ asset('frontend') }}/images/team3.png" alt=""></a>
                        <div class="course-item-data">
                            <h5>Jane Cooper</h5>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="course-item-5-card-footer">
                            <p class="course-item-5-card-footer-review align-self-center">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                        fill="#FD8E1F" />
                                </svg>
                                5.0
                            </p>
                            <p class="course-item-5-card-footer-student">
                                265.7K <span>students</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="course-item-5">
                    <div class="course-item-5-card">
                        <a href="instructor-profile.html" class="course-item-5-card-img team-thumb"><img
                                src="{{ asset('frontend') }}/images/team4.png" alt=""></a>
                        <div class="course-item-data">
                            <h5>Albert Flores</h5>
                            <p>Adobe Instructor</p>
                        </div>
                        <div class="course-item-5-card-footer">
                            <p class="course-item-5-card-footer-review align-self-center">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                        fill="#FD8E1F" />
                                </svg>
                                5.0
                            </p>
                            <p class="course-item-5-card-footer-student">
                                265.7K <span>students</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="course-item-5">
                    <div class="course-item-5-card">
                        <a href="instructor-profile.html" class="course-item-5-card-img team-thumb"><img
                                src="{{ asset('frontend') }}/images/team5.png" alt=""></a>
                        <div class="course-item-data">
                            <h5>Kathryn Murphy</h5>
                            <p>Lead Developer</p>
                        </div>
                        <div class="course-item-5-card-footer">
                            <p class="course-item-5-card-footer-review align-self-center">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                        fill="#FD8E1F" />
                                </svg>
                                5.0
                            </p>
                            <p class="course-item-5-card-footer-student">
                                265.7K <span>students</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-bottom-btn mt-4">
                <p>Thousands of students waiting for a instructor. Start teaching & earning now!. <a
                        href="become-instructor.html">Become Instructor
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a></p>
            </div>
        </div>
    </div>
</div>

<!--Company Section -->
<div class="company-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex align-items-center">
                <div class="company-content">
                    <h3>6.3k trusted companies</h3>
                    <p>Nullam egestas tellus at enim ornare tristique. Class aptent taciti sociosqu ad litora
                        torquent per conubia nostra.</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo1.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo2.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo5.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo6.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="company-logo-item">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/images/logo7.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
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
@endsection
