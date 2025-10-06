<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_awards', function (Blueprint $table) {
           $table->bigIncrements('id');  
            $table->integer('vote_id')->nullable();                   
             $table->integer('contestant_id')->nullable();
              $table->string('award_id')->nullable();
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
        Schema::dropIfExists('vote_awards');
    }
}
