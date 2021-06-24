<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('reference',12); //nome e lunghezza
            $table->string('address',100); //nome e lunghezza
            $table->string('postal_code',10); //nome e lunghezza
            $table->string('city',50); //nome e lunghezza
            $table->string('state',50); //nome e lunghezza
            $table->smallInteger('square_meters')->unsigned(); //nome + unisegned perchè non può essere negativo
            $table->tinyInteger('rooms')->unsigned(); //nome + unsigned perchè non può essere negativo
            $table->string('type',50); //nome,lunghezza (tipo di appartamento)
            $table->text('description')->nullable(); //nome, nullable è come NULL puoi scriverci dentro o meno e non da errori
            $table->float('price',10,2); // tipo, lunghezza , numero di decimali
            $table->boolean('is_available')->default(1); // disponibilità , di default si quindi 1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
