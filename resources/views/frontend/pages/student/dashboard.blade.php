@extends('frontend.layouts.student')

@section('title', __('Student Dashboard'))

@section('student_content')
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="tabs01" role="tabpanel" aria-labelledby="tabs1">
        <div class="category-section mb-4">
            <div class="student-title">
                <h2>Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <a class="d-block" href="category.html">
                        <div class="category-content badge-color-1">
                            <div class="category-content-left">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M16 4C13.6266 4 11.3066 4.70379 9.33316 6.02236C7.35977 7.34094 5.8217 9.21509 4.91345 11.4078C4.0052 13.6005 3.76756 16.0133 4.23058 18.3411C4.6936 20.6689 5.83649 22.8071 7.51472 24.4853C9.19295 26.1635 11.3312 27.3064 13.6589 27.7694C15.9867 28.2324 18.3995 27.9948 20.5922 27.0866C22.7849 26.1783 24.6591 24.6402 25.9776 22.6668C27.2962 20.6935 28 18.3734 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62901 24.4853 7.51471C23.371 6.40041 22.0481 5.51649 20.5922 4.91344C19.1363 4.31038 17.5759 4 16 4ZM14 20V12L20 16L14 20Z"
                                        fill="#FF6636" />
                                    <path
                                        d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z"
                                        stroke="#FF6636" stroke-width="2" stroke-miterlimit="10" />
                                    <path d="M20 16L14 12V20L20 16Z" stroke="#FF6636" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="category-content-right">
                                <h4>957</h4>
                                <span>Enrolled Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <a class="d-block" href="category.html">
                        <div class="category-content badge-color-2">
                            <div class="category-content-left">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M5.5 5.5V24.5L7.5 26.5H26.5V5.5H5.5Z" fill="#564FFD" />
                                    <path
                                        d="M5.49994 17.9091V6.5C5.49994 6.23478 5.6053 5.98043 5.79283 5.79289C5.98037 5.60536 6.23472 5.5 6.49994 5.5H25.4999C25.7652 5.5 26.0195 5.60536 26.207 5.79289C26.3946 5.98043 26.4999 6.23478 26.4999 6.5V25.5C26.4999 25.7652 26.3946 26.0196 26.207 26.2071C26.0195 26.3946 25.7652 26.5 25.4999 26.5H16.9544"
                                        stroke="#564FFD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 19L8 27L4 23" stroke="#564FFD" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="category-content-right">
                                <h4>6</h4>
                                <span>Active Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <a class="d-block" href="category.html">
                        <div class="category-content badge-color-3">
                            <div class="category-content-left">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M7 7V13.887C7 18.8496 10.9693 22.963 15.9318 22.9997C17.1194 23.0088 18.297 22.7826 19.3968 22.3344C20.4966 21.8861 21.4968 21.2246 22.3398 20.388C23.1828 19.5514 23.8518 18.5563 24.3084 17.4599C24.7649 16.3635 25 15.1876 25 14V7C25 6.73478 24.8946 6.48043 24.7071 6.29289C24.5196 6.10536 24.2652 6 24 6H8C7.73478 6 7.48043 6.10536 7.29289 6.29289C7.10536 6.48043 7 6.73478 7 7Z"
                                        fill="#23BD33" />
                                    <path
                                        d="M7 7V13.887C7 18.8496 10.9693 22.963 15.9318 22.9997C17.1194 23.0088 18.297 22.7826 19.3968 22.3344C20.4966 21.8861 21.4968 21.2246 22.3398 20.388C23.1828 19.5514 23.8518 18.5563 24.3084 17.4599C24.7649 16.3635 25 15.1876 25 14V7C25 6.73478 24.8946 6.48043 24.7071 6.29289C24.5196 6.10536 24.2652 6 24 6H8C7.73478 6 7.48043 6.10536 7.29289 6.29289C7.10536 6.48043 7 6.73478 7 7Z"
                                        stroke="#23BD33" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 28H20" stroke="#23BD33" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 23V28" stroke="#23BD33" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M24.7769 16H25.9999C27.0608 16 28.0782 15.5786 28.8283 14.8284C29.5785 14.0783 29.9999 13.0609 29.9999 12V10C29.9999 9.73478 29.8945 9.48043 29.707 9.29289C29.5195 9.10536 29.2651 9 28.9999 9H24.9999"
                                        stroke="#23BD33" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7.24564 16H5.98425C4.92339 16 3.90597 15.5786 3.15583 14.8284C2.40568 14.0783 1.98425 13.0609 1.98425 12V10C1.98425 9.73478 2.08961 9.48043 2.27715 9.29289C2.46468 9.10536 2.71904 9 2.98425 9H6.98425"
                                        stroke="#23BD33" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="category-content-right">
                                <h4>951</h4>
                                <span>Completed Courses</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <a class="d-block" href="category.html">
                        <div class="category-content badge-color-4">
                            <div class="category-content-left">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2"
                                        d="M11 20C14.5899 20 17.5 17.0899 17.5 13.5C17.5 9.91015 14.5899 7 11 7C7.41015 7 4.5 9.91015 4.5 13.5C4.5 17.0899 7.41015 20 11 20Z"
                                        fill="#FD8E1F" />
                                    <path
                                        d="M11 20C14.5899 20 17.5 17.0899 17.5 13.5C17.5 9.91015 14.5899 7 11 7C7.41015 7 4.5 9.91015 4.5 13.5C4.5 17.0899 7.41015 20 11 20Z"
                                        stroke="#FD8E1F" stroke-width="2" stroke-miterlimit="10" />
                                    <path
                                        d="M19.4266 7.24166C20.3207 6.98977 21.2583 6.93239 22.1764 7.07338C23.0944 7.21437 23.9716 7.55046 24.7489 8.05901C25.5261 8.56756 26.1853 9.23677 26.6822 10.0216C27.179 10.8063 27.5019 11.6885 27.6291 12.6086C27.7563 13.5287 27.6848 14.4653 27.4195 15.3555C27.1543 16.2456 26.7013 17.0686 26.0912 17.7689C25.4811 18.4693 24.728 19.0307 23.8826 19.4155C23.0372 19.8003 22.1192 19.9994 21.1903 19.9995"
                                        stroke="#FD8E1F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M1.99951 24.6746C3.01468 23.2306 4.36238 22.052 5.92882 21.2384C7.49527 20.4248 9.23448 20.0001 10.9996 20C12.7648 19.9999 14.504 20.4246 16.0705 21.238C17.637 22.0515 18.9848 23.23 20.0001 24.6739"
                                        stroke="#FD8E1F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M21.1902 20C22.9555 19.9987 24.6951 20.4228 26.2617 21.2364C27.8284 22.05 29.1759 23.2291 30.1902 24.6739"
                                        stroke="#FD8E1F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="category-content-right">
                                <h4>241</h4>
                                <span>Course Instructors</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End category-section -->
        <div class="lecture-section section-padding-bottom">
            <div class="student-title">
                <h2>Let’s start learning, Kevin</h2>
            </div>
            <div class="lecture-slider owl-carousel">
                <div class="course-lecture-watched">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course4.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider1.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider2.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Copywriting - Become a Freelance Copywriter...</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. How to get started with
                            figma</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider3.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">2021 Complete Python Bootcamp From Zero to</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">9. Advanced CSS - Selector
                            Priority</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course4.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider1.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider2.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Copywriting - Become a Freelance Copywriter...</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. How to get started with
                            figma</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/slider3.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">2021 Complete Python Bootcamp From Zero to</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">9. Advanced CSS - Selector
                            Priority</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
            </div>
        </div>
        <!--End lecture-section -->
    </div>
    <div class="tab-pane fade" id="tabs02" role="tabpanel" aria-labelledby="tabs2">
        <div class="student-header-section">
            <div class="student-title mb-2">
                <h2>Courses (957)</h2>
            </div>
            <div class="student-header">
                <div class="student-search">
                    <label class="student-lebel">Search:</label>
                    <div class="form-searchbox">
                        <span class="icon">
                            <img src="assets/images/svg-icon/search.svg" alt="" />
                        </span>
                        <input type="text" placeholder="What do you want learn" />
                    </div>
                </div>
                <div class="student-header-dropdwon-wrap">
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Sort by:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="Latest">
                                <option>Latest</option>
                                <option>Latest</option>
                                <option>Latest</option>
                            </select>
                        </div>
                    </div>
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Status:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="All Courses">
                                <option>All Courses</option>
                                <option>All Courses</option>
                                <option>All Courses</option>
                            </select>
                        </div>
                    </div>
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Teacher:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="All Teachers">
                                <option>All Teachers</option>
                                <option>All Teachers</option>
                                <option>All Teachers</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End student-course-header-section -->

        <div class="lecture-section section-padding-bottom">
            <div class="course-student-column">
                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course4.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course11.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course12.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Copywriting - Become a Freelance Copywriter...</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. How to get started with
                            figma</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course13.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">2021 Complete Python Bootcamp From Zero to</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">9. Advanced CSS - Selector
                            Priority</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course1.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course2.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course4.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course3.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>

                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course5.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course6.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course7.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course8.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course9.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course10.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course11.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">The Complete 2021 Web Development</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">The Complete 2021 Web Development
                        </a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn">Watch Lecture</a>
                        <span class="percent-complete"> 61% Completed </span>
                    </div>
                    <div class="red-border"></div>
                </div>
                <div class="course-lecture-watched course-column4">
                    <a href="{{ route('website.course.details', '123') }}" class="course-lecture-img">
                        <img src="assets/images/course12.jpg" alt="" />
                    </a>
                    <div class="all-title">
                        <div class="title-link">Reiki Level I, II and Master/Teacher Program</div>
                        <a href="{{ route('website.course.details', '123') }}" class="title-link-no">1. Intorductions</a>
                    </div>
                    <div class="course-lecture-footer">
                        <a href="course-watch.html" class="lecture-card-btn lecture-card-btn-watched">Watch
                            Lecture</a>
                    </div>
                </div>
            </div>
            <div class="pag text-center mt-3">
                <div class="pag-arrow pag-arrow-left">
                    <a href="#">
                        <svg class="align-self-center" width="18" height="16" viewBox="0 0 18 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.25 8H0.75" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M7.5 1.25L0.75 8L7.5 14.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="pag-content">
                    <ul>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
                <div class="pag-arrow pag-arrow-right">
                    <a href="#">
                        <svg class="align-self-center" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!--End lecture-section -->
    </div>
    <div class="tab-pane fade" id="tabs03" role="tabpanel" aria-labelledby="tabs3">
        <div class="student-header-section">
            <div class="student-title">
                <h2>Instructors (241)</h2>
            </div>
            <div class="student-header">
                <div class="student-search">
                    <label class="student-lebel">Search:</label>
                    <div class="form-searchbox">
                        <span class="icon">
                            <img src="assets/images/svg-icon/search.svg" alt="" />
                        </span>
                        <input type="text" placeholder="What do you want learn" />
                    </div>
                </div>
                <div class="student-header-dropdwon-wrap">
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Sort by:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="Latest">
                                <option>Latest</option>
                                <option>Latest</option>
                                <option>Latest</option>
                            </select>
                        </div>
                    </div>
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Status:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="All Courses">
                                <option>All Courses</option>
                                <option>All Courses</option>
                                <option>All Courses</option>
                            </select>
                        </div>
                    </div>
                    <div class="student-header-dropdwon-item">
                        <label class="student-lebel">Teacher:</label>
                        <div class="select-box">
                            <select class="custom-select sources" title="All Teachers">
                                <option>All Teachers</option>
                                <option>All Teachers</option>
                                <option>All Teachers</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End student-course-header-section -->

        <div class="student-instructor-section section-padding-bottom">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team6.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team4.png" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team7.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team8.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team9.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team10.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team11.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team12.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team13.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team14.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team20.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team16.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team17.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team18.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team19.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="course-item-5">
                        <div class="course-item-5-card">
                            <a href="instructor-profile.html" class="course-item-5-card-img team-thumb-instructor"><img
                                    src="assets/images/team20.jpg" alt="" /></a>
                            <div class="course-item-data">
                                <h4>Wade Warren</h4>
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
                                <p class="course-item-5-card-footer-student">265.7K <span>students</span>
                                </p>
                            </div>
                            <div class="course-lecture-footer student-instructor">
                                <button class="lecture-card-btn lecture-card-btn-watched">Send
                                    message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pag text-center mt-3">
                <div class="pag-arrow pag-arrow-left">
                    <a href="#">
                        <svg class="align-self-center" width="18" height="16" viewBox="0 0 18 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.25 8H0.75" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M7.5 1.25L0.75 8L7.5 14.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="pag-content">
                    <ul>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
                <div class="pag-arrow pag-arrow-right">
                    <a href="#">
                        <svg class="align-self-center" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tabs04" role="tabpanel" aria-labelledby="tabs4">
        <div class="message container container-fluid">
            <div class="message-sidebar">
                <div class="message-sidebar__search-box">
                    <div class="top d-flex align-items-center justify-content-between">

                        <h2 class="message-sidebar__title">Chat</h2>

                        <button class="compose-modal button button-s-s " data-bs-toggle="modal"
                            data-bs-target="#composeModal">
                            <span class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 8H13.5" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2.5V13.5" stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                            Compose
                        </button>
                    </div>
                    <div class="bottom">
                        <form action="#" class="form">
                            <div class="form-searchbox">
                                <span class="icon">
                                    <img src="assets/images/svg-icon/search.svg" alt="search-icon">
                                </span>
                                <input type="text" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="message-sidebar__users">
                    <div class="message-sidebar__users-item active">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                                <span class="user-active"></span>
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">just now</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                    <div class="message-sidebar__users-item">
                        <div class="user">
                            <div class="user__img">
                                <img src="assets/images/users/user-lg-01.png" alt="user-img">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">jane Cooper</h6>
                                <p class="user-last-message">Yeah sure, tell me Zafor</p>
                            </div>
                        </div>
                        <div class="message-info">
                            <span class="message-info__date">4:25 PM</span>
                            <span class="message-info--unread"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="message-inbox">
                <div class="message-header">
                    <div class="user">
                        <div class="user__image">
                            <img src="assets/images/users/user-01.png" alt="Avatar">
                            <span class="user-active"></span>
                        </div>
                        <div class="user__info">
                            <h6><a href="#">Jane Cooper</a></h6>
                            <p>Active Now</p>
                        </div>
                    </div>
                    <div class="message-header-right">
                        <!-- Option Content -->
                        <button class="options" id="dropdownMenuButton5" data-bs-toggle="dropdown">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 13.525C12.8422 13.525 13.525 12.8422 13.525 12C13.525 11.1578 12.8422 10.475 12 10.475C11.1578 10.475 10.475 11.1578 10.475 12C10.475 12.8422 11.1578 13.525 12 13.525Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.8" />
                                    <path
                                        d="M19 13.525C19.8422 13.525 20.525 12.8422 20.525 12C20.525 11.1578 19.8422 10.475 19 10.475C18.1578 10.475 17.475 11.1578 17.475 12C17.475 12.8422 18.1578 13.525 19 13.525Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.8" />
                                    <path
                                        d="M5 13.525C5.84223 13.525 6.525 12.8422 6.525 12C6.525 11.1578 5.84223 10.475 5 10.475C4.15777 10.475 3.475 11.1578 3.475 12C3.475 12.8422 4.15777 13.525 5 13.525Z"
                                        fill="currentColor" stroke="currentColor" stroke-width="0.8" />
                                </svg>
                            </span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">View Details</a></li>
                            <li><a class="dropdown-item" href="#">Edit Course</a></li>
                            <li><a class="dropdown-item" href="#">Delete Course</a></li>
                        </ul>
                    </div>
                </div>
                <div class="message-body">

                    <div class="message-contents">
                        <h6 class="message-contents__date">Today</h6>
                        <div class="message-contents__users">


                            <!-- Send Primary Message  -->
                            <div class="user user-active">
                                <div class="user-wrapper">
                                    <div class="user-img">
                                        <img src="assets/images/users/user-01.png" alt="user-img">
                                    </div>
                                    <span class="time">2:53 PM</span>
                                </div>
                                <div class="user-sendcontent">

                                    <div class="user-sendcontent__message">
                                        <p> Hello, Kevin. My name is Jodon. I saw you that you create new
                                            assignment for your school projects.</p>

                                    </div>
                                </div>
                            </div>


                            <!-- Send Primary Message  -->
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <span class="time">2:53 PM</span>
                                    <div class="user-sendcontent__message">
                                        <p> Hello, Good Evening. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <div class="user-sendcontent__message">
                                        <p> I’m Zafor </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Send Primary Message  -->
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <div class="user-sendcontent__message">
                                        <p> I only have a small doubt about your lecture. can you give me
                                            some time for this? </p>
                                    </div>

                                </div>
                            </div>

                            <!-- Send Primary Message  -->
                            <div class="user user-active">
                                <div class="user-wrapper">
                                    <div class="user-img">
                                        <img src="assets/images/users/user-01.png" alt="user-img">
                                    </div>
                                    <span class="time">2:53 PM</span>
                                </div>
                                <div class="user-sendcontent">

                                    <div class="user-sendcontent__message">
                                        <p>Yeah sure, tell me zafor </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Send Primary Message  -->
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <span class="time">2:53 PM</span>
                                    <div class="user-sendcontent__message">
                                        <p> Hello, Good Evening. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <div class="user-sendcontent__message">
                                        <p> I’m Zafor </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Send Primary Message  -->
                            <div class="user user-current">
                                <div class="user-sendcontent">
                                    <div class="user-sendcontent__message">
                                        <p> I only have a small doubt about your lecture. can you give me
                                            some time for this? </p>
                                    </div>

                                </div>
                            </div>

                            <!-- Send Primary Message  -->
                            <div class="user user-active">
                                <div class="user-wrapper">
                                    <div class="user-img">
                                        <img src="assets/images/users/user-01.png" alt="user-img">
                                    </div>
                                    <span class="time">2:53 PM</span>
                                </div>
                                <div class="user-sendcontent">

                                    <div class="user-sendcontent__message">
                                        <p>Yeah sure, tell me zafor </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="message-body-search">
                        <form action="#">
                            <div class="input-field message-body-search-field">
                                <div class="input-field-wrapper">
                                    <span class="icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 20.2518H4.5C4.30109 20.2518 4.11032 20.1728 3.96967 20.0322C3.82902 19.8915 3.75 19.7008 3.75 19.5018V15.3125C3.75 15.214 3.7694 15.1165 3.80709 15.0255C3.84478 14.9345 3.90003 14.8518 3.96967 14.7822L15.2197 3.53217C15.3603 3.39152 15.5511 3.3125 15.75 3.3125C15.9489 3.3125 16.1397 3.39152 16.2803 3.53217L20.4697 7.72151C20.6103 7.86216 20.6893 8.05293 20.6893 8.25184C20.6893 8.45075 20.6103 8.64152 20.4697 8.78217L9 20.2518Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.75 6L18 11.25" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20.2492 20.2492H8.99916L3.79688 15.0469" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </span>
                                    <textarea placeholder="Type your messgae"></textarea>
                                </div>
                                <button
                                    class="message-body-search-btn button button--md button-i--r d-flex align-items-center">
                                    send
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20.5811 11.3465L4.74536 2.47843C4.61214 2.40383 4.45932 2.37166 4.30732 2.38624C4.15533 2.40081 4.01141 2.46143 3.89479 2.55999C3.77817 2.65855 3.69441 2.79035 3.65471 2.93779C3.615 3.08523 3.62125 3.24127 3.6726 3.38506L6.65957 11.7486C6.71783 11.9117 6.71783 12.09 6.65957 12.2531L3.6726 20.6166C3.62124 20.7604 3.615 20.9165 3.65471 21.0639C3.69441 21.2113 3.77817 21.3431 3.89479 21.4417C4.01141 21.5403 4.15533 21.6009 4.30732 21.6155C4.45932 21.63 4.61214 21.5979 4.74536 21.5233L20.5811 12.6552C20.6975 12.5901 20.7943 12.4951 20.8617 12.3801C20.9291 12.2651 20.9647 12.1342 20.9647 12.0008C20.9647 11.8675 20.9291 11.7366 20.8617 11.6216C20.7943 11.5066 20.6975 11.4116 20.5811 11.3465Z"
                                                fill="white" />
                                            <path d="M6.75 12H12.75" stroke="#FF6636" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                    </span>

                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End student-message-section -->
    </div>
    <div class="tab-pane fade" id="tabs05" role="tabpanel" aria-labelledby="tabs5">
        <div class="student-title">
            <h2>wishist</h2>
        </div>
        <div class="student-wishist-section section-padding-bottom">
            <div class="wishlist-body-text">
                <div class="wishlist-body-bottom">
                    <div class="student-wishist-header">
                        <p class="one">Course</p>
                        <p class="two">Prices</p>
                        <p class="three">Action</p>
                    </div>
                    <div class="faq-review-wrap">
                        <div class="faq-review-item">
                            <div class="faq-review-item-content">
                                <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"> <img
                                        src="assets/images/faq-thumb1.png" alt="" /></a>
                                <div class="faq-review-data">
                                    <div class="faq-review-data-inner">
                                        <div class="faq-review-data-top">
                                            <h5>
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                        fill="#FD8E1F" />
                                                </svg>
                                                4.7 <span> (451,444 Review)</span>
                                            </h5>
                                            <a href="{{ route('website.course.details', '123') }}">The Python Mega Course: Build 10
                                                Real World Applications</a>
                                        </div>
                                        <div class="faq-review-data-bottom">
                                            <p>Course by:<span>Marvin McKinney</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount">$13.99 <span>$49.00</span></div>
                            <div class="all-btn">
                                <div class="wishlist-buy wishlist-btn">
                                    <a href="#"> Buy Now</a>
                                </div>
                                <div class="wishlist-add wishlist-btn">
                                    <a href="#"> Add to Cart</a>
                                </div>
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 20.25C12 20.25 2.625 15 2.625 8.625C2.62519 7.49825 3.01561 6.40634 3.72989 5.53492C4.44416 4.6635 5.4382 4.06635 6.54299 3.845C7.64778 3.62366 8.79514 3.79178 9.78999 4.32078C10.7848 4.84978 11.5658 5.707 12 6.74671L12 6.74672C12.4342 5.70701 13.2152 4.84978 14.21 4.32078C15.2049 3.79178 16.3522 3.62366 17.457 3.845C18.5618 4.06635 19.5558 4.66349 20.2701 5.53492C20.9844 6.40634 21.3748 7.49825 21.375 8.625C21.375 15 12 20.25 12 20.25Z"
                                            fill="#FF6636" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="faq-review-item">
                            <div class="faq-review-item-content">
                                <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"> <img
                                        src="assets/images/team2.png" alt="" /></a>
                                <div class="faq-review-data">
                                    <div class="faq-review-data-inner">
                                        <div class="faq-review-data-top">
                                            <h5>
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                        fill="#FD8E1F" />
                                                </svg>
                                                4.7 <span> (451,444 Review)</span>
                                            </h5>
                                            <a href="{{ route('website.course.details', '123') }}">The Python Mega Course: Build 10
                                                Real World Applications</a>
                                        </div>
                                        <div class="faq-review-data-bottom">
                                            <p>Course by:<span>Marvin McKinney</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount">
                                $13.99
                            </div>
                            <div class="all-btn">
                                <div class="wishlist-buy wishlist-btn">
                                    <a href="#"> Buy Now</a>
                                </div>
                                <div class="wishlist-add wishlist-btn">
                                    <a href="#"> Add to Cart</a>
                                </div>
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 20.25C12 20.25 2.625 15 2.625 8.625C2.62519 7.49825 3.01561 6.40634 3.72989 5.53492C4.44416 4.6635 5.4382 4.06635 6.54299 3.845C7.64778 3.62366 8.79514 3.79178 9.78999 4.32078C10.7848 4.84978 11.5658 5.707 12 6.74671L12 6.74672C12.4342 5.70701 13.2152 4.84978 14.21 4.32078C15.2049 3.79178 16.3522 3.62366 17.457 3.845C18.5618 4.06635 19.5558 4.66349 20.2701 5.53492C20.9844 6.40634 21.3748 7.49825 21.375 8.625C21.375 15 12 20.25 12 20.25Z"
                                            fill="#FF6636" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="faq-review-item">
                            <div class="faq-review-item-content">
                                <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"> <img
                                        src="assets/images/team1.png" alt="" /></a>
                                <div class="faq-review-data">
                                    <div class="faq-review-data-inner">
                                        <div class="faq-review-data-top">
                                            <h5>
                                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                        fill="#FD8E1F" />
                                                </svg>
                                                4.7 <span> (451,444 Review)</span>
                                            </h5>
                                            <a href="{{ route('website.course.details', '123') }}">The Python Mega Course: Build 10
                                                Real World Applications</a>
                                        </div>
                                        <div class="faq-review-data-bottom">
                                            <p>Course by:<span>Marvin McKinney</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount">
                                $13.99
                            </div>
                            <div class="all-btn">
                                <div class="wishlist-buy wishlist-btn">
                                    <a href="#"> Buy Now</a>
                                </div>
                                <div class="wishlist-add wishlist-btn">
                                    <a href="#"> Add to Cart</a>
                                </div>
                                <button>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 20.25C12 20.25 2.625 15 2.625 8.625C2.62519 7.49825 3.01561 6.40634 3.72989 5.53492C4.44416 4.6635 5.4382 4.06635 6.54299 3.845C7.64778 3.62366 8.79514 3.79178 9.78999 4.32078C10.7848 4.84978 11.5658 5.707 12 6.74671L12 6.74672C12.4342 5.70701 13.2152 4.84978 14.21 4.32078C15.2049 3.79178 16.3522 3.62366 17.457 3.845C18.5618 4.06635 19.5558 4.66349 20.2701 5.53492C20.9844 6.40634 21.3748 7.49825 21.375 8.625C21.375 15 12 20.25 12 20.25Z"
                                            fill="#FF6636" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End student-message-section -->
    </div>
    <div class="tab-pane fade" id="tabs06" role="tabpanel" aria-labelledby="tabs6">
        <div class="student-title">
            <h2>Purchase History</h2>
        </div>
        <div class="student-purchase-history-section section-padding-bottom">
            <div class="accordion-wrap-faq" id="faq_init2">
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            1st Septembar, 2021 at 11:30 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2 open">
                    <div class="link">
                        <div class="accordion-header-content">
                            1st Septembar, 2021 at 11:30 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text" style="display: block;">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            31st August, 2021 at 11:30 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            24th August, 2021 at 6:34 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            1st Septembar, 2021 at 8:47 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            1st Septembar, 2021 at 11:30 PM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion__list2">
                    <div class="link">
                        <div class="accordion-header-content">
                            17th July, 2021 at 10:51 AM
                            <ul>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                            stroke="#564FFD" stroke-width="1.3" stroke-miterlimit="10">
                                        </path>
                                        <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    3 Courses
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M10 16.25V18.125" stroke="#FF6636" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                            stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    $75.00 USD
                                </li>
                                <li>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                            stroke="#23BD33" stroke-width="1.3" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M13.1245 13.125H15.6245" stroke="#23BD33" stroke-width="1.3"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9.37451 13.125H10.6245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M1.87451 7.56659H18.1245" stroke="#23BD33" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Credit Card
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-svg">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3.125V16.875" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M4.375 11.25L10 16.875L15.625 11.25" stroke="#1D2026" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="accordion-body-text">
                        <div class="accrodion-body-bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7">
                                    <div class="faq-review-wrap">
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb1.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Learn Ethical Hacking From Scratch</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Marvin McKinney</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                        <div class="faq-review-item">
                                            <a class="faq-review-thumb" href="{{ route('website.course.details', '123') }}"><img
                                                    src="assets/images/faq-thumb2.png" alt="" /></a>
                                            <div class="faq-review-data">
                                                <div class="faq-review-data-top">
                                                    <h5>
                                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                                                fill="#FD8E1F"></path>
                                                        </svg>
                                                        4.7 <span> (451,444 Review)</span>
                                                    </h5>
                                                    <a href="{{ route('website.course.details', '123') }}">
                                                        <h4>Mega Digital Marketing Course A-Z: 12 Courses in
                                                            1 + Updates</h4>
                                                    </a>
                                                </div>
                                                <div class="faq-review-data-bottom">
                                                    <p>Course by:<span>Esther Howard</span></p>
                                                </div>
                                            </div>
                                            <div class="amount">
                                                $13.99
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 d-flex">
                                    <div class="faq-body-right">
                                        <div class="accrdion-body-text-header">
                                            <div class="accordion-header-content">
                                                1st Septembar, 2021 at 11:30 PM
                                                <ul>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                                                                stroke="#564FFD" stroke-width="1.3"
                                                                stroke-miterlimit="10"></path>
                                                            <path d="M12.5 10L8.75 7.5V12.5L12.5 10Z" stroke="#564FFD"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        3 Courses
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 1.875V3.75" stroke="#FF6636" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M10 16.25V18.125" stroke="#FF6636"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path
                                                                d="M14.375 6.875C14.375 6.46462 14.2942 6.05826 14.1371 5.67911C13.9801 5.29997 13.7499 4.95547 13.4597 4.66529C13.1695 4.37511 12.825 4.14492 12.4459 3.98788C12.0667 3.83083 11.6604 3.75 11.25 3.75H8.4375C7.6087 3.75 6.81384 4.07924 6.22779 4.66529C5.64174 5.25134 5.3125 6.0462 5.3125 6.875C5.3125 7.7038 5.64174 8.49866 6.22779 9.08471C6.81384 9.67076 7.6087 10 8.4375 10H11.875C12.7038 10 13.4987 10.3292 14.0847 10.9153C14.6708 11.5013 15 12.2962 15 13.125C15 13.9538 14.6708 14.7487 14.0847 15.3347C13.4987 15.9208 12.7038 16.25 11.875 16.25H8.125C7.2962 16.25 6.50134 15.9208 5.91529 15.3347C5.32924 14.7487 5 13.9538 5 13.125"
                                                                stroke="#FF6636" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        $75.00 USD
                                                    </li>
                                                    <li>
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 4.375H2.5C2.15482 4.375 1.875 4.65482 1.875 5V15C1.875 15.3452 2.15482 15.625 2.5 15.625H17.5C17.8452 15.625 18.125 15.3452 18.125 15V5C18.125 4.65482 17.8452 4.375 17.5 4.375Z"
                                                                stroke="#23BD33" stroke-width="1.3"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M13.1245 13.125H15.6245" stroke="#23BD33"
                                                                stroke-width="1.3" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M9.37451 13.125H10.6245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                            <path d="M1.87451 7.56659H18.1245" stroke="#23BD33"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                        Credit Card
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="payment-info">
                                                <ul>
                                                    <li>Kevin Gilbert</li>
                                                    <li><span>4142 **** **** ****</span></li>
                                                    <li>04/24</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="emoji-content">
                Yay! You have seen all your purchase history.
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_822:82864)">
                        <path
                            d="M14.3247 23.6743C20.7728 23.495 25.8546 18.1224 25.6753 11.6743C25.496 5.22624 20.1234 0.144406 13.6753 0.323734C7.22721 0.503063 2.14537 5.87564 2.3247 12.3237C2.50403 18.7718 7.87661 23.8537 14.3247 23.6743Z"
                            fill="url(#paint0_radial_822:82864)" />
                        <path
                            d="M14.3247 23.6743C20.7728 23.495 25.8546 18.1224 25.6753 11.6743C25.496 5.22624 20.1234 0.144406 13.6753 0.323734C7.22721 0.503063 2.14537 5.87564 2.3247 12.3237C2.50403 18.7718 7.87661 23.8537 14.3247 23.6743Z"
                            fill="url(#paint1_linear_822:82864)" />
                        <path
                            d="M25.0427 11.6919C25.2123 17.7907 20.4058 22.8722 14.3071 23.0418C8.20838 23.2114 3.12688 18.4049 2.95726 12.3061C2.78765 6.20741 7.59415 1.12591 13.6929 0.956294C19.7916 0.786681 24.8731 5.59318 25.0427 11.6919Z"
                            stroke="#D67504" stroke-opacity="0.27" stroke-width="1.26563" />
                    </g>
                    <path
                        d="M16.039 7.17474C15.2915 7.42302 14.3685 7.46351 14.0015 7.47161C13.6345 7.46351 12.7061 7.42302 11.9613 7.17474C10.5418 6.70247 8.25597 6.40292 6.51261 6.4434C5.22263 6.47579 3.88678 6.64851 3.05558 6.81583C2.68586 6.89139 2.45107 7.25301 2.53743 7.62003L2.62649 8.00054C2.67776 8.22184 2.85048 8.38646 3.06637 8.46203C3.17702 8.50251 3.28497 8.57538 3.33355 8.70491C3.48197 9.10702 4.29158 11.49 4.72877 12.3724C5.0877 13.093 6.05923 13.711 8.31804 13.7218C11.5322 13.7353 12.6441 11.6087 13.1568 10.2378C13.2108 10.0947 13.2917 9.81946 13.3646 9.55229C13.4699 9.17178 13.7019 8.79666 13.8045 8.74268C13.8666 8.713 13.9367 8.68602 14.0069 8.68602C14.0798 8.68602 14.1499 8.713 14.212 8.74268C14.3145 8.79666 14.5412 9.17178 14.6465 9.55229C14.7194 9.81946 14.8003 10.092 14.8543 10.2378C15.3643 11.6114 16.4789 13.7353 19.6904 13.7218C21.9492 13.7137 22.9207 13.0957 23.2796 12.3724C23.7168 11.4927 24.5237 9.10702 24.6748 8.70491C24.7234 8.57538 24.8287 8.50251 24.9393 8.46203C25.1552 8.38646 25.3252 8.22184 25.3792 8.00054L25.4683 7.61733C25.5519 7.25031 25.3171 6.88869 24.9501 6.81312C24.1189 6.64581 22.7831 6.47309 21.4931 6.4407C19.7416 6.40292 17.4585 6.70247 16.039 7.17474Z"
                        fill="#261F11" />
                    <path
                        d="M15.507 9.30377C15.5745 10.8609 17.0911 12.356 18.5079 12.6987C20.594 13.2034 22.162 12.7527 23.0526 10.8366C23.3197 10.2591 23.8945 8.99881 23.8568 8.32684C23.792 7.1583 22.3104 7.3634 21.3632 7.34181C21.2606 7.33911 15.4125 7.17449 15.507 9.30377Z"
                        fill="#574A2D" />
                    <path
                        d="M12.5508 9.30377C12.4833 10.8609 10.9666 12.356 9.54981 12.6987C7.46372 13.2034 5.89578 12.7527 5.00521 10.8366C4.73804 10.2591 4.16321 8.99881 4.20099 8.32684C4.26576 7.1583 5.74735 7.3634 6.69459 7.34181C6.79444 7.33911 12.6452 7.17449 12.5508 9.30377Z"
                        fill="#574A2D" />
                    <g filter="url(#filter1_di_822:82864)">
                        <path
                            d="M16.4924 17.9777C16.1821 17.9777 15.8663 17.9561 15.5452 17.9076C15.2321 17.8617 15.0189 17.5702 15.0648 17.2572C15.1107 16.9468 15.3994 16.7309 15.7152 16.7768C17.5233 17.0467 19.129 16.3639 19.8064 15.0334C19.9494 14.7528 20.2949 14.6421 20.5755 14.7852C20.8562 14.9282 20.9696 15.2736 20.8265 15.5543C20.0466 17.0818 18.4031 17.9777 16.4924 17.9777Z"
                            fill="#823423" />
                    </g>
                    <defs>
                        <filter id="filter0_d_822:82864" x="0.615131" y="0.318359" width="26.7697" height="26.7717"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="1.70518" />
                            <feGaussianBlur stdDeviation="0.852591" />
                            <feColorMatrix type="matrix"
                                values="0 0 0 0 0.9 0 0 0 0 0.6165 0 0 0 0 0.19125 0 0 0 0.33 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_822:82864" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_822:82864"
                                result="shape" />
                        </filter>
                        <filter id="filter1_di_822:82864" x="14.6323" y="14.7227" width="6.68267" height="4.10845"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="0.426295" />
                            <feGaussianBlur stdDeviation="0.213148" />
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.35 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_822:82864" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_822:82864"
                                result="shape" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="0.426295" />
                            <feGaussianBlur stdDeviation="0.426295" />
                            <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="shape" result="effect2_innerShadow_822:82864" />
                        </filter>
                        <radialGradient id="paint0_radial_822:82864" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(13.6753 0.323734) rotate(88.407) scale(23.3596)">
                            <stop stop-color="#EED919" />
                            <stop offset="1" stop-color="#F1BE08" />
                        </radialGradient>
                        <linearGradient id="paint1_linear_822:82864" x1="13.6753" y1="0.323734" x2="14.3247"
                            y2="23.6743" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.52" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
            </p>
        </div>
        <!--End student-purchase-history-section -->
    </div>
    <div class="tab-pane fade" id="tabs07" role="tabpanel" aria-labelledby="tabs7">
        <div class="student-title">
            <h2>Account settings</h2>
        </div>
        <div class="student-account-setting">
            <div class="row">
                <div class="col-lg-4">
                    <div class="wrapper">
                        <button class="no-image" id="img-result">Upload Image</button>
                        <p>Image size should be under 1MB and image ration needs to be 1:1</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="default-input-field">
                                    <label>Full name</label>
                                    <input type="text" placeholder="First name" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-input-field">
                                    <label>Last name</label>
                                    <input type="text" placeholder="Last name" />
                                </div>
                            </div>
                        </div>
                        <div class="default-input-field">
                            <label>Username</label>
                            <input type="text" placeholder="Enter your username" />
                        </div>
                        <div class="default-input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Email address" />
                        </div>
                        <div class="default-input-field">
                            <label>Tittle</label>
                            <input type="text" placeholder="Your tittle, proffesion or small biography" />
                            <span class="default-input-field-content">0/50</span>
                        </div>
                        <button class="button button--md">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
        <!--End student-account-setting -->
        <div class="student-password-section section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="change-password-wrap">
                            <form action="#">
                                <div class="student-title">
                                    <h2>Change password</h2>
                                </div>
                                <div class="default-input-field mb-3">
                                    <label>Current Password</label>
                                    <input type="password" placeholder="Password" />
                                    <span class="default-input-field-content">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 4.24927C4.5 4.24927 1.5 12.0001 1.5 12.0001C1.5 12.0001 4.5 19.7493 12 19.7493C19.5 19.7493 22.5 12.0001 22.5 12.0001C22.5 12.0001 19.5 4.24927 12 4.24927Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 15.7501C14.0711 15.7501 15.75 14.0711 15.75 12.0001C15.75 9.92899 14.0711 8.25006 12 8.25006C9.92893 8.25006 8.25 9.92899 8.25 12.0001C8.25 14.0711 9.92893 15.7501 12 15.7501Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="default-input-field mb-3">
                                    <label>New Password</label>
                                    <input type="password" placeholder="Password" />
                                    <span class="default-input-field-content">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 4.24927C4.5 4.24927 1.5 12.0001 1.5 12.0001C1.5 12.0001 4.5 19.7493 12 19.7493C19.5 19.7493 22.5 12.0001 22.5 12.0001C22.5 12.0001 19.5 4.24927 12 4.24927Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 15.7501C14.0711 15.7501 15.75 14.0711 15.75 12.0001C15.75 9.92899 14.0711 8.25006 12 8.25006C9.92893 8.25006 8.25 9.92899 8.25 12.0001C8.25 14.0711 9.92893 15.7501 12 15.7501Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="default-input-field mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" placeholder="Confirm new password" />
                                    <span class="default-input-field-content">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 4.24927C4.5 4.24927 1.5 12.0001 1.5 12.0001C1.5 12.0001 4.5 19.7493 12 19.7493C19.5 19.7493 22.5 12.0001 22.5 12.0001C22.5 12.0001 19.5 4.24927 12 4.24927Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M12 15.7501C14.0711 15.7501 15.75 14.0711 15.75 12.0001C15.75 9.92899 14.0711 8.25006 12 8.25006C9.92893 8.25006 8.25 9.92899 8.25 12.0001C8.25 14.0711 9.92893 15.7501 12 15.7501Z"
                                                stroke="#4E5566" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                                <button class="button button--md">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End student-password-section -->
    </div>
</div>
@endsection
