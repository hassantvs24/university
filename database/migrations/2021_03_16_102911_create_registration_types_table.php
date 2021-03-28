<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();//'Regular', 'Improved', 'Retake'
            $table->enum('types', ['Course', 'Improved', 'Retake', 'General']);
            $table->boolean('is_course')->default(1)->comment('1 = Course Registration & 0 = not');
            $table->boolean('is_waver')->default(1)->comment('1 = Waver applicable & 0 = not');
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
        Schema::dropIfExists('registration_types');
    }
}
