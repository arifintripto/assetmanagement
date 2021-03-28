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
            $table->bigInteger('agreed_report_id')->default(1);
            $table->string('db_point_actions_agreed')->nullable();
            $table->integer('db_point_responsibility')->nullable();
            $table->date('db_point_timeline')->nullable();
            $table->string('sub_db_point_actions_agreed')->nullable();
            $table->integer('sub_db_point_responsibility')->nullable();
            $table->date('sub_db_point_timeline')->nullable();
            $table->string('overview_actions_agreed')->nullable();
            $table->integer('overview_responsibility')->nullable();
            $table->date('overview_timeline')->nullable();
            $table->string('processes_actions_agreed')->nullable();
            $table->integer('processes_responsibility')->nullable();
            $table->date('processes_timeline')->nullable();
            $table->string('mkt_work_actions_agreed')->nullable();
            $table->integer('mkt_work_responsibility')->nullable();
            $table->integer('mkt_work_timeline')->nullable();
            $table->string('people_actions_agreed')->nullable();
            $table->integer('people_responsibility')->nullable();
            $table->date('people_timeline')->nullable();
            $table->string('other_actions_agreed')->nullable();
            $table->integer('other_responsibility')->nullable();
            $table->date('other_timeline')->nullable();
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
