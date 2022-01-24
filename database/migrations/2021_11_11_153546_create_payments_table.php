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
            $table->string('tx_ref');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('ip');
            $table->string('payment_type');
            $table->string('status');
            $table->bigInteger('charged_amount');
            $table->integer('app_fee');
            $table->bigInteger('amount_settled');
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
