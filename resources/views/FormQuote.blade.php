@extends('layouts.app')

@section('title', "TRUCKING QUICK QUOTE")

@section('content')

<div class="row">
  <div class="col-sm">
    <div class="form-wrapper">
      <form method="POST" action="" id="form-validation">
          <!-- CROSS Site Request Forgery Protection -->
          @csrf
          <p class="title main">TRUCKING QUICK QUOTE</p>
          @include('components.trucking')
          <p class="title">INSURED SECTION</p>
          @include('components.insured')
          <p class="title">PROVIDE ALL FILING NUMBER(S)</p>
          @include('components.filingnumbers')
          <p class="title">VEHICLES SECTION</p>
          @include('components.vehicles')
          <p class="title">Fill up the field and attach MVRs for all driver(s) and owner(s) no more than 30 days old</p>
          @include('components.mvrs')
          <p class="title">BUSINESS SECTION</p>
          @include('components.business')
          <p class="title">Comment</p>
          @include('components.comment')

          <br/>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="term">
            <label class="form-check-label" for="term">
                Yes, I agree with <a href="https://excelgeneralagency.com/privacy-policy/">privacy policy</a>
            </label>
          </div>

          <br/>
          <button type="submit" class="btn btn-primary">SUBMIT QUOTE</button>
      </form>
    </div>
  </div>
</div>

@endsection