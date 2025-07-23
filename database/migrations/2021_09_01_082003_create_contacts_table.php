<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {           
            $table->bigIncrements('id');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
             $table->string('email1')->nullable();
             $table->string('email2')->nullable();
                 $table->string('logo',32)->nullable();
                   $table->string('address',164)->nullable();
             $table->string('status')->default('Active');
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
        Schema::dropIfExists('contacts');
    }
}
