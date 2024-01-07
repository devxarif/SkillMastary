<?php

use function Livewire\Volt\{state};
use Livewire\Volt\Component;
use App\Models\{Course};
use App\Models\{CourseWishlist};

new class extends Component {
    public $course;
    public $wishlisted = false;
    public $loading = false;

    public function mount($wishlisted, Course $course)
    {
        $this->wishlisted = $wishlisted;
        $this->course = $course;
    }

    public function wishlist()
    {
        if (!authUser()) {
            flashError("Please login to add this course to your wishlist.", true);

            return ;
        }

        if (!$this->loading) {
            $this->loading = true;
            $this->wishlisted = !$this->wishlisted;

            $user = authUser();
            $alreadyWishlist = CourseWishlist::where('user_id', $user->id)->where('course_id', $this->course->id)->first();

            if ($alreadyWishlist) {
                $alreadyWishlist->delete();
                flashSuccess("Course removed from your wishlist");
            }else{
                CourseWishlist::create([
                    'user_id' => $user->id,
                    'course_id' => $this->course->id,
                ]);

                flashSuccess("Course added to your wishlist");
            }

            $this->loading = false;
        }
    }
}?>

<a href="javascript:void(0)" wire:click="wishlist()" class="add-to-wishlist">
    @if ($wishlisted)
        <span class="tw-text-red-500">{{ __('Remove from wishlist') }}</span>
    @else
        <span>{{ __('Add to wishlist') }}</span>
    @endif
</a>
