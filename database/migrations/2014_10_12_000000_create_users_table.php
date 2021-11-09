<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('profile_picture');
            $table->string('school')->nullable();
            $table->string('organization')->nullable();
            $table->string('company')->nullable();
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id');
            $table->integer('following_count');
            $table->integer('followers_count');
            $table->integer('post_count');
<<<<<<< HEAD
            $table->foreignId('post_id');
=======
>>>>>>> eefa120af64827e8f6961c22b4f3a1f666d6a2cb
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
