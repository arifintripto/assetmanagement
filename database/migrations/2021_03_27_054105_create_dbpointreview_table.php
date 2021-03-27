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
//            $table->bigInteger('report_id');
            $table->decimal('db_avg_sale');
            $table->decimal('db_ytd_gr_percent')->default(0);
            $table->decimal('month_target')->default(0);
            $table->decimal('mtd_pry')->default(0);
            $table->decimal('mtd_ims')->default(0);
            $table->decimal('stock_value')->default(0);
            $table->integer('sku_carried')->default(0);
            $table->integer('sku_stockout')->default(0);
            $table->boolean('wh_mgmt');
            $table->boolean('fifo')->default(0);
            $table->boolean('stock_register')->default(0);
            $table->decimal('damage_stk_value')->default(0);
            $table->boolean('damage_stk_storage')->default(0);
            $table->boolean('beat_plan')->default(0);
            $table->boolean('printer_status')->default(0);
            $table->boolean('dms_implementation')->default(0);
            $table->integer('no_of_sub_db')->default(0);
            $table->decimal('sub_db_avg_sale')->default(0);
            $table->decimal('sub_db_month_sale')->default(0);
            $table->integer('sub_db_av_sku')->default(0);
            $table->decimal('sub_db_bills_per_month')->default(0);
            $table->decimal('sub_db_month_target')->default(0);
            $table->decimal('sub_db_mtd_lifting')->default(0);
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
