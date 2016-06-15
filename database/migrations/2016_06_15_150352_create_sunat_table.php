<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSunatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ddp_numruc');
            $table->string('desc_dep');
            $table->string('desc_prov');
            $table->string('desc_dist');
            $table->string('ddp_nombre');
            $table->string('desc_estado');
            $table->string('desc_identi');
            $table->string('desc_tpoemp');
            $table->string('desc_flag22');
            $table->string('ddp_tipvia');
            $table->string('ddp_nomvia');
            $table->string('ddp_nomzon');
            $table->string('ddp_refer1');
            $table->string('desc_ciiu');
            $table->string('elimin');

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
        Schema::drop('sunat');
    }
}
