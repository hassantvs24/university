<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('code');
            $table->string('name');
            $table->string('short_name',10);
            $table->foreignId('user_id')->nullable()->comment('Department Head')->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['code', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
