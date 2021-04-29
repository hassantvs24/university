<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentJobExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_job_exps', function (Blueprint $table) {
            $table->id();
            $table->string('organization');
            $table->string('position')->comment('Position / Designation');
            $table->string('address')->nullable()->comment('Job Location / Address');
            $table->date('from')->nullable()->comment('Job Start Date');
            $table->date('to')->nullable()->comment('Job End Date');
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
        Schema::dropIfExists('student_job_exps');
    }
}
