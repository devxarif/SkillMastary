<?php

use function Livewire\Volt\{state};
use Livewire\Volt\Component;
use App\Models\{Course};
use App\Models\{CourseWishlist};
use App\Models\{CourseRating};

new class extends Component {
    public $courseId;
    public $reviews = [];
    public $stars = 0;
    public $count = 5;
    public $loading = false;

    // protected $listeners = ['hallChanged' => 'change'];

    public function mount($courseId)
    {
        $this->courseId = $courseId;
        $this->fetchReviews();
    }

    protected function fetchReviews()
    {
        $reviews = CourseRating::where('course_id', $this->courseId)
            ->with('user:id,name,avatar')
            ->when($this->stars, function ($query) {
                return $query->where('stars', $this->stars);
            })
            ->take($this->count)
            ->latest()
            ->get();

        $this->reviews = $reviews;
    }

    public function loadmoreReview()
    {
        $this->loading = true;
        $this->count += 5;
        $this->fetchReviews();
        $this->loading = false;
    }

    public function filterRatings()
    {
        // dd('aaa');
        // dd($this->stars);
        $this->fetchReviews();
    }
}?>

<div>
    <div class="course-single-title">
        <h3>Students Feedback</h3>
        <div class="select-box ratting">
            <select wire:model="stars" wire:change="filterRatings" class="text-black/70 tw-bg-white tw-px-3 tw-py-2 tw-transition-all tw-cursor-pointer hover:tw-border-blue-600/30 tw-border tw-border-gray-200 tw-rounded-lg outline-blue-600/50 tw-appearance-none invalid:text-black/30 tw-w-64">
                <option value="0">All</option>
                <option value="5">5 Star Rating</option>
                <option value="4">4 Star Rating</option>
                <option value="3">3 Star Rating</option>
                <option value="2">2 Star Rating</option>
                <option value="1">1 Star Rating</option>
            </select>
        </div>
    </div>
    <div class="review-wrap">
        @foreach ($reviews as $review)
            <div class="review-item">
                <div class="review-thumb">
                    <img src="{{ $review?->user?->avatar_url }}" alt="">
                </div>
                <div class="review-data">
                    <h5>
                        {{ $review?->user?->name }}
                         <span>
                            {{ $review?->created_at->diffForHumans() }}
                         </span>
                    </h5>
                    <div class="review">
                        <ul>
                            @for ($i = 0; $i < $review->stars; $i++)
                                <li>
                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.27569 10.9208L10.4279 12.9179C10.8308 13.1732 11.3311 12.7935 11.2115 12.3232L10.3008 8.74052C10.2752 8.64074 10.2782 8.53574 10.3096 8.43761C10.3409 8.33947 10.3994 8.25218 10.4781 8.18578L13.3049 5.83307C13.6763 5.52393 13.4846 4.90752 13.0074 4.87655L9.31588 4.63697C9.21645 4.62986 9.12109 4.59466 9.04089 4.53546C8.96069 4.47625 8.89896 4.39548 8.86289 4.30256L7.48612 0.835494C7.44869 0.736859 7.38215 0.651943 7.29532 0.592021C7.2085 0.532099 7.1055 0.500008 7 0.500008C6.89451 0.500008 6.79151 0.532099 6.70468 0.592021C6.61786 0.651943 6.55131 0.736859 6.51389 0.835494L5.13712 4.30256C5.10104 4.39548 5.03932 4.47625 4.95912 4.53546C4.87892 4.59466 4.78355 4.62986 4.68412 4.63697L0.992627 4.87655C0.515435 4.90752 0.323731 5.52393 0.695149 5.83307L3.52186 8.18578C3.60063 8.25218 3.65907 8.33947 3.69044 8.43761C3.72181 8.53574 3.72485 8.64074 3.6992 8.74052L2.85459 12.063C2.71111 12.6274 3.31143 13.0831 3.79495 12.7767L6.72431 10.9208C6.8067 10.8684 6.90234 10.8405 7 10.8405C7.09767 10.8405 7.19331 10.8684 7.27569 10.9208Z"
                                            fill="#FD8E1F"></path>
                                    </svg>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <p>
                        {{ $review?->comment }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <button wire:click="loadmoreReview" class="button button--md button-p-s button-i--r" type="button">
        {{ __('Load more') }}
        <span wire:loading wire:target="loadmoreReview">
            <x-svg.loading-icon stroke="#FF6636"/>
        </span>
    </button>
</div>
