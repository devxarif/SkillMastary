@props(['course'])

<div class="feature-course">
    <div class="feature-course-left">
        <a href="{{ route('website.course.details', '123') }}" class="feature-course-img">
            <img src="{{ $course->thumbnail_url }}" alt="course image">
        </a>
    </div>
    <div class="feature-course-right">
        <div class="feature-course-right-content">
            <div class="feature-course-right-content-header">
                <div class="feature-course-info">
                    <a href="#" class="feature-course-info-tag tag-color2">
                        {{ $course?->category?->name }}
                    </a>
                    <p class="feature-course-info-price">
                        ${{ $course?->price }}
                        @if ($course?->discount_price)
                            <span>${{ $course->discount_price }}</span>
                        @endif
                    </p>
                </div>
                <a href="{{ route('website.course.details', '123') }}" class="feature-course-head">
                    {{ $course?->title }}
                </a>
                <div class="feature-course-mid">
                    <a href="#">
                        <img src="{{ $course?->user?->avatar_url }}" alt="user image">
                        <h5>
                            {{ $course?->user?->name }}
                        </h5>
                    </a>
                    <div>
                        <div>
                            <svg width="18" class="align-self-center" height="16"
                                viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.34462 13.401L13.2849 15.8974C13.7886 16.2165 14.4139 15.7419 14.2644 15.154L13.126 10.6756C13.0939 10.5509 13.0977 10.4197 13.137 10.297C13.1762 10.1743 13.2492 10.0652 13.3477 9.98222L16.8811 7.04132C17.3453 6.6549 17.1057 5.88439 16.5092 5.84567L11.8949 5.5462C11.7706 5.53732 11.6514 5.49332 11.5511 5.41931C11.4509 5.34531 11.3737 5.24435 11.3286 5.12819L9.60765 0.794357C9.56087 0.671064 9.47769 0.564919 9.36915 0.490017C9.26062 0.415115 9.13187 0.375 9 0.375C8.86813 0.375 8.73938 0.415115 8.63085 0.490017C8.52232 0.564919 8.43914 0.671064 8.39236 0.794357L6.6714 5.12819C6.62631 5.24435 6.54914 5.34531 6.4489 5.41931C6.34865 5.49332 6.22944 5.53732 6.10515 5.5462L1.49078 5.84567C0.894294 5.88439 0.654664 6.6549 1.11894 7.04132L4.65232 9.98222C4.75079 10.0652 4.82383 10.1743 4.86305 10.297C4.90226 10.4197 4.90606 10.5509 4.874 10.6756L3.81824 14.8288C3.63889 15.5343 4.38929 16.1038 4.99369 15.7209L8.65539 13.401C8.75837 13.3354 8.87792 13.3006 9 13.3006C9.12208 13.3006 9.24163 13.3354 9.34462 13.401Z"
                                    fill="#FD8E1F" />
                            </svg>
                            <p>
                                {{-- 5.0 --}}
                                {{ $course?->avg_rating }}
                                @if ($course?->total_reviews)
                                    <span>({{ formatNumber($course?->total_reviews) }})</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-course-footer">
                @if ($course?->total_enrolled)
                    <div class="feature-course-footer-item">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 13C12.7614 13 15 10.7614 15 8C15 5.23858 12.7614 3 10 3C7.23858 3 5 5.23858 5 8C5 10.7614 7.23858 13 10 13Z"
                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10" />
                            <path
                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <p class="p-color">
                            {{ formatNumber($course?->total_enrolled) }}
                            <span>{{ __('Students') }}</span>
                        </p>
                    </div>
                @endif
                <div class="feature-course-footer-item">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17.1667V8.83334" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15 17.1667V3.83334" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 17.1667V13.8333" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>
                        {{ $course?->courseLevel?->name }}
                    </p>
                </div>
                <div class="feature-course-footer-item">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 18C14.1421 18 17.5 14.6421 17.5 10.5C17.5 6.35786 14.1421 3 10 3C5.85786 3 2.5 6.35786 2.5 10.5C2.5 14.6421 5.85786 18 10 18Z"
                            stroke="#23BD33" stroke-width="1.5" stroke-miterlimit="10" />
                        <path d="M10 6.125V10.5H14.375" stroke="#23BD33" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p>
                        {{ $course?->duration }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
