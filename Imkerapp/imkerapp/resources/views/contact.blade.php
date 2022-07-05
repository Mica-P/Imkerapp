<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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

<div class="main-container">

    <article>

        <header class="post-header"><h1 class="page-title mx-auto" style="width: 17%; font-size: 5rem;">Contact</h1></header>
        <br><br>
        <div class="post-content">
            <p class="mx-auto" style="width: 500px;">Het bestuur van de Imkervereniging Oegstgeest bestaat uit:</p>



            <table class="mx-auto border border-warning" style="width: 400px; font-size: large">
                <tbody>
                <tr class="border border-warning">
                    <td> Alma van der Wijgaard </td>
                    <td> Voorzitter </td>
                </tr>
                <tr class="border border-warning">
                    <td> Fred Schalker </td>
                    <td> Secretaris </td>
                </tr>
                <tr class="border border-warning">
                    <td> Karel Diephuis </td>
                    <td> Penningmeester </td>
                </tr>
                <tr class="border border-warning">
                    <td> Håvar Solheim </td>
                    <td> Bestuur lid </td>
                </tr>
                </tbody>
            </table>



            <div class="container mt-5">
                <h2>Neem contact op:</h2>
                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                <form action="" method="post" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Naam</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                        <!-- Error -->
                        @if ($errors->has('name'))
                            <div class="error">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                        @if ($errors->has('email'))
                            <div class="error">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>telefoonnummer</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                        @if ($errors->has('phone'))
                            <div class="error">
                                {{ $errors->first('phone') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Onderwerp</label>
                        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                               id="subject">
                        @if ($errors->has('subject'))
                            <div class="error">
                                {{ $errors->first('subject') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Boodschap</label>
                        <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                  rows="4"></textarea>
                        @if ($errors->has('message'))
                            <div class="error">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>
                    <input type="submit" name="Verzenden" value="Submit" class="btn btn-dark btn-block">
                </form>
            </div>

            <p class="mx-auto" style="width: 800px;">Voor vragen over de vereniging, of onze cursus, verstuur een mail naar onze <a href="">secretaris</a>.</p>



            <p class="mx-auto" style="width: 800px;">Voor vragen over de website zelf, neem contact op met de <a href="">webmaster</a>.</p>



            <p>&nbsp;</p>
        </div>
    </article>


</div>
















<?php
require_once ('../resources/views/footer.blade.php');
?>

</body>
</html>
