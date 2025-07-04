<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->char('code', 3);
            $table->float('rate');
            $table->string('format');
            $table->timestamps();
            
            $table->primary('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
