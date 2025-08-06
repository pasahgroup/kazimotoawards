<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestant_awards', function (Blueprint $table) {
          $table->bigIncrements('id');                     
             $table->integer('contestant_id')->nullable();
              $table->integer('award_id')->nullable();
                 $table->string('email',64)->nullable();
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
        Schema::dropIfExists('contestant_awards');
    }
}
