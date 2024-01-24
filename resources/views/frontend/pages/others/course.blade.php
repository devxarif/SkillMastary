@extends('frontend.layouts.app')

@section('title', __('Courses'))

@section('content')

<div class="course-section section-padding" id="course-list">
    {{-- {{ request()->getRequestUri() }} --}}
    <input type="text" id="current_url" value="{{ request()->getRequestUri() }}" v-model="current_url">
    <button @click="updateUrl" type="button">Update Url</button>
    <div class="container">
        <div class="top-action-header-section">
            <div class="top-action-header">
                <div class="top-action-header-left">
                    <button class="actions-filter" id="filter">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 11.25L12 20.25" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 3.75L12 8.25" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M18.75 18.75L18.7501 20.25" stroke="#1D2026" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18.7501 3.75L18.75 15.75" stroke="#1D2026" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 15.75H16.5" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M5.25007 15.75L5.25 20.25" stroke="#1D2026" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5.25 3.75L5.25007 12.75" stroke="#1D2026" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.00024 12.75H7.50024" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14.25 8.25H9.75" stroke="#1D2026" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Filter
                        <span>3</span>
                    </button>
                    <form action="#" class="form">
                        <!-- Search Field  -->
                        <div class="form-searchbox">
                            <span class="icon">
                                <img src="{{ asset('frontend') }}/images/svg-icon/search.svg" alt="" />
                            </span>
                            <input v-model="search" type="text" placeholder="What do you want learn" />
                        </div>
                    </form>
                </div>
                <div class="top-action-header-right">
                    <div class="sort-by">Sort by:</div>
                    <div class="select-box">
                        <select class="custom-select sources" title="Trending">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="bottom-action-header">
                <div class="suggetions">
                    <p>Suggestion:</p>
                    <ul>
                        <li><a href="#">user interface</a></li>
                        <li><a href="#">user experience</a></li>
                        <li><a href="#">web design</a></li>
                        <li><a href="#">interface</a></li>
                        <li><a href="#">app</a></li>
                    </ul>
                </div>
                <div class="search-result">
                    <p><span>3,145,684</span> results find for “ui/ux design”</p>
                </div>
            </div>
        </div>
        <div class="row shop-content">
            <div class="col-xl-3">
                <div class="course-sidebar-wrap shop-content">
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne01">
                                    <button class="accordion-button header-btn" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne01" aria-expanded="true"
                                        aria-controls="collapseOne01">
                                        Category
                                    </button>
                                </h2>
                                <div id="collapseOne01" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne01" data-bs-parent="#accordionExample">
                                    <div class="accordion-body body-top">
                                        <div class="accordion" >
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne12">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne12"
                                                        aria-expanded="true" aria-controls="collapseOne12">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20.25 6.75H3.75C3.33579 6.75 3 7.08579 3 7.5V19.5C3 19.9142 3.33579 20.25 3.75 20.25H20.25C20.6642 20.25 21 19.9142 21 19.5V7.5C21 7.08579 20.6642 6.75 20.25 6.75Z"
                                                                stroke="#A1A5B3" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path
                                                                d="M15.75 6.75V5.25C15.75 4.85218 15.592 4.47064 15.3107 4.18934C15.0294 3.90804 14.6478 3.75 14.25 3.75H9.75C9.35218 3.75 8.97064 3.90804 8.68934 4.18934C8.40804 4.47064 8.25 4.85218 8.25 5.25V6.75"
                                                                stroke="#A1A5B3" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M12 10.875V16.125" stroke="#A1A5B3"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                            <path d="M14.625 13.5H9.375" stroke="#A1A5B3"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        Health & Fitness
                                                    </button>
                                                </h2>
                                                <div id="collapseOne12" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne12" data-bs-parent="#accordionExample3">
                                                    <div class="accordion-body">
                                                        <form action="#">
                                                            <div class="check-field-wrap">
                                                                <div class="form-group">
                                                                    <input type="checkbox" id="100" />
                                                                    <label for="100">Web development
                                                                        <span>574</span></label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="checkbox" id="99" />
                                                                    <label for="99">Data Science
                                                                        <span>568</span></label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-for="(category, index) in categories" :key="index" class="accordion-item" id="accordionExample3">
                                                <h2 class="accordion-header" id="headingOne1">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                                        aria-expanded="true" aria-controls="collapseOne1">
                                                        <img width="24" height="24" :src="category.image_url" alt="img" class="tw-mr-1">
                                                        @{{ category?.name }}
                                                    </button>
                                                </h2>
                                                <div v-if="category.subcategories && category.subcategories.length" id="collapseOne1" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne1" data-bs-parent="#accordionExample2">
                                                    <div class="accordion-body">
                                                        <form action="#">
                                                            <div class="check-field-wrap">
                                                                <div v-for="(subcategory, index) in category.subcategories" :key="index" class="form-group">
                                                                    <input type="checkbox" id="1" />
                                                                    <label for="1">@{{ subcategory?.name }} <span>568</span></label>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample3">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne02">
                                    <button class="accordion-button header-btn collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne02" aria-expanded="true"
                                        aria-controls="collapseOne02">
                                        Tools
                                    </button>
                                </h2>
                                <div id="collapseOne02" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne02" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body border_top">
                                        <form action="#">
                                            <div class="check-field-wrap">
                                                <div class="form-group">
                                                    <input type="checkbox" id="51" />
                                                    <label for="51">HTML 5 <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="52" />
                                                    <label for="52">CSS 3 <span>1345</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="53" />
                                                    <label for="53">React <span>317</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="54" />
                                                    <label for="54">Webflow <span>574</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="55" />
                                                    <label for="55">Node.js<span>558 </span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="56" />
                                                    <label for="56">Laravel<span>558 </span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="57" />
                                                    <label for="57">Saas<span>558 </span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="58" />
                                                    <label for="58">Wordpress<span>558 </span></label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample4">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne03">
                                    <button class="accordion-button header-btn collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne03" aria-expanded="true"
                                        aria-controls="collapseOne03">
                                        Rating
                                    </button>
                                </h2>
                                <div id="collapseOne03" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne03" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body border_top">
                                        <form action="#">
                                            <div class="check-field-wrap">
                                                <div class="form-group">
                                                    <input type="checkbox" id="59" />
                                                    <label for="59">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.27569 11.9208L11.4279 13.9179C11.8308 14.1732 12.3311 13.7935 12.2115 13.3232L11.3008 9.74052C11.2752 9.64073 11.2782 9.53573 11.3096 9.4376C11.3409 9.33946 11.3994 9.25218 11.4781 9.18577L14.3049 6.83306C14.6763 6.52392 14.4846 5.90751 14.0074 5.87654L10.3159 5.63696C10.2165 5.62986 10.1211 5.59465 10.0409 5.53545C9.96069 5.47625 9.89896 5.39548 9.86289 5.30255L8.48612 1.83549C8.44869 1.73685 8.38215 1.65194 8.29532 1.59201C8.2085 1.53209 8.1055 1.5 8 1.5C7.89451 1.5 7.79151 1.53209 7.70468 1.59201C7.61786 1.65194 7.55131 1.73685 7.51389 1.83549L6.13712 5.30255C6.10104 5.39548 6.03932 5.47625 5.95912 5.53545C5.87892 5.59465 5.78355 5.62986 5.68412 5.63696L1.99263 5.87654C1.51544 5.90751 1.32373 6.52392 1.69515 6.83306L4.52186 9.18577C4.60063 9.25218 4.65907 9.33946 4.69044 9.4376C4.72181 9.53573 4.72485 9.64073 4.6992 9.74052L3.85459 13.063C3.71111 13.6274 4.31143 14.083 4.79495 13.7767L7.72431 11.9208C7.8067 11.8683 7.90234 11.8405 8 11.8405C8.09767 11.8405 8.19331 11.8683 8.27569 11.9208Z"
                                                                fill="#FD8E1F" />
                                                        </svg>
                                                        5 Star <span>568</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="60" />
                                                    <label for="60">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.27569 11.9208L11.4279 13.9179C11.8308 14.1732 12.3311 13.7935 12.2115 13.3232L11.3008 9.74052C11.2752 9.64073 11.2782 9.53573 11.3096 9.4376C11.3409 9.33946 11.3994 9.25218 11.4781 9.18577L14.3049 6.83306C14.6763 6.52392 14.4846 5.90751 14.0074 5.87654L10.3159 5.63696C10.2165 5.62986 10.1211 5.59465 10.0409 5.53545C9.96069 5.47625 9.89896 5.39548 9.86289 5.30255L8.48612 1.83549C8.44869 1.73685 8.38215 1.65194 8.29532 1.59201C8.2085 1.53209 8.1055 1.5 8 1.5C7.89451 1.5 7.79151 1.53209 7.70468 1.59201C7.61786 1.65194 7.55131 1.73685 7.51389 1.83549L6.13712 5.30255C6.10104 5.39548 6.03932 5.47625 5.95912 5.53545C5.87892 5.59465 5.78355 5.62986 5.68412 5.63696L1.99263 5.87654C1.51544 5.90751 1.32373 6.52392 1.69515 6.83306L4.52186 9.18577C4.60063 9.25218 4.65907 9.33946 4.69044 9.4376C4.72181 9.53573 4.72485 9.64073 4.6992 9.74052L3.85459 13.063C3.71111 13.6274 4.31143 14.083 4.79495 13.7767L7.72431 11.9208C7.8067 11.8683 7.90234 11.8405 8 11.8405C8.09767 11.8405 8.19331 11.8683 8.27569 11.9208Z"
                                                                fill="#FD8E1F" />
                                                        </svg>
                                                        4 Star & up <span>568</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="61" />
                                                    <label for="61">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.27569 11.9208L11.4279 13.9179C11.8308 14.1732 12.3311 13.7935 12.2115 13.3232L11.3008 9.74052C11.2752 9.64073 11.2782 9.53573 11.3096 9.4376C11.3409 9.33946 11.3994 9.25218 11.4781 9.18577L14.3049 6.83306C14.6763 6.52392 14.4846 5.90751 14.0074 5.87654L10.3159 5.63696C10.2165 5.62986 10.1211 5.59465 10.0409 5.53545C9.96069 5.47625 9.89896 5.39548 9.86289 5.30255L8.48612 1.83549C8.44869 1.73685 8.38215 1.65194 8.29532 1.59201C8.2085 1.53209 8.1055 1.5 8 1.5C7.89451 1.5 7.79151 1.53209 7.70468 1.59201C7.61786 1.65194 7.55131 1.73685 7.51389 1.83549L6.13712 5.30255C6.10104 5.39548 6.03932 5.47625 5.95912 5.53545C5.87892 5.59465 5.78355 5.62986 5.68412 5.63696L1.99263 5.87654C1.51544 5.90751 1.32373 6.52392 1.69515 6.83306L4.52186 9.18577C4.60063 9.25218 4.65907 9.33946 4.69044 9.4376C4.72181 9.53573 4.72485 9.64073 4.6992 9.74052L3.85459 13.063C3.71111 13.6274 4.31143 14.083 4.79495 13.7767L7.72431 11.9208C7.8067 11.8683 7.90234 11.8405 8 11.8405C8.09767 11.8405 8.19331 11.8683 8.27569 11.9208Z"
                                                                fill="#FD8E1F" />
                                                        </svg>
                                                        3 Star & up <span>568</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="62" />
                                                    <label for="62">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.27569 11.9208L11.4279 13.9179C11.8308 14.1732 12.3311 13.7935 12.2115 13.3232L11.3008 9.74052C11.2752 9.64073 11.2782 9.53573 11.3096 9.4376C11.3409 9.33946 11.3994 9.25218 11.4781 9.18577L14.3049 6.83306C14.6763 6.52392 14.4846 5.90751 14.0074 5.87654L10.3159 5.63696C10.2165 5.62986 10.1211 5.59465 10.0409 5.53545C9.96069 5.47625 9.89896 5.39548 9.86289 5.30255L8.48612 1.83549C8.44869 1.73685 8.38215 1.65194 8.29532 1.59201C8.2085 1.53209 8.1055 1.5 8 1.5C7.89451 1.5 7.79151 1.53209 7.70468 1.59201C7.61786 1.65194 7.55131 1.73685 7.51389 1.83549L6.13712 5.30255C6.10104 5.39548 6.03932 5.47625 5.95912 5.53545C5.87892 5.59465 5.78355 5.62986 5.68412 5.63696L1.99263 5.87654C1.51544 5.90751 1.32373 6.52392 1.69515 6.83306L4.52186 9.18577C4.60063 9.25218 4.65907 9.33946 4.69044 9.4376C4.72181 9.53573 4.72485 9.64073 4.6992 9.74052L3.85459 13.063C3.71111 13.6274 4.31143 14.083 4.79495 13.7767L7.72431 11.9208C7.8067 11.8683 7.90234 11.8405 8 11.8405C8.09767 11.8405 8.19331 11.8683 8.27569 11.9208Z"
                                                                fill="#FD8E1F" />
                                                        </svg>
                                                        2 Star & up <span>568</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="63" />
                                                    <label for="63">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.27569 11.9208L11.4279 13.9179C11.8308 14.1732 12.3311 13.7935 12.2115 13.3232L11.3008 9.74052C11.2752 9.64073 11.2782 9.53573 11.3096 9.4376C11.3409 9.33946 11.3994 9.25218 11.4781 9.18577L14.3049 6.83306C14.6763 6.52392 14.4846 5.90751 14.0074 5.87654L10.3159 5.63696C10.2165 5.62986 10.1211 5.59465 10.0409 5.53545C9.96069 5.47625 9.89896 5.39548 9.86289 5.30255L8.48612 1.83549C8.44869 1.73685 8.38215 1.65194 8.29532 1.59201C8.2085 1.53209 8.1055 1.5 8 1.5C7.89451 1.5 7.79151 1.53209 7.70468 1.59201C7.61786 1.65194 7.55131 1.73685 7.51389 1.83549L6.13712 5.30255C6.10104 5.39548 6.03932 5.47625 5.95912 5.53545C5.87892 5.59465 5.78355 5.62986 5.68412 5.63696L1.99263 5.87654C1.51544 5.90751 1.32373 6.52392 1.69515 6.83306L4.52186 9.18577C4.60063 9.25218 4.65907 9.33946 4.69044 9.4376C4.72181 9.53573 4.72485 9.64073 4.6992 9.74052L3.85459 13.063C3.71111 13.6274 4.31143 14.083 4.79495 13.7767L7.72431 11.9208C7.8067 11.8683 7.90234 11.8405 8 11.8405C8.09767 11.8405 8.19331 11.8683 8.27569 11.9208Z"
                                                                fill="#FD8E1F" />
                                                        </svg>
                                                        1 Star & up <span>568</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample5">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne04">
                                    <button class="accordion-button header-btn collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne04" aria-expanded="true"
                                        aria-controls="collapseOne04">
                                        Course level
                                    </button>
                                </h2>
                                <div id="collapseOne04" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne04" data-bs-parent="#accordionExample5">
                                    <div class="accordion-body border_top">
                                        <form action="#">
                                            <div class="check-field-wrap">
                                                <div class="form-group">
                                                    <input type="checkbox" id="64" />
                                                    <label for="64">All Level <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="65" />
                                                    <label for="65">Beginner <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="66" />
                                                    <label for="66">Intermediate <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="67" />
                                                    <label for="67">Expert <span>568</span></label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample6">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne05">
                                    <button class="accordion-button header-btn collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne05" aria-expanded="true"
                                        aria-controls="collapseOne05">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapseOne05" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne05" data-bs-parent="#accordionExample6">
                                    <div class="accordion-body border_top">
                                        <form action="#">
                                            <div class="range-middle">
                                                <div class="multi-range-slider">
                                                    <input type="range" id="input-left" min="0" max="100" value="25" />
                                                    <input type="range" id="input-right" min="0" max="100" value="75" />
                                                    <div class="slider">
                                                        <div class="track"></div>
                                                        <div class="range"></div>
                                                        <div class="thumb left"></div>
                                                        <div class="thumb right"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-field-wrap">
                                                <div class="default-input-field">
                                                    <input type="text" placeholder="min:" />
                                                    <div class="dollar">
                                                        $
                                                    </div>
                                                </div>
                                                <div class="default-input-field">
                                                    <input type="text" placeholder="min:" />
                                                    <div class="dollar">
                                                        $
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="check-field-wrap">
                                                <div class="form-group">
                                                    <input type="checkbox" id="68" />
                                                    <label for="68">Paid <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="69" />
                                                    <label for="69">Free <span>568</span></label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="colurse-sidebar-item">
                        <div class="accordion" id="accordionExample7">
                            <div class="accordion-item main-item">
                                <h2 class="accordion-header" id="headingOne06">
                                    <button class="accordion-button header-btn collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne06" aria-expanded="true"
                                        aria-controls="collapseOne06">
                                        Duration
                                    </button>
                                </h2>
                                <div id="collapseOne06" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne06" data-bs-parent="#accordionExample7">
                                    <div class="accordion-body border_top">
                                        <form action="#">
                                            <div class="check-field-wrap">
                                                <div class="form-group">
                                                    <input type="checkbox" id="70" />
                                                    <label for="70">6-12 Months <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="71" />
                                                    <label for="71">3-6 Months <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="72" />
                                                    <label for="72">1-3 Months <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="73" />
                                                    <label for="73">1-4 Weeks <span>568</span></label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="74" />
                                                    <label for="74">1-7 Days <span>568</span></label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                {{-- Course list --}}
                <template v-if="!pageloading">
                    <div class="row shop__product-items">
                        <div class="col-md-6 col-xl-4" v-for="course in courses">
                            <div class="course-item-4">
                                <div class="course-item-5-card">
                                    <a :href="course.details_url" class="course-item-5-card-img">
                                        <img :src="course.thumbnail_url" alt="thumbnail" /></a>
                                    <div class="course-item-5-card-info">
                                        <button class="course-item-5-card-info-tag">
                                            @{{ course.category.name }}
                                        </button>
                                        <p class="course-item-5-card-info-price">$
                                            @{{ course.formatted_price }}
                                        </p>
                                    </div>
                                    <a :href="course.details_url" class="course-item-5-card-head">
                                        @{{ course.title }}
                                    </a>
                                    <div class="course-item-5-card-footer">
                                        <p class="course-item-5-card-footer-review align-self-center">
                                            <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                                                    fill="#FD8E1F" />
                                            </svg>
                                            @{{ course.avg_rating }}
                                        </p>
                                        <p class="course-item-5-card-footer-student">
                                            @{{ course.formatted_reviews }}
                                            <span>{{ __('students') }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                {{-- Page loading  --}}
                <div v-if="pageloading" class="loader m-auto"></div>

                {{-- Load more button  --}}
                <div v-if="next_page_url" class="pag text-center mt-2" v-if="!pageloading">
                    <div class="pag-content">
                        <button @click="loadMoreCourse" type="submit" class="button button--md button-i--r">
                            {{ __('Load More') }}

                            <template v-if="buttonloading">
                                <x-svg.loading-icon/>
                            </template>
                            {{-- <x-svg.plus-icon /> --}}
                            {{-- <span wire:loading.remove wire:target="login">
                                <x-svg.arrow-right-icon />
                            </span>
                            <span wire:loading wire:target="login">
                                <x-svg.loading-icon />
                            </span> --}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('frontend_scripts')
    <script src="{{ asset('/frontend/js/axios.min.js') }}"></script>
    <script src="{{ asset('/frontend/js/vue.min.js') }}"></script>
    <script src="https://unpkg.com/underscore@1.8.3"></script>

    <script>
        var app = new Vue({
            el: "#course-list",
            data: {
                pageloading: false,
                buttonloading: false,
                courseLoading: false,
                LevelLoading: false,

                courses: [],
                next_page_url: '',
                categories: [],
                levels: [],


                search: '',
                // category: '',
                // level: '',
                // price: '',
                // duration: '',
                // rating: '',



                current_url: document.getElementById('current_url').value || '',
            },
            watch: {
                search: _.debounce(function(val){
                    console.log(val)
                    this.fetchData();
                }, 500)
            },
            methods: {
                async fetchData(){
                    try {
                        this.pageloading = true;

                        var response = await axios.get('/fetch/courses', {
                            params: {
                                search: this.search,
                                // category: this.category,
                                // level: this.level,
                                // price: this.price,
                                // duration: this.duration,
                                // rating: this.rating,
                            }
                        })
                        console.log(response.data);
                        this.courses = response.data.courses.data;
                        this.next_page_url = response.data.courses.next_page_url;
                        this.current_url = response.data.current_url;
                        // this.fetchCurrentUrl();

                        this.pageloading = false;
                    } catch (error) {
                        this.pageloading = false;
                        alert('An error occurred while fetching data.');
                    }
                },
                async loadMoreCourse(){
                    try {
                        this.buttonloading = true;

                        var response = await axios.get(this.next_page_url, {
                            params: {
                                search: this.search,
                                // category: this.category,
                                // level: this.level,
                                // price: this.price,
                                // duration: this.duration,
                                // rating: this.rating,
                            }
                        })
                        console.log(response.data);

                        this.courses = [...this.courses, ...response.data.courses.data];
                        this.next_page_url = response.data.courses.next_page_url;
                        this.current_url = response.data.current_url;
                        // this.fetchCurrentUrl();

                        this.buttonloading = false;
                    } catch (error) {
                        this.buttonloading = false;
                        alert('An error occurred while fetching data.');
                    }
                },
                async fetchResources(){
                    try {
                        this.buttonloading = true;

                        var response = await axios.get('/fetch/resources', {
                            params: {
                                search: this.search,
                                // category: this.category,
                                // level: this.level,
                                // price: this.price,
                                // duration: this.duration,
                                // rating: this.rating,
                            }
                        })
                        console.log(response.data);
                        this.categories = response.data.categories;
                        this.levels = response.data.levels;

                        // this.courses = [...this.courses, ...response.data.courses.data];

                        this.buttonloading = false;
                    } catch (error) {
                        this.buttonloading = false;
                        alert('An error occurred while fetching data.');
                    }
                },
                async fetchCurrentUrl(){
                    try {
                        console.log(this.current_url)

                        const url = this.current_url;

                        history.pushState("", "", url);
                        // var response = await axios.get('/fetch/current/url')
                        // console.log(response.data);
                    } catch (error) {
                        alert('An error occurred while fetching data.');
                    }
                },
                updateUrl(){
                    this.fetchCurrentUrl();
                    // alert(this.current_url)
                }
            },
            async created() {
                await this.fetchData();
                await this.fetchResources();
                // await this.fetchCurrentUrl();

                // const state = { page_id: 1, user_id: 5 };
                // const url = "hello-world.html";

                // history.pushState(state, "", url);

            }
        });
    </script>
@endpush

@push('frontend_styles')
    <style>
       .loader {
            width: 70px;
            aspect-ratio: 1;
            border-radius: 50%;
            border: 6px solid #ff6636;
            animation: l20-1 0.8s infinite linear alternate, l20-2 1.6s infinite linear;
            margin-top: 20% !important;
        }
        @keyframes l20-1{
            0%    {clip-path: polygon(50% 50%,0       0,  50%   0%,  50%    0%, 50%    0%, 50%    0%, 50%    0% )}
            12.5% {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100%   0%, 100%   0%, 100%   0% )}
            25%   {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100% 100%, 100% 100%, 100% 100% )}
            50%   {clip-path: polygon(50% 50%,0       0,  50%   0%,  100%   0%, 100% 100%, 50%  100%, 0%   100% )}
            62.5% {clip-path: polygon(50% 50%,100%    0, 100%   0%,  100%   0%, 100% 100%, 50%  100%, 0%   100% )}
            75%   {clip-path: polygon(50% 50%,100% 100%, 100% 100%,  100% 100%, 100% 100%, 50%  100%, 0%   100% )}
            100%  {clip-path: polygon(50% 50%,50%  100%,  50% 100%,   50% 100%,  50% 100%, 50%  100%, 0%   100% )}
        }
        @keyframes l20-2{
            0%    {transform:scaleY(1)  rotate(0deg)}
            49.99%{transform:scaleY(1)  rotate(135deg)}
            50%   {transform:scaleY(-1) rotate(0deg)}
            100%  {transform:scaleY(-1) rotate(-135deg)}
        }
    </style>
@endpush
