<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_commandes', function (Blueprint $table) {
            $table->bigInteger('users_id');
            $table->bigInteger('commandes_id');
            $table->timestamps();

            $table->primary(['users_id', 'commandes_id']);

            // $table->foreign('users_id')->references('id')->on('users');
            // $table->foreign('commandes_id')->references('id')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_commandes');
    }
}