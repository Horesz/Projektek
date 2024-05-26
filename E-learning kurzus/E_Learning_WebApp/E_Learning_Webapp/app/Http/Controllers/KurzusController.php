<?php

namespace App\Http\Controllers;

use App\Models\kurzus;
use Illuminate\Http\Request;

class KurzusController extends Controller
{
    public function addHallgatoShow()
    {
        return view('hallgatok.addHallgato');
    }
    public function KurzusShow($id)
    {
        $kurzus = kurzus::where('id', $id)->firstOrFail();
        return view('Kurzusok.show', compact('kurzus'))->with('success','Jó tanulást!');
    }
    public function index(){
        $kurzusok = kurzus::all();

        return view('Kurzusok.kurzusok', ['kurzusok'=>$kurzusok]);
    }
    public function create (){
        return view('kurzusok.createKurzus');
    }
    public function store(Request $request){
        $photoName = $request->file('kurzus_picture')->getClientOriginalName();
        $path= $request->file('kurzus_picture')->storeAs('images',$photoName, 'public');
        $hitelesitettAdatok = $request->validate([
            'kurzus_nev' => 'required|max:255',
            'kurzus_fejlec' => 'required',
            'kurzus_bemutatkozo_szoveg' => 'required',
            'kurzus_tanar_nev' => 'required',
            'kurzus_tanar_elerhetoseg' => 'required',
            'kurzus_idopont' => 'required|date',
            'kurzus_helye' => 'required',
            'kurzus_targy_leiras' => 'required',
            'kurzus_szakasz1'=>'nullable|max:255',
            'kurzus_szakasz1_leiras'=>'nullable',
            'kurzus_szakasz2'=>'nullable|max:255',
            'kurzus_szakasz2_leiras'=>'nullable',
            'kurzus_szakasz3'=>'nullable|max:255',
            'kurzus_szakasz3_leiras'=>'nullable',
            'kurzus_szakasz4'=>'nullable|max:255',
            'kurzus_szakasz4_leiras'=>'nullable',
            'kurzus_szakasz5'=>'nullable|max:255',
            'kurzus_szakasz5_leiras'=>'nullable',
            'kurzus_szakasz6'=>'nullable|max:255',
            'kurzus_szakasz6_leiras'=>'nullable',
            'kurzus_szakasz7'=>'nullable|max:255',
            'kurzus_szakasz7_leiras'=>'nullable',
            'kurzus_szakasz8'=>'nullable|max:255',
            'kurzus_szakasz8_leiras'=>'nullable',
            'kurzus_szakasz9'=>'nullable|max:255',
            'kurzus_szakasz9_leiras'=>'nullable',
            'kurzus_szakasz10'=>'nullable|max:255',
            'kurzus_szakasz10_leiras'=>'nullable',
            'kurzus_szakasz11'=>'nullable|max:255',
            'kurzus_szakasz11_leiras'=>'nullable',
            'kurzus_picture'=>'image|mimes:jpeg,png,jpg,gif,svg|max:800000'
        ]);
        $hitelesitettAdatok["kurzus_picture"]='/storage/'.$path;
        $kurzusok=kurzus::create($hitelesitettAdatok);
        return redirect(route('Kurzusok.kurzusok'))->with('success','Sikeresen Létrehoztad a kurzust');
    }
    public function delete(kurzus $kurzus)
    {
        $kurzus->delete();
        return redirect(route('Kurzusok.kurzusok'))->with('success','A kurzust sikeresen töröltük az adatbázisból!');
    }
    public function edit(kurzus $kurzus)
    {
        return view('Kurzusok.editKurzus', ['kurzus'=>$kurzus]);
    }
    public function update(kurzus $kurzus, Request $request )
    {
        $hitelesitettAdatok = $request->validate([
            'kurzus_nev' => 'required|max:255',
            'kurzus_fejlec' => 'required',
            'kurzus_bemutatkozo_szoveg' => 'required',
            'kurzus_tanar_nev' => 'required',
            'kurzus_tanar_elerhetoseg' => 'required',
            'kurzus_idopont' => 'required|date',
            'kurzus_helye' => 'required',
            'kurzus_targy_leiras' => 'required',
            'kurzus_szakasz1'=>'nullable|max:255',
            'kurzus_szakasz1_leiras'=>'nullable',
            'kurzus_szakasz2'=>'nullable|max:255',
            'kurzus_szakasz2_leiras'=>'nullable',
            'kurzus_szakasz3'=>'nullable|max:255',
            'kurzus_szakasz3_leiras'=>'nullable',
            'kurzus_szakasz4'=>'nullable|max:255',
            'kurzus_szakasz4_leiras'=>'nullable',
            'kurzus_szakasz5'=>'nullable|max:255',
            'kurzus_szakasz5_leiras'=>'nullable',
            'kurzus_szakasz6'=>'nullable|max:255',
            'kurzus_szakasz6_leiras'=>'nullable',
            'kurzus_szakasz7'=>'nullable|max:255',
            'kurzus_szakasz7_leiras'=>'nullable',
            'kurzus_szakasz8'=>'nullable|max:255',
            'kurzus_szakasz8_leiras'=>'nullable',
            'kurzus_szakasz9'=>'nullable|max:255',
            'kurzus_szakasz9_leiras'=>'nullable',
            'kurzus_szakasz10'=>'nullable|max:255',
            'kurzus_szakasz10_leiras'=>'nullable',
            'kurzus_szakasz11'=>'nullable|max:255',
            'kurzus_szakasz11_leiras'=>'nullable',
            'kurzus_picture'=>'image|mimes:jpeg,png,jpg,gif,svg|max:800000'
        ]);
        $kurzus->update($hitelesitettAdatok);
        return redirect(route('Kurzusok.kurzusok'))->with('success','A kurzust sikeresen módosítottuk az adatbázisból!');
    }

}
