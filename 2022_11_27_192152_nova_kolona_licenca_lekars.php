<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaLicencaLekars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lekars', function (Blueprint $table) {
            $table->after('telefon', function ($table) {
                $table->string('licenca')->unique();
            });

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
            $table->dropColumn('licenca');
        });
    }
}
