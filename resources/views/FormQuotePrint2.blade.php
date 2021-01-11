@extends('layouts.app')

@section('title', "TRUCKING QUICK QUOTE")

@section('content')

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
                        <td>EMAIL</td>
                        <td>RAYZA</td>
                        <td>07/22/2020</td>
                        <td>06/24/2020</td>
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
                        <td>ARAM GABRIELIAN</td>
                        <td>BEST MATERIAL TRANSPORT</td>
                        <td>4</td>
                        <td>4</td>
                    </tr>
                    <tr class="thead">
                        <td>Operations</td>
                        <td>Telephone</td>
                        <td colspan="2">Email Address</td>
                    </tr>
                    <tr>
                        <td>TRUCKING</td>
                        <td>818-823-3353</td>
                        <td colspan="2">GAB_ARAM@YAHOO.COM</td>
                    </tr>
                    <tr class="thead">
                        <td class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="no-bordered">
                                        <td>DOT#</td>
                                        <td>MC#</td>
                                        <td>CA#</td>
                                    </tr>
                                </thead>
                            </table>
                        </td>
                        <td>SSN / FEIN</td>
                        <td colspan="2" class="no-pad">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="no-bordered">
                                        <td>For Hire</td>
                                        <td>Private</td>
                                        <td>Non-Trucking</td>
                                    </tr>
                                </thead>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="no-pad">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="no-bordered">
                                        <td>DOT#</td>
                                        <td>MC#</td>
                                        <td>CA#</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>SSN / FEIN</td>
                        <td colspan="2" class="no-pad">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr class="no-bordered">
                                        <td>For Hire</td>
                                        <td>Private</td>
                                        <td>Non-Trucking</td>
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
                                        <td colspan="2">Street</td>
                                        <td>City</td>
                                        <td>State</td>
                                        <td>Zip</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thead">Mailing:</td>
                                        <td>11242 EMELITA ST APT D</td>
                                        <td>NORTH HOLLYWOOD</td>
                                        <td>CA</td>
                                        <td>91601</td>
                                    </tr>
                                    <tr>
                                        <td class="thead">Physical:</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="thead">Garaging:</td>
                                        <td>17524 SIERRA HWY</td>
                                        <td>SANTA CLARITA </td>
                                        <td>CA</td>
                                        <td>91351</td>
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
                        <td>SAND AND GRAVEL</td>
                    </tr>
                    <tr>
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
                    @for ($i = 0; $i < 3; $i++)
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
                    @endfor
                </tbody>
            </table>
        </article>
    </section>
    
    <section class="row">
        <article class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td colspan="7">SCHEDULE OF VEHICLES </td>
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
                    @for ($i = 0; $i < 5; $i++)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endfor
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