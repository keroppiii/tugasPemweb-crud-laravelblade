<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('departemens', function (Blueprint $table) {
        $table->renameColumn('nama', 'nama_departemen');
    });
}

public function down()
{
    Schema::table('departemens', function (Blueprint $table) {
        $table->renameColumn('nama_departemen', 'nama');
    });
}
};
