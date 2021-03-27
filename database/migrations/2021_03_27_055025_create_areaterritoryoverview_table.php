<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaterritoryoverviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areaterritoryoverview', function (Blueprint $table) {
            $table->id();
//            $table->boolean('asm_or_tsm');
            $table->decimal('avg_sale');
            $table->decimal('ytd_gr_percent');
            $table->decimal('month_target');
            $table->decimal('mtd_pry');
            $table->decimal('mtd_ims');
            $table->decimal('stock_value');
            $table->integer('stock_days');
            $table->decimal('focus_sku_percent_ach');
            $table->integer('sku_stockout');
            $table->boolean('spo_tgt_knowledge');
            $table->boolean('morn_or_eve_meeting');
            $table->boolean('sfa_compliance');
            $table->boolean('spo_rfts_knowledge');
            $table->boolean('dsr_status');
            $table->boolean('sfa_tabs');
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
        Schema::dropIfExists('areaterritoryoverview');
    }
}
