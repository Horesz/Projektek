<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        if (!Schema::hasTable('kurzuses')) {}
        Schema::create('kurzuses', function (Blueprint $table) {
            $table->id();
            $table->string('kurzus_nev');
            $table->string('kurzus_fejlec');
            $table->string('kurzus_bemutatkozo_szoveg');
            $table->string('kurzus_tanar_nev');
            $table->string('kurzus_tanar_elerhetoseg');
            $table->date('kurzus_idopont');
            $table->string('kurzus_helye');
            $table->text('kurzus_targy_leiras')->nullable();
            $table->text('kurzus_szakasz1')->nullable();
            $table->text('kurzus_szakasz1_leiras')->nullable();
            $table->text('kurzus_szakasz2')->nullable();
            $table->text('kurzus_szakasz2_leiras')->nullable();
            $table->text('kurzus_szakasz3')->nullable();
            $table->text('kurzus_szakasz3_leiras')->nullable();
            $table->text('kurzus_szakasz4')->nullable();
            $table->text('kurzus_szakasz4_leiras')->nullable();
            $table->text('kurzus_szakasz5')->nullable();
            $table->text('kurzus_szakasz5_leiras')->nullable();
            $table->text('kurzus_szakasz6')->nullable();
            $table->text('kurzus_szakasz6_leiras')->nullable();
            $table->text('kurzus_szakasz7')->nullable();
            $table->text('kurzus_szakasz7_leiras')->nullable();
            $table->text('kurzus_szakasz8')->nullable();
            $table->text('kurzus_szakasz8_leiras')->nullable();
            $table->text('kurzus_szakasz9')->nullable();
            $table->text('kurzus_szakasz9_leiras')->nullable();
            $table->text('kurzus_szakasz10')->nullable();
            $table->text('kurzus_szakasz10_leiras')->nullable();
            $table->text('kurzus_szakasz11')->nullable();
            $table->text('kurzus_szakasz11_leiras')->nullable();
            $table->text('kurzus_picture')->nullable(); // Kép elérésének tárolása
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurzus');
        
    }
};
