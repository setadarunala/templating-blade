<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            
            $table->bigInteger('id')->primary();
            $table->string('isi',45);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbarui');          
            $table->integer('pertanyaan_id') ;
            $table->integer('profil_id');          
            $table->timestamps();
            
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
