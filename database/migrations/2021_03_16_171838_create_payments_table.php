<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->double('amount')->default(0);
            $table->enum('pay_type', ['IN', 'OUT']);
            $table->enum('sections', ['Expense', 'Registration', 'Fees', 'Due']);
            $table->enum('status', ['Approved', 'Pending', 'Processing', 'Cancel']);
            $table->foreignId('expenses_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('registration_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('fee_type_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('accountant')->nullable()->constrained('users')->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('account_book_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
            $table->foreignId('payment_method_id')->nullable()->constrained()->onDelete('Set Null')->onUpdate('No Action');
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
        Schema::dropIfExists('payments');
    }
}
