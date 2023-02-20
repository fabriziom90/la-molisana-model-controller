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
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('tipo');
            $table->string('cottura');
            $table->string('peso');
            $table->text('descrizione');
            $table->text('src');
            $table->text('src-h');
            $table->text('src-p');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastas');
    }
};
