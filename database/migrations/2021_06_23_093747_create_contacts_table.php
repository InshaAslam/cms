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
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('first_name',64);
            $table->string('last_name',64);
            $table->string('dob',64)->nullable();
            $table->string('address',64)->nullable();
            $table->string('city',64)->nullable();
            $table->string('state',64)->nullable();
            $table->string('country',64)->nullable();
            $table->bigInteger('facebook_id')->nullable();
            $table->bigInteger('instagram_id')->nullable();
            $table->bigInteger('youtube_id')->nullable();
            $table->string('image');
            $table->bigInteger('views')->default('0');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
