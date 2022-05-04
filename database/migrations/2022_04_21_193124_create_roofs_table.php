<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roofs', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('img');
            $table->string('img2');
            $table->string('img3');

            $table->string('osn_par1');
            $table->string('osn_par2');
            $table->string('osn_par3');
            $table->string('osn_par4');

            $table->string('strop_par1');
            $table->string('strop_par2');

            $table->string('obres_par1');
            $table->string('obres_par2');
            $table->string('obres_par3');
            $table->string('status');
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
        Schema::dropIfExists('roofs');
    }
}
