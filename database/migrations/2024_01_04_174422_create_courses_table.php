<?php

use App\Models\User;
use App\Models\Category;
use App\Models\CourseLevel;
use App\Models\Subcategory;
use App\Enums\CourseStatusEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Subcategory::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(CourseLevel::class)->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('video')->nullable();
            $table->string('currency')->default('USD');
            $table->decimal('price')->default(0.00);
            $table->decimal('discount_price')->default(0.00);
            $table->decimal('usd_price')->default(0.00);
            $table->decimal('usd_discount_price')->default(0.00);
            $table->string('duration')->nullable();
            $table->integer('total_enrolled')->default(0);
            $table->integer('total_stars')->default(0);
            $table->float('total_reviews')->default(0.00);
            $table->float('revenue')->default(0.00);
            $table->enum('status', CourseStatusEnum::getValues())
                ->default(App\Enums\CourseStatusEnum::DRAFT?->value)
                ->comment('draft, published, rejected, pending');
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->boolean('is_featured')->default(false)->comment('badge: featured courses');
            $table->boolean('is_popular')->default(false)->comment('badge: popular courses');
            $table->timestamp('featured_at')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
