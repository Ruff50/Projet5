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
        Schema::table('users', function (Blueprint $table) {
           
            $table->string('prenom')->nullable();;
            $table->date('ddn')->nullable();;
            $table->boolean('sexe')->nullable();;
            $table->string('avatar')->nullable();
            $table->string('pcouverture')->nullable();
            $table->string('metier',255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
