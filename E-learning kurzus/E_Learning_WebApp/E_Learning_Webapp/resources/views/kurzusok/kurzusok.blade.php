<?php
$colors = [ '#FEF125', '#25FED7','#fc1e7a', ];
function getColorForCourse($courseTitle, $colors) {
    $hash = crc32($courseTitle); // Használjuk a kurzus nevéből származó hash értéket
    $index = abs($hash) % count($colors); // Válasszunk egy indexet a palettából
    return $colors[$index]; // Adjuk vissza a kiválasztott színt
}
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kurzus.css') }}">

</head>

@extends('layouts.app')
@include('layouts.header')

<section id="login__section" class="vh-100 gradient-custom">
       
    <div class="form-group">
        <div class="success_session">
            @if (session()->has('success'))
            <div id="success-alert" class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100 ">
                <div class="col-12 col-md-20 col-lg-100 col-xl-70">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                            @foreach($kurzusok as $kurzus)
                                @php
                                    $color = getColorForCourse($kurzus->kurzus_nev, $colors);
                                @endphp
                                <div class="col-md-3 mb-4 text-black">
                                    <div class="card mb-3" style="max-width: 18rem; background-color: {{ $color }};">
                                        <div class="card-body text-black" style="color: white; word-wrap: break-word; white-space: normal;">
                                            <h5 class="card-title">{{ $kurzus->kurzus_nev }}</h5>
                                            <h6 class="card-subtitle mb-2" "> {{ $kurzus->kurzus_tanar_nev }}</h6>
                                            <p class="card-text"> {{ $kurzus->kurzus_targy_leiras}}</p>
                                            <a href="{{ route('Kurzusok.show', ['id' => $kurzus->id]) }}" class="card-int__button btn btn-primary">Kurzus megtekintése</a>
                                            
                                            <br>
                                            <br>

                                            <a href="{{ route('Kurzusok.edit', ['kurzus'=>$kurzus]) }}" class="btn btn-warning">Módosítás</a>
                                            <form action="{{ route('Kurzusok.delete',['kurzus'=>$kurzus]) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Törlés</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    setTimeout(function() {
        $('#success-alert').fadeOut('fast');
    }, 3000); // 3 másodperc után eltűnik
</script>
