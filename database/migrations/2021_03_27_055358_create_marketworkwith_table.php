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
            $table->bigInteger('market_report_id')->nullable();
            $table->string('market_beat_visited')->nullable();
            $table->decimal('market_daily_avg')->nullable();
            $table->decimal('market_day_tgt')->nullable();
            $table->decimal('market_asking_rate')->nullable();
            $table->boolean('market_spo_knwl_prep')->nullable();
            $table->integer('market_total_outlets')->nullable();
            $table->integer('market_outlets_worked')->nullable();
            $table->integer('market_eff_calls')->nullable();
            $table->decimal('market_total_memo_value')->nullable();
            $table->decimal('market_av_lpc')->nullable();
            $table->boolean('market_9steps')->nullable();
            $table->decimal('market_focus_sku')->nullable();
            $table->boolean('market_samples')->nullable();
            $table->boolean('market_tab_used')->nullable();
            $table->boolean('market_sfa_compliance')->nullable();
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
