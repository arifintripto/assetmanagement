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
            $table->string('report_date');
            $table->boolean('report_asm_rsm')->default(1);
            $table->string('report_area');
            $table->string('report_asm');
            $table->string('report_territory');
            $table->string('report_tso');
            $table->string('report_town');
            $table->string('report_spo');
            $table->string('report_db');
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
