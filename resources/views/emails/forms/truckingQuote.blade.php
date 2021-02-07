@extends('layouts.mail')

@section('title', "Excel General Agency")

@section('content')

<div class="mail_title">Trucking Quote</div>
<p>A new form has been filled up by a customer.</p>
<p>You can access to the form data by clicking at the bellow button:</p>
<p>&nbsp;</p>
<p>
    <a href="{{$url}}" class="btn">View Form</a>
</p>

@endsection