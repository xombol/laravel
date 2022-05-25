<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRoofsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_roofs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('roof_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('shirina_ons');
            $table->string('visota_podema');
            $table->string('dlinna_svesa');
            $table->string('dlinna_steni');
            $table->string('shag_stropil');
            $table->string('area');
            $table->string('count_area');
            $table->string('dlina_stripol');
            $table->string('count_st');
            $table->string('pr_ves_h');
            $table->string('min_sec');
            $table->string('objem_brusa');
            $table->string('prim_ves_br');
            $table->string('rast_mej_doskami');
            $table->string('kol_dosok_obr');
            $table->string('area_dosok');
            $table->string('pr_ves_dosok');
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
        Schema::dropIfExists('project_roofs');
    }
}
