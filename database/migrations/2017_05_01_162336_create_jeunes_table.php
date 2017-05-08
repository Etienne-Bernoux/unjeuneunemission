<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeunes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('priant_id')->unsigned();
            $table->foreign('priant_id')->references('id')->on('priants');
            $table->string('prenom', 100);
            $table->string('nom',100);
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
        Schema::dropIfExists('jeunes');
    }
}
