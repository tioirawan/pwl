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
        Schema::table('mahasiswa', function (Blueprint $table) {
            // $table->unsignedBigInteger('kelas_id')->nullable()->after('id');
            // $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('set null');

            // cara singkat
            $table->foreignId('kelas_id')->nullable()->after('id')->constrained('kelas')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("mahasiswa", function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
            $table->dropColumn(['kelas_id']);
        });
    }
};
