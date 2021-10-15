<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStraipsnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('straipsnis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("rid");
            $table->string("pavadinimas");
            $table->string("paveiksliukas")->nullable();
            $table->text("aprasymas")->nullable();
            $table->text("tekstas");
            $table->string("nuoroda")->unique();
            $table->timestamps();

            $table->foreign("rid")->references("id")->on("rubrikas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('straipsnis');
    }
}
