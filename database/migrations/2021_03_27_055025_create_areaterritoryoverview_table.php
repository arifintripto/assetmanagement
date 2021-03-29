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
            $table->bigInteger('area_report_id')->nullable();
            $table->decimal('area_avg_sale')->nullable();
            $table->decimal('area_ytd_gr_percent')->nullable();
            $table->decimal('area_month_target')->nullable();
            $table->decimal('area_mtd_pry')->nullable();
            $table->decimal('area_mtd_ims')->nullable();
            $table->decimal('area_stock_value')->nullable();
            $table->integer('area_stock_days')->nullable();
            $table->decimal('area_focus_sku_percent_ach')->nullable();
            $table->integer('area_sku_stockout')->nullable();
            $table->boolean('area_spo_tgt_knowledge')->nullable();
            $table->boolean('area_morn_or_eve_meeting')->nullable();
            $table->boolean('area_sfa_compliance')->nullable();
            $table->boolean('area_spo_rfts_knowledge')->nullable();
            $table->boolean('area_dsr_status')->nullable();
            $table->boolean('area_sfa_tabs')->nullable();
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
