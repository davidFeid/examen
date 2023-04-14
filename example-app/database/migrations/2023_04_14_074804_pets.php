<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->string('nick')->primary();
            $table->string('password');
            $table->string('name');
            $table->enum('dog_breed',['Boxer','Buldog','Labrador','Caniche']);
            $table->enum('gender',['male','female']);
            $table->integer('age');
            $table->string('human_name');
            $table->integer('tel');
            $table->string('image');
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
        //
    }
};
