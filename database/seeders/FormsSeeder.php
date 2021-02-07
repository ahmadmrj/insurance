<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = 'trucking_quick_quote';

        DB::table('forms')->insert([
            /* Section 1 */
            ['template' => $template, 'name' => null, 'alias' => 'Source Code', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            // Submitter information
            ['template' => $template, 'name' => null, 'alias' => 'First name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Middle name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Last name', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            ['template' => $template, 'name' => null, 'alias' => 'Email', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Policy Effective Date', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Today Date', 'values' => null, 'multiple' => false, 'group_id' => null],

            /* Section 2 */
            // Insured name
            ['template' => $template, 'name' => null, 'alias' => 'First name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Middle name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Last name', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            ['template' => $template, 'name' => null, 'alias' => 'Business name', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Telephone', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Email', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Establish year', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Operation classification', 'values' => json_encode(['Private', 'Non-tracking', 'For Hire']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'State', 'values' => json_encode(['AZ', 'CA', 'NV', 'TX', 'OR']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Carrier operation', 'values' => json_encode(['Interstate', 'Intrastate (HM)', 'Intrastate (Non HM)']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'DOT', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'FEIN/TAX ID', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            // Insured addresses
            ['template' => $template, 'name' => null, 'alias' => 'State', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'City', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Street', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Zip', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'State', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'City', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Street', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Zip', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Commodities Hauled and Percentages', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Radius of operation', 'values' => json_encode(['1-100', '101-300', '301-500', '501-1500', '1500+']), 'multiple' => false, 'group_id' => null],

            // Section 3
            ['template' => $template, 'name' => null, 'alias' => 'vehicle year', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'make model', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'body type', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'vin', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'gvw', 'values' => json_encode(['0-10000 lbs', '10001-26000 lbs', '26001-45000 lbs', '45001-65000 lbs', '65001-80000 lbs']), 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'value ($)', 'values' => null, 'multiple' => true, 'group_id' => 'vehicle'],
            ['template' => $template, 'name' => null, 'alias' => 'Lienholder/Notes', 'values' => null, 'multiple' => true,'group_id' => 'vehicle'],

            // Section 4
            ['template' => $template, 'name' => null, 'alias' => 'first name', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'last name', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'dob', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'license no.', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'state', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'class', 'values' => json_encode(['A', 'B', 'C']), 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'yrs exp', 'values' => null, 'multiple' => true,'group_id' => 'driver'],

            ['template' => $template, 'name' => null, 'alias' => 'States traveled to', 'values' => null, 'multiple' => false, 'group_id' => null],

            // Section 5
            ['template' => $template, 'name' => null, 'alias' => 'Prior Insurance Carrier', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Effective', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Expiration', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Policy Number', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Premium', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => '#Losses', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Liability Losses', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'PD Losses', 'values' => null, 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => '#Units', 'values' => null, 'multiple' => false, 'group_id' => null],
            
            // Section6
            ['template' => $template, 'name' => null, 'alias' => 'Auto Liability - CSL', 'values' => json_encode(['$750,000', '$1000,000', '$1,500,000', '$2,000,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Reefer Breakdown', 'values' => json_encode(['Yes' => 'Yes', 'No' => 'No']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Uninsured Motorist- Bodily Injury', 'values' => json_encode(['30,000/60,000', '100,000', '300,000', '750,000', '1,000,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Motor Truck Cargo / On The Hook', 'values' => json_encode(['N/A', '25,000', '50,000', '100,000', '150,000', '200,000', '250,000', '300,000', '500,000', '750,000', '1,000,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Medical Payments', 'values' => json_encode(['N/A', '5,000', '10,000', '15,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Trailer Interchange', 'values' => json_encode(['N/A', '25,000', '50,000', '75,000', '100,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Garage liability', 'values' => json_encode(['N/A', '500,000/1,000,000', '1,000,000/2,000,000', '2,000,000/4,000,000']), 'multiple' => false, 'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'Garage Keeper', 'values' => json_encode(['N/A', '50,000', '100,000', '200,000', '300,000']), 'multiple' => false, 'group_id' => null],
            
            // Section 4-1
            ['template' => $template, 'name' => null, 'alias' => 'Hire date', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'Accident(s)', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'Violation(s)', 'values' => null, 'multiple' => true,'group_id' => 'driver'],
            ['template' => $template, 'name' => null, 'alias' => 'Position', 'values' => json_encode(['Owner', 'Driver', 'Officer']), 'multiple' => true,'group_id' => 'driver'],

            ['template' => $template, 'name' => null, 'alias' => 'State filing#', 'values' => null, 'multiple' => false,'group_id' => null],
            ['template' => $template, 'name' => null, 'alias' => 'MC#', 'values' => null, 'multiple' => false,'group_id' => null],
            
            ['template' => $template, 'name' => null, 'alias' => 'Cargo deductable', 'values' => json_encode(['1,000', '2,500', '5,000']), 'multiple' => false,'group_id' => null],

            ['template' => $template, 'name' => null, 'alias' => 'General liability', 'values' => json_encode(['N/A', '500,000/1,000,000', '1,000,000/2,000,000', '2,000,000/4,000,000']), 'multiple' => false,'group_id' => null],

            ['template' => $template, 'name' => null, 'alias' => 'Entity type', 'values' => json_encode(['LLC', 'INC', 'DBA', 'LLP', 'GP', 'SB']), 'multiple' => false,'group_id' => null],


        ]);
            
    }
}
