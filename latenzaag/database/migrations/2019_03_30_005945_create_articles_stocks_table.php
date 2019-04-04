<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categorie');
            $table->string('nom');
            $table->string('marque');
            $table->double('prix');
            $table->longText('description');
            $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_stocks');
    }
}
