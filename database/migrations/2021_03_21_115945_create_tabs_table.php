<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabs', function (Blueprint $table) {
            $table->id();
            $table->string('tab_model');
            $table->string('tab_name');
            $table->string('tab_serial');
            $table->string('tab_imei');
            $table->string('sim_no');
            $table->string('sim_serial_no');
            $table->string('pin1');
            $table->string('pin2');
            $table->string('puk1');
            $table->string('puk2');
            $table->string('spo_code');
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
        Schema::dropIfExists('tabs');
    }
}
