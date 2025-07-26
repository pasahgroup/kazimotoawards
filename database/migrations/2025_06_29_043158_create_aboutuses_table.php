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
        Schema::create('aboutuses', function (Blueprint $table) {
              $table->bigIncrements('id');                     
             $table->string('who_weare',2500)->nullable();
               $table->string('mission',2500)->nullable();
                 $table->string('mission_photo',64)->nullable();
                     $table->string('vision',2500)->nullable();
                 $table->string('vision_photo',64)->unsigned();
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
        Schema::dropIfExists('aboutuses');
    }
}
