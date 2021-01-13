@extends('layouts.app')

@section('title', "TRUCKING QUICK QUOTE")

@section('content')

<?php
// Vehicles
$vehicles = [];
foreach ($elements['vehicle'] as $row) {
    $rowCount = count($row);
    break;
}

for ($i = 0; $i < $rowCount; $i++) {
    foreach ($elements['vehicle'] as $col => $val) {
        $vehicles[$i][$col] = $val[$i] ?? null;                
    }
}

// Drivers
$drivers = [];
foreach ($elements['driver'] as $row) {
    $rowCount = count($row);
    break;
}

for ($i = 0; $i < $rowCount; $i++) {
    foreach ($elements['driver'] as $col => $val) {
        $drivers[$i][$col] = $val[$i] ?? null;                
    }
}
?>

<div class="print_area">

    <header class="row">
        <div class="col-4">Agency Name</div>
        <div class="col-8">Trucking Quote Application</div>
    </header>

    <section class="row">
        <article class="col-4">
            <div class="address">
                <p>EXCEL GENERAL INSURANCE AGENCY</p>
                <p>22222 - SHERMAN WAY # 100   CANOGA PARK ,   CA    91303</p>
            </div>
        </article>
        <article class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="col">SOURCE</td>
                        <td class="col">AGENT</td>
                        <td class="col">POLICY EFFECTIVE DATE</td>
                        <td class="col">Today DATE</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                        <td>{{$elements[2]->value ?? null}}</td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Insured Name</td>
                        <td>Company Name (DBA)</td>
                        <td>Years Prior Ins</td>
                        <td>Years In Bus</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $fullName = ($elements[4]->value ?? null) . " " . ($elements[5]->value ?? null) . " " . ($elements[6]->value ?? null); ?>
                        <td>{{$fullName}}</td>
                        <td>{{$elements[14]->value ?? null}}</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>
                    <tr class="thead">
                        <td>Operations</td>
                        <td>Telephone</td>
                        <td colspan="2">Email Address</td>
                    </tr>
                    <tr>
                        <td>--</td>
                        <td>{{$elements[7]->value ?? null}}</td>
                        <td colspan="2">{{$elements[8]->value ?? null}}</td>
                    </tr>
                    <tr class="thead">
                        <td class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>DOT#</td>
                                        <td>MC#</td>
                                        <td>CA#</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="no-border-b">
                                        <td>{{$elements[20]->value ?? null}}</td>
                                        <td>{{$elements[22]->value ?? null}}</td>
                                        <td>{{$elements[21]->value ?? null}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td colspan="2" class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>SSN / FEIN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>--</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>For Hire</td>
                                        <td>Private</td>
                                        <td>Non-Trucking</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2" style="width:33%">Street</td>
                                        <td style="width:15%">City</td>
                                        <td>State</td>
                                        <td style="width:15.8%">Zip</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thead"  style="width:10%">Mailing:</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td class="thead">Physical:</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td class="thead">Garaging:</td>
                                        <td>{{$elements[15]->value ?? null}}</td>
                                        <td>--</td>
                                        <td>{{$elements[16]->value ?? null}}</td>
                                        <td>{{$elements[17]->value ?? null}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td rowspan="2">RADIUS</td>
                        <td colspan="7">Radius by Percentage</td>
                        <td rowspan="2">Average</td>
                        <td rowspan="2">Longest</td>
                    </tr>
                    <tr>
                    <td>< 50 </td>
                        <td>51 - 100</td>
                        <td>101 - 200</td>
                        <td>201 - 300</td>
                        <td>301 - 500</td>
                        <td>501 - 1500</td>
                        <td>> 1500</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>100%</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="thead">
                        <td colspan="5">CITIES Traveled to</td>
                        <td colspan="5">STATES Traveled to</td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td colspan="5"></td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Commodities Hauled and Percentages</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$elements[26]->value ?? null}}</td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="9">Schedule of Drivers</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="thead">
                        <td>Name</td>
                        <td>DOB</td>
                        <td>LICENSE</td>
                        <td>State</td>
                        <td>Class</td>
                        <td>Yrs Exp</td>
                        <td>Hire Date</td>
                        <td>Accident(s)</td>
                        <td>Violation(s)</td>
                    </tr>

                    @foreach($drivers as $driver)
                    <tr>
                        <?php $fullName = ($driver[42]->value ?? null) . " " . ($driver[43]->value ?? null); ?>
                        <td>{{$fullName}}</td>
                        <td>{{$driver[44]->value ?? null}}</td>
                        <td>{{$driver[45]->value ?? null}}</td>
                        <td>{{$driver[46]->value ?? null}}</td>
                        <td>{{$driver[47]->value ?? null}}</td>
                        <td>{{$driver[48]->value ?? null}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </section>
    
    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="7">SCHEDULE OF VEHICLES</td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td>Make</td>
                        <td>Type</td>
                        <td>VIN</td>
                        <td>Value</td>
                        <td>G.V.W</td>
                        <td>Lienholder/Notes</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$vehicle[35]->value ?? null}}</td>
                        <td>{{$vehicle[36]->value ?? null}}</td>
                        <td>{{$vehicle[37]->value ?? null}}</td>
                        <td>{{$vehicle[38]->value ?? null}}</td>
                        <td>{{$vehicle[39]->value ?? null}}</td>
                        <td>{{$vehicle[40]->value ?? null}}</td>
                        <td>{{$vehicle[41]->value ?? null}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Prior Insurance Carrier</td>
                        <td>Effective</td>
                        <td>Expiration</td>
                        <td>Policy Number</td>
                        <td>Premium</td>
                        <td>#Losses</td>
                        <td>Liability Losses</td>
                        <td>PID Losses</td>
                        <td>#Units</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="thead">
                        <td colspan="9">ADDITIONAL LOSS INFORMATION</td>
                    </tr>
                    <tr>
                        <td colspan="9"></td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="4">Requested Limits</td>
                    </tr>
                    <tr>
                        <td>Auto Liability - CSL</td>
                        <td>Auto Liability - Deductible</td>
                        <td>Uninsured Motorist-Property Damage</td>
                        <td>Uninsured Motorist- Bodily Injury</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="thead">
                        <td>Motor Truck Cargo / On The Hook</td>
                        <td>Motor Truck Cargo-Deductible</td>
                        <td>Reefer Breakdown- Yes/No</td>
                        <td>Reefer Breakdown- Yes/No</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="thead">
                        <td>Physical Damage- Truck (s)</td>
                        <td>Physical Damage- Trailer(s)</td>
                        <td>Physical Damage-Deductible</td>
                        <td>Trailer Interchange</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="thead">
                        <td>Garage liability</td>
                        <td>Garage liability - Deductible</td>
                        <td>Garage Keeper</td>
                        <td>Garage Keeper</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </article>
    </section>

    <p class="print-btn">
        <button class="btn btn-success">PRINT</button>
    </p>
</div>
@endsection


@section('scripts')
<script type="text/javascript">
$('.print-btn .btn').click(function(){
    window.print();
});
</script>
@endsection