<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
@include('layouts.header')

<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5 register">
                        <h1 class="fw-bold mb-2 custom-class">Cica Learning <i class='bx bxs-cat'></i></h1>
                            <h3 class="fw-bold mb-2 text-uppercase custom-class">Regisztráció</h3>
                            <p class="text-white-50 mb-5 subtitle_class">Kérlek töltsd ki a hiányzó mezőket!</p>

        <script>
            function generateNeptunCode() {
                var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                var neptunCode = '';
                var numCount = 0;
            
                for (var i = 0; i < 6; i++) {
                    if (i < 2 || numCount <script 2) {
                        var char = chars.charAt(Math.floor(Math.random() * chars.length));
                        neptunCode += char;
                        if (!isNaN(char)) numCount++;
                    } else {
                        neptunCode += chars.charAt(Math.floor(Math.random() * 26)); // Only alphabets after first 2 numbers
                    }
                }
            
                return neptunCode;
            }
            
            document.addEventListener("DOMContentLoaded", function() {
                var neptunInput = document.getElementById('neptunkod'); 
                neptunInput.value = generateNeptunCode();
            });
            </script>
        <div>
            <x-input-label for="neptun_kod" :value="__('Neptun kód')" />
            <x-text-input id="neptun_kod" class="block mt-1 w-full" type="text" name="neptun_kod" :value="old('neptun_kod')" required autofocus />
            <x-input-error :messages="$errors->get('neptun_kod')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="firstName" :value="__('Vezetéknév')" />
            <x-text-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus />
            <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="lastName" :value="__('Keresztnév')" />
            <x-text-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required />
            <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email cím')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Jelszó')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Jelszó megerősítése')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-4">  
            <x-input-label for="country" :value="__('Ország')" />
            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>    

        <div class="mt-4">  
            <x-input-label for="city" :value="__('Város')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="street" :value="__('Utca')" />
            <x-text-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required />
            <x-input-error :messages="$errors->get('street')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="houseNumber" :value="__('Házszám')" />
            <x-text-input id="houseNumber" class="block mt-1 w-full" type="text" name="houseNumber" :value="old('houseNumber')" required />
            <x-input-error :messages="$errors->get('houseNumber')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phoneNumber" :value="__('Telefonszám')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="birthDate" :value="__('Születési dátum')" />
            <x-text-input id="birthDate" class="block mt-1 w-full" type="date" name="birthDate" :value="old('birthDate')" required />
            <x-input-error :messages="$errors->get('birthDate')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="profileDescription" :value="__('Profil leírás')" />
            <textarea class="form-control form-control-lg" id="profileDescription" name="profileDescription" rows="3" required>{{ old('profileDescription') }}</textarea>
            <x-input-error :messages="$errors->get('profileDescription')" class="mt-2" />
        </div>

        <x-check-box id="terms" name="terms" label="{{ __('Elfogadom a feltételeket') }}" class="block mt-4" required />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Már regisztráltál?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Regisztráció') }}
            </x-primary-button>
        </div>
    </form>
    </div></div></div></div></div>
    @include('layouts.footer')

</x-guest-layout>

<script>
    window.onload = function() {
        fillCountries();
        generateNeptunCode();
    };

    function fillCountries() 
    {
        var countries = [{ code: "AF", name: "Afganisztán" },   { code: "AL", name: "Albánia" },    { code: "DZ", name: "Algéria" },    { code: "AD", name: "Andorra" },    { code: "AO", name: "Angola" },    { code: "AI", name: "Anguilla" },    { code: "AQ", name: "Antarktisz" },    { code: "AG", name: "Antigua és Barbuda" },    { code: "SA", name: "Szaúd-Arábia" },    { code: "AR", name: "Argentína" },    { code: "AM", name: "Örményország" },    { code: "AW", name: "Aruba" },    { code: "AU", name: "Ausztrália" },    { code: "AT", name: "Ausztria" },    { code: "AZ", name: "Azerbajdzsán" },    { code: "BS", name: "Bahama-szigetek" },    { code: "BH", name: "Bahrein" },    { code: "BD", name: "Banglades" },    { code: "BB", name: "Barbados" },    { code: "BE", name: "Belgium" },    { code: "BZ", name: "Belize" },    { code: "BJ", name: "Benin" },    { code: "BM", name: "Bermuda" },    { code: "BY", name: "Fehéroroszország" },    { code: "BO", name: "Bolívia" },    { code: "BA", name: "Bosznia-Hercegovina" },    { code: "BW", name: "Botswana" },    { code: "BR", name: "Brazília" },    { code: "BN", name: "Brunei" },    { code: "BG", name: "Bulgária" },    { code: "BF", name: "Burkina Faso" },    { code: "BI", name: "Burundi" },    { code: "CY", name: "Ciprus" },    { code: "CX", name: "Karácsony-sziget" },    { code: "CK", name: "Cook-szigetek" },    { code: "DK", name: "Dánia" },    { code: "DJ", name: "Dzsibuti" },    { code: "DM", name: "Dominika" },    { code: "DO", name: "Dominikai Köztársaság" },    { code: "DJ", name: "Dzsibuti" },    { code: "EC", name: "Ecuador" },    { code: "EG", name: "Egyiptom" },    { code: "SV", name: "Salvador" },    { code: "CI", name: "Elefántcsontpart" },    { code: "ER", name: "Eritrea" },    { code: "EE", name: "Észtország" },    { code: "ET", name: "Etiópia" },    { code: "FK", name: "Falkland-szigetek" },    { code: "FJ", name: "Fidzsi" },    { code: "PH", name: "Fülöp-szigetek" },    { code: "FI", name: "Finnország" },    { code: "FR", name: "Franciaország" },    { code: "TF", name: "Francia déli területek" },    { code: "GA", name: "Gabon" },    { code: "GM", name: "Gambia" },    { code: "GH", name: "Ghána" },    { code: "GI", name: "Gibraltár" },    { code: "GD", name: "Grenada" },    { code: "GR", name: "Görögország" },    { code: "GL", name: "Grönland" },    { code: "GP", name: "Guadeloupe" },    { code: "GU", name: "Guam" },    { code: "GT", name: "Guatemala" },    { code: "GG", name: "Guernsey" },    { code: "GY", name: "Guyana" },    { code: "GF", name: "Guyane française" },    { code: "GN", name: "Guinea" },    { code: "GW", name: "Guinea-Bissau" },    { code: "GQ", name: "Egyenlítői Guinea" },    { code: "HT", name: "Haiti" },    { code: "NL", name: "Hollandia" },    { code: "HN", name: "Honduras" },    { code: "HK", name: "Hong Kong" },    { code: "HR", name: "Horvátország" },    { code: "IN", name: "India" },    { code: "ID", name: "Indonézia" },    { code: "IQ", name: "Irak" },    { code: "IR", name: "Irán" },    { code: "IE", name: "Írország" },    { code: "IS", name: "Izland" },    { code: "IL", name: "Izrael" },    { code: "JM", name: "Jamaica" },    { code: "JP", name: "Japán" },    { code: "YE", name: "Jemen" },    { code: "JE", name: "Jersey" },    { code: "JO", name: "Jordánia" },    { code: "KY", name: "Kajmán-szigetek" },    { code: "KH", name: "Kambodzsa" },    { code: "CM", name: "Kamerun" },    { code: "CA", name: "Kanada" },    { code: "IC", name: "Kanári-szigetek" },    { code: "CV", name: "Zöld-foki Köztársaság" },    { code: "QA", name: "Katar" },    { code: "KZ", name: "Kazahsztán" },    { code: "KE", name: "Kenya" },    { code: "KG", name: "Kirgizisztán" },    { code: "KI", name: "Kiribati" },    { code: "CC", name: "Kókusz (Keeling)-szigetek" },    { code: "CO", name: "Kolumbia" },    { code: "KM", name: "Comore-szigetek" },    { code: "CG", name: "Kongó" },    { code: "CD", name: "Kongói Demokratikus Köztársaság" },    { code: "KR", name: "Korea" },    { code: "KP", name: "Korea, Észak" },    { code: "CR", name: "Costa Rica" },    { code: "HR", name: "Horvátország" },    { code: "CU", name: "Kuba" },    { code: "KW", name: "Kuvait" },    { code: "LA", name: "Laosz" },    { code: "LS", name: "Lesotho" },    { code: "LV", name: "Lettország" },    { code: "LB", name: "Libanon" },    { code: "LR", name: "Libéria" },    { code: "LY", name: "Líbia" },    { code: "LI", name: "Liechtenstein" },    { code: "LT", name: "Litvánia" },    { code: "LU", name: "Luxemburg" },    { code: "MO", name: "Makaó" },    { code: "MK", name: "Macedónia" },    { code: "MG", name: "Madagaszkár" },    { code: "HU", name: "Magyarország" },    { code: "MY", name: "Malajzia" },    { code: "MW", name: "Malawi" },    { code: "MV", name: "Maldív-szigetek" },    { code: "ML", name: "Mali" },    { code: "MT", name: "Málta" },    { code: "IM", name: "Man-sziget" },    { code: "MA", name: "Marokkó" },    { code: "MH", name: "Marshall-szigetek" },    { code: "MQ", name: "Martinique" },    { code: "MU", name: "Mauritius" },    { code: "MR", name: "Mauritánia" },    { code: "YT", name: "Mayotte" },    { code: "MX", name: "Mexikó" },    { code: "FM", name: "Mikronézia" },    { code: "MM", name: "Mianmar" },    { code: "MD", name: "Moldova" },    { code: "MC", name: "Monaco" },    { code: "MN", name: "Mongólia" },    { code: "MS", name: "Montserrat" },    { code: "MZ", name: "Mozambik" },    { code: "NA", name: "Namíbia" },    { code: "NR", name: "Nauru" },    { code: "NP", name: "Nepál" },    { code: "NI", name: "Nicaragua" },    { code: "NE", name: "Niger" },    { code: "NG", name: "Nigéria" },    { code: "NU", name: "Niue" },    { code: "NF", name: "Norfolk-sziget" },    { code: "NO", name: "Norvégia" },    { code: "NC", name: "Új-Kaledónia" },    { code: "NZ", name: "Új-Zéland" },    { code: "OM", name: "Omán" },    { code: "AN", name: "Holland Antillák" },    { code: "PK", name: "Pakisztán" },    { code: "PW", name: "Palau" },    { code: "PS", name: "Palesztina" },    { code: "PA", name: "Panama" },    { code: "PG", name: "Pápua Új-Guinea" },    { code: "PY", name: "Paraguay" },    { code: "PE", name: "Peru" },    { code: "PN", name: "Pitcairn-szigetek" },    { code: "PL", name: "Lengyelország" },    { code: "PT", name: "Portugália" },    { code: "PR", name: "Puerto Rico" },    { code: "RE", name: "Reunion" },    { code: "RO", name: "Románia" },    { code: "RW", name: "Ruanda" },    { code: "RU", name: "Oroszország" },    { code: "EH", name: "Nyugat-Szahara" },    { code: "SB", name: "Salamon-szigetek" },    { code: "ZM", name: "Zambia" },    { code: "WS", name: "Szamoa" },    { code: "SM", name: "San Marino" },    { code: "ST", name: "São Tomé és Príncipe" },    { code: "SN", name: "Szenegál" },    { code: "SC", name: "Seychelle-szigetek" },    { code: "SL", name: "Sierra Leone" },    { code: "SG", name: "Szingapúr" },    { code: "SK", name: "Szlovákia" },    { code: "SI", name: "Szlovénia" },    { code: "SO", name: "Szomália" },    { code: "ES", name: "Spanyolország" },    { code: "LK", name: "Sri Lanka" },    { code: "US", name: "Amerikai Egyesült Államok" },    { code: "SD", name: "Szudán" },    { code: "SR", name: "Suriname" },    { code: "SZ", name: "Szváziföld" },    { code: "SE", name: "Svédország" },    { code: "CH", name: "Svájc" },    { code: "SY", name: "Szíria" },    { code: "TJ", name: "Tadzsikisztán" },    { code: "TW", name: "Tajvan" },    { code: "TZ", name: "Tanzánia" },    { code: "TH", name: "Thaiföld" },    { code: "TL", name: "Kelet-Timor" },    { code: "TG", name: "Togo" },    { code: "TK", name: "Tokelau" },    { code: "TO", name: "Tonga" },    { code: "TT", name: "Trinidad és Tobago" },    { code: "TN", name: "Tunézia" },    { code: "TR", name: "Törökország" },    { code: "TM", name: "Türkmenisztán" },    { code: "TC", name: "Turks- és Caicos-szigetek" },    { code: "TV", name: "Tuvalu" },    { code: "UG", name: "Uganda" },    { code: "UA", name: "Ukrajna" },    { code: "UY", name: "Uruguay" },    { code: "UZ", name: "Üzbegisztán" },    { code: "VU", name: "Vanuatu" },    { code: "VA", name: "Vatikán" },    { code: "VE", name: "Venezuela" },    { code: "VN", name: "Vietnam" },    { code: "VG", name: "Brit Virgin-szigetek" },    { code: "VI", name: "Amerikai Virgin-szigetek" },    { code: "WF", name: "Wallis és Futuna" },    { code: "ZM", name: "Zambia" },    { code: "ZW", name: "Zimbabwe" }];
        var select = document.getElementById("country");
        countries.forEach(function(country) {
        var option = document.createElement("option");
        option.text = country.name;
        option.value = country.code;
        select.add(option);
    });
    }
    function generateNeptunCode() {
        var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var code = '';
        for (var i = 0; i < 6; i++) {code += chars.charAt(Math.floor(Math.random() * chars.length));}
        document.getElementById('neptunCode').value = code;
    }
</script>


