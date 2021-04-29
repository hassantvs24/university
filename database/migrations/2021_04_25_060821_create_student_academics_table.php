<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_academics', function (Blueprint $table) {
            $table->id();
            $table->string('institution');
            $table->enum('academy_type', ['School', 'University'])->default('School');
            $table->enum('examination', ['SSC', 'HSC','O Level', 'A Level', 'Dakhil', 'Alim', 'Diploma', 'Bachelor', 'Masters Degree', 'Kamil']);
            $table->float('gpa')->nullable()->comment('GPA/Division/CGPA');;
            $table->float('gpa_sub')->nullable()->comment('GPA/Division without 4th subject');;
            $table->string('grade', 30)->nullable()->comment('Overall Grade');
            $table->string('group', 30)->nullable();
            $table->string('board')->nullable();
            $table->year('pass_year')->nullable();
            $table->float('duration')->nullable()->comment('Duration for University');;
            $table->year('reg_year')->nullable()->comment('Reg. Year');;
            $table->string('program')->nullable()->comment('Program/Subjects for University');
            $table->string('university')->nullable()->comment('University');
            $table->string('note')->nullable();
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
        Schema::dropIfExists('student_academics');
    }
}
