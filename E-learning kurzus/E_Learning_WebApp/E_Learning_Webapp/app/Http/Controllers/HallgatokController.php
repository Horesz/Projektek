<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kurzus;

class HallgatokController extends Controller
{
    public function addHallgatoShow()
    {
        return view('hallgatok.addHallgato');
    }
    public function orderHallgatoShow()
    {
        return view('hallgatok.orderHallgato');
    }
    public function removeHallgatoShow()
    {
        return view('hallgatok.removeHallgato');
    }
}
