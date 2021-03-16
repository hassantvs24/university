<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examinations', function (Blueprint $table) { // Exam Result
            $table->id();
            $table->float('mark')->default(0);
            $table->enum('status', ['Pending', 'Processing', 'Approved', 'Cancel'])->default('Pending');
            $table->foreignId('exam_type_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('registration_id')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('user_id')->comment('Student')->constrained()->onDelete('cascade')->onUpdate('No Action');
            $table->foreignId('teacher')->nullable()->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
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
        Schema::dropIfExists('examinations');
    }
}
