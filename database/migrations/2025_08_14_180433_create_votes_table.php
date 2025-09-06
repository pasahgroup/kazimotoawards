<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
           $table->bigIncrements('id');  
            $table->integer('user_id')->nullable();                   
             $table->integer('contestant_id')->nullable();
              $table->string('mobile')->nullable();
              $table->string('email',64)->nullable();
              $table->string('award_id')->nullable();

                        $table->string('mac')->nullable();
                        $table->string('year')->nullable();
                $table->string('status')->nullable();
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
        Schema::dropIfExists('votes');
    }
}
