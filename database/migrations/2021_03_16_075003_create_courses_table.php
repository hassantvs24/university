<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('semester')->default(0);
            $table->tinyInteger('total_subject')->default(0);
            $table->float('total_credit')->default(0);
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->foreignId('department_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('academic_year_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['name', 'department_id', 'academic_year_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
