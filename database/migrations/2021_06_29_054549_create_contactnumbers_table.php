<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactnumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactnumbers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact_id')->unsigned();
            $table->enum('visibility',['public' , 'private']);
            $table->string('number',64);
            $table->enum('type',['mobile','home','work','other']);
            $table->timestamps();
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactnumbers');
    }
}
