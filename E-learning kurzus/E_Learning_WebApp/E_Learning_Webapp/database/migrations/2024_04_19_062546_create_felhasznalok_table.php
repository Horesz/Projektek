<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('neptun_kod')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('profilePicture')->default('unnamed.jpg');
            $table->string('country');
            $table->string('city');
            $table->string('street');
            $table->string('houseNumber');
            $table->string('phoneNumber');
            $table->date('birthDate');
            $table->text('profileDescription');
            $table->boolean('adminE')->default(false);
            $table->timestamp('emailVerifiedAt')->nullable();
            $table->rememberToken();
            $table->timestamps();
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