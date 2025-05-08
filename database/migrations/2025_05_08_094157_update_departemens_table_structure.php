<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up()
{
    Schema::table('departemens', function (Blueprint $table) {
        // Ubah nama kolom dari 'nama' menjadi 'nama_departemen'
        $table->renameColumn('nama', 'nama_departemen');
        
        // Tambahkan kolom penanggung_jawab
        $table->string('penanggung_jawab')->after('kode');
    });
}

public function down()
{
    Schema::table('departemens', function (Blueprint $table) {
        // Untuk rollback
        $table->renameColumn('nama_departemen', 'nama');
        $table->dropColumn('penanggung_jawab');
    });
}
};