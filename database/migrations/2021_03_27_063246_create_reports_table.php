<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_date')->nullable();
            $table->boolean('report_asm_rsm')->default(1)->nullable();
            $table->string('report_area')->nullable();
            $table->string('report_asm')->nullable();
            $table->string('report_territory')->nullable();
            $table->string('report_tso')->nullable();
            $table->string('report_town')->nullable();
            $table->string('report_spo')->nullable();
            $table->string('report_db')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
