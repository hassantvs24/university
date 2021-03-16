<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wavers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('percent')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['name', 'percent']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wavers');
    }
}
