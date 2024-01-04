<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
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
            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->decimal('price')->default(0.00);
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
