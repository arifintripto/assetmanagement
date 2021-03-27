<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreedactionpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreedactionpoints', function (Blueprint $table) {
            $table->id();
            $table->string('db_point_actions_agreed');
            $table->string('db_point_responsibility');
            $table->date('db_point_timeline');
            $table->string('sub_db_point_actions_agreed');
            $table->string('sub_db_point_responsibility');
            $table->date('sub_db_point_timeline');
            $table->string('overview_actions_agreed');
            $table->string('overview_responsibility');
            $table->date('overview_timeline');
            $table->string('processes_actions_agreed');
            $table->string('processes_responsibility');
            $table->date('processes_timeline');
            $table->string('mkt_work_actions_agreed');
            $table->string('mkt_work_responsibility');
            $table->date('mkt_work_timeline');
            $table->string('people_actions_agreed');
            $table->string('people_responsibility');
            $table->date('people_timeline');
            $table->string('other_actions_agreed');
            $table->string('other_responsibility');
            $table->date('other_timeline');
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
        Schema::dropIfExists('agreedactionpoints');
    }
}
