<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbpointreviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dbpointreview', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('db_report_id')->nullable();
            $table->decimal('db_avg_sale')->nullable();
            $table->decimal('db_ytd_gr_percent')->nullable();
            $table->decimal('db_month_target')->nullable();
            $table->decimal('db_mtd_pry')->nullable();
            $table->decimal('db_mtd_ims')->nullable();
            $table->decimal('db_stock_value')->nullable();
            $table->integer('db_sku_carried')->nullable();
            $table->integer('db_sku_stockout')->nullable();
            $table->boolean('db_wh_mgmt')->nullable();
            $table->boolean('db_fifo')->nullable();
            $table->boolean('db_stock_register')->nullable();
            $table->decimal('db_damage_stk_value')->nullable();
            $table->boolean('db_damage_stk_storage')->nullable();
            $table->boolean('db_beat_plan')->nullable();
            $table->boolean('db_printer_status')->nullable();
            $table->boolean('db_dms_implementation')->nullable();
            $table->integer('db_no_of_sub_db')->nullable();
            $table->decimal('db_sub_db_avg_sale')->nullable();
            $table->decimal('db_sub_db_month_sale')->nullable();
            $table->integer('db_sub_db_av_sku')->nullable();
            $table->decimal('db_sub_db_bills_per_month')->nullable();
            $table->decimal('db_sub_db_month_target')->nullable();
            $table->decimal('db_sub_db_mtd_lifting')->nullable();
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
        Schema::dropIfExists('dbpointreview');
    }
}
