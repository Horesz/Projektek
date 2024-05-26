<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @include('layouts.header')
    <div class="success_session">
        @if (session()->has('success'))
        <div id="success-alert" class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <div class="container text-black">
        <div class="jumbo">
            <div class="jumbotron">
                <h1 id="h1" class="display-1 mt-4">Üdv (a/az) {{ $kurzus->kurzus_nev }} kurzus oldalán!</h1>
                <p class="lead">{{ $kurzus->kurzus_bemutatkozo_szoveg }}</p>
                <hr class="my-3">
                <br>
                <div class="kurzus-info shadow p-2">
                    <h3 id="h3"> Kurzushoz tartozó fontosabb információk!:  </h3>
                    <h5>{{$kurzus->kurzus_targy_leiras }} : </h5>
                    <br>
                    <p>{{ $kurzus->kurzus_tanar_nev }}</p>
                    <p>{{ $kurzus->kurzus_tanar_elerhetoseg }}</p>
                    <p>{{ $kurzus->kurzus_idopont }}</p>
                    <p>{{ $kurzus->kurzus_helye }}</p>
                </div>
<br>
             </div>
        </div>
        <hr class="my-3">

        <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <kbd>{{ $kurzus->kurzus_szakasz1 }}</kbd>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz1_leiras }}</div>
              </div>
            </div>
            <br>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <kbd>{{ $kurzus->kurzus_szakasz2 }}<kbd>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><code> Leírás: </code>{{ $kurzus->kurzus_szakasz2_leiras }} </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <kbd>{{ $kurzus->kurzus_szakasz3 }}</kbd>
                    
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz3_leiras }} </div>
              </div>
            </div>
            <br>
            <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    <kbd>{{ $kurzus->kurzus_szakasz4 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapseFour collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz4_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <kbd>{{ $kurzus->kurzus_szakasz5 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapseFive collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz5_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <kbd>{{ $kurzus->kurzus_szakasz6 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz6_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    <kbd>{{ $kurzus->kurzus_szakasz7 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz7_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    <kbd>{{ $kurzus->kurzus_szakasz8 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz8_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    <kbd>{{ $kurzus->kurzus_szakasz9 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz9_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    <kbd>{{ $kurzus->kurzus_szakasz10 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz10_leiras }} </div>
                </div>
              </div>
              <br>
              <div class="accordion-item">
                <h2 class="accordion-header mb-3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                    <kbd>{{ $kurzus->kurzus_szakasz11 }}</kbd>
                  </button>
                </h2>
                <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body"><code> Leírás: </code> {{ $kurzus->kurzus_szakasz11_leiras }} </div>
                </div>
              </div>
    
          </div>
    </div>
    
    
</body>
<script>
    setTimeout(function() {
        $('#success-alert').fadeOut('fast');
    }, 3000); // 3 másodperc után eltűnik
</script>

</html>