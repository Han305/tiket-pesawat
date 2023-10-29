<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama',200);
            $table->string('dari',200);
            $table->string('tujuan',200);
            $table->string('maskapai',200);
            $table->string('class',200);
            $table->date('tgl_berangkat');
            $table->string('jmlh_tiket',200);
            $table->string('total_harga',200);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
