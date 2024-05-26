<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kurzus extends Model
{
    use HasFactory;
    protected $fillable = [
        'kurzus_nev',
        'kurzus_fejlec',
        'kurzus_bemutatkozo_szoveg',
        'kurzus_tanar_nev',
        'kurzus_tanar_elerhetoseg',
        'kurzus_idopont',
        'kurzus_helye',
        'kurzus_targy_leiras',
        'kurzus_szakasz1',
        'kurzus_szakasz1_leiras',
        'kurzus_szakasz2',
        'kurzus_szakasz2_leiras',
        'kurzus_szakasz3',
        'kurzus_szakasz3_leiras',
        'kurzus_szakasz4',
        'kurzus_szakasz4_leiras',
        'kurzus_szakasz5',
        'kurzus_szakasz5_leiras',
        'kurzus_szakasz6',
        'kurzus_szakasz6_leiras',
        'kurzus_szakasz7',
        'kurzus_szakasz7_leiras',
        'kurzus_szakasz8',
        'kurzus_szakasz8_leiras',
        'kurzus_szakasz9',
        'kurzus_szakasz9_leiras',
        'kurzus_szakasz10',
        'kurzus_szakasz10_leiras',
        'kurzus_szakasz11',
        'kurzus_szakasz11_leiras',
        'kurzus_szakasz11_leiras',
        'kurzus_picture'
    ];
}
