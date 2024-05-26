<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurzus készítés</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/unnamed.jpg') }}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <!-- CSS Importok -->
    <link rel="stylesheet" href="{{ asset('css/kurzus.css') }}">

</head>

@extends('layouts.app')
@include('layouts.header')
@section("content")

<body>
    <div class="createForm">
        <div class="container mt-5">
            <div class="jumbo">
                <div class="jumbotron">
                    <h1 id="h1" class="display-1">Üdv a kurzus készítő oldalon!</h1>
                    <p class="lead">Kérlek a kurzus létrehozásához az adatokat pontosan add meg. Itt lehetőséged van előre elkészíteni tananyagot!</p>
                    <hr class="my-3">
                    <p>Előre is köszönjük és jó kurzus készítést!</p>
                 </div>
            </div>
            <div class="kurzus_create">
                <form action="{{ route('Kurzusok.store') }}" method="POST" enctype="multipart/form-data">
                    @method('post')
                    @csrf
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_nev" class=""><h1>Kurzus Neve</h1></label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_nev" name="kurzus_nev" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_fejlec" class="font-weight-bold">Kurzus Fejléce</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded " id="kurzus_fejlec" name="kurzus_fejlec" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_bemutatkozo_szoveg">Bemutatkozás</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded " id="kurzus_bemutatkozo_szoveg" name="kurzus_bemutatkozo_szoveg" required></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_tanar_nev">Tanár Neve:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_tanar_nev" name="kurzus_tanar_nev" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_tanar_elerhetoseg">Előadó elérhetősége: </label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_tanar_elerhetoseg" name="kurzus_tanar_elerhetoseg" required></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_idopont">Kurzus Időpontja:</label>
                        <input type="date" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_idopont" name="kurzus_idopont" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_helye">Kurzus Helye:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_helye" name="kurzus_helye" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_targy_leiras">Tárgy rövid ismertető:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_targy_leiras" name="kurzus_targy_leiras" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz1">1. fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz1" name="kurzus_szakasz1" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz1_leiras">1. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz1_leiras" name="kurzus_szakasz1_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz2">2. fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz2" name="kurzus_szakasz2" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz2_leiras">2. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz2_leiras" name="kurzus_szakasz2_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz3">3. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz3" name="kurzus_szakasz3" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz3_leiras">3. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz3_leiras" name="kurzus_szakasz3_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz4">4. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz4" name="kurzus_szakasz4" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz4_leiras">4. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz4_leiras" name="kurzus_szakasz4_leiras"></textarea>
                    </div> 
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz5">5. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz5" name="kurzus_szakasz5" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz5_leiras">5. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz5_leiras" name="kurzus_szakasz5_leiras"></textarea>
                    </div>
                     <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz6">6. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz6" name="kurzus_szakasz6" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz6_leiras">6. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz6_leiras" name="kurzus_szakasz6_leiras"></textarea>
                    </div>
                     <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz7">7. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz7" name="kurzus_szakasz7" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz7_leiras">7. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz7_leiras" name="kurzus_szakasz7_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz8">8. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz8" name="kurzus_szakasz8" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz8_leiras">8. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz8_leiras" name="kurzus_szakasz8_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz9">9. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz9" name="kurzus_szakasz9" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz9_leiras">9. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz9_leiras" name="kurzus_szakasz9_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz10">10. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz10" name="kurzus_szakasz10" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz10_leiras">10. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz10_leiras" name="kurzus_szakasz10_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz11">11. Fejezet:</label>
                        <input type="text" class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz11" name="kurzus_szakasz11" required>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_szakasz11_leiras">11. Fejezet leírás:</label>
                        <textarea class="form-control shadow p-3 mb-3 bg-white rounded" id="kurzus_szakasz11_leiras" name="kurzus_szakasz11_leiras"></textarea>
                    </div>
                    <div class="form-group font-weight-bold">
                        <label for="kurzus_picture" class="form-label">Kép feltöltése a kurzushoz:</label>
                        <input type="file" class="form-control shadow mb-3 bg-white rounded" name="kurzus_picture" id="kurzus_picture">
                    </div>
                    
                    <!-- További mezők itt -->
                    <button type="submit" class="btn btn-Success mb-3">Mentés</button>
                </form>
    
    
              
            </div>
        </div>
    </div>
</body>
