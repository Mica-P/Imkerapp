<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="{{url('css/navbar.css')}}" />

    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{url('css/tooplate-style.css')}}" />
</head>

<body>

<?php
require_once ('../resources/views/navbar.blade.php');
?>
<br><br><br><br><br>


@extends('products.layout')
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
</div>
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h1>Titel {{ $product->name }}:</h1>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="/images/{{ $product->image }}" width="500px">
            </div>
            <p>{{ $product->detail }}</p>
        </div>
    </div>
@endsection
</body>
