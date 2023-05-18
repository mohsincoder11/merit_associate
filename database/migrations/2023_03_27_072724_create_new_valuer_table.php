<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewValuerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_valuer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact_no');
            $table->integer('property_type_id');
            $table->string('property_address');
            $table->string('address');
            $table->string('road_name');
            $table->string('colony');
            $table->string('pin_code');
            $table->string('landmark');
            $table->string('meter_no');
            $table->string('plot_area');
            $table->string('up_area');
            $table->string('GF');
            $table->string('FF');
            $table->string('SF');
            $table->string('TF');
            $table->string('occupancy_status');
            $table->string('occupied_by');
            $table->string('four_borders');
            $table->string('whether_boundaries_matching');
            $table->string('rate_range');
            $table->string('plot_range');
            $table->string('road_type');
            $table->string('road_width_in_feet');
            $table->string('type_of_structure');
            $table->string('remark_on_boundaries_matching');
            $table->double('lat');
            $table->double('long');
            $table->string('construction_stage');
            $table->string('side_marginal_distance_in_feet');
            $table->string('discription_of_property');
            $table->string('person_met_at_site');
            $table->string('relation_with_owner');
            $table->string('remark_on_property');
            $table->string('deviation');
            $table->string('rate_referenace');
            $table->date('date_of_visit');
            $table->string('name_of_FE_visited_the_property');
            $table->string('location');
            $table->string('categoty');
            $table->string('tag');
            $table->string('image');
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
        Schema::dropIfExists('new_valuer');
    }
}
