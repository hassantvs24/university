<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('Course Tag for grouping, Example: Program core courses');
            $table->tinyInteger('semester_level')->comment('Level of semester');
            $table->float('credit')->default(0);
            $table->foreignId('dependency')->nullable()->constrained('subjects')->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('subject_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('course_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['subject_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_items');
    }
}
