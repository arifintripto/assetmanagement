<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('type')->default(0);
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('mh_id')->constrained('market_hierarchies');
            $table->string('mobile');
            $table->string('alt_mobile')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('nid');
            $table->date('joining_date');
            $table->string('code');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
