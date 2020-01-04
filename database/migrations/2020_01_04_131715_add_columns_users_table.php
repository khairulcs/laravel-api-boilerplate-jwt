<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('agensi_id');
            $table->integer('cawangan_id');
            $table->integer('jawatan_id');
            $table->string('no_telefon');
            $table->string('no_ahli_isma');
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
            $table->dropColumn(['agensi_id', 'cawangan_id', 'jawatan_id', 'no_telefon', 'no_ahli_isma']);
        });
    }
}
