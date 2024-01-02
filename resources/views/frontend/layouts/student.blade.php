@extends('frontend.layouts.app')

@section('title', __('Student Dashboard'))

@section('content')
<div class="student-breadcrumb"></div>

<div class="student-profile-section">
    <div class="container">
        <div class="student-profile-wrap">
            <div class="student-profile-header">
                <div class="student-profile-left">
                    <div class="student-thumb">
                        <img src="assets/images/photos.png" alt="" />
                    </div>
                    <div class="student-data">
                        <h3>Kevin Gilbert</h3>
                        <p>Web Designer &amp; Best-Selling Instructor</p>
                    </div>
                </div>
                <div class="student-profile-right">
                    <a class="button button--lg button-p-s button-i--r" href="become-instructor.html">
                        Become Instructor
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 12H20.25" stroke="#FF6636" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#FF6636" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="student-tabs-section">
    <div class="container">
        <div class="student-tabs-wrap">
            {{-- Student Sidebar --}}
            <x-frontend.student.sidebar />

            {{-- Contenet --}}
            @yield('student_content')
        </div>
    </div>
</div>
@endsection
