<?php

use App\Enums\UserRoleEnum;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->enum('role', UserRoleEnum::getValues())
                ->default(App\Enums\UserRoleEnum::ROLE_STUDENT?->value)
                ->comment('student, instructor, affiliator, organization');
            $table->string('avatar')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('title', 80)->nullable();
            $table->mediumText('bio')->nullable();
            $table->mediumText('address')->nullable();
            $table->timestamp('phone_number_verified_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
