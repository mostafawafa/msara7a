<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakePassSoicalNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('password')->nullable()->change();
            $table->string('profile_photo')->nullable()->change();
            $table->string('facebook')->nullable()->change();
            $table->string('twitter')->nullable()->change();
            $table->string('google_plus')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('password')->nullable(falses)->change();
            $table->string('profile_photo')->nullable(falses)->change();
            $table->string('facebook')->nullable(falses)->change();
            $table->string('twitter')->nullable(falses)->change();
            $table->string('google_plus')->nullable(falses)->change();
        });
    }
}
