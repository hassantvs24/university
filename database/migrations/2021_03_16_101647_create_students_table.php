<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from_no')->unique();
            $table->bigInteger('student_id')->unique();
            $table->string('contact', 11);
            $table->string('emergency_contact', 11)->nullable();
            $table->string('name')->comment('Name in Bangla');
            $table->date('dob');
            $table->float('height')->nullable()->comment('Measure by feet');
            $table->float('weight')->nullable()->comment('Measure by kg');
            $table->enum('gender',['Male', 'Female', 'Not Specified']);
            $table->enum('blood_group',['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Unknown'])->default('Unknown');
            $table->enum('religion',['Islam', 'Hinduism', 'Buddhism', 'Christianity', 'Secular', 'Other']);
            $table->enum('marital_status',['Single', 'Married'])->default('Single');
            $table->string('birth_place',50)->nullable();
            $table->string('Nationality',50)->nullable();
            $table->string('nid',30)->comment('Nid/Birth Certificate');

            $table->string('house',50)->nullable();
            $table->string('road',50)->nullable();
            $table->string('village',50)->comment('Village/Town')->nullable();
            $table->string('po',50)->comment('Post office')->nullable();
            $table->string('pc',20)->comment('Post Code')->nullable();
            $table->string('upazilla',50)->nullable();
            $table->string('district',50)->nullable();

            $table->string('permanent_house',50)->nullable();
            $table->string('permanent_road',50)->nullable();
            $table->string('permanent_village',50)->comment('Village/Town')->nullable();
            $table->string('permanent_po',50)->comment('Post office')->nullable();
            $table->string('permanent_pc',20)->comment('Post Code')->nullable();
            $table->string('permanent_upazilla',50)->nullable();
            $table->string('permanent_district',50)->nullable();

            $table->enum('know_about', ['Staff', 'Student', 'Friends', 'Newspaper', 'Social Medea', 'SMS', 'ADS', 'Other Source'])->nullable();
            $table->string('rtm_student_name', 120)->nullable();
            $table->string('rtm_student_id', 20)->nullable();
            $table->string('rtm_staff_name', 120)->nullable();
            $table->string('rtm_staff_id',20)->nullable();

            $table->string('spoken_score')->nullable()->comment('SAT / TOFEL / IELTS / GMAT score');
            $table->string('spoken_certificate_date')->nullable()->comment('Spoken Score Date Taken');

            $table->boolean('is_expelled')->default(0)->comment('dismissed/suspended/expelled from any institution');
            $table->string('expelled_reason')->nullable();

            $table->boolean('is_job_exp')->default(0);
            $table->string('extra_activity')->nullable()->comment('Skilled in sports and others');

            $table->float('waver')->default(0)->comment('Use (%)');
            $table->string('description')->nullable();

            $table->boolean('is_approved_dean')->default(0);
            $table->date('dean_sign_date')->nullable();
            $table->boolean('is_approved_register')->default(0);
            $table->date('register_sign_date')->nullable();
            $table->boolean('is_approved_admission')->default(0);
            $table->date('admission_sign_date')->nullable();

            $table->enum('admission_in',['Spring', 'Fall', 'Winter']);

            $table->enum('status',['Active', 'Inactive', 'Pending'])->default('Active');
            $table->enum('register_type',['Normal', 'Uploaded'])->default('Normal');
            $table->foreignId('user_categories_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('course_id')->nullable()->comment('Program Name')->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('section_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('waver_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('batches_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('user_id')->unique()->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('upload_by')->nullable()->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
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
        Schema::dropIfExists('students');
    }
}
