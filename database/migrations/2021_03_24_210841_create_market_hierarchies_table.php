<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketHierarchiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_hierarchies', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('parent_code');
            $table->string('ff_code');
            $table->string('parent_ff_code');
            $table->string('area');
            $table->integer('level');
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
        Schema::dropIfExists('market_hierarchies');
    }
}
