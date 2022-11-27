<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaZastupnikDomZdravljas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dom_zdravljas', function (Blueprint $table) {
            $table->after('grad', function ($table) {
                $table->string('zastupnik')->nullable();
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
        Schema::table('dom_zdravljas', function (Blueprint $table) {
            $table->dropColumn('zastupnik');
        });
    }
}
