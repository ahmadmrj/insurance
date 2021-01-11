<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SeedForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('forms')->insert([
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Type', 'values' => '{"0": "Quick Quote", "1": "Renewal"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'today\'s date', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'coverage date', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'first name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'middle name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'last name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'phone', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'email', 'values' => null, 'multiple' => false, 'group_id' => null],

            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'first name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'middle name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'last name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'insured business', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'tax id', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'insured dba', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'garbaging address', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'state', 'values' => '{"ARIZONA":"ARIZONA","CALIFORNIA":"CALIFORNIA","NEVADA":"NEVADA","OREGAN":"OREGAN","TEXAS":"TEXAS"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'zip', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'filing', 'values' => '{"YES":"YES", "NO":"NO"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'type', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'dot#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'ca#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'mcp#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'puc#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'tcp#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'nature of business', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'commodities hauled', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'years in business', 'values' => '{"NEW VENTURE":"NEW VENTURE","1 YEAR":"1 YEAR","2 YEARS":"2 YEARS","3 YEARS":"3 YEARS","4 YEARS":"4 YEARS","4+ YEARS":"4+ YEARS"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'radius of operation', 'values' => '{"1-100":"1 - 100","101-500":"101 - 500","500+":"500 +"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Owner driven', 'values' => '{"YES":"YES","NO":"NO"}', 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Number of drivers', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Liability', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Reefer breakdown', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Reefer breakdown ded', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => '1- Attach MVRs for all driver(s) and owner(s) no more than 30 days old. 2- Attach Loss Report(s) for all Accident(s)', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'vehicle year', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'make model', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'body type', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'vin', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'gvw', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'value ($)', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle_truck'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'ded', 'values' => null, 'multiple' => true,'group_id' => 'vehicle_truck'],
        ]);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('forms')->truncate();
    }
}
