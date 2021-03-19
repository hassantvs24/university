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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('user_type', ['Student', 'Teacher', 'Stuff', 'Admin'])->default('Student');
            $table->foreignId('current_team_id')->nullable();
            $table->string('photo')->default('/uploads/profile/default.jpg');
            $table->enum('institute', ['University', 'Diploma'])->default('University');
            $table->enum('enroll', ['Manual', 'Online'])->default('Online');
            $table->softDeletes();
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
