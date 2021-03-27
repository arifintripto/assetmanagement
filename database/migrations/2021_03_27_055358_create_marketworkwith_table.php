<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketworkwithTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketworkwith', function (Blueprint $table) {
            $table->id();
            $table->string('beat_visited');
            $table->decimal('daily_avg');
            $table->decimal('day_tgt');
            $table->decimal('asking_rate');
            $table->boolean('spo_knwl_prep');
            $table->integer('total_outlets');
            $table->integer('outlets_worked');
            $table->integer('eff_calls');
            $table->decimal('total_memo_value');
            $table->decimal('av_lpc');
            $table->boolean('9steps');
            $table->decimal('focus_sku');
            $table->boolean('samples');
            $table->boolean('tab_used');
            $table->boolean('sfa_compliance');
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
        Schema::dropIfExists('marketworkwith');
    }
}
