<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('code')->unique();
            $table->string('name')->comment('Display batch name Ex: 1st');
            $table->tinyInteger('semester')->default(0)->comment('Number of semester');
            $table->integer('credit')->default(0)->comment('Total Credit hour');
            $table->integer('price')->default(0)->comment('Credit price per hour');
            $table->foreignId('department_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('academic_year_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['name', 'department_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
