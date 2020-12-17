<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_quote', function (Blueprint $table) {
            // TRUCKING QUICK QUOTE
            $table->id();
            $table->string('trucking_first_name', 100);
            $table->string('trucking_middle_name', 100)->nullable();
            $table->string('trucking_last_name', 100);
            $table->string('trucking_email');
            $table->string('trucking_phone', 11);
            $table->enum('trucking_type', ['Quick Quote', 'Renewal']);
            $table->dateTime('trucking_coverage_at');
            $table->dateTime('created_at');

            // FILING NUMBERS
            $table->integer('filing_dot')->nullable();
            $table->integer('filing_ca')->nullable();
            $table->integer('filing_mcp')->nullable();
            $table->integer('filing_puc')->nullable();
            $table->integer('filing_tcp')->nullable();
            $table->string('filing_business_nature')->nullable();
            $table->string('filing_commodities_hauled')->nullable();
            $table->enum('filing_years_in_business', ['NEW VENTURE', '1 YEAR', '2 YEAR', '3 YEAR', '4 YEAR', '4+ YEAR']);
            $table->enum('filing_radius_of_operation', ['1 - 100', '101 - 500', '500+']);

            // INSURED SECTION
            $table->bigInteger('state_id')->unsigned();
            $table->string('insured_first_name', 100);
            $table->string('insured_middle_name', 100)->nullable();
            $table->string('insured_last_name', 100);
            $table->string('insured_business')->nullable();
            $table->integer('insured_tax_id')->nullable();
            $table->string('insured_dba')->nullable();
            $table->string('insured_garaging_address')->nullable();
            $table->boolean('insured_filing');
            $table->enum('insured_type', ['AZ DOT', 'CA DOT', 'NV DOT', 'OR DOT', 'TX DOT']);
            $table->integer('insured_zip')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('RESTRICT');

            // VEHICLES
            $table->tinyInteger('vehicles_trucks_count');
            $table->tinyInteger('vehicles_trailers_count');

            // MVRS
            $table->boolean('mvrs_owner_driven');
            $table->boolean('mvrs_number_of_drivers')->nullable();

            // BUSINESS
            $table->integer('business_liability');
            $table->integer('business_um');
            $table->integer('business_cargo')->nullable();
            $table->integer('business_ded');
            $table->boolean('business_reefer_breakdown');
            $table->integer('business_reefer_breakdown_ded');
            
            // ATTACHMENTS
            $table->text('comment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_quote');
    }
}
