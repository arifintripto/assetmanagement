<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlltabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alltabs', function (Blueprint $table) {
            $table->id();
            $table->string('rsm_area');
            $table->string('rsm_code');
            $table->string('rsm_name');
            $table->string('rsm_mobile');
            $table->string('asm_area');
            $table->string('asm_code');
            $table->string('asm_name');
            $table->string('asm_mobile');
            $table->string('tt');
            $table->string('tso_code');
            $table->string('tso_name');
            $table->string('tso_mobile');
            $table->string('tso_alt_mobile');
            $table->string('sdb_cd_code');
            $table->string('sdb_cd_name');
            $table->string('db_code');
            $table->string('db_name');
            $table->string('db_type');
            $table->string('ship_to_party_name');
            $table->string('tab_model');
            $table->string('tab_name');
            $table->string('tab_serial');
            $table->string('tab_imei');
            $table->string('sim_no');
            $table->string('sim_serial_no');
            $table->integer('pin1');
            $table->integer('pin2');
            $table->integer('puk1');
            $table->integer('puk2');
            $table->string('spo_route');
            $table->string('spo_code');
            $table->string('spo_name');
            $table->string('spo_nid_no');
            $table->string('spo_type');
            $table->string('spo_mobile');
            $table->string('spo_alt_mobile');
            $table->string('power_bank_serial_no');
            $table->string('status');
            $table->string('knox_status');
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
        Schema::dropIfExists('alltabs');
    }
}
