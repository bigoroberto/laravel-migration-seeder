<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->boolean('tv')->after('type'); // disponibilit√† , di default si quindi 1
            $table->boolean('animals')->after('type'); // disponibilit√† , di default si quindi 1
            $table->boolean('Wi_Fi')->after('type'); // disponibilit√† , di default si quindi 1
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn('tv');
            $table->dropColumn('animali');
            $table->dropColumn('Wi_Fi');
        });
    }
}
