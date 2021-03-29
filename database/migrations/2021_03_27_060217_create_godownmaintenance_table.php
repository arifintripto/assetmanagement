<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodownmaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godownmaintenance', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('godown_report_id')->nullable();
            $table->boolean('cool_area_compliance')->nullable();
            $table->string('cool_area_comments')->nullable();
            $table->string('cool_area_corrective_action')->nullable();
            $table->date('cool_area_corrective_date')->nullable();
            $table->boolean('dry_place_compliance')->nullable();
            $table->string('dry_place_comments')->nullable();
            $table->string('dry_place_corrective_action')->nullable();
            $table->date('dry_place_corrective_date')->nullable();
            $table->boolean('free_from_dirt_cobwebs_compliance')->nullable();
            $table->string('free_from_dirt_cobwebs_comments')->nullable();
            $table->string('free_from_dirt_cobwebs_corrective_action')->nullable();
            $table->date('free_from_dirt_cobwebs_corrective_date')->nullable();
            $table->boolean('away_from_smell_compliance')->nullable();
            $table->string('away_from_smell_comments')->nullable();
            $table->string('away_from_smell_corrective_action')->nullable();
            $table->date('away_from_smell_corrective_date')->nullable();
            $table->boolean('fifo_maintained_compliance')->nullable();
            $table->string('fifo_maintained_comments')->nullable();
            $table->string('fifo_maintained_corrective_action')->nullable();
            $table->date('fifo_maintained_corrective_date')->nullable();
            $table->boolean('pets_control_in6months_compliance')->nullable();
            $table->string('pets_control_in6months_comments')->nullable();
            $table->string('pets_control_in6months_corrective_action')->nullable();
            $table->date('pets_control_in6months_corrective_date')->nullable();
            $table->boolean('recommended_height_compliance')->nullable();
            $table->string('recommended_height_comments')->nullable();
            $table->string('recommended_height_corrective_action')->nullable();
            $table->date('recommended_height_corrective_date')->nullable();
            $table->boolean('proper_illiminated_compliance')->nullable();
            $table->string('proper_illiminated_comments')->nullable();
            $table->string('proper_illiminated_corrective_action')->nullable();
            $table->date('proper_illiminated_corrective_date')->nullable();
            $table->boolean('sagregated_from_expired_dmg_compliance')->nullable();
            $table->string('sagregated_from_expired_dmg_comments')->nullable();
            $table->string('sagregated_from_expired_dmg_corrective_action')->nullable();
            $table->date('sagregated_from_expired_dmg_corrective_date')->nullable();
            $table->boolean('sign_put_up_compliance')->nullable();
            $table->string('sign_put_up_comments')->nullable();
            $table->string('sign_put_up_corrective_action')->nullable();
            $table->date('sign_put_up_corrective_date')->nullable();
            $table->boolean('loading_receipt_quality_compliance')->nullable();
            $table->string('loading_receipt_quality_comments')->nullable();
            $table->string('loading_receipt_quality_corrective_action')->nullable();
            $table->date('loading_receipt_quality_corrective_date')->nullable();
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
        Schema::dropIfExists('godownmaintenance');
    }
}
