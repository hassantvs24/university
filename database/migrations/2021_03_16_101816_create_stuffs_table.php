<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact', 11);
            $table->string('emergency_contact', 11)->nullable();
            $table->enum('gender',['Male', 'Female', 'Other']);
            $table->date('dob');
            $table->date('joining_date')->nullable();
            $table->float('nid')->comment('Nid/Birth Certificate');
            $table->enum('blood_group',['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Unknown'])->default('Unknown');
            $table->string('address');
            $table->string('city')->comment('City/Village');
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('country')->default('Bangladesh')->nullable();
            $table->enum('status',['Active', 'Inactive'])->default('Active');
            $table->foreignId('designation_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('user_categories_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('stuffs');
    }
}
