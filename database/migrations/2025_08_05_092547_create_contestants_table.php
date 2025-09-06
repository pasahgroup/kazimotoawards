<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
          $table->bigIncrements('id');   
          $table->string('full_name',64)->nullable();  

 $table->date('birth_date',64)->nullable();  
 $table->string('phone',32)->nullable();  
 $table->string('email',64)->nullable();

 $table->string('country',64)->nullable();  
 $table->string('district',64)->nullable();  
 $table->string('education',64)->nullable();  
 $table->string('education_of',64)->nullable();  

 $table->string('experience_one',680)->nullable();  
 $table->string('experience_two',680)->nullable();  
 $table->string('experience_three',680)->nullable();  

 $table->longText('photo')->nullable();  
 $table->longText('images')->nullable();  
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
        Schema::dropIfExists('contestants');
    }
}