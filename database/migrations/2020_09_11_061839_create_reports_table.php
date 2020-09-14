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
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('adderss')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->integer('postal_code')->nullable();
            $table->text('country')->nullable();
            $table->text('geolocation')->nullable();
            $table->text('phone')->nullable();
            $table->text('other_phone')->nullable();
            $table->text('csan_id')->nullable();
            $table->text('point_of_contact_name')->nullable();
            $table->text('location_added_by')->nullable();
            $table->text('website')->nullable();
            $table->text('point_of_contact_email')->nullable();
            $table->text('audit_date')->nullable();
            $table->text('audit_stage')->nullable();
            $table->text('assigned_auditor_name')->nullable();
            $table->text('wco')->nullable();
            $table->text('hole_certification')->nullable();
            $table->text('has_the_facility')->nullable();
            $table->text('primary_industry')->nullable();
            $table->text('product_type')->nullable();
            $table->integer('year_established')->nullable();
            $table->integer('grounds_size')->nullable();
            $table->integer('number_of_buildings')->nullable();
            $table->integer('facility_size')->nullable();
            $table->integer('number_of_access')->nullable();
            $table->text('hours_of_operation')->nullable();
            $table->integer('number_of_employees')->nullable();
            $table->integer('number_of_contract_employees')->nullable();
            $table->text('number_of_security_guards')->nullable();
            $table->integer('number_of_migrant_workers')->nullable();
            $table->text('annual_revenue')->nullable();
            $table->text('currency')->nullable();
            $table->text('number_of_shipments_to_usa')->nullable();
            $table->text('port_of_embarkation')->nullable();
            $table->text('port_of_arrival')->nullable();
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
