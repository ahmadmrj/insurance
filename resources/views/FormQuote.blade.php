@extends('layouts.fullwidth')

@section('title', "TRUCKING QUICK QUOTE")

@section('content')

<div class="row">
  <div class="col-sm">
    <div class="form-wrapper">
      <h1>TRUCKING QUICK QUOTE</h1>
      <form method="POST" action="" id="form-validation" enctype="multipart/form-data">
          <!-- CROSS Site Request Forgery Protection -->
          @csrf
          <p class="title">SUBMITER INFORMATION</p>
          @include('components.trucking')
          <p class="title">INSURED SECTION</p>
          @include('components.insured')
          <p class="title">BUSINESS SECTION</p>
          @include('components.business')
          <p class="title">REQUESTED LIMITS</p>
          @include('components.limits')
          <p class="title">Fill up the field and attach MVRs for all driver(s) and owner(s) no more than 30 days old</p>
          @include('components.mvrs')
          <p class="title">VEHICLES SECTION</p>
          @include('components.vehicles')

          <br/>
          <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="term">
            <label class="form-check-label" for="term">
                Yes, I agree with <a href="https://excelgeneralagency.com/privacy-policy/">privacy policy</a>
            </label>
          </div> -->

          <br/>
          <button type="submit" class="btn btn-primary">SUBMIT QUOTE</button>
      </form>
    </div>
  </div>
</div>

@endsection