@props([
    'course',
    'cardClass' => 'course-item-4',
])

<div class="{{ $cardClass }}">
    <div class="course-item-5-card">
        <a href="{{ route('website.course.details', $course?->slug) }}" class="course-item-5-card-img">
            <img src="{{ $course->thumbnail_url }}" alt="course image">
        </a>
        <div class="course-item-5-card-info">
            <a href="{{ route('website.course.details', $course?->slug) }}" class="course-item-5-card-info-tag tag-color2" title="{{ $course?->category?->name }}">
                {{ Str::limit($course?->category?->name, 15, '...') }}
            </a>
            @if ($course?->price)
                <p class="course-item-5-card-info-price">
                    ${{ formatNumber($course?->price) }}
                    {{-- @if ($course?->discount_price)
                        <span>${{ $course->discount_price }}</span>
                    @endif --}}
                </p>
            @else
                <span class="course-item-5-card-info-tag tag-color3">
                    {{ __('Free') }}
                </span>
            @endif
        </div>
        <a href="{{ route('website.course.details', $course?->slug) }}" class="course-item-5-card-head">
            {{ $course?->title }}
        </a>
        <div class="course-item-5-card-footer">
            <p class="course-item-5-card-footer-review align-self-center">
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64073 10.2782 8.53573 10.3096 8.4376C10.3409 8.33946 10.3994 8.25218 10.4781 8.18577L13.3049 5.83306C13.6763 5.52392 13.4846 4.90751 13.0074 4.87654L9.31588 4.63696C9.21645 4.62986 9.12109 4.59465 9.04089 4.53545C8.96069 4.47625 8.89896 4.39548 8.86289 4.30255L7.48612 0.835486C7.44869 0.736852 7.38215 0.651935 7.29532 0.592013C7.2085 0.532092 7.1055 0.5 7 0.5C6.89451 0.5 6.79151 0.532092 6.70468 0.592013C6.61786 0.651935 6.55131 0.736852 6.51389 0.835486L5.13712 4.30255C5.10104 4.39548 5.03932 4.47625 4.95912 4.53545C4.87892 4.59465 4.78355 4.62986 4.68412 4.63696L0.992627 4.87654C0.515435 4.90751 0.323731 5.52392 0.695149 5.83306L3.52186 8.18577C3.60063 8.25218 3.65907 8.33946 3.69044 8.4376C3.72181 8.53573 3.72485 8.64073 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.083 3.79495 12.7767L6.72431 10.9208C6.8067 10.8683 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8683 7.27569 10.9208Z"
                        fill="#FD8E1F" />
                </svg>
                {{ $course?->avg_rating }}
            </p>
            @if ($course?->total_enrolled)
                <p class="course-item-5-card-footer-student">
                    {{ formatNumber($course?->total_enrolled) }}
                    <span>{{ __('Students') }}</span>
                </p>
            @endif
        </div>
    </div>
    <div class="course-hover-detalis">
        <div class="feature-course-right-content">
            <div class="feature-course-right-content-header">
                <div class="feature-course-info">
                    <a href="#" class="course-item-5-card-info-tag tag-color2">
                        {{ $course?->category?->name }}
                    </a>
                </div>
                <a href="{{ route('website.course.details', $course?->slug) }}" class="feature-course-head">
                    {{ $course?->title }}
                </a>
                <div class="feature-course-mid">
                    <a href="#">
                        <div class="feature-course-user">
                            <div class="feature-course-user-thumb">
                                <img src="{{ $course?->user?->avatar_url }}" alt="user image">
                            </div>
                            <div class="feature-course-user-data">
                                <p>{{ __('Course by') }}</p>
                                <h5>{{ $course?->user?->name }}</h5>
                            </div>
                        </div>
                    </a>
                    <div>
                        <div>
                            <svg width="18" class="align-self-center" height="16" viewBox="0 0 18 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.34462 13.401L13.2849 15.8974C13.7886 16.2165 14.4139 15.7419 14.2644 15.154L13.126 10.6756C13.0939 10.5509 13.0977 10.4197 13.137 10.297C13.1762 10.1743 13.2492 10.0652 13.3477 9.98222L16.8811 7.04132C17.3453 6.6549 17.1057 5.88439 16.5092 5.84567L11.8949 5.5462C11.7706 5.53732 11.6514 5.49332 11.5511 5.41931C11.4509 5.34531 11.3737 5.24435 11.3286 5.12819L9.60765 0.794357C9.56087 0.671064 9.47769 0.564919 9.36915 0.490017C9.26062 0.415115 9.13187 0.375 9 0.375C8.86813 0.375 8.73938 0.415115 8.63085 0.490017C8.52232 0.564919 8.43914 0.671064 8.39236 0.794357L6.6714 5.12819C6.62631 5.24435 6.54914 5.34531 6.4489 5.41931C6.34865 5.49332 6.22944 5.53732 6.10515 5.5462L1.49078 5.84567C0.894294 5.88439 0.654664 6.6549 1.11894 7.04132L4.65232 9.98222C4.75079 10.0652 4.82383 10.1743 4.86305 10.297C4.90226 10.4197 4.90606 10.5509 4.874 10.6756L3.81824 14.8288C3.63889 15.5343 4.38929 16.1038 4.99369 15.7209L8.65539 13.401C8.75837 13.3354 8.87792 13.3006 9 13.3006C9.12208 13.3006 9.24163 13.3354 9.34462 13.401Z"
                                    fill="#FD8E1F"></path>
                            </svg>
                            <p>
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
                                stroke="#564FFD" stroke-width="1.5" stroke-miterlimit="10"></path>
                            <path
                                d="M2.42102 17.3743C3.18943 16.0442 4.29431 14.9398 5.62468 14.172C6.95505 13.4042 8.46405 13 10.0001 13C11.5361 13 13.0451 13.4043 14.3755 14.1721C15.7058 14.94 16.8107 16.0444 17.5791 17.3744"
                                stroke="#564FFD" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                        <p class="p-color">{{ formatNumber($course?->total_enrolled) }} <span>{{ __('Students') }}</span></p>
                    </div>
                @endif
                <div class="feature-course-footer-item">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17.1667V8.83334" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 17.1667V3.83334" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5 17.1667V13.8333" stroke="#E34444" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p>{{ $course?->courseLevel?->name }}</p>
                </div>
                <div class="feature-course-footer-item">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 18C14.1421 18 17.5 14.6421 17.5 10.5C17.5 6.35786 14.1421 3 10 3C5.85786 3 2.5 6.35786 2.5 10.5C2.5 14.6421 5.85786 18 10 18Z"
                            stroke="#23BD33" stroke-width="1.5" stroke-miterlimit="10"></path>
                        <path d="M10 6.125V10.5H14.375" stroke="#23BD33" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p>{{ $course?->duration }}</p>
                </div>
            </div>
        </div>
        <div class="price-discount">
            <h5>${{ formatNumber($course?->discount_price) }}
                <del>${{ formatNumber($course?->price) }}</del>
                <span>56% off</span>
            </h5>

            {{-- Wishlist --}}
            <livewire:frontend.course.course-wishlist :wishlisted="$course->wishlisted" :course="$course->id"/>
        </div>
        <div class="what-your-learn">
            <h5>What you’ll learn</h5>
            <ul>
                <li>
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.25 0.750488L6.75 11.25L1.5 6.00049" stroke="#23BD33"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Learn to use Python professionally, learning both Python 2 and Python 3!
                </li>
                <li>
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.25 0.750488L6.75 11.25L1.5 6.00049" stroke="#23BD33"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Create games with Python, like Tic Tac Toe and Blackjack!
                </li>
                <li>
                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.25 0.750488L6.75 11.25L1.5 6.00049" stroke="#23BD33"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Create games with Python, like Tic Tac Toe and Blackjack!
                </li>
            </ul>
        </div>
        <div class="hover-footesection">
            <a class="button button--md button-i--l mb-3" href="#">
                <span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.25 20.25C8.25 20.6642 7.91421 21 7.5 21C7.08579 21 6.75 20.6642 6.75 20.25C6.75 19.8358 7.08579 19.5 7.5 19.5C7.91421 19.5 8.25 19.8358 8.25 20.25Z"
                            fill="white" stroke="white" stroke-width="1.5" />
                        <path
                            d="M17.25 21.75C18.0784 21.75 18.75 21.0784 18.75 20.25C18.75 19.4216 18.0784 18.75 17.25 18.75C16.4216 18.75 15.75 19.4216 15.75 20.25C15.75 21.0784 16.4216 21.75 17.25 21.75Z"
                            fill="white" />
                        <path
                            d="M3.96429 6.75H20.7857L18.3108 15.4121C18.2213 15.7255 18.0321 16.0012 17.7718 16.1975C17.5116 16.3938 17.1945 16.5 16.8685 16.5H7.88145C7.55549 16.5 7.23839 16.3938 6.97816 16.1975C6.71792 16.0012 6.52872 15.7255 6.43917 15.4121L3.04827 3.54396C3.0035 3.38725 2.90889 3.24939 2.77878 3.15124C2.64866 3.05309 2.49011 3 2.32713 3H0.75"
                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>

                Add to Cart
            </a>
            <a class="button button--md button-p-s" href="{{ route('website.course.details', $course?->slug) }}">
                {{ __('Course Detail') }}
            </a>
        </div>
    </div>
</div>
