<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('semester_level')->comment('Level of semester');
            $table->enum('status', ['Pending', 'Processing', 'Approved', 'Cancel'])->default('Pending');
            $table->foreignId('registration_type_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('academic_year_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('section_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('batche_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('teacher')->nullable()->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('stuff')->nullable()->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('user_id')->comment('Student')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
