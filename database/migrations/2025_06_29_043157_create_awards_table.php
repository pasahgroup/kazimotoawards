<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
              $table->bigIncrements('id');                     
             $table->string('award_name')->nullable();
               $table->string('price',280)->nullable();
                 $table->string('photo')->unsigned();
                   $table->integer('user_id')->unsigned();
                $table->string('status')->unsigned();
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
        Schema::dropIfExists('awards');
    }
}
