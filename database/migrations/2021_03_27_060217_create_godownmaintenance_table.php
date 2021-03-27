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
            $table->boolean('cool_area_compliance');
            $table->string('cool_area_comments');
            $table->string('cool_area_corrective_action');
            $table->date('cool_area_corrective_date');
            $table->boolean('dry_place_compliance');
            $table->string('dry_place_comments');
            $table->string('dry_place_corrective_action');
            $table->date('dry_place_corrective_date');
            $table->boolean('free_from_dirt_cobwebs_compliance');
            $table->string('free_from_dirt_cobwebs_comments');
            $table->string('free_from_dirt_cobwebs_corrective_action');
            $table->date('free_from_dirt_cobwebs_corrective_date');
            $table->boolean('away_from_smell_compliance');
            $table->string('away_from_smell_comments');
            $table->string('away_from_smell_corrective_action');
            $table->date('away_from_smell_corrective_date');
            $table->boolean('fifo_maintained_compliance');
            $table->string('fifo_maintained_comments');
            $table->string('fifo_maintained_corrective_action');
            $table->date('fifo_maintained_corrective_date');
            $table->boolean('pets_control_in6months_compliance');
            $table->string('pets_control_in6months_comments');
            $table->string('pets_control_in6months_corrective_action');
            $table->date('pets_control_in6months_corrective_date');
            $table->boolean('recommended_height_compliance');
            $table->string('recommended_height_comments');
            $table->string('recommended_height_corrective_action');
            $table->date('recommended_height_corrective_date');
            $table->boolean('proper_illiminated_compliance');
            $table->string('proper_illiminated_comments');
            $table->string('proper_illiminated_corrective_action');
            $table->date('proper_illiminated_corrective_date');
            $table->boolean('sagregated_from_expired_dmg_compliance');
            $table->string('sagregated_from_expired_dmg_comments');
            $table->string('sagregated_from_expired_dmg_corrective_action');
            $table->date('sagregated_from_expired_dmg_corrective_date');
            $table->boolean('sign_put_up_compliance');
            $table->string('sign_put_up_comments');
            $table->string('sign_put_up_corrective_action');
            $table->date('sign_put_up_corrective_date');
            $table->boolean('loading_receipt_quality_compliance');
            $table->string('loading_receipt_quality_comments');
            $table->string('loading_receipt_quality_corrective_action');
            $table->date('loading_receipt_quality_corrective_date');
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
