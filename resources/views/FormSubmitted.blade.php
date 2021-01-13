@extends('layouts.app')

@section('title', "TRUCKING QUICK QUOTE")

@section('content')

<div class="success_card">
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Thank you!</h1> 
        <p>We received your request;<br/> we'll be in touch shortly!</p>
        <p><a href="{{$url}}">view form</a></p>
    </div>
</div>

@endsection