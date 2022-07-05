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
<h1>Verslagen</h1>

<?php
require_once ('../resources/views/navbar.blade.php');
?>
@extends('products.layout')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a class="btn btn-primary" style="margin-left: 90%" href="{{ route('products.create')}}">+ Maken</a>
    @foreach ($products as $product)
    <div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h2>Titel: {{ $product->name }}</h2>
            <p>Datum: {{$product->created_at}}</p>
            <img src="/images/{{ $product->image }}" width="300px">
            <p>Beschrijving: {{ $product->detail }}</p>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="" href="{{ route('products.edit',$product->id) }}">Edit</a>
                <a><button type="submit" class="">Delete</button></a>

                @csrf
                @method('DELETE')


        </div>
    </div>
</div>
    @endforeach
    {!! $products->links() !!}
<style>
    /* Header/Blog Title */
    .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Footer */
    .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }
</style>

























<?php
require_once ('../resources/views/footer.blade.php');
?>

</body>

