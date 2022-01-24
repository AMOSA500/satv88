<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('comments', function (Blueprint $table){
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('user_privacies_id');
                $table->string('subject');
                $table->string('status');
                $table->string('comment');
                $table->smallInteger('rate');
                $table->timestamps();

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('user_privacies_id')->references('id')->on('user_privacies')->onDelete('cascade');
                
            });
    
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
