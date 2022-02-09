<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('relation_type', ['Father', 'Mother', 'Spouse', 'Local Guardian', 'Payer', 'Other']);
            $table->string('contact', 11)->nullable();
            $table->string('email')->nullable();
            $table->string('occupation')->nullable();
            $table->string('organization')->nullable();
            $table->string('address')->nullable();
            $table->double('annual_income')->nullable();
            $table->string('nid')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('student_guardians');
    }
}
