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
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Type', 'values' => json_encode(["Quick Quote", "Renewal"]), 'multiple' => false, 'group_id' => null],
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
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'state', 'values' => json_encode(["ARIZONA","CALIFORNIA","NEVADA","OREGAN","TEXAS"]), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'zip', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'filing', 'values' => json_encode(['YES', 'NO']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'type', 'values' => json_encode(['AZ DOT', 'CA DOT', 'NV DOT', 'OR DOT', 'TX DOT']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'dot#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'ca#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'mcp#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'puc#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'tcp#', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'nature of business', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'commodities hauled', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'years in business', 'values' => json_encode(["NEW VENTURE", "1 YEAR", "2 YEARS", "3 YEARS", "4 YEARS", "4+ YEARS"]), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'radius of operation', 'values' => json_encode(["1 - 100", "101 - 500", "500 +"]), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Owner driven', 'values' => json_encode(['YES', 'NO']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Number of drivers', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Liability', 'values' => json_encode(['$750000', '$1000000', '$1500000', '$2000000']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'um', 'values' => json_encode(['$30000', '$60000', '$500000', '$750000', '$1000000']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'cargo ($)', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'ded', 'values' => json_encode(['$1000','$1500','$2000','$2500','$3000']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Reefer breakdown', 'values' => json_encode(['YES', 'NO']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Reefer breakdown ded', 'values' => json_encode(['$1000','$1500','$2000','$2500','$3000']), 'multiple' => false, 'group_id' => null],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'Comment', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'vehicle year', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'make model', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'body type', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'vin', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'gvw', 'values' => json_encode(['0-26000 lbs', '26001-40000 lbs', '40001-80000 lbs', 'over 80000 lbs']), 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'value ($)', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'ded', 'values' => json_encode(['$1000','$1500','$2000','$2500','$3000']), 'multiple' => true,'group_id' => 'vehicle'],            
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'first name', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'last name', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'date of birth', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'driving license', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'state/provice', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'class', 'values' => json_encode(['COMMERCIAL', 'REGULAR', 'EXTENDED']), 'multiple' => true,'group_id' => 'driver'],
            ['template' => 'trucking_quick_quote', 'name' => null, 'alias' => 'years of experience', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
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
