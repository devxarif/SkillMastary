@extends('frontend.layouts.app')

@section('title', __('Home'))

@section('content')
<!--Hero Section -->
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
            <h2>Browse with top category</h2>
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
            <p>We have more category & subcategory. <a href="{{ route('website.course') }}">Browse All
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
            <h2>Explore our top courses</h2>
        </div>
        <div class="course-item-5-grid">
            <div class="course-item-5">
                <div class="course-item-5-card">
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course1.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag">Design</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="course-single.html" class="course-item-5-card-head">Machine Learning A-Z™: Hands-On
                        Python & R In Data...</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course2.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color2">Developments</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">The Complete 2021 Web Development
                        Bootcamp</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course3.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color3">Business</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">Learn Python Programming
                        Masterclass</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course4.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color2">Marketing</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">The Complete Digital Marketing
                        Course - 12 Courses in 1</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course5.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag">IT & Software</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">Reiki Level I, II and
                        Master/Teacher Program</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course6.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag">Music</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">MThe Complete Foundation Stock
                        Trading Course</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course7.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color2">Marketing</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">Beginner to Pro in Excel: Financial
                        Modeling and Valuati...</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course8.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color3">Health & Fitness</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">The Python Mega Course: Build 10
                        Real World Applications</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course1.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag tag-color2">design</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">Copywriting - Become a Freelance
                        Copywriter, your ow...</a>
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
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-img">
                        <img src="{{ asset('frontend') }}/images/course1.jpg" alt="">
                    </a>
                    <div class="course-item-5-card-info">
                        <button class="course-item-5-card-info-tag">Lifestyle</button>
                        <p class="course-item-5-card-info-price">$57</p>
                    </div>
                    <a href="{{ route('website.course.details', '123') }}" class="course-item-5-card-head">Google Analytics Certification -
                        Learn How To Pass The Exam</a>
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
    </div>
</div>

<!--Feature Course Section -->
<div class="feature-course-section">
    <div class="container">
        <div class="feature-course-wrap">
            <div class="section-title section-title2">
                <h2>Our featured courses</h2>
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
                <a class="button button--lg button-p-s button-i--r" href="http://127.0.0.1:8000/courses">View all featured courses
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
            <h2>Recently added courses</h2>
        </div>
        <div class="row">
            @foreach ($latestCourses as $course)
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <x-frontend.course.simple-card :course="$course" />
                </div>
            @endforeach
        </div>
        <div class="footer-button text-center mt-3">
            <a class="button button--lg button-p-s button-i--r" href="{{ route('website.course') }}">Browse all Course
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
                <h2>Our featured instructor</h2>
            </div>
            <div class="section-title section-title2">
                <div class="feature-course-mid">
                    <a href="#">
                        <img src="http://127.0.0.1:8000/frontend/images/avatar.png" alt="user image" width="400px" height="400px">
                        <h5>
                            Mr. Instructor
                        </h5>
                    </a>
                    <div>
                        <div>
                            <svg width="18" class="align-self-center" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.34462 13.401L13.2849 15.8974C13.7886 16.2165 14.4139 15.7419 14.2644 15.154L13.126 10.6756C13.0939 10.5509 13.0977 10.4197 13.137 10.297C13.1762 10.1743 13.2492 10.0652 13.3477 9.98222L16.8811 7.04132C17.3453 6.6549 17.1057 5.88439 16.5092 5.84567L11.8949 5.5462C11.7706 5.53732 11.6514 5.49332 11.5511 5.41931C11.4509 5.34531 11.3737 5.24435 11.3286 5.12819L9.60765 0.794357C9.56087 0.671064 9.47769 0.564919 9.36915 0.490017C9.26062 0.415115 9.13187 0.375 9 0.375C8.86813 0.375 8.73938 0.415115 8.63085 0.490017C8.52232 0.564919 8.43914 0.671064 8.39236 0.794357L6.6714 5.12819C6.62631 5.24435 6.54914 5.34531 6.4489 5.41931C6.34865 5.49332 6.22944 5.53732 6.10515 5.5462L1.49078 5.84567C0.894294 5.88439 0.654664 6.6549 1.11894 7.04132L4.65232 9.98222C4.75079 10.0652 4.82383 10.1743 4.86305 10.297C4.90226 10.4197 4.90606 10.5509 4.874 10.6756L3.81824 14.8288C3.63889 15.5343 4.38929 16.1038 4.99369 15.7209L8.65539 13.401C8.75837 13.3354 8.87792 13.3006 9 13.3006C9.12208 13.3006 9.24163 13.3354 9.34462 13.401Z" fill="#FD8E1F"></path>
                            </svg>
                            <p>
                                0<span>(468.6k)</span>
                            </p>
                        </div>
                    </div>
                </div>

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
                <a class="button button--lg button-p-s button-i--r" href="http://127.0.0.1:8000/courses">View all featured courses
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
                <h2>Our top instructor</h2>
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
