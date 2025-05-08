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
        // Tambahkan kolom baru
        $table->string('nama_departemen')->after('id');
        
        // Tambahkan kolom penanggung_jawab jika diperlukan
        $table->string('penanggung_jawab')->after('kode');
    });

    // Copy data dari kolom lama ke baru
    DB::table('departemens')->update([
        'nama_departemen' => DB::raw('nama')
    ]);

    // Opsional: hapus kolom lama setelah data ter-copy
    Schema::table('departemens', function (Blueprint $table) {
        $table->dropColumn('nama');
    });
}

public function down()
{
    Schema::table('departemens', function (Blueprint $table) {
        // Kembalikan kolom lama jika rollback
        $table->string('nama')->after('id');
        
        // Copy data kembali
        DB::table('departemens')->update([
            'nama' => DB::raw('nama_departemen')
        ]);
        
        // Hapus kolom baru
        $table->dropColumn('nama_departemen');
        $table->dropColumn('penanggung_jawab');
    });
}
};
