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
            $table->string('student_id',10)->unique();
            $table->string('contact', 11);
            $table->string('emergency_contact', 11)->nullable();
            $table->string('name');
            $table->date('dob');
            $table->enum('gender',['Male', 'Female', 'Other']);
            $table->enum('blood_group',['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-', 'Unknown'])->default('Unknown');
            $table->enum('religion',['Islam', 'Hinduism', 'Buddhism', 'Christianity', 'Secular', 'Other']);
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('nid')->comment('Nid/Birth Certificate');
            $table->float('waver')->default(0)->comment('Use (%)');
            $table->string('waver_name')->nullable();

            $table->string('father_name');
            $table->string('father_contact', 11)->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_nid');
            $table->string('father_photo')->nullable();

            $table->string('mother_name');
            $table->string('mother_contact', 11)->nullable();
            $table->string('mother_email')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_nid');
            $table->string('mother_photo')->nullable();

            $table->string('guardian_name')->nullable();
            $table->string('guardian_contact', 11)->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('guardian_nid')->nullable();
            $table->string('guardian_photo')->nullable();

            $table->string('address');
            $table->string('city')->comment('City/Village');
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('country')->default('Bangladesh')->nullable();

            $table->string('ssc_roll',20)->nullable();
            $table->string('ssc_reg',20)->nullable();
            $table->year('ssc_year')->nullable();
            $table->string('ssc_division',15)->nullable();
            $table->float('ssc_point')->nullable();
            $table->string('ssc_grade', 2)->nullable();
            $table->string('ssc_certificate')->nullable();
            $table->string('ssc_mark_sheet')->nullable();
            $table->string('ssc_testimonial')->nullable();

            $table->string('hsc_roll',20)->nullable();
            $table->string('hsc_reg',20)->nullable();
            $table->year('hsc_year')->nullable();
            $table->string('hsc_division',15)->nullable();
            $table->float('hsc_point')->nullable();
            $table->string('hsc_grade', 2)->nullable();
            $table->string('hsc_certificate')->nullable();
            $table->string('hsc_mark_sheet')->nullable();
            $table->string('hsc_testimonial')->nullable();

            $table->string('doc_one_title')->nullable();
            $table->string('doc_one_file')->nullable();
            $table->string('doc_two_title')->nullable();
            $table->string('doc_two_file')->nullable();
            $table->string('doc_three_title')->nullable();
            $table->string('doc_three_file')->nullable();

            $table->foreignId('user_categorie_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('course_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('department_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('academic_year_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
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
        Schema::dropIfExists('students');
    }
}
