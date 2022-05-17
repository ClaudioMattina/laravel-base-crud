<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumettisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumettis', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("thumb")->nullable();
            $table->string("price")->nullable();
            $table->string("series");
            $table->date("sale_date");
            $table->string("type");
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
        Schema::dropIfExists('fumettis');
    }
}
