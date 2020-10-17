<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTempatLatihanFieldToCabangOlahragasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabang_olahragas', function (Blueprint $table) {
          $table->string('tempat_latihan', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabang_olahragas', function (Blueprint $table) {
            $table->dropColumn('tempat_latihan');
        });
    }
}
