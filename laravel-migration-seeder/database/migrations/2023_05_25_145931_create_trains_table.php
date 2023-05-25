<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('azienda')->nullable();
            $table->string('stazione_partenza')->nullable();
            $table->string('stazione_arrivo')->nullable();
            $table->time('orario_partenza')->nullable();
            $table->time('orario_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->integer('numero_carrozze')->unsigned()->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
