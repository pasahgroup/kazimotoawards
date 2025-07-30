<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->bigIncrements('id');                     
             $table->string('sponsor_name',120)->nullable();
               $table->string('mobile',25)->nullable();
                 $table->string('email',64)->nullable();
                     $table->string('contact_person',25)->nullable();
                 $table->string('logo',64)->nullable();
                    $table->string('website',32)->nullable();
                 $table->decimal('pledge',11,2)->default(0);
                  $table->string('address',250)->nullable();
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
        Schema::dropIfExists('sponsors');
    }
}
