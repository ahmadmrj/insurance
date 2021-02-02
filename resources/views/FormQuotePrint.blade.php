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
    <section class="tools">
        <ul>
            <li class="print-btn"><i class="bi-printer"></i></li>
        </ul>
    </section>

    <header>
        <section class="row">
            <div class="col-12 form-title">Trucking Quote Application</div>
        </section>
    </header>

    <section class="row">
        <article class="col-3">
            <img class="logo" src="{{ asset('images/logo.png') }}" />
        </article>
        <article class="col-9">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="col">SOURCE CODE</td>
                        <td class="col">SUBMITTER INFORMATION</td>
                        <td class="col">EMAIL</td>
                        <td class="col">POLICY EFFECTIVE DATE</td>
                        <td class="col">TODAY DATE</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$elements[1]->value ?? null}}</td>
                        <?php 
                            $submitter = [
                                $elements[2]->value ?? null,
                                $elements[3]->value ?? null,
                                $elements[4]->value ?? null,
                            ];
                            $submitter = implode(" ", $submitter);
                        ?>
                        <td>{{$submitter}}</td>
                        <td>{{$elements[5]->value ?? null}}</td>
                        <td>{{$elements[6]->value ?? null}}</td>
                        <td>{{$elements[7]->value ?? null}}</td>
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
                        <td>Business Name</td>
                        <td>Telephone</td>
                        <td>Email</td>
                        <td>Establish Year</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $fullName = ($elements[8]->value ?? null) . " " . ($elements[9]->value ?? null) . " " . ($elements[10]->value ?? null); ?>
                        <td>{{$fullName}}</td>
                        <td>{{$elements[11]->value ?? null}}</td>
                        <td>{{$elements[12]->value ?? null}}</td>
                        <td>{{$elements[13]->value ?? null}}</td>
                        <td>{{$elements[14]->value ?? null}}</td>
                    </tr>
                    <tr class="thead">
                        <td colspan="2">Operation Classification</td>
                        <td colspan="2">State</td>
                        <td>Carrier Operation</td>
                    </tr>
                    <tr>
                        <td colspan="2">{{$elements[15]->value ?? null}}</td>
                        <td colspan="2">{{$elements[16]->value ?? null}}</td>
                        <td>{{$elements[17]->value ?? null}}</td>
                    </tr>
                    <tr class="thead">
                        <td colspan="3">DOT#</td>
                        <td colspan="3">FEIN/TAX ID</td>
                    </tr>
                    <tr>
                        <td colspan="3">{{$elements[18]->value ?? null}}</td>    
                        <td colspan="2">{{$elements[19]->value ?? null}}</td>
                    </tr>
                    <tr>
                        <td colspan="6" class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="15%">Address</td>
                                        <td style="width:33%">Street</td>
                                        <td style="width:15%">City</td>
                                        <td>State</td>
                                        <td style="width:15.8%">Zip</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thead"  style="width:10%">Mailing</td>
                                        <td>{{$elements[22]->value ?? null}}</td>
                                        <td>{{$elements[21]->value ?? null}}</td>
                                        <td>{{$elements[20]->value ?? null}}</td>
                                        <td>{{$elements[23]->value ?? null}}</td>
                                    </tr>
                                    <tr>
                                        <td class="thead">Physical/Garaging</td>
                                        <td>{{$elements[26]->value ?? null}}</td>
                                        <td>{{$elements[25]->value ?? null}}</td>
                                        <td>{{$elements[24]->value ?? null}}</td>
                                        <td>{{$elements[27]->value ?? null}}</td>
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
                <tbody>
                    <tr class="thead">
                        <td width="15%">RADIUS</td>
                        <td>STATES Traveled to</td>
                    </tr>
                    <tr>
                        <td>{{$elements[29]->value ?? null}}</td>
                        <td>{{$elements[44]->value ?? null}}</td>
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
                        <td>{{$elements[28]->value ?? null}}</td>
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
                        <td>{{$elements[45]->value ?? null}}</td>
                        <td>{{$elements[46]->value ?? null}}</td>
                        <td>{{$elements[47]->value ?? null}}</td>
                        <td>{{$elements[48]->value ?? null}}</td>
                        <td>{{$elements[49]->value ?? null}}</td>
                        <td>{{$elements[50]->value ?? null}}</td>
                        <td>{{$elements[51]->value ?? null}}</td>
                        <td>{{$elements[52]->value ?? null}}</td>
                        <td>{{$elements[53]->value ?? null}}</td>
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
                </thead>
                <tbody>
                    <tr class="thead">
                        <td>Auto Liability - CSL</td>
                        <td>Reefer Breakdown- Yes/No</td>
                        <td>Uninsured Motorist- Bodily Injury</td>
                    </tr>
                    <tr>
                        <td>{{$elements[54]->value ?? null}}</td>
                        <td>{{$elements[55]->value ?? null}}</td>
                        <td>{{$elements[56]->value ?? null}}</td>
                    </tr>
                    <tr class="thead">
                        <td>Motor Truck Cargo / On The Hook</td>
                        <td>Medical Payments</td>
                        <td>Trailer Interchange</td>
                    </tr>
                    <tr>
                        <td>{{$elements[57]->value ?? null}}</td>
                        <td>{{$elements[58]->value ?? null}}</td>
                        <td>{{$elements[59]->value ?? null}}</td>
                    </tr>
                    <tr class="thead">
                        <td>Garage liability</td>
                        <td>Garage Keeper</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$elements[60]->value ?? null}}</td>
                        <td>{{$elements[61]->value ?? null}}</td>
                        <td></td>
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
                        <td colspan="10">Schedule of Drivers</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="thead">
                        <td>Name</td>
                        <td>DOB</td>
                        <td>LICENSE NO.</td>
                        <td>State</td>
                        <td>Class</td>
                        <td>Yrs Exp</td>
                        <td>Position</td>
                        <td>Hire Date</td>
                        <td>Accident(s)</td>
                        <td>Violation(s)</td>
                    </tr>

                    @foreach($drivers as $driver)
                    <tr>
                        <?php $fullName = ($driver[37]->value ?? null) . " " . ($driver[38]->value ?? null); ?>
                        <td>{{$fullName}}</td>
                        <td>{{$driver[39]->value ?? null}}</td>
                        <td>{{$driver[40]->value ?? null}}</td>
                        <td>{{$driver[41]->value ?? null}}</td>
                        <td>{{$driver[42]->value ?? null}}</td>
                        <td>{{$driver[43]->value ?? null}}</td>
                        <td>{{$driver[62]->value ?? null}}</td>
                        <td>{{$driver[65]->value ?? null}}</td>
                        <td>{{$driver[63]->value ?? null}}</td>
                        <td>{{$driver[64]->value ?? null}}</td>
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
                        <td>{{$vehicle[30]->value ?? null}}</td>
                        <td>{{$vehicle[31]->value ?? null}}</td>
                        <td>{{$vehicle[32]->value ?? null}}</td>
                        <td>{{$vehicle[33]->value ?? null}}</td>
                        <td>{{$vehicle[35]->value ?? null}}</td>
                        <td>{{$vehicle[34]->value ?? null}}</td>
                        <td>{{$vehicle[36]->value ?? null}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </section>
</div>
@endsection