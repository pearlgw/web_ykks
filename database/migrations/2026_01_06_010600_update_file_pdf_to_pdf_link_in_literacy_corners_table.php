<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('literacy_corners', function (Blueprint $table) {

            // tambah kolom baru
            $table->text('pdf_link')->nullable()->after('description');

            // hapus kolom lama
            if (Schema::hasColumn('literacy_corners', 'file_pdf')) {
                $table->dropColumn('file_pdf');
            }
        });
    }

    public function down(): void
    {
        Schema::table('literacy_corners', function (Blueprint $table) {

            // rollback: kembalikan file_pdf
            $table->string('file_pdf')->nullable()->after('description');

            // hapus pdf_link
            $table->dropColumn('pdf_link');
        });
    }
};
