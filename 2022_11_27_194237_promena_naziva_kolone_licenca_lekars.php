<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaKoloneLicencaLekars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lekars', function (Blueprint $table) {
            $table->renameColumn('licenca', 'broj_licence');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lekars', function (Blueprint $table) {
            $table->renameColumn('brojlicence', 'licenca');
        });
    }
}
